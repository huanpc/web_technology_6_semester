<!DOCTYPE HTML>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{Asset('assets/css/bootstrap.css')}}"/>
	<link rel="stylesheet" href="{{Asset('assets/css/style.css')}}"/>	
	<script type="text/javascript" src="{{Asset('assets/js/jquery-2.1.3.js')}}"></script>
	<script type="text/javascript" src="{{Asset('assets/js/jquery-validate/jquery.validate.js')}}"></script>
</head>
<body style="background: #e5ecf4;">
	<div class="top">
		<div class="menu">
			<ul>
				@if(Session::has("logined"))
				<li><a href="{{Asset('home')}}">HOME</a></li>										
					@if(!Session::get("admin"))
					<li class="menuUsername"><a href="{{Asset('member/edit-profile')}}"><?php echo Session::get("email")?></a></li>				
					@else
					<li class="menutAdd"><a href="{{Asset('user')}}">USER MANAGER</a></li>					
					<li class="menutAdd"><a href="{{Asset('member/post/delete/all')}}">DELETE ALL POST</a></li>					
					@endif
				<li class="menuLogout"><a href="{{Asset('logout')}}">LOGOUT</a></li>	
				@else				
				<li><a href="{{Asset('login')}}">LOGIN</a></li>
				@endif			
			</ul>		
		</div>

	<div class="container">	
		<div class="col-sm-2" >
				@yield('col-left')
		</div>
		<div class="col-sm-10">
				@yield('col-right')
		</div>
	</div>
</body>
</html>