@extends('layouts.m_basic')
@section('content')

<div class="col-xs-3">
	<?php 
$tab = "2"; 
    $isActive = array(0,0,0,1,0,0,0,0,0,0);
	//$isActive = array(0,0,0,1,0,0,0,0,0,0);?>
	@include('layouts.accord')

	</div>

	<div class="col-xs-9" >
	<div class="panel panel-default" style = "width:100%;height:84.5%;padding-left:50px"> 
  <div style="height=auto" >
		<h3><center>Write Quick Message</center></h3><br />
{{ Form::open(array('action'=>'MemberController@addMember', 'method' => 'post')) }}

       <table class="table">
        <tbody>
      <tr>
        <td style="width:10%;"><h4>To:</h4></td>
        <td>{{ Form::text('name',null,array('id'=>'name','class'=>'form-control','placeholder'=>'Add reciepiants','required'=>'')) }}</td>
        
      </tr>
        
      <tr>
      	<td><h4>Subject:</h4></td>
        <td> {{ Form::text('flat_no',null,array('id'=>'flat_no','class'=>'form-control','placeholder'=>'Message subject','required'=>'')) }}</td>
        </tr>

      <tr><td><h4>Message:</h4></td>
        <td><textarea name="content" style="width:100%;height:125%"></textarea>
</td>

</tr>
<tr>
  <td></td>
  <td><div style ="margin-left:80%;margin-top:-0.5%;width:53%">
{{ Form::submit('Add to drafts',array('id'=>'submit','class'=>'btn btn-warning')) }}
{{ Form::submit('Send',array('id'=>'submit','class'=>'btn btn-primary')) }}</div>
</td>
</tr>
     
 </tbody>    
</table>
</div>
</div>
</div>
 
@stop