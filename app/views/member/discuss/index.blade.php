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
		<table  class="table" id="a">
    <thead>
        <tr>
            
            <th>Author</th>
            <th style="width:40%">Title</th>
            <th style="width:30%">Reason</th>
            <th style="width:20%">Date</th>
            
       </tr>
    </thead>
    <tbody>
     @foreach($discussions as $key => $value)
     <?php 
     $author = $value->created_by;
    // $name = User::all()->where('id','=',$author)->get();
    $name = DB::table('users')->where('id', $author)->pluck('fname');
//$accounts = Account::join('accounts_members','accounts_members.account_id','=','accounts.id')->where('accounts_members.member_id','=',$user_id)->get(array('accounts.id','accounts.name'));

     ?>
        <tr data-href="{{ URL::to('discussion/' . $value->id) }}">    
            
            <td>{{ $name}}</td>
            <td>{{ $value->title }}</td>
            <td>{{ $value->reason }}</td>
            <td>{{$value->created_at}}</td>
            

            @endforeach
            
 </tbody>
</table>

	</div>
</div>
<script>
$(document).ready(function(){
    $('table tr').click(function(){
        window.location = $(this).data('href');
        return false;
    });
});
setInterval(function(){loadTopics();}, 5000);


function loadTopics(){
 // alert("hii")
$.ajax({
  type: "GET",
  
  url: "/discuss/allTopics",
  
  success: function(response){
    //alert("hii")
    var data = $.parseJSON(response);
    if(data!=""){
      var result = ""
    var result = "<table class='table'><tr><th>Author</th><th style='width:40%'>Title</th> <th style='width:30%'>Reason</th><th style='width:20%'>Date</th>";
    $.each(data, function(i, item) {
    result +="<tr data-href='{{ URL::to("'discussion/'". $value->id) }}'>";
    result += "<td>"+item.fname+"</td>";
   // alert("hii")
    result += "<td>"+item.title+"</td>";
    result += "<td>"+item.reason+"</td>";
    result += "<td>"+item.created_at+"</td>";
    //   alert("hii")
    result += "</tr>";
    });  
    
    result += "</tr>";  
    
    var all_friends = $("#a");
    all_friends.empty();  
    all_friends.append(result);  
    }else{
    var all_friends = $("#a");
    all_friends.empty();  
    }
  }
}); 
}
</script>
@stop