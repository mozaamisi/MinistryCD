<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/master',function()
{
    return view('master');
});
Route::get('/contact',function()
{
    return view('contact');
});
Route::get('/buying',function()
{
    return view('buying');
});
Route::get('/finance',function()
{
    return view('finance');
});
Route::get('/home',function()
{
    return view('home');
});

Route::get('/about',function()
{
    return view('about');
});

Route::get('/login',function ()
{
    return view('login');
});
Route::get('/',function()
{

    return view('login');
}
);
//route to show login form
//Route::get('login',array('uses'=>'HomeController@show'));


