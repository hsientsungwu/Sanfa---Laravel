<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/contact', function()
{
	return View::make('contact');
});

Route::post('/contact/post', function() {
	$data = Input::all();

	Mail::send('emails.newrequest', $data, function($message)
	{
		$recepients = array('swu@sanfa.bz' => 'Steve Wu', 'awu@sanfa.bz' => 'Anny Wu', 'hwu@sanfa.bz' => 'Henry Wu');

	    $message->to($recepients)->subject('[Sanfa] New Request from sanfa.bz');
	});

	return View::make('contact', array('success' => true));
});

Route::get('/products', function()
{
	return View::make('product');
});

Route::get('/about', function()
{
	return View::make('about');
});