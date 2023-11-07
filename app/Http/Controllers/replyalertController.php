<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alert;
use App\Models\AlertReply;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
class replyalertController extends Controller
{
    public function index($id){

        $alert = Alert::find($id);
        $reply = AlertReply::where('alert_id',$id)->first();
        return view('Admin.AlertsReply.index', compact('alert','reply'));
  
      }

    //
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
    public function store(Request $request,$id)
    {
        $messages=$this->getMessages();

        $validator = Validator::make($request->all(),
          [
    
            'description'=>'required|min:5'
          ],
          $messages
          );
  
  
          if($validator->fails()){
  
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
          }
          $alert = Alert::where('id',$id)->first();
          $reply=AlertReply::where('alert_id',$id)->first();
if($reply)
{
    $reply->update($request->all());
    return redirect()->route('admin.alerts')->with(['success'=>'Alert Reply Updated']);

}  else{


        AlertReply::create([
          'description'=> $request->description,
          'alert_id'=>$id,
        ]);
        $alert->update([
            'status'=>'Treated']);
           return redirect()->route('admin.alerts')->with(['success'=>'Alert Replied']);
    }}

    protected function getMessages(){
        return $messages=[
         
            
            
            'description.required'=>'Description is required',
            'description.min'=>'Minimum of 5 caracters',

         

         
        ];
      }

      
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alert  $alert
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reply = AlertReply::find($id);
        $alert = Alert::where('id',$reply->alert_id)->first();
        $alert->update([
            'status'=>'Pending']);
        $reply->delete();
        return redirect()->route('admin.alerts')->with(['success'=>'Reply Deleted']);	
    }
    public function indexForFreelancers($id){

        $userId = 1;
        $reply = AlertReply::where('alert_id',$id)->first();
        
        return view('Front.AlertReply.index', compact('reply'));
  
      }
}
