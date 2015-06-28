@extends('layouts.a_basic')
@section('content')

<div class="col-md-10 col-md-offset-1">
	 <?php $isActive = array(0,0,0,1,0); $member_names = array(); ?> 
			  @include('layouts.tab')
			   <div class="tab-content">
       <div class="tab-pane active fade in" id="home">
			 
			  <div class="panel panel-default" style = "height:75%">  
			   <div class="panel-heading" style = "height:40px;background-color:#333333;color:white	"><h5>Manage</h5></div>
                    <div class="panel-body">
                    	<table  class="table">	
    <thead>
        <tr>
            <th>Name</th>
            <th>Mobile</th>
            <th>Status</th>
            <th>Online/Offline</th>
            <th>Action</th>
       </tr>
    </thead>
    <?php 
$members = User::where('role','=','member')->get(); 
    ?>

    <tbody>
     @foreach($members as $member)
     <tr style="hover:none">
        <td>{{ $member->fname }}</td>
        <td>{{$member->mobile}}</td>
                 <td><?php 
if($member->password == null || $member->password == ""){
    echo '<center><icon style ="color:red" class="glyphicon glyphicon-exclamation-sign"></icon></center>';

}
else{
    echo'<center><icon style ="color:green" class="glyphicon glyphicon-ok-sign"></icon></center>';
}
                 ?></td>
                         <td><?php 
if($member->active == 0 || $member->active == "0"){
    echo '<center><icon class="glyphicon glyphicon-record"></icon></center>';

}
else{
    echo'<center><icon style ="color:green" class="glyphicon glyphicon-record"></icon></center>';
}
                 ?></td>  
                  <td>
          <div class="btn btn-primary" onclick="AsyncConfirmYesNo()"><i class="glyphicon glyphicon-edit"></i> Edit</div>
          <div class="btn btn-warning"><i class="glyphicon glyphicon-minus-sign"></i> Block</div>
          <div class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</div>
        </td>  
     </tr>
     @endforeach

 </tbody>
</table>	
 <div id="modalConfirmYesNo" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" 
                class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 id="lblTitleConfirmYesNo" class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <p id="lblMsgConfirmYesNo"></p>
            </div>
            <div class="modal-footer">
                <button id="btnYesConfirmYesNo" 
                type="button" class="btn btn-primary">Yes</button>
                <button id="btnNoConfirmYesNo" 
                type="button" class="btn btn-default">No</button>
            </div>
        </div>
    </div>
</div>      
 
</div>
</div>
</div>
</div>
<script>
function AsyncConfirmYesNo(title, msg, yesFn, noFn) {
    var $confirm = $("#modalConfirmYesNo");
    $confirm.modal('show');
    $("#lblTitleConfirmYesNo").html(title);
    $("#lblMsgConfirmYesNo").html(msg);
    $("#btnYesConfirmYesNo").off('click').click(function () {
        yesFn();
        $confirm.modal("hide");
    });
    $("#btnNoConfirmYesNo").off('click').click(function () {
        noFn();
        $confirm.modal("hide");
    });
}
</script>
@stop