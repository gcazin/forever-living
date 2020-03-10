<?php

namespace App\Http\Controllers\Auth\FBO;

use App\Formation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FormationController extends Controller
{
    public function index()
    {
        $formations = DB::table('formations')->paginate(10);
        return view('auth.fbo.formations.index', compact('formations'));
    }

    public function list($id)
    {
        $formations = DB::table('formations')->where('category_id', $id)->paginate(5);
        return view('auth.fbo.formations.list', compact('formations'));
    }

    public function show($id)
    {
        $formation = Formation::find($id);
        return view('auth.fbo.formations.show', compact('formation'));
    }
}
