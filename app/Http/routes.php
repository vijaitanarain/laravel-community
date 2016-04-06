<?php
use App\User;
use App\Subscription;
use App\Feedback;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteConnection;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route :: get('/', function () {
        return view('welcome');
    })->name('welcome');
	
    Route :: post('createtask', [
    	'uses' => 'TaskController@postTask',
	 'as'=> 'createtask'
	]);
	//subscribe users
    Route :: post('createsubscription', [
		'uses' => 'SubscriptionController@postSubscription',
	 	'as'=> 'createsubscription'
	]);

	//Register
	Route :: post('/createUser', [
		'uses' => 'UserController@postUser',
		'as'=> 'createUser' 
	]);
	//Login
	Route :: get('/loginUser', [
    	'uses' => 'UserController@postSignIn',
	 	'as'=> 'loginUser'
	]);
	
	//dashboard
	Route :: get('/dashboard', [
		'uses' => 'UserController@getDashboard',
		'as' => 'dashboard',
		'middleware' => 'auth'
		]);
	//logout
	//Route::get('auth/logout', 'Auth\AuthController@logout');
	Route::get('logout', [
		'uses' => 'UserController@getLogout',
		'as' => 'logout'
		]);
	//user account page
	Route::get('user/account',[
		'uses' => 'UserController@getUser',
		'as' => 'user.account',
		'middleware' => 'auth'
		]);
	//edit account page
	Route::get('user/editaccount',[
		'uses' => 'UserController@getaccountUser',
		'as' => 'user.editaccount',
		'middleware' => 'auth'
		]);
	//edit save page
	Route::post('user/saveaccount',[
		'uses' => 'UserController@postaccountUser',
		'as' => 'user.saveaccount',
		'middleware' => 'auth'
		]);
	//userimage
	Route::get('/userimage/{filename}', [
        'uses' => 'UserController@getUserImage',
        'as' => 'account.image',
        'middleware' => 'auth'
    ]);
    //edit password page
	Route::get('user/editpassword',[
		'uses' => 'UserController@getpasswordUser',
		'as' => 'user.editpassword',
		'middleware' => 'auth'
	]);
	//edit save password page
	
	Route::post('user/savepassword', [
		'uses' => 'UserController@postpasswordUser',
		'as' => 'user.savepassword',
		'middleware' => 'auth'
	]);
	//edit or upload user picture  user.savepictaccount
	Route::get('user.uploadpic',[
		'uses' => 'UserController@getpictureUser',
		'as' => 'user.uploadpic',
		'middleware' => 'auth'
	]);
	//edit save page
	Route::post('user/savepictaccount',[
		'uses' => 'UserController@postpictUser',
		'as' => 'user.savepictaccount',
		'middleware' => 'auth'
	]);
	//feedback
    Route :: post('submitfeedback', [
    	'uses' => 'FeedbackController@postFeedback',
	 	'as'=> 'submitfeedback'
	]);
	/* view quotes*/
	Route :: get ('/user/postquotes/{author?}', [
		 'uses' => 'UserController@getQuotes',
		 'as' => 'postquotes',
		 'middleware' => 'auth'
		]);
	
	//post quotes
    Route :: post('user/postQuote', [
    	'uses' => 'UserController@postQuote',
	 	'as'=> 'postQuote',
	 	'middleware' => 'auth'
	]);
	//delete quotes
    Route :: get('/delete/{quote_id}', [
    	'uses' => 'UserController@deleteUserQuote',
	 	'as'=> 'delete',
	 	'middleware' => 'auth'
	]);
	// Route :: get('/createUser', [
	// 	'uses' => 'UserController@postUser',
	// 	'as'=> 'createUser' 
	// ]);
	Route::get('/about', function () {
	    return view('about');
	});

	Route::get('/classified', function () {
	    return view('classified');
	});

	Route::get('/classified-database', function () {
	    return view('classified-database');
	});

	Route::get('/news', function () {
	    return view('news');
	});

	Route::get('/faq', function () {
	    return view('faq');
	});

	Route::get('/career', function () {
	    return view('career');
	});

	Route::get('/terms', function () {
	    return view('terms');
	});

	Route::get('/sitemap', function () {
	    return view('sitemap');
	});

	Route::get('/testimonials', function () {
	    return view('testimonials');
	});
	

	Route::get('/grids', function () {
	    return view('grids');
	});

	Route::get('/article', function () {
	    return view('article');
	});

	Route::get('/forum', function () {
	    return view('forum');
	});

	Route::get('/videos', function () {
	    return view('videos');
	});

	Route::get('/advertise', function () {
	    return view('advertise');
	});

	Route::get('/contact', function()
    {
        return view('contact');
    });
    
	// Route::post('/createUser', function( Request $request) {
	// 	return "hi";

	// })->name('createUser');
	// Route::get('/registerUser', function( Request $request) {
	// 	return "hi";

	// })->name('registerUser');
	
	
});
