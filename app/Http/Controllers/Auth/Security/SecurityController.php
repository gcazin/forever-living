<?php

namespace App\Http\Controllers\Auth\Security;

use App\Http\Controllers\Controller;

class SecurityController extends Controller
{
    public function gateway()
    {
        return view('auth.gateway-access');
    }
}
