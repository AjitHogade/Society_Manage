@extends('layouts.a_basic')
@section('content')

<div class="col-md-10 col-md-offset-1">
	 <?php $isActive = array(0,0,0,0,1); $member_names = array(); ?> 
			  @include('layouts.tab')
			   <div class="tab-content">
       <div class="tab-pane active fade in" id="home">
			 
			  <div class="panel panel-default" style = "height:78%">  
			   <div class="panel-heading" style = "height:40px;background-color:#333333;color:white	"><h5>Discuss</h5></div>
                    <div class="panel-body">
                    	<div class="row">
                    	<div class="col-xs-2">
<a href="/discuss/create" class="btn btn-primary" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Create Topic</a>


<a href="/discuss" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Active Topics
  <span style="color:white;float:right;border-radius:8px;margin-top:-10px;margin-right:-15px;background-color:red;padding-right:5px;padding-left:5px">
    {{Discussion::where('approved',1)->count();}}</span>
</a>

<a href="/discuss/reject" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>
  Rejected Topics
  <span style="color:white;float:right;border-radius:8px;margin-top:-10px;margin-right:-15px;background-color:red;padding-right:5px;padding-left:5px">
  {{Discussion::where('approved',-1)->count();}}
</span></a>

<a href="/discuss/pending" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class
  ="glyphicon glyphicon-minus-sign"></i>Awaiting-Topics
  <span style="text-align:center;color:white;float:right;border-radius:8px;margin-top:-10px;margin-right:-15px;background-color:red;padding-right:5px;padding-left:5px">
  {{Discussion::where('approved',0)->count();}}
</span></a>

<a href="/discuss/closed" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Closed Topics
<span style="color:white;float:right;border-radius:8px;margin-top:-10px;margin-right:-15px;background-color:red;padding-right:5px;padding-left:5px">
  {{Discussion::where('approved',3)->count();}}</span>
  </a>
                    	</div> 
                   <div class="col-xs-10">
                   	{{Form::open(array('method'=>'post','action' => 'MemberDiscussController@store'))}}
<table class="table" style="hieght:100%;">
        <tbody>
      <tr>
        <td style="width:10%;"><h4>Title:</h4></td>
        <td>{{ Form::text('title',null,array('id'=>'name','class'=>'form-control','placeholder'=>'Add receipiants')) }}</td>
        
      </tr>
       <tr><td><h4>Reason:</h4></td>
                <td> {{ Form::text('reason',null,array('id'=>'reason','class'=>'form-control','placeholder'=>'Message subject')) }}</td>

</td>

</tr>
  

      <tr><td><h4>Topic-Details:</h4></td>
        <td><textarea name="body" style="width:100%;height:260px"></textarea>
</td>
<tr>
   <td></td>
   <td>
<div style = "margin-top:1%;margin-left:85%;width:53%">{{ Form::submit('Send/Approval',array('id'=>'submit','class'=>'btn btn-primary')) }}
</div></td>
</tr>
</tbody>
</table>





                   </div> 	</div>
       
 
</div>
</div>
</div>
</div>
@stop