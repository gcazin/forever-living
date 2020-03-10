<?php

namespace App\Http\Controllers\Auth\Admin;

use App\CategoryFormation;
use App\Formation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ManageContentController extends Controller
{
    public function index()
    {
        return view('auth.admin.formations.index');
    }

    public function addFormation()
    {
        $categories = CategoryFormation::all();
        return view('auth.admin.formations.add-formation', compact('categories'));
    }

    public function store(Request $request)
    {
        $formation = new Formation();

        $file_name = Str::slug($request->input('title'));

        $formation->title = $request->input('title');
        $formation->description = $request->input('description');
        $formation->link = $file_name.'.'.$request->file('file')->getClientOriginalExtension();
        $formation->user_id = auth()->user()->id;
        $formation->category_id = $request->input('category_id');

        $formation->save();

        $request->file('file')->storeAs('public/formations', $file_name.'.'.$request->file('file')->getClientOriginalExtension());

        return redirect()->route('show.formations.fbo', $formation->id);
    }
}
