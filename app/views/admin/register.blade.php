<html >
<head>
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
//Bootstrap CSS 
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
      <ul class="nav navbar-nav">
        <li class=""><a href="#">Discussions <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Notice</a></li>
        </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a>Logged In as </a></li>
        <li>
          <a href="#" >Log-Out</a>
            </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div id="content">
<div class="container-fluid">
     <div class="row">
          
<br><br><br>
<div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
        {{Form::open(array('id'=>'contactform','file'=>true,'method' => 'post'))}}
        	<table class="table">
        <tbody>
      <tr>
        <td><h4>Name:</h4></td>
             

        <td class="form-group @if ($errors->has('name')) has-error @endif">
        {{ Form::text('name',null,array('id'=>'name','class'=>'form-control','placeholder'=>'Enter your full Name')) }}
                

  
 
            </td>
 </tr>
        <tr>
        <td><h4>Username:</h4></td>
        <td class="form-group @if ($errors->has('username')) has-error @endif"> 
        {{ Form::text('username',null,array('id'=>'username','class'=>'form-control','placeholder'=>'Username')) }}
              <br>

            <!-- {{ $errors->first('username', '<span class=error>:messages</span>') }}-->
        </td>
</tr>
       <tr>
       <td><h4>Email::</h4></td>
       <td class="form-group @if ($errors->has('username')) has-error @endif">  
       {{ Form::text('email',null,array('id'=>'password','class'=>'form-control','placeholder'=>'Email')) }}
               <br>

             <!-- {{ $errors->first('email', '<span class=error>:messages</span>') }}-->
       </td>
 </tr>
             <tr> <td><h4>Password:</h4></td>
       <td class="form-group @if ($errors->has('username')) has-error @endif"> 
       {{ Form::password('password',array('id'=>'password','class'=>'form-control','placeholder'=>'Password')) }}
                 <br>

             <!-- {{ $errors->first('password', '<span class=error>:messages</span>') }}-->
       </td>
 </tr>
      <tr> <td><h4>Confirm-Password:</h4></td>
       <td class="form-group @if ($errors->has('username')) has-error @endif">
       {{ Form::password('password_confirmation',array('id'=>'password','class'=>'form-control','placeholder'=>'Confirm-Password')) }}
                 <br>

               {{ $errors->first('password_confirmation', '<span class=error>:messages</span>') }}
       </td>
 </tr>      
       <tr> <td></td><td>{{ Form::submit('Resgister!',array('id'=>'submit','class'=>'btn btn-primary')) }}</td>

  </tr>
        
        </tbody></table>
      </div></div></div>
  </div>
{{ Form::close() }}
     </div>
    </div>  
</div>
</body>

</html>