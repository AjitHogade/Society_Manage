@extends('layouts.a_basic')
@section('content')

<div class="col-md-10 col-md-offset-1">
     <?php $isActive = array(0,1,0,0,0); $member_names = array(); ?> 
              @include('layouts.tab')
               <div class="tab-content">
       <div class="tab-pane active fade in" id="home">
    <div class="tab-content">
       <div class="tab-pane active fade in" id="home">
              <div class="panel panel-default" style = "height:75%;">  
               <div class="panel-heading" style = "height:40px;background-color:#333333;color:white "><h5><a href="/allMembers"><i class="glyphicon glyphicon-fast-backward"></i></a>    Member Details</h5></div>
                    <div class="panel-body">
                        <?php
$id = $_GET['id'];
$members = User::where('id','=',$id)->get(); 
//var_dump($member)
?>
 @foreach($members as $member)
 
  <h4><center>(Below details are the detais according to the form filled up by the admin at the time of creating a member)</center></h4>
    <center>
<?php 
if($member->active == 0 || $member->active == "0"){
    echo '<center><h5>(offline)</h5></center>';

}
else{
    echo '<center><h5>(Online)</h5></center>';  
}
                 ?>
    <h3>{{$member->fname}}</h3></center>

    <table  class="table">
    <thead>
        <tr>
           
       </tr>
    </thead>

 <tbody>
    
    <tr>
        <td style="width:20%;"><h4>Name:</h4></td>
        <td><h4>{{$member->fname}}</h4></td>
        <td style="width:20%;"><h4>Email:</h4></td>
        <td><h4>{{$member->email}}</h4></td>
      </tr>
        
      <tr>
        <td><h4>Flat-No:</h4></td>
        <td><h4>{{$member->flat_no}}</h4></td>
        <td><h4>Wing:</h4></td>
        <td><h4>{{$member->wing}}</h4></td>
      </tr>

      <tr><td><h4>Flat-Area:</h4></td>
        <td><h4>{{$member->flat_area}}</h4></td>
<td><h4>Maintainance:</h4></td>
        <td><h4>{{$member->amt}}</h4></td> 
</tr>

      <tr><td><h4>Mobile:</h4></td>
        <td><h4>{{$member->mobile}}</h4></td>
<td><h4>Username:</h4></td>
        <td><h4>{{$member->username}}</h4></td>
</tr> 

      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
     @endforeach

 </tbody>
</table>
<center>
 <div class="btn btn-primary" onclick="AsyncConfirmYesNo()"><i class="glyphicon glyphicon-time"></i> Send Reminder Mail</div>
          <div class="btn btn-warning"><i class="glyphicon glyphicon-envelope"></i> Message</div>
          <div class="btn btn-danger"><i class="glyphicon glyphicon-edit"></i> Edit</div>
</center>
</div>
</div>
</div>
</div>
</div>
</div>

@stop