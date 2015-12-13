@extends('layouts.a_basic')
@section('content')

<div class="col-md-10 col-md-offset-1">
	 <?php $isActive = array(1,0,0,0,0); $member_names = array(); ?> 
			  @include('layouts.tab')
			  <div class="panel panel-default" style = "height:75%">  
			   <div class="panel-heading" style = "height:40px;background-color:#333333;color:white "><h5>All Notifications</h5></div>
                    <div class="panel-body">
      <a class="btn btn-default" href="/add_events">ADD EVENT RDK</a>
 

</div>
</div>

			</div>
@stop