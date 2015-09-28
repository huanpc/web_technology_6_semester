<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">	
	<link rel="stylesheet" href="{{Asset('assets/css/bootstrap.css')}}"/>
	<link rel="stylesheet" href="{{Asset('assets/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{Asset('assets/css/style_v2.css')}}"/>	
	<title>Login</title>			
</head>
<body>
<div class="row" style="margin-left:auto;margin-right:auto;width:40%;">
	
		<form method="post" action="{{Asset('login')}}" id="form-login"> 
		<input type="hidden" name="_token" value="{{ csrf_token() }}">		
		<h2>Login</h2>
		<input type="text" name="user_input" id="user_input" placeholder="Username or email" class="form-control"/>
		<input type="password" name="password_login" id="password_login" placeholder="Password" class="form-control"/>
		@if(isset($error_message))
		<label class="error">{{$error_message}}</label>
		@endif
		<button class="btn btn-lg btn-primary btn-block">Login</button>
	</form>
<p>Chua co tai khoan ? <a href="{{Asset("register")}}">Dang ky ngay!</a></p>
</div>
</body>
</html>
