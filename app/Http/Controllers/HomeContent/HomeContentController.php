<?php

namespace App\Http\Controllers\HomeContent;

use App\Formation;
use App\HomeContent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class HomeContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.passcode');
    }

    public function show($id) {
        $home_content = HomeContent::find($id);
        return view('home_content.show', compact('home_content'));
    }

    public function contact()
    {
        return view('home_content.contact');
    }
}
