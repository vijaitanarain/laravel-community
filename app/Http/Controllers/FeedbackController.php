<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Session;

use App\Feedback;

use Illuminate\Http\Request;

use App\Http\Requests;

class FeedbackController extends Controller
{
    function postFeedback (Request $request){
    	$this->validate($request, [
			'email' => 'required|email',
			'name' => 'required| max:100',
			'subject'=> 'required|max:200',
			'message'=>'required'
			
			]);
    	$email=$request->email;
    	$name=$request->name;
    	$subject=$request->subject;
    	$message=$request->message;
    	$feedback = new Feedback();
    	$feedback->email=$email;
    	$feedback->name=$name;
    	$feedback->subject=$subject;
    	$feedback->message=$message;
    	$feedback->save();
    	//return redirect('/');
    	\Session::flash('flash_message','You have successfully sent feedback.');
        return redirect()->back();
	}

}
