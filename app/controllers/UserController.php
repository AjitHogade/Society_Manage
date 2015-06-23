<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('admin.register');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	
$pass = Input::get('password');
		    $user = new User;
			$user->fname = Input::get('name');
			$user->username = Input::get('username');
			$user->email = Input::get('email');
			$user->password = Hash::make($pass); 					
			$user->role = "admin";
			// $user->flat_no = Input::get('name');
			// $user->wing = Input::get('name');
			// $user->mobile = Input::get('name');
			// $user->flat_area = Input::get('name');
			// $user->amt = Input::get('name');
			// $user->created_by = Input::get('name');
			 $user->save();
			echo "SAVED";
}
		// try{
  //        $user = Sentry::getUserProvider()->create([
  //           'name'=>Input::get('name'),
		// 	'username'=>Input::get('username'),
		// 	'password'=>Input::get('password'),
  //           'activated'=>true,
			

		// 	]);

  //     	return "successfully Registered";
  //   // return Redirect::to('registration');
		// }
  //       catch(Cartalyst\Sentry\users\ UserExistsException $e){
  // 	    return "User already exists";
  //     }
	

public function getLogin(){
         {
           	return View::make('admin.login');
          }

}

public function postLogin()
{
	$role = "admin";
    // Login credentials
    $credentials = array(
        'username'    => Input::get('username'),
        'password' => Input::get('password'),
        'role' => $role,
    );

    // Authenticate the user
   if (Auth::attempt($credentials))
{
    return Redirect::intended('adminDesktop');
}
else{
	return "failed";
}
}



public function getUserVerification(){
         {
           	return View::make('member.UserVerification');
          }

}
public function postUserVerification()
{
	$role = "member";
	if (User::where('username', '=', Input::get('username'))->exists() && User::where('role', '=', 'member')->exists()) {
  // return "True";
$id = User::where('username', '=', Input::get('username'))->pluck('id');
//return $id;
// 	return Redirect::to('createPassword')->with('id',$user->lists('id'));
return Redirect::to('createPassword')->with('ids',$id);
}
else
{
	return "No such username";
}
}

public function getCreatePassword(){
         {
           	return View::make('member.createPassword');
          }

}
public function postCreatePassword()
{
	    //update query
		return Redirect::to('/memberLogin');
}



//member login
public function getMemberLogin(){
         {
           	return View::make('member.login');
          }

}

public function postMemberLogin()
{
	$role = "member";
    // Login credentials
    $credentials = array(
        'username'    => Input::get('username'),
        'password' => Input::get('password'),
        'role' => $role,
    );

    // Authenticate the user
   if (Auth::attempt($credentials))
{
    return Redirect::intended('memberDesktop');
}
else{
	return "failed";
}
}
public function logout()
{
   Auth::logout();
  return Redirect::to('adminLogin');
  // return "sentry logged out";
}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/*
	* Searches user for sending friend request
	*/
	public function searchUser()
	{
		$user_name = $_GET['user'];
		$user = User::where('username','=',$user_name)->where('username','!=',Sentry::getUser()->username)->first();
		if($user)
			return $user->toJSON();
		else
			return json_encode("");
	}

}
