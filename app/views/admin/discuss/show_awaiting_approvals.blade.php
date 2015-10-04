@extends('layouts.a_basic')
@section('content')
<style>
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
<div class="col-md-10 col-md-offset-1">
     <?php $isActive = array(0,0,0,0,1); $member_names = array(); 
     $author = $discuss->created_by;
    // $name = User::all()->where('id','=',$author)->get();
     $name = DB::table('users')->where('id', $author)->pluck('fname');
     ?> 
              @include('layouts.tab')
               <div class="tab-content">
       <div class="tab-pane active fade in" id="home">
             
              <div class="panel panel-default" style = "height:75%">  
               <div class="panel-heading" style = "height:40px;background-color:#333333;color:white "><h5>Discuss</h5></div>
                    <div class="panel-body">
                        <div class="row">
                        <div class="col-xs-3">
<a href="/discuss/create" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Create Topic</a>


<a href="/discuss" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Active Topics
  <span style="color:white;float:right;border-radius:8px;margin-top:-10px;margin-right:-15px;background-color:red;padding-right:5px;padding-left:5px">
    {{Discussion::where('approved',1)->count();}}</span>
</a>

<a href="/discuss/reject" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>
  Rejected Topics
  <span style="color:white;float:right;border-radius:8px;margin-top:-10px;margin-right:-15px;background-color:red;padding-right:5px;padding-left:5px">
  {{Discussion::where('approved',-1)->count();}}
</span></a>

<a href="/discuss/pending" class="btn btn-primary" style="width:100%;margin-bottom:8px"><i class
  ="glyphicon glyphicon-minus-sign"></i>Awaiting-Topics
  <span style="text-align:center;color:white;float:right;border-radius:8px;margin-top:-10px;margin-right:-15px;background-color:red;padding-right:5px;padding-left:5px">
  {{Discussion::where('approved',0)->count();}}
</span></a>

<a href="/discuss/closed" class="btn btn-default" style="width:100%;margin-bottom:8px"><i class="glyphicon glyphicon-minus-sign"></i>Closed Topics
<span style="color:white;float:right;border-radius:8px;margin-top:-10px;margin-right:-15px;background-color:red;padding-right:5px;padding-left:5px">
  {{Discussion::where('approved',3)->count();}}</span>
  </a>
                        </div> 
          <div class="col-xs-9">
<div>
<center><h4>{{ $discuss->title }}</h4></center> 
        <table  class="table" style="width:100%">
   
    <tbody >
    
     

        <tr>
            <td style="width:20%;font-style: italic; ">Topic:</td>
            <td><b>{{ $discuss->title }}</b></td>
        </tr>
        <tr>
            <td style="font-style: italic;">Reason:</td>
            <td><b>{{ $discuss->reason }}</td>
        </tr>
        <tr>
            <td style="font-style: italic;">Description:</td>
            <td style="display: inline-block;"><div style="max-height:150px; overflow:auto;">{{ $discuss->body }}</td>
        </tr>
         <tr>
            <td></td><td><div  style="float:right">{{"Created by ".'<b >'.$name.'</b>'." "}}{{"on ".'<b>'.$discuss->created_at.'</b>'}}</div></td>
        </tr>
        <tr><td></td><td></td></tr>
            

            
 </tbody>
</table>

</div><center> <span>
{{Form::open(array('id'=>'','file'=>true,'method' => 'post', 'action' =>'DiscussionController@approve'))}}
{{ Form::hidden('topic_id', $discuss->id, array('id' => 'invisible_id')) }}
{{ Form::submit('Approve',array('id'=>'submit','class'=>'btn btn-success')) }}{{ Form::close() }}


{{Form::open(array('id'=>'','file'=>true,'method' => 'post' ,'action' =>'DiscussionController@disapprove'))}}
{{ Form::hidden('topic_id', $discuss->id, array('id' => 'invisible_id')) }}
{{ Form::submit('Reject',array('id'=>'submit','class'=>'btn btn-danger')) }}{{ Form::close() }}</span>

     



         </div>
@stop