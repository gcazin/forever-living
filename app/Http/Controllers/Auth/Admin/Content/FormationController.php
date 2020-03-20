<?php

namespace App\Http\Controllers\Auth\Admin\Content;

use App\CategoryFormation;
use App\Formation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FormationController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Liste de toutes les formations sur la page admin
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $formations = DB::table('formations')->orderByDesc('created_at')->paginate(5);
        return view('auth.admin.formations.index', compact('formations'));
    }

    /**
     * Créer une formation
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categories = CategoryFormation::all();
        $formations = DB::table('formations')->orderByDesc("created_at")->paginate(5);
        return view('auth.admin.formations.create', compact('categories', 'formations'));
        //TODO: Ajouter le bouton "ajouter une formation" dans la vue
    }

    /**
     * Page pour éditer une formation
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $categories = CategoryFormation::all();
        $formation = Formation::find($id);
        return view('auth.admin.formations.edit', compact('formation', 'categories'));
    }

    /**
     * Sauvegarde la formation
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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

        return redirect()->route('manage.content.index.formation.admin');
    }

    /**
     * Modification d'une formation
     *
     * @param \Illuminate\Http\Request $request
     * @param                          $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function update(Request $request, $id)
    {
        $formation = Formation::find($id);

        $file_name = Str::slug($request->input('title'));

        $formation->title = $request->input('title') ?? $formation->title;
        $formation->description = $request->input('description') ?? $formation->description;
        $formation->link = $file_name.'.'.$request->file('file')->getClientOriginalExtension() ?? $formation->link;
        $formation->category_id = $request->input('category_id') ?? $formation->category_id;
        $formation->updated_at = new \DateTime();

        $formation->update();

        $request->file('file')->storeAs('public/formations', $file_name.'.'.$request->file('file')->getClientOriginalExtension());

        return redirect()->route('manage.content.index.formation.admin');
    }

    /**
     * Suppression d'une formation
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $formation = Formation::find($id);

        $formation->delete();

        return redirect()->route('manage.content.index.formation.admin');
    }
}
