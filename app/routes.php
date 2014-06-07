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
	return View::make('index');
});
Route::get('/index', function()
{
	return View::make('index');
});

Route::get('/write', function()
{
	return View::make('write');
});

Route::get('/twits', function()
{
	$twits = Twit::all()->reverse()->take(5);
	return View::make('twits', compact('twits'));
});

Route::post('write', function()
{
	$input = Input::all();
	$rules = array(
	'title' => 'required',
	'text' => 'required'
	);

	$validator = Validator::make($input, $rules);

	if($validator->fails()) {
		return Redirect::to('write')->withErrors($validator)->withInput();
	}

	$twit = new Twit;
	$twit->title = $input['title'];
	$twit->text = $input['text'];
	$twit->save();
	return Redirect::to('twits');
});

