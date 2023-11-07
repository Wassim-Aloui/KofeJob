<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use App\Models\gig_rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Front.Home');
    }



    public function projects(){
      //$gigs = Gig::select('id','title','description','orders','price', 'created_at','user_id')->get();

      $gigs = DB::table('gigs')
        ->select('gigs.id', 'gigs.title', 'gigs.description', 'gigs.orders', 'gigs.price', 'gigs.created_at', 'users.name as name')
        ->join('users', 'gigs.user_id', '=', 'users.id')
        ->get();

       return view('Front.Projects', compact('gigs'));
    }




    
    public function singleProject($id){


      
      $gig = Gig::find($id);

      $ratings = gig_rating::where('gig_id', $id)->with('user')->get();

      $userRating = gig_rating::where('user_id', Cache::get('loggedInUserId'))
        ->where('gig_id', $id)
        ->first();


      if (!$gig) {
          return abort(404);
      } 
      //dd($ratings);
  
      return view('Front.GigDetails', compact('gig','userRating','ratings'));
    }




}
