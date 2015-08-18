@extends('layouts.a_basic')
@section('content')

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
<a href="/discuss" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Active Topics</a>
<a href="/discuss/rejected" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Regected Topics</a>
<a href="/discuss/awaitingtopics" class="btn btn-primary" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Awaiting-Approvals</a>

<a href="/discuss/create" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Create Topic</a>

<a href="/discuss/create" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Approval</a>
<a href="/discuss/closedtopics" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Closed Topic</a>

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
        <tr data-href="{{ URL::to('discuss/' . $value->id) }}">    
            
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
 <script>
    $(document).ready(function(){
    $('table tr').click(function(){
        window.location = $(this).data('href');
        return false;
     });
 });
 </script>
@stop