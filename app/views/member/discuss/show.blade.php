@extends('layouts.m_basic')
@section('content')
<style>
/*tbody tr:hover {
    background-color: #4D4D4D;
    cursor:pointer;
}

tr:hover td {
    color:white;
    font-style: italic; 
    position: static;
}*/
.child{

    position:absolute;
    bottom:0px;
    left:0;
    right:0;
   -moz-box-sizing:border-box;
}
.child textarea{
    bottom:0;
    position: fixed;
    margin-left:10px;
    width:100px;
    height:30px;
    border-radius: 4px
    box-sizing:border-box;
    -moz-box-sizing:border-box;
    -webkit-box-sizing:border-box;
}

span.speech
{
    display:inline-block;
    position: relative;
    height:auto;
    max-width: 80%;
    text-align: left;
    padding-left: 8px;
    padding-right: 8px;
    padding-top: 3px;
    padding-bottom: 3px;
    line-height: auto;
    background-color: #fff;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 10px;
    -webkit-box-shadow: 2px 2px 4px #888;
    -moz-box-shadow: 2px 2px 4px #888;
    box-shadow: 1px 1x 2px #888;
}

</style>
<div class="col-xs-3">
	<?php 
$tab = "3";
	$isActive = array(0,0,0,0,1,0,0,0,0,0);
    $author = $discuss->created_by;
    $user_id = Auth::user()->id;
    // $name = User::all()->where('id','=',$author)->get();
     $name = DB::table('users')->where('id', $author)->pluck('fname');
?>
	@include('layouts.accord')

	</div>

	<div class="col-xs-9" >
	<div class="panel panel-default" style = "width:100%;height:85%;padding-left:20px;overflow:auto;position:relative;"> 
        <div  class="" style="height:75%;overflow:auto">
	<center><h4>{{ $discuss->title }}</h4></center> 
		<table  class="table" style="width:100%">
   
    <tbody >
    
     

        <tr>
            <td style="width:20%;font-style: italic; ">Topic:</td>
            <td><b>{{ $discuss->title }}</b></td>
        </tr>
        <tr>
            <td style="font-style: italic;">Reason:</td>
            <td><b>{{ $discuss->reason }}</td>
        </tr>
        <tr>
            <td style="font-style: italic;">Description:</td>
            <td style="display: inline-block;"><div style="max-height:150px; overflow:auto;">{{ $discuss->body }}</td>
        </tr>
         <tr>
            <td></td><td><div  style="float:right">{{"Created by ".'<b >'.$name.'</b>'." "}}{{"on ".'<b>'.$discuss->created_at.'</b>'}}</div></td>
        </tr>
        <tr><td></td><td></td></tr>
            

            
 </tbody>
</table>
<div style="background-color:#D2D2D2;padding-left:10px;padding-right:5px;padding-top:10px;padding-bottom:10px"><h4>All Responses</h4>
<div class="all_reply" id="all_reply" style="overflow:auto">
</div></div></div>
<div class="child">

{{Form::open(array('id'=>'reply_form','file'=>true,'method' => 'post' ,'action' =>'DiscussionController@updateResponses'))}}

<b>Write Here</b>
<span style="float:right">{{ Form::submit('Reply',array('id'=>'submit','class'=>'btn btn-primary btn-xs')) }}</span>

 {{ Form::hidden('topic_id', $discuss->id, array('id' => 'invisible_sender_topic')) }}

 {{ Form::hidden('sender_id', $user_id, array('id' => 'invisible_sender')) }}

  <textarea id="" name="reply" ></textarea>
  {{ Form::close() }}
</div>

	</div></div>
</div>
<script type="text/javascript">
$(document).ready(function(){
  // alert("hiiii")
  loadReply()
});

setInterval(function(){loadReply();}, 5000);

function loadReply(){

    $.ajax({
        type:"GET",
        url:"/discuss/topicResponses/<?php echo  $discuss->id; ?>",
        success: function(response){
var data = $.parseJSON(response);
if(data!=""){
var result = "";
$.each(data, function(i,item){
    result+="<span class='fa fa-user'><b>&nbsp;"+item.fname+"</b></span>&nbsp;";
    result+="<span class='speech'>";
    result+="<span>"+item.body+"</span>";
    result+="</span><br /><br />";

    
});
var all_reply = $("#all_reply");
all_reply.empty();  
all_reply.append(result); 

 }else{
      var all_reply = $("#all_reply");
      all_reply.empty();
 }
}
    });
}
</script>
@stop