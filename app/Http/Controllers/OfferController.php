<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::all(); // Retrieve all offers

        return view('Front.Offer.index', ['offers' => $offers]);
    }


    public function create()
    {
        $skills = Skill::all(); // Retrieve a list of skills
        return view('Front.Offer.Add', ['skills' => $skills]);
    }

    public function store(Request $request)
    {
        $loggedInUserId = Cache::get('loggedInUserId');
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'skills' => 'required|array',
        ]);

        // Create a new offer
        $user = User::find($loggedInUserId); // Get the currently logged-in user
        $offer = new Offer([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

//        dd($user);

        $user->offers()->save($offer); // Associate the offer with the user

        $offer->skills()->sync($request->input('skills')); // Sync selected skills

        return redirect()->route('offers.index')->with('success', 'Offer created successfully');
    }

    public function show($id)
    {
        // Display a specific offer
        // You can retrieve and display the offer details here

    }

    public function showC($id)
    {

        $condidatsOffer = Offer::findOrFail($id);
        return view('Front.Condidat.showC', compact('condidatsOffer'));

    }

    public function edit($id)
    {
        $offer = Offer::findOrFail($id);
        // Show the form for editing an existing offer
        // You may also need to retrieve a list of skills for the form
    }

    public function update(Request $request, $id)
    {
        // Update the specified offer in the database
        // Include the code for updating and associating skills here
    }

    public function destroy($id)
    {
        // Remove the specified offer from the database
    }
}
