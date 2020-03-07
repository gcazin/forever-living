<?php

namespace App\Http\Controllers\Formation;

use App\Formation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class FormationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.passcode');
    }

    public function show($id) {
        $formation = Formation::find($id);
        return view('formations.show', compact('formation'));
    }

    public function contact()
    {
        return view('formations.contact');
    }
}
