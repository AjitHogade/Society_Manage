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
$tab = "2";
	$isActive = array(0,0,1,0,0,0,0,0,0,0);
   $sender = $messages->sender_id;
    // $name = User::all()->where('id','=',$author)->get();
     $name = DB::table('users')->where('id', $sender)->pluck('fname');
?>
	@include('layouts.accord')

	</div>

	<div class="col-xs-9" >
	<div class="panel panel-default" style = "width:100%;height:85%;padding-left:20px;overflow:auto;position:relative;"> 
	<center><h4> </h4></center> 
		<table  class="table" style="width:100%">
   
    <tbody >
  
     

        <tr>
            <td style="width:5%;font-style: italic; ">From:</td>
            <td><b>{{$name}}</b></td>
        </tr>
       
        
         <tr>
            <td></td><td><div  style="float:right">{{"Send on ".'<b>'.$messages->created_at.'</b>'}}</div></td>
        </tr>
        <tr><td></td><td></td></tr>

            
 </tbody>
</table>
<div>{{ $messages->msg_body }}</div>
<div class="child">
<b>Write Here</b><span style="float:right" class="btn btn-primary btn-xs">Post</span>
<span style="float:right" >{{ Form::submit('Reply',array('id'=>'submit','class'=>'btn btn-primary btn-xs')) }}</span>
  <textarea id="area4" style = "width:100%;">

</textarea></div>	</div></div>
</div>

@stop