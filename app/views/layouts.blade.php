<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>This Title</title>

    <!-- Bootstrap -->
    <link href="{{asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet" />
  </head>
  <body>
    <nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="{{URL::to('/')}}" style="padding:0;margin-left:1%">
		      	<img src="{{URL::to('image/logo.jpg')}}" width="50%">
		      </a>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="{{URL::to('/home')}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
		        <li><a href="{{URL::to('/home/about_us')}}"><span class="glyphicon glyphicon-tower"></span> About us</a></li>
		        <li><a href="{{URL::to('/home/contact')}}"><span class="glyphicon glyphicon-info-sign"></span> Contact</a></li>
		        <li><a href="{{URL::to('/login')}}"><span class="glyphicon glyphicon-lock"></span> Login</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<div class="container">
			@yield('content')
			<!--Footer-->
			<footer>
	        <p class="pull-right"><a href="http://sagaratech.co.id"> &copy; Sagara Technology</a></p>
	        <p> Sistem informasi Pendataan Menara &middot;</p>
	      </footer>
		</div>
    	<script src="{{asset('bootstrap/css/jquery.min.js')}}" ></script>
		<script src="{{asset('bootstrap/css/bootstrap.js')}}" ></script>
  </body>
</html>