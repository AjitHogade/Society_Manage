@extends('layouts.a_basic')
@section('content')

<div class="col-md-10 col-md-offset-1">
	 <?php $isActive = array(0,0,1,0,0); $member_names = array(); ?> 
			  @include('layouts.tab')
			  <div class="panel panel-default" style = "height:75%">  
         <div class="panel-heading" style = "height:40px;background-color:#333333;color:white "><h5>Add Member</h5></div>
                    <div class="panel-body">
  <h3>Note:</h3><h4>The filled up form registers the new members in your society.After the form successfully filled up,the mail will be sent to user which allows
the member to create his/her own password which will be confidential.So ask the member to provide the valid email address for the verification.</h4>
<br />
{{ Form::open(array('action'=>'MemberController@addMember', 'method' => 'post')) }}

                    	<table class="table">
        <tbody>
      <tr>
        <td style="width:10%;"><h4>Name:</h4></td>
        <td>{{ Form::text('name',null,array('id'=>'name','class'=>'form-control','placeholder'=>'Enter your full Name','required'=>'')) }}</td>
        <td style="width:10%;"><h4>Email:</h4></td>
        <td> {{ Form::text('email',null,array('id'=>'email','class'=>'form-control','placeholder'=>'Email Address','required'=>'')) }}
        </td>
      </tr>
        
      <tr>
      	<td><h4>Flat-No:</h4></td>
        <td> {{ Form::text('flat_no',null,array('id'=>'flat_no','class'=>'form-control','placeholder'=>'Flat number','required'=>'')) }}</td>
        <td><h4>Wing:</h4></td>
        <td>{{ Form::text('wing',null,array('id'=>'wing','class'=>'form-control','placeholder'=>'Wing name','required'=>'')) }}</td>
      </tr>

      <tr><td><h4>Flat-Area:</h4></td>
        <td> {{ Form::text('flat_area',null,array('id'=>'flat_area','class'=>'form-control','placeholder'=>'Total flat area','required'=>'')) }}
</td>
<td><h4>Maintainance:</h4></td>
        <td> {{ Form::text('amt',null,array('id'=>'amt','class'=>'form-control','placeholder'=>'','required'=>'')) }}
</td> 
</tr>

      <tr><td><h4>Mobile:</h4></td>
        <td> {{ Form::text('mobile',null,array('id'=>'mobile_num','class'=>'form-control','placeholder'=>'Mobile number','required'=>'')) }}
</td>
<td><h4>Username:</h4></td>
        <td> {{ Form::text('username',null,array('id'=>'username','class'=>'form-control','placeholder'=>'Username','required'=>'')) }}
</td>
</tr> 

      <tr>
      	<td></td>
      	<td></td>
      	<td></td>
      	<td></td>
        </tr>
      </tbody>
</table>
<div style = "float:right;width:53%">{{ Form::submit('Resgister!',array('id'=>'submit','class'=>'btn btn-primary')) }}

</div>
</div>
@stop