<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Session;
use App\Subscription;
use Illuminate\Http\Request;

use App\Http\Requests;

class SubscriptionController extends Controller
{
    function postSubscription (Request $request){
    	$this->validate($request, [
			'email' => 'required|email|unique:subscriptions'
			
			]);
    	$email=$request->email;
    	$task = new Subscription();
    	$task->email=$email;
    	$task->save();
    	//return redirect('/');
    	\Session::flash('flash_message','You are successfully subscribed.');
        return redirect()->route('welcome');
	}
}
