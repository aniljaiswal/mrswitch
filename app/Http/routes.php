<?php

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


/**
 * Home Page
 */
Route::get('/', function () {
    if(Auth::check())
        return redirect('profile/index');
    else
        return view('pages.welcome')->with('title', 'Mr. Switch | 24x7 Electricians in Delhi & NCR. Book your service now.');
});

/**
 * Static Pages
 */

//Contact Page
Route::get('contact', 'PagesController@getContact');
Route::post('contact', ['as' => 'contact', 'uses' => 'PagesController@postContact']);

//Privacy Page
Route::get('privacy', 'PagesController@privacy');

//Terms Page
Route::get('terms', 'PagesController@terms');

//Refunds Page
Route::get('refunds', 'PagesController@refunds');

//Newsletter Subscription POST
Route::post('subscribe', ['as' => 'subscribe', 'uses' => 'PagesController@postSubscribe']);

//Careers Page
Route::get('careers', 'PagesController@careers');

//About Us Page
//Route::get('about', 'PagesController@about');

//Rates Page
//Route::get('service-rates', 'PagesController@pricing');

/**
 *  Authentication Routes
 */
Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);

// Override laravel's default behaviour to redirect to /home
Route::get('home', function(){
    return redirect('profile/index');
});

/**
 *  Profile Page routes
 */
Route::group(['prefix' => 'profile', 'middleware' => 'auth'], function () {

    //Initial setup for pending members - confirmation required
    Route::get('/setup', 'ProfileController@setup');

    Route::post('/setup', 'ProfileController@completeSetup');

    //Protect main profile routes from pending members
    Route::group(['middleware' => 'user.pending'],function(){
        Route::get('/index', 'ProfileController@index');
    });

});

/**
 * API routes for different resources
 * TODO: use jwt-auth middleware later
 */
Route::group(['prefix' => 'api/v1', 'middleware' => 'auth'], function () {

     //Service Booking routes
     Route::resource('bookings', 'BookingController');

     //Service Status routes
     Route::resource('service_status', 'ServiceStatusController');

     //Services routes
     Route::resource('services', 'ServiceController');
});
