@extends("main")

@section("title")
Edit Profile
@endsection

@section("content")
<div class="col-sm-3">	
	<div class="row" style="background-color:#ecf0f1;padding-top:12px;margin:5px 2px;">
					<div class="row">
					<div class="col-sm-12">
						<div class="well well-sm" style="cursor:pointer;"><a href=""><h4>Thông tin chung</h4> </a></div>
					</div>
					</div>
					<div class="row">
					<div class="col-sm-12">
						<div class="well well-sm" style="cursor:pointer">
						<a href="{{Asset('member/post/show')}}"><h4>Quản lý tin đăng</h4></a>
						</div>
					</div>
					</div>
					
	</div>
</div>
<div class="col-sm-6">
	<?php $user_infor_array=Session::get("user_info");?>
	<h3>Thông tin chung</h3>
	<form method="post" action="{{Asset('member/edit-profile')}}" id="form-editProfile" enctype="multipart/form-data"> 
		<input type="hidden" name="_token" value="{{ csrf_token() }}">	
		<table class="table-striped">
			<tr>
		<td><label>ID</label></td>
		<td><input style="margin-top:7px;margin-bottom:7px;" type="text" name="user_id"  value='<?php echo $user_infor_array['user_id'];?>' readonly="true" class="form-control"/></td>
			</tr>
				<tr>
		<td><label>Email</label></td>
		<td><input style="margin-top:7px;margin-bottom:7px;" type="text" value='<?php echo $user_infor_array['email'];?>' readonly="true" class="form-control"/></td>
			</tr>
		<td><label>Fullname</label></td>
		<td><input style="margin-top:7px;margin-bottom:7px;" type="text" name="full_name" id="full_name" value='<?php echo $user_infor_array['full_name'];?>' class="form-control"/></td>
			<tr>
		<td><label>Phone</label></td>
		<td><input style="margin-top:7px;margin-bottom:7px;" type="number" name="phone" id="phone" value="{{$user_infor_array['phone']}}" class="form-control"/></td>
			</tr>
			<tr>
		<td><label>Address</label></td>
		<td><input style="margin-top:7px;margin-bottom:7px;" type="text" name="address" id="address" value="{{$user_infor_array['address']}}" class="form-control"/></td>		
			</tr>
			<tr>
		<td><label>Avatar</label></td>
		<td><input type="file" name="avatar" id="avatar" style="margin-top:7px;margin-bottom:7px;" class="form-control" placeholder="Chọn image"/></td>			
			</tr>
			<tr>
				<td>
					<label style="margin-top:7px;margin-bottom:7px;">So bai dang:  </label>
				</td>
				<td><?php echo $user_infor_array['post_count'];?> </td>
			</tr>
			</tr>
				<td>					
				</td>
				<td style="padding-left:23px;padding-right:23px;">
					<button type="submit" class="btn btn-primary btn-block">Lưu lại</button>
					<button type="reset" class="btn btn-primary btn-block">Hủy</button>
				</td>
			</tr>
		</table>
	</form>		
	
</div>
<div class="col-sm-3">	
	<div class="row" style="background-color:#ecf0f1;padding:2px;margin:5px 2px;">
					<div class="col-sm-12" >
					</br>
						<label>Avatar</label>
					</div>
					<div class="col-sm-12" >						
						<div class="well" style="padding:0px;">
								@if(!empty($user_infor_array['avatar']))
								<img style="min-height:50px;" width="100%" height  src="{{Asset($user_infor_array['avatar'])}}" >
								@else
								<img style="min-height:50px;" width="100%" alt="no avatar" src="{{Asset('assets/img/logo/7.jpg')}}" >
								@endif
						</div>													
					</div>

	</div>
</div>
@endsection