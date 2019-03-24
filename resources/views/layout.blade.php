<!DOCTYPE html>
<html>
	<head>
		<title>RestoQ</title>
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- bootstrap-css -->
		<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
		<!--// bootstrap-css -->
		<!-- css -->
		<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all" />
		<link rel="stylesheet" href="{{asset('css/windS.css')}}" type="text/css" media="all" />
		<!--// css -->
		<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" type="text/css" media="all">
		<link href="{{asset('css/owl.theme.css')}}" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="{{asset('css/cm-overlay.css')}}" />
		<link href="{{asset('css/imagehover.css')}}" rel="stylesheet" media="all">
		<link rel="stylesheet" href="{{asset('css/percircle.css')}}">
		<!-- font-awesome icons -->
		<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> 
		<!-- //font-awesome icons -->
		<!-- font -->
		<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
		<!-- //font -->
		<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.js')}}"></script>
		<!-- menu -->
		<link rel="stylesheet" href="{{asset('css/main.css')}}">
		<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
		<!-- //menu -->
		<script src="{{asset('js/owl.carousel.js')}}"></script>

		<link rel="stylesheet" href="{{asset('css/bootstrap-datetimepicker.min.css')}}">
		<script type="text/javascript" src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
		
		<link href="{{asset('css/dataTables.css')}}" rel="stylesheet"> 
		<script src="{{asset('js/jquery.datatables.js')}}"></script>
	</head>

	<nav class="navbar navbar-default fixed">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="{{url('/')}}"><img src="{{asset('img/logo.png')}}" class="logo"></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<form class="navbar-form navbar-left" action="{{url('/search')}}">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search" name="search">
					</div>
					<input type="button" class="btn" value="Search">
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{url('/RestaurantList')}}">Restaurant List</a></li>
    				@if(isset(Auth::user()->name))
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reservation<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="{{url('/ReservationHistory')}}">History</a></li>
							<li><a href="{{url('/ReservationOnGoing')}}">On Going</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi, {{Auth::user()->name}}<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="{{url('/Profile')}}">Profile</a></li>
							<li><a href="{{url('/Logout')}}">Logout</a></li>
						</ul>
					</li>
					@else
						<li><a href="{{url('/Login')}}">Login</a></li>
						<li><a href="{{url('/Register')}}">Register</a></li>
					@endif
				</ul>
			</div>
		</div>
	</nav>


	<body style="background-color:lightgoldenrodyellow;">

		<div class="container">
			@yield('content')
		</div>

		<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/restaurantDetail.js')}}"></script>
	</body>


	<footer>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<p>©Copyright 2017 SS</p>
		</div>
	</footer>
</html>