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
<div class="col-xs-3">
	<?php 
$tab = "3";
	$isActive = array(0,0,0,0,1,0,0,0,0,0);
	    $author = $message->$reciever_id;

    // $name = User::all()->where('id','=',$author)->get();
     $name = DB::table('users')->where('id', $author)->pluck('fname');
?>
	@include('layouts.accord')

	</div>

	<div class="col-xs-9" >
	<div class="panel panel-default" style = "width:100%;height:85%;padding-left:20px;overflow:auto;position:relative;"> 
	<center><h4> </h4></center> 
		<table  class="table" style="width:100%">
   
    <tbody >
    
     

        <tr>
            <td style="width:20%;font-style: italic; ">From:</td>
            <td><b></b></td>
        </tr>
        <tr>
            <td style="font-style: italic;">Reason:</td>
            <td><b> </td>
        </tr>
        <tr>
            <td style="font-style: italic;">Description:</td>
            <td style="display: inline-block;"><div style="max-height:150px; overflow:auto;">{{ $message->msg_body }}</td>
        </tr>
         <tr>
            <td></td><td><div  style="float:right">{{"Created by ".'<b >'.$name.'</b>'." "}}{{"on ".'<b>'.$message->created_at.'</b>'}}</div></td>
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