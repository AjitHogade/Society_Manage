@extends('layouts.a_basic')
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
    left:0px;
    right:0px;
   -moz-box-sizing:border-box;
}
.child textarea{
    margin-left:10px;
    width:100px;
    height:50px;
    box-sizing:border-box;
    -moz-box-sizing:border-box;
    -webkit-box-sizing:border-box;
}
</style>

<div class="col-md-10 col-md-offset-1">
     <?php $isActive = array(0,0,0,0,1); $member_names = array(); ?> 
              @include('layouts.tab')
               <div class="tab-content">
       <div class="tab-pane active fade in" id="home">
             
              <div class="panel panel-default" style = "height:75%">  
               <div class="panel-heading" style = "height:40px;background-color:#333333;color:white "><h5>Discuss</h5></div>
                    <div class="panel-body">
                        <div class="row">
                        <div class="col-xs-2">
<a href="/discuss" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>All Topics</a>
<a href="/discuss/rejected" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Regected Topics</a>
<a href="/discuss/awaitingtopics" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Awaiting-Approvals</a>

<a href="/discuss/create" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Create Topic</a>

<a href="/discuss/create" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Approval</a>
<a href="/discuss/closedtopics" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Closed Topic</a>

                        </div> 
          <div class="col-xs-10">
	<?php 

    $author = $discuss->created_by;
    // $name = User::all()->where('id','=',$author)->get();
     $name = DB::table('users')->where('id', $author)->pluck('fname');
?>

	<div class="panel panel-default" style = "width:100%;height:85%;padding-left:20px;overflow:auto;position:relative;"> 
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
<div><h4>All Responses</h4>No Responses till yet...........................</div>
<div class="child">
<b>Write Here</b><span style="float:right" class="btn btn-primary btn-xs">Post</span>
  <textarea id="area4" style = "width:100%;">

</textarea></div>	</div></div>
</div>

@stop