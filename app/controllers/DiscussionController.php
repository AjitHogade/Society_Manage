<?php

class DiscussionController extends \BaseController {
		
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$discussion = Discussion::where('approved',1)->get();
		return View::make('admin.discuss.index')->with('discussions', $discussion);
		
	}

    public function pendingApprovals()
	{
				
				$discussion = Discussion::where('approved',0)->get();

        // load the view and pass the nerds
        return View::make('admin.discuss.awaiting_topic')
            ->with('discussions', $discussion);

	}


    public function rejectedTopic()
	{
				
				$discussion = Discussion::where('approved',-1)->get();

        // load the view and pass the nerds
        return View::make('admin.discuss.rejected_topic')
            ->with('discussions', $discussion);

	}

	public function closededTopic()
	{
				
				$discussion = Discussion::where('approved',2)->get();

        // load the view and pass the nerds
        return View::make('admin.discuss.closed_topic')
            ->with('discussions', $discussion);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.discuss.create');
	}

	


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		    

	}

    public function destroyed()
	{
		echo "rejected";
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
public function show($id)
	{
		//$discussions = Discussion::find($id);
		//$discussions = Discussion::where('id', $id)->first();

        // show the view and pass the nerd to it
        return View::make('admin.discuss.show')
            ->with('discuss', Discussion::find($id));
}

public function getPendingApproval($id)
	{
	

        // show the view and pass the nerd to it
        return View::make('admin.discuss.show_awaiting_approvals')
            ->with('discuss', Discussion::find($id));
}
public function approve()
{
       $id = Input::get('topic_id');
			DB::table('discussion')
            ->where('id', $id)
            ->update(array('approved' => 1));
return Redirect::to('/discuss/pending')->with('message', 'Done');
}

public function disapprove()
{

 $id = Input::get('topic_id');
		   DB::table('discussion')
           ->where('id', $id)
            ->update(array('approved' => -1));
return Redirect::to('/discuss/pending')->with('message', 'Done');

}


public function updateResponses()
	{
		$topic_id = Input::get('topic_id');
		$reply = new DiscussionResponses;
			$reply->topic_id = Input::get('topic_id');
			$reply->sender_id = Input::get('sender_id');
			$reply->body = Input::get('reply');
			$reply->save();
			return Redirect::to('/discussion/'.$topic_id);  
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
	public function destroy()
	{
		echo "reject";
	}


}
