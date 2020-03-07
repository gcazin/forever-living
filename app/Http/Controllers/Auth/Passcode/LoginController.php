<?php

namespace App\Http\Controllers\Auth\Passcode;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.passcode.restrict');
    }

    public function showLoginForm()
    {
        return view('auth.passcode.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'passcode' => 'required|max:6',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $id = isset($_GET['id']) && is_numeric($_GET['id']) ?? false;

        if (User::where('passcode', '=', $request->input('passcode'))->exists()) {
            session()->put('passcode', $request->input('passcode'));
            return redirect(route('show.formation', ($id === true) ? $_GET['id'] : 1));
        } else {
            return back()->with('error', 'Passcode incorrect');
        }
    }

}
