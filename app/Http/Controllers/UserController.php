<?php
namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Redirect;
use Hash;

use App\Http\Requests;
//Register User
class UserController extends Controller
{
	public function getDashboard(){
		return view('dashboard');
	}
    public function postUser(Request $request)
    {

        $this->validate($request, [
        	
        	'name' => 'required|max:200',
        	'password'=>'required|min:4',
			'email' => 'required|email|unique:users'
			]);
        
        $name=$request['name'];
        $email=$request['email'];
		$password=bcrypt($request['password']);
		$user = new User();
		$user->name=$name;
		$user->email=$email;
		$user->password=$password;
		$user->save();
		Auth::login($user);
		return response()->json(['message' => 'success'], 200);
    }

   //Login User
    public function postSignIn(Request $request)
	{
			// Validate the input and return correct response
			if ($this->validate($request, [
        	'password'=>'required|min:4',
			'email' => 'email|required|'
			]))
			{
			     return response()->json($validator->messages(), 406);
			}

        	
			if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']]))
			{
				//Auth::login($user);
				return response()->json(['success' => 'You are logged in'], 200);
			} 
			else
			{
				return response()->json(['error' => 'User not found'], 400);
			}
	}

	//User account page
	public function getUser(){

		return view('user.account', ['user' => Auth::user()]);

	}
	//User account page
	public function getaccountUser(){

		return view('user.editaccount', ['user' => Auth::user()]);

	}
	//User account edit  save  page
	public function postaccountUser(Request $request){
		$this->validate($request, [
        	'name' => 'required|max:200'
			]);
		$user = Auth::user();
		$user->name=$request['name'];
        $user->update();
        $file = $request->file('image');
        $filename = $request['name'] . '-' . $user->id . '.jpg';
        if ($file) {
            Storage::disk('local')->put($filename, File::get($file));
        }
		return redirect()->route('user.account');

	}
	//user image
	public function getUserImage($filename)
    {
        $file = Storage::disk('local')->get($filename);
        return new Response($file, 200);
    }
    //get User Password page
    public function getpasswordUser()
    {
    	return view('user.editpassword', ['user' => Auth::user()]);
    }
    //save user password
    public function postpasswordUser(Request $request){
    	$this->validate($request, [
    		'now_password' => 'required',
        	'password' => 'required|min:4|confirmed|different:now_password',
        	'password_confirmation' => 'required|min:4'
			]);
    	
    		$now_password   = $request['now_password'];
			if(Hash::check($now_password, Auth::user()->password)){
			    //Your update here
			    $user = Auth::user();
				$user->password=bcrypt($request['password']);
		        $user->update();
		        return Redirect::route('user.account')->with('success', true)->with('message','User updated.');
		        
			}
			else
			{
				 return Redirect::route('user.editpassword')->withErrors('Password incorrect');
			}
	
    }
    //user upload picture
    
    public function getpictureUser(){

		return view('user.uploadpic', ['user' => Auth::user()]);

	}
	//user post picture
	
	public function postpictUser(Request $request){
		$file = $request->file('image');
        $filename = Auth::user()->name . '-' . Auth::user()->id . '.jpg';
        if ($file) {
            Storage::disk('local')->put($filename, File::get($file));
        }
		return redirect()->route('user.account');

	}
	//User logout
	public function getLogout(){

		Auth::logout();
		return redirect()->route('welcome');

	}
}
