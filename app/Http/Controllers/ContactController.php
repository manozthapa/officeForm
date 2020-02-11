<?php 
 
namespace App\Http\Controllers; 

use App\Message;
use App\Contact; 
use DB;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){

    	$contact=Contact::all()->first();
    	return view('ngo.contact');
    }

    public function message(Request $request){
    	$this->validate($request,[
    		'first_name' => 'required',
    		'email'=>'required',
    		'description'=>'required',
    	]);

    	$message= new Message;
    	$message->first_name=$request->input('first_name');
    	$message->last_name=$request->input('last_name');
    	$message->email=$request->input('email');
    	$message->description=$request->input('description');
    	$message->phone=$request->input('phone');
    	$message->save();
    	return back();
      
    }

}
