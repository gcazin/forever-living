<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Mail\SendPassword;
use App\Notification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Psy\Util\Str;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $users = DB::table('users')->paginate(5);
        return view('auth.admin.dashboard', compact('users'));
    }

    public function notifications()
    {
        $notifications = Notification::all()->where('type', 'App\Notifications\RequestPasswordSending')->sortByDesc( 'created_at');
        return view('auth.admin.notifications.index', compact('notifications'));
    }

    /*
     * TODO: Finir cette partie avec l'envoie d'un mail
     * avec le FBO identifié
    */
    public function sendEmail(Request $request)
    {
        //JSON converti en array
        $data = $request->all();
        foreach($data['data'] as $detail) {
            $detail = json_decode($detail);
        }

        //Vérification que l'utilisateur existe
        if(User::where('fbo_number', $detail->fbo_number)->exists()) {
            //Création du password en clear
            $password = \Illuminate\Support\Str::random(10);

            //Update du mot de passe de l'utilisateur
            $user = User::where('fbo_number', $detail->fbo_number)->first();
            $user->password = Hash::make($password);
            $user->unreadNotifications->markAsRead();
            $user->update();

            //On ajoute le mot de passe en clair pour l'envoyer par mail à l'utilisateur
            $detail->password_clear = $password;

            Mail::to($detail->email)->send(new SendPassword($detail));

            return redirect()->route('dashboard.admin.notifications');
        }

        return null;
    }
}
