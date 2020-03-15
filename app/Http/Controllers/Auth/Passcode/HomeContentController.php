<?php

namespace App\Http\Controllers\Auth\Passcode;

use App\HomeContent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.passcode');
    }

    public function showContent($id) {
        $content = HomeContent::all()->find($id);
        return view('home_content.show', compact('content'));
    }

    public function contact()
    {
        return view('home_content.contact');
    }
}
