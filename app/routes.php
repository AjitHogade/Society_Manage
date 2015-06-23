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

Route::get('/userVerification', function()
{
	return View::make('member.userVerification');
});
*/
Route::get('/userVerification',[
    'uses'=>'UserController@getUserVerification'
]);

Route::post('/userVerification',[
'method'=>'post',
'uses'=>'UserController@postUserVerification',
]);

Route::get('/createPassword',[
    'uses'=>'UserController@getCreatePassword'
]);

Route::post('/createPassword',[
'method'=>'post',
'uses'=>'MemberController@passwordCreate',
]);


//view registration page
Route::get('/register',[
    'uses'=>'UserController@index'
]);

//post entered data to databese
Route::post('/register',[
'method'=>'post',
'uses'=>'UserController@store',
]);

//view login page
Route::get('/adminLogin',[
'as' => 'login',
'uses'=>'UserController@getLogin'
]);

//checking login 
Route::post('/adminLogin',[
'as'=>'login',
'method'=>'post',
'uses'=>'UserController@postLogin',
]);

Route::get('/memberLogin',[
'as' => 'login',
'uses'=>'UserController@getMemberLogin'
]);

//checking login 
Route::post('/memberLogin',[
'as'=>'login',
'method'=>'post',
'uses'=>'UserController@postMemberLogin',
]);

Route::get('/logout', array(
    'as' => 'logout',
    'uses' => 'UserController@logout'
    ));


Route::group(array('before' => 'auth'), function()
{

Route::get('/adminDesktop', function()
{
	return View::make('admin.adminDesktop');
});

Route::get('/allMembers', function()
{
	return View::make('admin.allMembers');
});

Route::get('/createMember', function()
{
	return View::make('admin.createMember');
});
Route::post('/createMember',[
'method'=>'post',
'uses'=>'MemberController@addMember',
]);

Route::get('/manageMembers', function()
{
	return View::make('admin.manageMembers');
});
});