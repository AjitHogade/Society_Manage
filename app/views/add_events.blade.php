<html >
<head>
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link rel="stylesheet" type="text/css" href="/media/css/style.css">
<link rel="stylesheet" type="text/css" href="/media/css/bootstrap.min.css">
<!-- CSS to manage tagit while adding clients 
<link href="/media/css/tagit-awesome-blue.css" type="text/css" rel="stylesheet">-->


<!-- Bootstrap JS -->
<script src="/media/js/bootstrap.min.js"></script>
<!-- JQuery JS -->
<script src="/media/js/jquery.js"></script>
<script src="/media/js/jquery-ui.js"></script>
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
<style type="text/css">
.txtarea{
  height:100%;
}
</style>

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
<div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
        {{Form::open(array('id'=>'contactform','file'=>true,'method' => 'post'))}}
          <table class="table">
        <tbody>
     <!--  <tr>
             

        {{ Form::text('date',null,array('id'=>'name','class'=>'form-control','placeholder'=>'date')) }}
                

  
 
            </td>
 </tr>
        <tr>
        {{ Form::textarea('title',null,array('id'=>'username','class'=>'form-control','placeholder'=>'title')) }}
              <br>

             {{ $errors->first('username', '<span class=error>:messages</span>') }}
        </td>
</tr> -->
       <tr style="height:500px">
       {{ Form::textarea('description','{title:"",start:"",description:"<center><h2></h2></center><div class="allDetail"><br><br></div>" },'
,array('id'=>'password','class'=>'form-control txtarea','placeholder'=>'desp')) }}
               <br>

             <!-- {{ $errors->first('email', '<span class=error>:messages</span>') }}-->
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
