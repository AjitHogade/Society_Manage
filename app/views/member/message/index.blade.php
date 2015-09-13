@extends('layouts.m_basic')
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
<div class="col-xs-3">
	<?php 
$tab = "2";
	$isActive = array(0,0,1,0,0,0,0,0,0,0);
        $message = Message::All();?>

	@include('layouts.accord')

	</div>

	<div class="col-xs-9" >
	<div class="panel panel-default" style = "width:100%;height:85%;overflow:auto"> 
	<center><h3>All Messages List</h3></center>
		<table  class="table">
    <thead>
        <tr>
            
            <th>Sender</th>
            <th>Message</th>
            <th style="width:20%">Date</th>
            
       </tr>
    </thead>
    <tbody>
     @foreach($messages as $key => $value)
     <?php
 $sender = $value->sender_id;
  $sender_name = DB::table('users')->where('id', $sender)->pluck('fname');

  ?>
      <tr data-href="{{ URL::to('message/' . $value->id) }}">    
            <div>
            <td>{{ $sender_name}}</td>
            <td>{{ $value->msg_body }}</td>
            <td>{{$value->created_at}}</td>
            
</div>
            @endforeach
    
 </tbody>
</table>

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