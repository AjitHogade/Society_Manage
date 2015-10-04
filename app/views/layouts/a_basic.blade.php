
<html >
<head>
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />

<!-- Style CSS -->
<link rel="stylesheet" type="text/css" href="/media/css/style.css">
<link rel="stylesheet" type="text/css" href="/media/css/bootstrap.min.css">


<!-- Bootstrap JS -->
<script src="/media/js/bootstrap.min.js"></script>
<!-- JQuery JS -->
<script src="/media/js/jquery.js"></script>
<script src="/media/js/jquery-ui.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


</head>
<body>
@include('layouts.a_header')
<div id="content">
<div class="container-fluid">
     <div class="row">
        	@yield('content')  
	 </div>
	</div>	
</div>	
</body>