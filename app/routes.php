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
	return View::make('pages/home');
});
Route::get('aboutus', function()
{
	return View::make('pages/aboutus');
});
Route::get('careers', function()
{
	return View::make('pages/careers');
});
Route::get('business', function()
{
	return View::make('pages/business');
});
Route::get('contactus', function()
{
	return View::make('pages/contactus');
});
Route::get('business', function()
{
	return View::make('pages/business');

});

Route::get('advertise', function()
{
	return View::make('pages/advertise');
});
Route::get('partners', function()
{
	return View::make('pages/partners');
});
Route::get('invest', function()
{
	return View::make('pages/invest');
});
Route::get('clg', function()
{
	return View::make('pages/clg');
});
Route::get('privacy', function()
{
	return View::make('pages/privacy');
});
Route::get('sitemap', function()
{
	return View::make('pages/sitemap');
});
Route::get('policies', function()
{
	return View::make('pages/policies');
});
