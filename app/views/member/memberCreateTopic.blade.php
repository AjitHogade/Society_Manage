@extends('layouts.m_basic')
@section('content')

<div class="col-xs-3">
	<?php 
$tab = "3";
	$isActive = array(0,0,0,0,0,1,0,0,0,0);?>
	@include('layouts.accord')

	</div>

	<div class="col-xs-9" >
	<div class="panel panel-default" style = "width:100%;height:84.5%;padding-left:50px"> 
  <div style="height:auto"> 
	<h3><center>Create Topic</center></h3><br />
{{ Form::open(array('action'=>'MemberController@addMember', 'method' => 'post')) }}

       <table class="table">
        <tbody>
      <tr>
        <td style="width:10%;"><h4>Title:</h4></td>
        <td>{{ Form::text('name',null,array('id'=>'name','class'=>'form-control','placeholder'=>'Add receipiants','required'=>'')) }}</td>
        
      </tr>
       <tr><td><h4>Reason:</h4></td>
                <td> {{ Form::text('reason',null,array('id'=>'reason','class'=>'form-control','placeholder'=>'Message subject','required'=>'')) }}</td>

</td>

</tr>
  

      <tr><td><h4>Topic-Details:</h4></td>
        <td><textarea name="content" style="width:100%;height:auto"></textarea>
</td>
<tr>
   <td></td>
   <td>
<div style = "margin-top:1%;margin-left:85%;width:53%">{{ Form::submit('Send/Approval',array('id'=>'submit','class'=>'btn btn-primary')) }}
</div></td>
</tr>
</tbody>
</table>
</div>
	</div>
	</div>
@stop