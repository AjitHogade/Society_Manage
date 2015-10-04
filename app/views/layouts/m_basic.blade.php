<html >
<head>
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="/font-awesome-4.3.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/media/js/bootstrap.min.js"></script>

<script src="/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    toolbar:false,
    selector: "textarea",
    menubar: false,
    statusbar: false,
    force_br_newlines : false,
    force_p_newlines : false,
    forced_root_block : '',
    editor_css : 'media/css/editor.css',
   });
</script>
<!-- <script type="text/javascript" src="/niceEdit/niceEdit.js"></script> -->
<style type="text/css">
html, body {
    max-width: 100%;
    overflow-x: hidden;
}</style>


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