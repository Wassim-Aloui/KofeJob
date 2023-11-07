<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condidat;
use App\Models\Offer;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;

class CondidatController extends Controller
{
    public function index()
    {
        $condidats = Condidat::with('offers')->get();
        return view('Front.Condidat.index', compact('condidats'));
    }

    public function create()
    {
        $offers = Offer::all();
        return view('Front.Condidat.create', compact('offers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:condidat,email|max:255',
            'lettreMotivation' => 'required|string',
            'offers_id' => 'required|exists:offers,id',
        ]);

        $userID = Cache::get('loggedInUserId');

        $condidat = Condidat::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'lettreMotivation' => $request->lettreMotivation,
            'offers_id' => $request->offers_id,
            'user_id' => $userID,
        ]);

        return redirect()->route('Front.Condidat.index');
    }



    public function show($id)
    {
        $condidatsAdmin =Condidat::with('offers')->findOrFail($id);
        return view('Admin.Condidat.show', compact('condidatsAdmin'));
    }

    public function edit($id)
    {
        $condidat = Condidat::findOrFail($id);
        $offers = Offer::all();
        return view('Front.Condidat.edit', compact('condidat', 'offers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:condidat,email,' . $id,
            'lettreMotivation' => 'required|string',
            'offers_id' => 'required|exists:offers,id',
        ]);

        $condidat = Condidat::findOrFail($id);
        $condidat->update($request->all());

        return redirect()->route('Front.Condidat.index');
    }

    public function destroy($id)
    {
        $condidat = Condidat::findOrFail($id);
        $condidat->delete();

        return redirect()->route('Front.Condidat.index');
    }

    public function indexx()
    {
        $condidatsAdmin = Condidat::all();
        return view('Admin.Condidat.index', compact('condidatsAdmin'));
    }

    public function destroyy($id)
    {
        $condidat = Condidat::findOrFail($id);
        $condidat->delete();

        return redirect()->route('Admin.Condidat.index');
    }
}
