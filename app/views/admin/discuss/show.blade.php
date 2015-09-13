@extends('layouts.a_basic')
@section('content')
<style>
<<<<<<< HEAD
=======
/*tbody tr:hover {
    background-color: #4D4D4D;
    cursor:pointer;
}

tr:hover td {
    color:white;
    font-style: italic; 
    position: static;
}*/
>>>>>>> 29ecc32bdc0eec228c4edba07642eb84cd2a9167
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
<<<<<<< HEAD
<div class="col-md-10 col-md-offset-1">
     <?php $isActive = array(0,0,0,0,1); $member_names = array(); 
     $author = $discuss->created_by;
    // $name = User::all()->where('id','=',$author)->get();
     $name = DB::table('users')->where('id', $author)->pluck('fname');
     ?> 
=======

<div class="col-md-10 col-md-offset-1">
     <?php $isActive = array(0,0,0,0,1); $member_names = array(); ?> 
>>>>>>> 29ecc32bdc0eec228c4edba07642eb84cd2a9167
              @include('layouts.tab')
               <div class="tab-content">
       <div class="tab-pane active fade in" id="home">
             
              <div class="panel panel-default" style = "height:75%">  
               <div class="panel-heading" style = "height:40px;background-color:#333333;color:white "><h5>Discuss</h5></div>
                    <div class="panel-body">
                        <div class="row">
                        <div class="col-xs-2">
<<<<<<< HEAD
<a href="/discuss/create" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Create Topic</a>
<a href="/discuss" class="btn btn-primary" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Active Topics</a>
<a href="/discuss/reject" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Rejected Topics</a>
<a href="/discuss/pending" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Awaiting-Approvals</a>
<a href="/discuss/closed" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Closed Topic</a>

                        </div> 
          <div class="col-xs-10">
<div>
<center><h4>{{ $discuss->title }}</h4></center> 
        <table  class="table" style="width:100%">
=======
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
>>>>>>> 29ecc32bdc0eec228c4edba07642eb84cd2a9167
   
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
            
<<<<<<< HEAD

=======
       
>>>>>>> 29ecc32bdc0eec228c4edba07642eb84cd2a9167
            
 </tbody>
</table>
<div><h4>All Responses</h4>No Responses till yet...........................</div>
<div class="child">
<b>Write Here</b><span style="float:right" class="btn btn-primary btn-xs">Post</span>
  <textarea id="area4" style = "width:100%;">

<<<<<<< HEAD
</textarea></div>   </div></div>

     



         </div>
=======
</textarea></div>	</div></div>
</div>

>>>>>>> 29ecc32bdc0eec228c4edba07642eb84cd2a9167
@stop