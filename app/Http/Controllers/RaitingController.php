<?php

namespace App\Http\Controllers;

use App\Models\gig_rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class RaitingController extends Controller
{
    public function addRating(Request $request){
         $stars_rated = $request->input('gig_rating');
         $gig_id = $request->input('gig_id');

         //dd($gig_id);

         gig_rating::create([
            'user_id'=> Cache::get('loggedInUserId'),
            'gig_id'=>$gig_id,
            'star_rating'=>$stars_rated,
            'message'=> $request->message,
         ]);

         return redirect()->back();

    }


    // public function showRating($gig_id){
        
    //     $ratings = gig_rating::where('gig_id', $gig_id)->get();

    //     // $gig_ratings = DB::table('gig_ratings')
    //     // ->select('gig_ratings.id', 'gig_ratings.message', 'gig_ratings.created_at', 'users.name as name')
    //     // ->join('users', 'gig_ratings.user_id', '=', 'users.id')
    //     // ->where('gig_ratings.gig_id', $gig_id)
    //     // ->get();

    //   //  dd($ratings);
    //      return view('Front.GigDetails', compact('ratings'));
    // }
}
