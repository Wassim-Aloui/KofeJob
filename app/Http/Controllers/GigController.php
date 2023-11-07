<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;

class GigController extends Controller
{
    public function index(){
      $gigs = Gig::select('id','title','description','orders','price', 'created_at')->get();
        return view('Admin.Gigs.index', compact('gigs'));
    }



    public function indexForFreelancer(){

      $gigs = Gig::select('id','title','description','orders','price', 'created_at')->get();

     // dd($gigs);
      return view('Front.Gig.index', compact('gigs'));

    }




    public function create(){
        return view('Front.Gig.Add');
    }



    public function store(Request $request){


      $messages=$this->getMessages();
      $loggedInUserId = Cache::get('loggedInUserId');

      $validator = Validator::make($request->all(),
        [
          'title'=>'required|max:50',
          'price'=>'required|numeric|gte:0',
          'description'=>'required'
        ],
        $messages
        );


        if($validator->fails()){

          return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }



      Gig::create([
        'title'=> $request->title ,
        'price'=>$request->price,
        'description'=> $request->description,
        'orders'=>0,
        'user_id'=> $loggedInUserId
      ]);


    
         return redirect()->route('Home')->with(['success'=>'Gig posted']);

    }


    protected function getMessages(){
      return $messages=[
       
          'title.required'=>'Title is required',
          'price.required'=>'Price is required',
          'description.required'=>'Description is required',
          'title.max'=>'Max of caracters 100',
          'price.numeric'=>'Price is a number' ,'price.gte:0'=>'Price should be positive'
       
      ];
    }


    public function edit($id){

      $gig = Gig::find($id);

      if(!$gig){
        return redirect()->route('Front.Gig.index')->with(['errors'=>'Gig not found']);
      }

      return view('Front.Gig.Edit', compact('gig'));


    }


    public function update($id,Request $request){


      
      $gig = Gig::find($id);

      $messages=$this->getMessages();

      $validator = Validator::make($request->all(),
        [
          'title'=>'required|max:50',
          'price'=>'required|numeric',
          'description'=>'required'
        ],
        $messages
        );



      if(!$gig){
        return redirect()->route('Front.Gig.Edit',$id)->with(['errors'=>'Gig not found']);
      }elseif($validator->fails()){

        return redirect()->back()->withErrors($validator)->withInputs($request->all());
      }else{
      $gig->update($request->except('_token'));

      return redirect()->route('Front.Gig.index')->with(['sucess'=>'Gig updated']);
     }

    }



    public function destroy($id){

      $gig = Gig::find($id);

      if(!$gig){
        return redirect()->route('Front.Gig.index')->with(['errors'=>'Gig not found']);
      }


      $gig->delete();
      return redirect()->route('Front.Gig.index')->with(['sucess'=>'Gig deleted']);


    }

    public function destroyGigAmin($id){

      $gig = Gig::find($id);

      if(!$gig){
        return redirect()->route('HomeAdmin')->with(['errors'=>'Gig not found']);
      }


      $gig->delete();
      return redirect()->route('admin.gigs')->with(['sucess'=>'Gig deleted']);


    }




}
