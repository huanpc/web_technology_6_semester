@extends("base")

@section("title")
Quan ly User
@endsection

@section("col-left")
<div class="row" >	
	<br>
	<label><a href="{{Asset('user')}}/all/delete" >Delete All</a></label>
</div>	
@endsection

@section("col-right")
	<div class="row">	
	<table width="100%" class="table-striped">
		<tr>
		<th>ID</th>
		<th>Email</th>
		<th>Fullname</th>
		<th>Phone</th>
		<th>Address</th>
		<th>Avatar</th>
		<th>User type</th>
		<th>Status</th>
		<th>Posts count</th>
		<th>Action</th>
		</tr>
		<?php foreach ($userList as $index => $user): ?>
			<tr>
			<td><?php echo $user['user_id']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['full_name']; ?></td>
			<td><?php echo $user['phone']; ?></td>
			<td><?php echo $user['address']; ?></td>
			<td><?php echo $user['avatar']; ?></td>
			<td><?php echo $user['user_type']; ?></td>
			<td><?php echo $user['status']; ?></td>
			<td><?php echo $user['post_count']; ?></td>
			<td><a href="{{Asset('user')}}/<?php echo $user['user_id']; ?>/edit">Edit  </a><a href="{{Asset('user')}}/<?php echo $user['user_id']; ?>/delete">Delete</a></td>		
			</tr>
		<?php endforeach; ?>
	</table>
	</div>

@endsection