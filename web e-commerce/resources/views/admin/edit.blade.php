@extends("base")

@section("title")
Login
@endsection

@section("content")
<?php $user_infor_array=$userInfo;?>

<form method="post" action="{{Asset('user')}}/<?php echo $user_infor_array['user_id']; ?>/edit" style="width:70%; margin-right: auto; margin-left: auto;"> 
	<input type="hidden" name="_token" value="{{ csrf_token() }}">		

	<h3>Edit user form</h3>
	<table>
		<tr><td><label>ID</label></td><td><input type="text" name="user_id" disabled="true"  value='<?php echo $user_infor_array['user_id'];?>' /></td></tr>		
		<tr><td><label>Email</label></td><td><input type="text" disabled="true"  value='<?php echo $user_infor_array['email'];?>' /></td></tr>
		<tr><td><label>Fullname</label></td><td><input type="text" name="full_name"  value='<?php echo $user_infor_array['full_name'];?>' /></td></tr>
		<tr><td><label>Phone</label></td><td><input type="text" name="phone"  value='<?php echo $user_infor_array['phone'];?>' /></td></tr>
		<tr><td><label>Address</label></td><td><input type="text" name="address"  value='<?php echo $user_infor_array['address'];?>' /></td></tr>
		<tr><td><label>User type</label></td><td><input type="text" name="avatar"  value='<?php echo $user_infor_array['avatar'];?>' /></td></tr>
		<tr><td><label>Status</label></td><td><input type="text" name="user_type"  value='<?php echo $user_infor_array['user_type'];?>' /></td></tr>
		<tr><td><label>Post count</label></td><td><input type="text" name="status"  value='<?php echo $user_infor_array['status'];?>' /></td></tr>
		<tr><td><label>Action</label></td><td><input type="text" name="post_count"  value='<?php echo $user_infor_array['post_count'];?>' /></td></tr>
		<tr><td><button class="btn btn-lg btn-primary btn-block">Submit</btn></td></tr>
	</table>		
</form>
@endsection