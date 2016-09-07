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

Route::get('/', function () {
    $events = \App\Events::all();

    return View::make('events')->with('events',$events);
//    return view('welcome');
});

Route::get('/CreateEvent', function(){
    return View('pages.createEvent');
});

//Defined as one group as they are all web interfaces
Route::group(['middleware' => ['web']], function(){

    //specifies which actions are included or exlude i.e create and store methods within
    //UsersController will be include
    Route::resource('events','EventsController', ['only' => ['create', 'store']]);

});