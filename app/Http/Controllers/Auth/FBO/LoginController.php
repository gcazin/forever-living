<?php

namespace App\Http\Controllers\Auth\FBO;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFBORequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/fbo/dashboard';

    public function username()
    {
        return 'fbo_number';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.fbo.login');
    }

    public function login(LoginFBORequest $request)
    {
        $validated = $request->validated();

        $credentials = $request->only('fbo_number', 'password');

        if (Auth::attempt($credentials)) {
            if(Auth::user()->role_id === 1) {
                return redirect()->intended('/admin/dashboard');
            }
            return redirect()->intended('/fbo/dashboard');
        } else {
            return back()
                ->withErrors($validated)
                ->withInput();
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect::to("/")
            ->with('message', array('type' => 'success', 'text' => 'You have successfully logged out'));
    }
}
