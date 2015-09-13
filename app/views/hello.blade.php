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
$tab = "3";
    $isActive = array(0,0,0,0,1,0,0,0,0,0);
?>
    @include('layouts.accord')

    </div>

    <div class="col-xs-9" >
    <div class="panel panel-default" style = "width:100%;height:85%;overflow:auto"> 
   <div class="center span4 well">
            <legend>All Topics</legend>    
            <div id="all_topics"></div>
        </div>  

    </div>
</div>
<script>
$(document).ready(function(){
    loadTopics();   
    $('table tr').click(function(){
        window.location = $(this).data('href');
        return false;
    });
});


setInterval(function(){loadTopics()}, 5000);


function loadTopics(){
$.ajax({
  type: "GET",
  
  url: "/discuss/allTopics",
  
  success: function(response){
    var data = $.parseJSON(response);
    if(data!=""){
     var result = "<table class='table'><tr><th>Author</th><th>Title</th>";
    $.each(data, function(i, item) {
     result +="<tr>"
    result += "<td>"+item.created_by+"</td>";
    result += "<td>"+item.title+"</td>";
       
    result += "</tr>";
    });  
    
    result += "</tr></table>";  
    
    var all_friends = $("#all_topics");
    all_friends.empty();  
    all_friends.append(result);  
    }else{
    var all_friends = $("#all_topics");
    all_friends.empty();  
    }
  }
}); 
}
</script>
@stop