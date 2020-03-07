<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';

    protected function redirectTo()
    {
        if (auth()->user()->role == 1) {
            return '/admin';
        }
        return '/';
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

}

