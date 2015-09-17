




@extends('layouts.m_basic')
@section('content')
<style type="text/css">

.nav-pills {
border-bottom: 0px;

}
.nav-pills > li {
margin-bottom:0;
margin-top:-1px;
}

.nav-pills > li > a {
padding-top: 8px;
padding-bottom: 8px;
line-height: 17px;
border: 1px solid transparent;

text-align: center;
}

.navig{
  padding-top: 100px;
}
.navig{

    position:absolute;
    bottom:0px;
    left:0px;
    right:0px;
}
.current{
  color: white;
  background-color: grey;
  border-radius:5px;
}
.nav-pills li{
width: 24.5%;

}
</style>
</head>
<body>
<div class="container">
<div class="navig" >
<ul class="nav nav-pills" style="width:100%">
  <li class="current"><a href="#" style="color:white">Home</a></li>
  <li><a href="#">Sales</a></li>
  <li><a href="#">Statistic</a></li>
  <li><a href="#">About</a></li>
</ul>
</div>

@stop