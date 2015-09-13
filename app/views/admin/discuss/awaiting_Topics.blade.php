@extends('layouts.a_basic')
@section('content')
<style>
tbody tr:hover {
    background-color: #4D4D4D;
    cursor:pointer;
}

tr:hover td {
    color:white;
    font-style: italic; 
    position: static;
}
</style>
<div class="col-md-10 col-md-offset-1">
	 <?php $isActive = array(0,0,0,0,1); $member_names = array(); ?> 
			  @include('layouts.tab')
			   <div class="tab-content">
       <div class="tab-pane active fade in" id="home">
			 
			  <div class="panel panel-default" style = "height:75%">  
			   <div class="panel-heading" style = "height:40px;background-color:#333333;color:white	"><h5>Discuss</h5></div>
                    <div class="panel-body">
                    	<div class="row">
                    	<div class="col-xs-2">
<a href="/discuss/create" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Create Topic</a>
<a href="/discuss" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Active Topics</a>
<<<<<<< HEAD:app/views/admin/discuss/awaiting_topic.blade.php
<a href="/discuss/reject" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Rejected Topics</a>
<a href="/discuss/pending" class="btn btn-primary" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Awaiting-Approvals</a>
<a href="/discuss/closed" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Closed Topic</a>
=======
<a href="/discuss/rejected" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Regected Topics</a>
<a href="/discuss/awaitingtopics" class="btn btn-primary" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Awaiting-Approvals</a>

<a href="/discuss/create" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Create Topic</a>

<a href="/discuss/create" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Approval</a>
<a href="/discuss/closedtopics" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Closed Topic</a>
>>>>>>> 29ecc32bdc0eec228c4edba07642eb84cd2a9167:app/views/admin/discuss/awaiting_Topics.blade.php

                    	</div> 
          <div class="col-xs-10">


		<table  class="table">
    <thead>
        <tr>
            
            <th>Author</th>
            <th>Title</th>
            <th style="width:50%">Reason</th>
            <th style="width:20%">Date</th>
            
       </tr>
    </thead>
    <tbody>
    @foreach($discussions as $key => $value)
     <?php 
     $author = $value->created_by;
    // $name = User::all()->where('id','=',$author)->get();
     $name = DB::table('users')->where('id', $author)->pluck('fname');
//$accounts = Account::join('accounts_members','accounts_members.account_id','=','accounts.id')->where('accounts_members.member_id','=',$user_id)->get(array('accounts.id','accounts.name'));

     ?>
<<<<<<< HEAD:app/views/admin/discuss/awaiting_topic.blade.php
        <tr data-href="{{ URL::to('discuss/_pending/' . $value->id) }}">    
=======
        <tr data-href="{{ URL::to('discuss/' . $value->id) }}">    
>>>>>>> 29ecc32bdc0eec228c4edba07642eb84cd2a9167:app/views/admin/discuss/awaiting_Topics.blade.php
            
            <td>{{ $name}}</td>
            <td>{{ $value->title }}</td>
            <td>{{ $value->reason }}</td>
            <td>{{$value->created_at}}</td>
            

            @endforeach 
 </tbody>
</table>



         </div> 	</div>
       
 
</div>
</div>
</div>
</div>
<<<<<<< HEAD:app/views/admin/discuss/awaiting_topic.blade.php
<script>
$(document).ready(function(){
    $('table tr').click(function(){
        window.location = $(this).data('href');
        return false;
    });
});
</script>
=======
 <script>
    $(document).ready(function(){
    $('table tr').click(function(){
        window.location = $(this).data('href');
        return false;
     });
 });
 </script>
>>>>>>> 29ecc32bdc0eec228c4edba07642eb84cd2a9167:app/views/admin/discuss/awaiting_Topics.blade.php
@stop