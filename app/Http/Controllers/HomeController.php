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
}
