<?php

namespace App\Http\Controllers\Auth\FBO;

use App\Http\Controllers\Controller;
use App\Mail\RequestPassword;
use App\Notification;
use App\Notifications\RequestPasswordSending;
use http\Client\Curl\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class RegisterController extends Controller
{
    /**
     * Page de demande d'un mot de passe
     *
     * @return Factory|View
     */
    public function showRegisterForm()
    {
        return view('auth.fbo.register');
    }

    /**
     * Traitement de la demande de mot de passe
     *
     * @param Request $request
     * @return string
     */
    public function sendRegister(Request $request)
    {
        $data = $request->except('_token');

        $user = \App\User::where('fbo_number', $request->input('fbo_number'))->first();
        //Envoie du mail pour confirmer la demande de mot de passe
        Mail::to($request->input('email'))->send(new RequestPassword($data));

        //Envoie de deux notifications
        \Illuminate\Support\Facades\Notification::send($user, new RequestPasswordSending($data));

        return redirect(route('confirmation.register.fbo'));
    }

    /**
     * Page de confirmation après la demande de mot de passe
     *
     * @return Factory|View
     */
    public function confirmRegister()
    {
        return view('auth.fbo.register-confirm');
    }
}
