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
     <?php $isActive = array(0,1,0,0,0); $member_names = array(); ?> 
              @include('layouts.tab')
               <div class="tab-content">
       <div class="tab-pane active fade in" id="home">
    <div class="tab-content">
       <div class="tab-pane active fade in" id="home">
              <div class="panel panel-default" style = "height:75%;">  
               <div class="panel-heading" style = "height:40px;background-color:#333333;color:white "><h5>All Members</h5></div>
                    <div class="panel-body">



<table  class="table" style = "width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Status</th>
       </tr>
    </thead>
    <?php 
$members = User::where('role','=','member')->get(); 
    ?>

    <tbody>
     @foreach($members as $member)
     <!-- <tr data-href="m_memberDetails.php?id="> -->
     <tr class="option" data-id="{{$member->id}}">
        <td>{{ $member->fname }}</td>
        <td>{{ $member->email}}</td>
        <td>{{$member->mobile}}</td>
        <td><?php 
if($member->password == null || $member->password == ""){
    echo '<center><icon style ="color:red" class="fa fa-exclamation-circle"></icon></center>';

}
else{
    echo'<center><icon style ="color:green" class="fa fa-check"></icon></center>';
}
                 ?></td>
     </tr>
     @endforeach

 </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- {{ Form::text('route_path', Route::getCurrentRoute()->getPath(), array('id' => 'route_path')) }} -->
<script>
$(document).ready(function(){

$(".option").click(function(){
var member_id = $(this).data('id');
//alert(account_id)
document.location.href = 'memberDetails?id='+member_id;
});


});

</script>
@stop