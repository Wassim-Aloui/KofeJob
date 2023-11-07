<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
class AlertController extends Controller
{
  
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alerts = Alert::all();
    
        return view('Admin.Alerts.index', compact('alerts'));

    }
    public function FreelancerIndex(){

      $userId = 1;
      $userID = Cache::get('loggedInUserId');
      $alerts = Alert::where('user_id', $userID)->get();
      
      return view('Front.Alert.index', compact('alerts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Front.Alert.Add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages=$this->getMessages();

        $validator = Validator::make($request->all(),
          [
            'title'=>'required|min:3|regex:/^[A-Za-z\s]+$/',
            'subject'=>'required|max:10|regex:/^[A-Za-z\s]+$/',
            'description'=>'required|min:5'
          ],
          $messages
          );
  
  
          if($validator->fails()){
  
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
          }
          $userID = Cache::get('loggedInUserId');
          $user = User::where('id',$userID)->first();

  
        Alert::create([
          'title'=> $request->title ,
          'subject'=>$request->subject,
          'description'=> $request->description,
          'status'=>"pending",
          'user_id'=>$user->id,
        ]);
  
  
      
           return redirect()->route('Front.Alerts.index')->with(['success'=>'Alert Added']);
    }
    protected function getMessages(){
        return $messages=[
         
            'title.required'=>'The Title is required',
            
            'description.required'=>'Description is required',
            'description.min'=>'Minimum of 5 caracters',

            'title.min'=>'Minimum of 3 caracters',
            'subject.required'=>'Subject is required',
            'subject.max'=>'Max of caracters 10',
            'title.regex' => 'The Title should not contain numbers',

         
        ];
      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alert  $alert
     * @return \Illuminate\Http\Response
     */
    public function show(Alert $alert)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alert  $alert
     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Request  $request
     */
    public function edit($id)
    {
      $alert = Alert::find($id);
      return view('Front.Alert.edit', compact('alert'));

        //
    }

     

    public function update(Request $request, $id)
    {
      
    $alert = Alert::findOrFail($id);

    $request->validate([
        'title' => 'required|string|max:255',
        'subject' => 'required|string|max:255|regex:/^[A-Za-z\s]+$/',
        'description' => 'required|string',
    ]);

    $alert->update($request->all());


      return redirect()->route('Front.Alerts.index');
//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alert  $alert
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alert = Alert::find($id);
        $alert->delete();
        return redirect()->route('admin.alerts')->with(['success'=>'Alert Deleted']);	
    }
}
