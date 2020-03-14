<?php

namespace App\Http\Controllers;

use App\HomeContent;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function showContent($id) {
        $this->middleware('auth.passcode');

        $content = HomeContent::all()->find($id);
        return view('home_content.show', compact('content'));
    }

    public function contact()
    {
        return view('home_content.contact');
    }
}
