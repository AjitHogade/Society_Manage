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
			$member->created_by = Input::get('');
			
			
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
    }
}
