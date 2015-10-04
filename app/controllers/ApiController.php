<?php

class ApiController extends \BaseController {

//---------------------Discussion(Members)--------------------------------------//
public function allTopics()
	{
		$discussion = Discussion::join('users','users.id','=','discussion.created_by')
		->where('discussion.approved','=','1')
		->get(array('users.fname','discussion.id','discussion.title','discussion.reason','discussion.created_at'));
		return json_encode($discussion);
	}



//---------------------Discussion(Admin)--------------------------------------//


	public function allAwaitingTopics()
	{
		$discussion1 = Discussion::join('users','users.id','=','discussion.created_by')
		->where('discussion.approved','=','0')
		->get(array('users.fname','discussion.id','discussion.title','discussion.reason','discussion.created_at'));
		return json_encode($discussion1);
	}


	public function allRejectedTopics()
	{
		$discussion2 = Discussion::join('users','users.id','=','discussion.created_by')
		->where('discussion.approved','=','-1')
		->get(array('users.fname','discussion.id','discussion.title','discussion.reason','discussion.created_at'));
		return json_encode($discussion2);
	}

	public function topicResponse($id)
	{
		$reply = DiscussionResponses::join('users','users.id','=','discuss_responses.sender_id')
		->where('discuss_responses.topic_id','=',$id)
		->get(array('users.fname','discuss_responses.sender_id','discuss_responses.body','discuss_responses.created_at'));
		return json_encode($reply);
	}
}