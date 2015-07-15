@extends('layouts.m_basic')
@section('content')

<div class="col-xs-3">
	<?php 
$tab = "5";
	$isActive = array(0,0,0,0,0,0,0,0,1,0);?>
	@include('layouts.accord')

	</div>

	<div class="col-xs-9" >
	<div class="panel panel-default" style = "width:100%;height:85%;padding-left:50px">  
	<div style="height:auto"> 
	<h3><center>Write your Complaints here</center></h3><br />
{{ Form::open(array('action'=>'MemberController@addMember', 'method' => 'post')) }}
       <table class="table" style="height:auto" >
        <tbody>
      <tr>
        <td style="width:10%"><h4>Subject:</h4></td>
        <td>{{ Form::text('sub',null,array('id'=>'sub','class'=>'form-control','placeholder'=>'Add receipiants','required'=>'')) }}</td>
        
      </tr>
       


  

      <tr><td><h4>Your Complaint:</h4></td>
        <td><textarea name="content" style="width:100%;height:auto"></textarea>
</td>
<tr>
   <td></td>
   <td>
<div style = "margin-top:1%;margin-left:82%;width:53%">{{ Form::submit('Send your complaint',array('id'=>'submit','class'=>'btn btn-primary')) }}
</div></td>
</tr>
</tbody>
</table>
</div>
	</div>
	</div>
@stop