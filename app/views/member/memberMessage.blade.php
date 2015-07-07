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
	<div class="panel panel-default" style = "width:100%;height:85%;padding-left:50px">  
		Notification
	</div>
@stop