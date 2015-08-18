<?php

class AdminDiscussController extends \BaseController {
		
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
$discussion = Discussion::where('approved',1)->get();

        // load the view and pass the nerds
        return View::make('admin.discuss.index')
            ->with('discussions', $discussion);		
	}

	public function rejectedTopics()
	{
$discussion = Discussion::where('approved',2)->get();

        // load the view and pass the nerds
        return View::make('admin.discuss.rejectedTopics')
            ->with('discussions', $discussion);		
	}

	public function awaiting_Topics()
    {

     $discussion = Discussion::where('approved',0)->get();

        return View::make('admin.discuss.awaiting_Topics')
            ->with('discussions', $discussion);		


    }

    public function closed_Topics()
    {

     $discussion = Discussion::where('approved',-1)->get();

        return View::make('admin.discuss.closed_Topics')
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

		public function mDiscussCreate()
	{
		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('admin.discuss.show')
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
