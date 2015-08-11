<?php

class MessageController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$message = Message::where('reciever_id',Auth::user()->id)->get();

        // load the view and pass the nerds
        
		 return View::make('member.message.index')
		->with('messages',$message);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	     		 return View::make('member.message.create');
	
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		/*$rules = array(
            'title'       => 'required',
            'reason'      => 'required',
            'body' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('discussion/create')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {*/
            // store
            $sender = Auth::user()->id;
            $reciever = Input::get('to');
          //  $reciever_id = User::all()->Where('username', '=', $reciever);
        //   $reciever_id = User::where('username',  $reciever)->get();
           $reciever_id = User::where('username', '=', Input::get('to'))->pluck('id');

         //   $r_id = $reciever_id->id;
            $message = new Message;
            $message->sender_id       = $sender;
            $message->reciever_id     = $reciever_id;
            $message->msg_body = Input::get('msg_body');

           // $discussion->created_by = Auth::user()->id;

            $message->save();
return "Saved";
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
        return View::make('member.message.show')
            ->with('message', Message::find($id));
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
		//
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


}
