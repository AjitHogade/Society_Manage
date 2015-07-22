
<?php

class MemberDiscussController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
				
$discussion = Discussion::where('approved',1)->get();

        // load the view and pass the nerds
        return View::make('member.discuss.index')
            ->with('discussions', $discussion);

	}

	public function indexAdmin()
	{
				
				$discussion = Discussion::where('approved',1)->get();

        // load the view and pass the nerds
        return View::make('admin.discuss.index')
            ->with('discussions', $discussion);

	}

	public function pendingApprovals()
	{
				
				$discussion = Discussion::where('approved',0)->get();

        // load the view and pass the nerds
        return View::make('admin.discuss.awaiting_topic')
            ->with('discussions', $discussion);

	}



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
            return View::make('member.discuss.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
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
        } else {
            // store
            $discussion = new Discussion;
            $discussion->title       = Input::get('title');
            $discussion->reason      = Input::get('reason');
            $discussion->body = Input::get('body');
            $discussion->approved = 0;

            $discussion->created_by = Auth::user()->id;

            $discussion->save();
return "Saved";
            // redirect
          //  Session::flash('message', 'Successfully created nerd!');
         //   return Redirect::to('discussion');
        }
 
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
        return View::make('member.discuss.show')
            ->with('discuss', Discussion::find($id));
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
