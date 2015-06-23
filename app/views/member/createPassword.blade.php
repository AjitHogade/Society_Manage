<html >
<head>
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>create password</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
<!-- <link rel="stylesheet" type="text/css" href="/media/css/bootstrap.min.css">-->

<!-- Style CSS -->
<!-- <link rel="stylesheet" type="text/css" href="/media/css/style.css"> -->
<!-- CSS to manage tagit while adding clients -->
<!-- <link href="/media/css/tagit-awesome-blue.css" type="text/css" rel="stylesheet">
 -->

<!-- Bootstrap JS -->
<script src="/media/js/bootstrap.min.js"></script>
<!-- JQuery JS -->
<!-- <script src="/media/js/jquery.js"></script> -->
<!-- JQuery UI JS 
<script type="text/javascript" src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>-->
<!-- <script src="/media/js/jquery-ui.min.js"></script> -->
<!-- TAG-IT JS -->
<!-- <script type="text/javascript" src="/media/js/tagit.js" charset="UTF-8"></script> -->

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:white;font-size:23px">Society-Management-System</a>
    </div>
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li></li>
        <li>
          <a href="/memberLogin"> Member-Login</a>
            <!-- <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
           --></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php
$id = Session::get('ids');
// foreach ($id as $ids) {
//   # code...
// }
?>
<div id="content">
<div class="container-fluid">
     <div class="row">
          
<br><br><br>
<div class="col-md-6 col-md-offset-3">
      <div class="panel panel-default">
                    <div class="panel-heading">Create Your Password.</div>
                    <div class="panel-body">
     
        {{Form::open(array('id'=>'contactform','file'=>true,'method' => 'post'))}}

        	<table class="table">
        <tbody>
           {{ Form::hidden('id',$id)}}
        <tr> <td><h4>Password:</h4></td>
       <td> {{ Form::password('password',array('id'=>'password','class'=>'form-control','placeholder'=>'Password','required'=>'')) }}</td>
       </tr>
      <tr> <td><h4>Confirm-Password:</h4></td>
       <td>{{ Form::password('password_confirmation',array('id'=>'password','class'=>'form-control','placeholder'=>'Confirm-Password','required'=>'')) }}</td>
         </tr>
       <tr> <td></td><td><div  style="float:right">{{ Form::submit('Create!',array('id'=>'submit','class'=>'btn btn-primary')) }}</td></tr>
        </div>
        </tbody></table>
      </div></div></div>
  </div>
{{ Form::close() }}
     </div>
    </div>  

</body>

