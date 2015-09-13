<?php

/*---------------------------------------Start-Login/Register-routes----------------------------*/

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

Route::get('/',[
'as' => 'login',
'uses'=>'UserController@getMemberLogin'
]);

//checking login 
Route::post('/',[
'as'=>'login',
'method'=>'post',
'uses'=>'UserController@postMemberLogin',
]);

Route::get('/logout', array(
    'as' => 'logout',
    'uses' => 'UserController@logout'
    ));
Route::get('/discuss/allTopics',[
'method'=>'get',
'uses'=>'AdminController@allTopics',
]);
/*---------------------------------------End-Login/Register-routes----------------------------*/

Route::group(array('before' => 'auth'), function()
{
/*----------------------------------------Start-Admin-Routes----------------------------------*/
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

Route::get('/memberDetails', function()
{
    return View::make('admin.memberDetails');
});



<<<<<<< HEAD
Route::get('/discuss/pending',[
'method'=>'get',
'uses'=>'DiscussionController@pendingApprovals',
]);
Route::get('/discuss/reject',[
'method'=>'get',
'uses'=>'DiscussionController@rejectedTopic',
]);
Route::get('/discuss/closed',[
'method'=>'get',
'uses'=>'DiscussionController@closededTopic',
]);
Route::get('discuss/_pending/{id}',[
'method'=>'get',
'uses'=>'DiscussionController@getPendingApproval',
]);
Route::resource('discuss', 'DiscussionController');

=======
// Route::get('/discuss',[
// 'method'=>'get',
// 'uses'=>'MemberDiscussController@indexAdmin',
// ]);
// Route::get('/discuss/pending',[
// 'method'=>'get',
// 'uses'=>'MemberDiscussController@pendingApprovals',
// ]);
// Route::get('/discuss/create', function()
// {
//     return View::make('admin.discuss.create');
// });
Route::get('/discuss/rejected',[
 'method'=>'get',
  'uses'=>'AdminDiscussController@rejectedTopics',
]);

Route::get('/discuss/awaitingtopics',[
 'method'=>'get',
  'uses'=>'AdminDiscussController@awaiting_Topics',
]);

Route::get('/discuss/closedtopics',[
 'method'=>'get',
  'uses'=>'AdminDiscussController@closed_Topics',
]);
Route::resource('discuss', 'AdminDiscussController');



Route::resource('discussion', 'MemberDiscussController');
>>>>>>> 29ecc32bdc0eec228c4edba07642eb84cd2a9167
/*------------------------------------------End-Admin-Routes--------------------------------------*/



/*------------------------------------------Start-Member-Routes--------------------------------------*/
Route::resource('message', 'MessageController');
Route::resource('discussion', 'MemberDiscussController');

Route::get('/memberDesktop',[
'as' => 'memberDesktop',
'uses'=>'memberController@index'
]);

Route::get('/memberNotification', function()
{
    return View::make('member.memberNotification');
});

// Route::get('/memberInbox', function()
// {
//     return View::make('member.memberInbox');
// });

//Route::get('/memberMessage', function()
//{
//    return View::make('member.memberMessage');
//});

Route::get('/memberAllTopics', function()
{
    return View::make('member.memberAllTopics');
});

Route::get('/memberCreateTopic', function()
{
    return View::make('member.memberCreateTopic');
});

Route::get('/memberEvents', function()
{
    return View::make('member.memberEvents');
});

Route::get('/memberOthers', function()
{
    return View::make('member.memberOthers');
});

Route::get('/memberComplaint', function()
{
    return View::make('member.memberComplaint');
});

Route::get('/memberSugestion', function()
{
    return View::make('member.memberSugestion');
});

Route::get('/hello', function()
{
    return View::make('hello');
});



Route::get('/test', function()
{
    return View::make('test');
});

/*------------------------------------------End-Member-Routes--------------------------------------*/

});