@extends('layouts.m_basic')
@section('content')
<style>
tbody tr:hover {
    background-color: #4D4D4D;
    cursor:pointer;
}

tr:hover td {
    color:white;
    font-style: italic; 
    position: static;
}
</style>
<div class="col-xs-3">
	<?php 
$tab = "3";
	$isActive = array(0,0,0,0,1,0,0,0,0,0);
$discussion = Discussion::All();?>
	@include('layouts.accord')

	</div>

	<div class="col-xs-9" >
	<div class="panel panel-default" style = "width:100%;height:85%;overflow:auto" id="allTopics"> 
	<center><h3>All Discussions List</h3></center>
		<table  class="table" >
    <thead>
        <tr>
            
            <th>Author</th>
            <th style="width:40%">Title</th>
            <th style="width:30%">Reason</th>
            <th style="width:20%">Date</th>
            
       </tr>
    </thead>
    <tbody id="allTopic" >
     @foreach($discussions as $key => $value)
     <?php 
     $author = $value->created_by;
    // $name = User::all()->where('id','=',$author)->get();
    $name = DB::table('users')->where('id', $author)->pluck('fname');
//$accounts = Account::join('accounts_members','accounts_members.account_id','=','accounts.id')->where('accounts_members.member_id','=',$user_id)->get(array('accounts.id','accounts.name'));

     ?>
  @endforeach
 </tbody>
</table>

	</div>
</div>

<script>

$(document).ready(function(){
  // alert("hiiii")
  loadTopics()
});

setInterval(function(){loadTopics();}, 5000);

function loadTopics(){
$.ajax({
  type: "GET",
  url: "/discuss/allTopics",
  success: function(response){
  var data = $.parseJSON(response);
  if(data!=""){
      var result = ""
      $.each(data, function(i, item) {
      result +="<tr id='myDivv' data-href='discussion/"+item.id+"'>";
      result += "<td>"+item.fname+"</td>";
      result += "<td>"+item.title+"</td>";
      result += "<td>"+item.reason+"</td>";
      result += "<td>"+item.created_at+"</td>";
      result += "</tr>";
      });  
    
     var all_topic = $("#allTopic");
     all_topic.empty();  
     all_topic.append(result);  
    }
    else{
     var all_topic = $("#allTopic");
     all_topic.empty();  
    }
    $('#allTopic tr').click(function () {
    window.location = $(this).data('href');
    return false;
    });
  }
}); 
}


</script>
@stop