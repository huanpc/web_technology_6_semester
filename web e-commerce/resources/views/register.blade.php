<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">	
	<link rel="stylesheet" href="{{Asset('assets/css/bootstrap.css')}}"/>
	<link rel="stylesheet" href="{{Asset('assets/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{Asset('assets/css/style_v2.css')}}"/>	
	<script type="text/javascript" src="{{Asset('assets/js/jquery-2.1.3.js')}}"></script>
	<script type="text/javascript" src="{{Asset('assets/js/jquery-validate/jquery.validate.js')}}"></script>				
	<title>Register</title>	
		
</head>
<body>
	<div class="row" style="margin-left:auto;margin-right:auto;width:30%;">
<form method="post" action="{{Asset('register')}}" id="form-register" > 
	<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
	<h2>Register</h2>
	<!-- <input type="text" name="username" id="username" placeholder="Username" class="form-control"/> -->
	<input type="email" name="email" id="email" placeholder="Email" class="form-control" />
	<input type="password" name="password" id="password" placeholder="Password" class="form-control"/>
	<input type="password" name="password_confirmation" id="password_confirmation" placeholder="Re-password" class="form-control"/>
	<button class="btn btn-lg btn-primary btn-block">Register</btn>

<script type="text/javascript">
$().ready(function(){
$("#form-register").validate({
	rules:{
		email:{
			required:true,
			email:true,
			remote:{
				url:"{{Asset('register')}}/check-email",
				type:"POST",			
				data: {_token: function() {
            		return $("#token" ).val();
          	}}}
		},
		password:{
			required:true,
			minlength:6
		},
		password_confirmation:{
			equalTo:"#password"
		}
		
	},
	messages:{		
		email:{
			required:"Vui long nhap email",
			email:"",
			remote:"Email nay da ton tai"
		},
		password:{
			required:"Vui long nhap mat khau",
			minlength:"Mat khau phai 6 ki tu tro len"
		},
		password_confirmation:{
			equalTo:"Mat khau xac nhan khong dung"
		}
		
	}
 });
});

</script>
</form>
</div>
</body>
</html>