<?php

namespace App\Http\Controllers;
use App\Models\Reponse;
use App\Models\Condidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ReponseController extends Controller
{
      public function index()
    {
        $reponses = Reponse::with('condidat')->get();
        return view('Admin.Reponse.index', compact('reponses'));
    }

    public function create()
    {
        $condidats = Condidat::all();
        return view('Admin.Reponse.create', compact('condidats'));
    }

    public function store(Request $request)
    {
        $request->validate(Reponse::getRules());
        $userID = Cache::get('loggedInUserId');

        $reponse = new Reponse([
            'contenu' => $request->contenu,
            'user_id' => $userID
        ]);

        $condidat = Condidat::find($request->condidat_id);
        $condidat->reponses()->save($reponse);


        return redirect()->route('Admin.Reponse.index')->with('success', 'Réponse créée avec succès');
    }

    public function edit($id)
{
    $reponse = Reponse::find($id);
    $condidats = Condidat::all();
    return view('Admin.Reponse.edit', compact('reponse', 'condidats'));
}

public function update(Request $request, $id)
{
    $reponse = Reponse::find($id);

    $request->validate(Reponse::getRules($reponse->id));

    $reponse->contenu = $request->contenu;
    $reponse->condidat_id = $request->condidat_id;
    $reponse->save();

    return redirect()->route('Admin.Reponse.index')->with('success', 'Réponse mise à jour avec succès');
}


    public function destroy(Reponse $reponse)
    {
        $reponse->delete();
        return redirect()->route('Admin.Reponse.index')->with('success', 'Réponse supprimée avec succès');
    }

    public function getReponsesByCondidatId($id)
    {
        try {
            $reponses = Reponse::where('condidat_id', $id)->get();
            return response()->json($reponses);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }



}
