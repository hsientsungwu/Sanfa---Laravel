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
	$rules = array(
			'name'       => 'Required',
	        'email'     => 'Required|Email',
	        'question'  =>'Required',
	);

	$data = Input::all();

	$v = Validator::make($data, $rules);

	if ($v->passes()) {
		Mail::send('emails.newrequest', $data, function($message)
		{
			$recepients = array('swu@sanfa.bz' => 'Steve Wu', 'awu@sanfa.bz' => 'Anny Wu', 'hwu@sanfa.bz' => 'Henry Wu');

		    $message->to($recepients)->subject('[Sanfa] New Request from sanfa.bz');
		});

		$returnData = array('success' => true);
	} else {
		$messages = $v->messages();

		$returnData = array('errors' => $messages->all());
	}

	return View::make('contact', $returnData);
});

Route::get('/products', function()
{
	return View::make('product');
});

Route::get('/about', function()
{
	return View::make('about');
});

Route::get('/quester', function()
{
	return View::make('/biotech/index');
});

Route::get('/quester/casing', function()
{
	return View::make('/biotech/casing');
});

Route::get('/quester/tc6011', function()
{
	return View::make('/biotech/tc6011');
});