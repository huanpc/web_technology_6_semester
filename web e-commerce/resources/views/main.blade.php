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
	<script type="text/javascript" src="{{Asset('assets/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{Asset('assets/js/myownjs.js')}}"></script>
	<title>@yield('title')</title>	
		
</head>
<body>
	<div class="top">
		<div class="navi_bar">
			<nav class="navbar navbar-default navbar-fixed-top" id="navbar_header">

			    <div class="container" id="container_header">

			        <div class="navbar-header">
				          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				            <span class="sr-only">Toggle navigation</span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				          </button>
				          <a class="navbar-brand" href="{{Asset("home")}}" style=" font-size: 29px">HOME</a>
			        </div>

			        <div id="navbar" class="collapse navbar-collapse">
			          <ul class="nav navbar-nav">
			            <li class="dropdown">
				            		<a href=""  class="dropdown-toggle" 
				            		data-toggle="dropdown" >Hỗ trợ <span class="caret"></span></a>
				            		<ul class="dropdown-menu" id="dropdownmenu-ho-tro">
						                <li><a href="#" style="color: black">Nếu cần hỗ trợ, vui lòng liên hê</a></li>
						                <li class="divider"></li>
						                <li><span class="glyphicon glyphicon-phone-alt">&nbsp;</span>Điện thoại: <strong>(04) 999 999 9</strong></li>
						            </br>
						           		<li><span class="glyphicon glyphicon-earphone">&nbsp;</span>Hotline: <strong>0987 999 999</strong></li>
						           	</br>
						           		<li><span class="glyphicon glyphicon-envelope">&nbsp;</span>Mail: <strong>tanphan.bka@gmail.com</strong></li>
						           	</br>
						           		<li><span class="glyphicon glyphicon-print">&nbsp;</span>Fax: <strong>None!</strong></li>
						            	<li class="divider"></li>
						            	<ul>
						            		<a href=""><li>Thông báo về việc chuyển văn phòng</li></a>
						            		<a href=""><li>Quy định đăng tin</li></a>
						            	</ul>
						            </ul>
				         </li>
			            <li><a href="muaquangcao.php" >Mua quảng cáo  <span class="glyphicon glyphicon-file"></span></a></li>
			             <ul class="nav navbar-nav">
			            <?php if(Session::get('logined')){ ?>
						    <li class="dropdown"><a href=""  class="dropdown-toggle" data-toggle="dropdown" style="color: #337ab7"><?php echo Session::get("email")?>  <span class="caret"></span></a>
			                  <ul class="dropdown-menu">
			                      <li><a href="{{Asset("member/edit-profile")}}" style="color: black">Thông tin cá nhân</a></li>
			                      <li class="divider"></li>
			                      <li><a href="{{Asset("member/post/show")}}">Quản lý đăng tin</a></li>
			                      <li class="divider"></li>
			                      <li><a href="">Nâng cấp tài khoản</a></li>
			                      <li class="divider"></li>
			                  </ul>
			           		</li>
			            	<li><a href="{{Asset("logout")}}" style="color: #337ab7" >Đăng xuất   <span class="glyphicon glyphicon-edit"></span></a></li>
            				<li><a href="{{Asset("member/post/create")}}" style="color: #337ab7">Đăng tin   <span class="glyphicon glyphicon-edit"></span></a></li>
			            </ul>
			            <?php }else{ ?>
						<li>
			            	<a href="" style="color: #337ab7" class="dangnhap-window">Đăng nhập 
			            		<span class="glyphicon glyphicon-user"></span>
			            	</a>
			            </li>
			            <li><a href="" style="color: #337ab7" class="dangky-window">Đăng ký   <span class="glyphicon glyphicon-edit"></span></a></li>

						<?php } ?>		          
			          </ul>
			        </div><!--/.nav-collapse -->

			    </div>
	    	</nav><!--kết thúc navigator bar-->
		</div>

		<div class="dangnhap" >
			<h3><b>Đăng nhập</b></h3>
				
				<form class="form-horizontal"  action="{{Asset('login')}}" method="POST" >
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group">
						<label class="col-sm-3 control-label">Email</label>
					    <div class="col-sm-9">
					     	<input type="email" name="user_input" class="form-control" placeholder="Email">
					    </div>
				  	</div>
					
					<div class="form-group">
				    	<label class="col-sm-3 control-label">Mật Khẩu</label>
				    	<div class="col-sm-9">
				      		<input type="password" class="form-control" name="password_login" placeholder="Mật khẩu">
				    	</div>
				  	</div>				  	

				  	<br>
					<div class="form-group">
				    	<div class="col-sm-offset-3 col-sm-10">
				      		<button type="submit" class="btn btn-primary">Đăng nhập</button>
				      		<button type="reset" class="btn btn-primary">Hủy biểu mẫu</button>
				    	</div>
				  	</div>
			</form>
			<!-- ??? -->
			<div id="boxfooter"><p>CN WEB</p></div>
		</div>	
		
		<div class="dangky">
			<h3><b>Đăng Ký</b></h3>
			<form class="form-horizontal"  action="{{Asset('register')}}" method="POST" id="ownForm">
				<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

					<div class="form-group">
						<label class="col-sm-4 control-label">Email</label>
					    <div class="col-sm-8">
					     	<input  type="email" name="email" class="form-control" id="email" placeholder="Email">
					    </div>
				  	</div>
					
					<div class="form-group">
				    	<label class="col-sm-4 control-label">Mật Khẩu</label>
				    	<div class="col-sm-8">
				      		<input type="password" name="password" class="form-control" id="password" placeholder="Mật khẩu">
				    	</div>
				  	</div>
				  	
				  	<div class="form-group">
						<label class="col-sm-4 control-label">Xác nhận mật khẩu</label>
					    <div class="col-sm-8">
					     	<input type="password" name="password_confirmation" class="form-control"  id="password_confirmation" placeholder="Xác nhận mật khẩu">
					    </div>
				  	</div>				  				  					  	
				  	<br>
					<div class="form-group">
				    	<div class="col-sm-offset-3 col-sm-10">
				      		<button type="submit" class="btn btn-primary">Đăng ký</button>
				      		<button type="reset" class="btn btn-primary">Hủy biểu mẫu</button>
				    	</div>
				  	</div>

			</form>

			<div id="boxfooter"><p>CN WEB</p></div>
		</div>

		<div id="banner_header"><!--Chứa mục tên và tìm kiếm-->
			<div class="container" id="container_banner">
				<div class="row">

					<div class="col-sm-4" id="logo-box" >
						<a href="{{Asset('home')}}"><img src="{{Asset("assets/img/logo/logo.png")}}" width="50%" height="80%";></a>
			
					</div><!--kết thúc div logo-->

					<div class="col-sm-8" id="searching-box">
						<div class="form-horizontal" >
							<form class="form-group" action="{{Asset("timkiem")}}" method="POST">
								<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
								<div class="col-sm-2">									
								<select class="btn" name="location" style="background-color:#f5f5f5;">
									<option value="Toan quoc" >Toàn quốc</option>
									<option value="Ha noi" >Hà Nội</option>											
									<option value="Hai phong">Hải Phòng</option>
									<option value="Da nag">Đà Nẵng</option>									
									<option value="Ho chi minh">Sài Gòn</option>
								</select>													
								</div>
								<div class="col-sm-2">
									<select name="the_loai" class="btn" style="background-color:#f5f5f5;" <datalist>
											<option >Loại</option>
											<option value="1">Tất cả</option>
											<option value="2">Xe cộ</option>											
											<option value="3">Nhà đất</option>											
											<option value="4">Điện thoại</option>											
									</datalist>>
									</select>
								</div>
								<div class="col-sm-6" >
									<input type="text" class="form-control" id="inputsearchingkey" name="key" placeholder="Nhập từ khóa tìm kiếm">
								</div>
								<div class="col-sm-2">
									<button type="submit" class="btn btn-success">Tìm kiếm  <span class="glyphicon glyphicon-search"></span></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<div class="container" id="mainContent">
		@yield('content')
	</div>

	<div class="footer">
		<footer><div class="well" id="footer1">(C) CopyRight@2015</div></footer>

		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="well">
						Team Web: Huân - Duy - Lâm - Tân
						<br>
						Địa chỉ: TC-201, Tòa nhà tại chức ĐHBKHN.
						<br>
						Mọi ý kiến góp ý gửi về: hdlt@gmail.com
					</div>
				</div>
			</div>
		</div>

		
	</div>	

<script type="text/javascript">
$().ready(function(){
$("#ownForm").validate({
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
</body>
</html>
