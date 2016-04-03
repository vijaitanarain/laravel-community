<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

use App\Http\Requests;

class TaskController extends Controller
{
    //
    function postTask (Request $request){
    	$this->validate($request, [
			'email' => 'required|email|unique:tasks'
			
			]);
    	$email=$request->email;
    	$task = new Task();
    	$task->email=$email;
    	$task->save();
    	return redirect('/');
}
}
