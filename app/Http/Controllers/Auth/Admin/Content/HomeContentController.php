<?php

namespace App\Http\Controllers\Auth\Admin\Content;

use App\HomeContent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $home_contents = HomeContent::all();
        return view('auth.admin.home_content.index', compact('home_contents'));
    }

    public function edit($id)
    {
        $home_content = HomeContent::find($id);
        return view('auth.admin.home_content.edit', compact('home_content'));
    }

    public function update(Request $request, $id)
    {
        $home_content = HomeContent::find($id);

        $home_content->title = $request->input('title') ?? $home_content->title;
        $home_content->description = $request->input('description') ?? $home_content->description;
        $home_content->link = $request->input('link') ?? $home_content->link;
        $home_content->updated_at = new \DateTime();

        $home_content->update();

        return redirect()->route('manage.content.index.home.admin');
    }
}
