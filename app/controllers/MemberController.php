<?php

class MemberController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
    */
    public function addMember()
    {
            $member = new User;
			$member->fname = Input::get('name');
			$member->username = Input::get('username');
			$member->email = Input::get('email');
			//$member->password = Hash::make($pass); 					
			$member->role = "member";
		    $member->flat_no = Input::get('flat_no');
			$member->wing = Input::get('wing');
			$member->mobile = Input::get('mobile');
			$member->flat_area = Input::get('flat_area');
			$member->amt = Input::get('amt');
			$member->created_by = Auth::getuser()->id;
			
			
			Mail::send('member.mails.username', array('fname'=>Input::get('name'),'user'=>Input::get('username')),function($message){
            $message->to(Input::get('email'), Input::get('name'))->subject('Society registeration credential');

             echo "SAVED";
         });
			$member->save();
     }
  
    public function passwordCreate()
    {
    	
			$id = Input::get('id');
			$pass = Input::get('password'); 
			$password = Hash::make($pass); 
			DB::table('users')
            ->where('id', $id)
            ->update(array('password' => $password));
			echo "SAVED";

			 return Redirect::intended('member.Login');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

    return View::make('member.memberDesktop');

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
    }
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
	
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
	



}
