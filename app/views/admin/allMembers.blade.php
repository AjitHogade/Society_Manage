@extends('layouts.a_basic')
@section('content')

<div class="col-md-10 col-md-offset-1">
	 <?php $isActive = array(0,1,0,0); $member_names = array(); ?> 
			  @include('layouts.tab')
			  <div class="panel panel-default" style = "min-height:75%;">  
			   <div class="panel-heading" style = "height:35px;background-color:#333333;color:white	"><h5><center>All Members</center></h5></div>
                    <div class="panel-body">



<table  class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
       </tr>
    </thead>
</table>
</div>
</div>
@stop