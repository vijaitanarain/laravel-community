<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Session;
use App\Subscription;
use Illuminate\Http\Request;

use App\Http\Requests;

class SubscriptionController extends Controller
{
    function postSubscription (Request $request){
    	if ($this->validate($request, [
			'email' => 'required|email|unique:subscriptions'
			
			]))
            {
                 return response()->json($validator->messages(), 406);
            }
    	$email=$request->email;
    	$task = new Subscription();
    	$task->email=$email;
    	if($task->save())
        {
             return response()->json(['success' => 'Congrats!! You are Subscribed'], 200);
        } 
        else
        {
                return response()->json(['error' => 'Sorry!! You could not be subscribed'], 400);
            
        }
    	
	}

   
}
