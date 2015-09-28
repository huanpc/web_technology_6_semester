@extends("main")

@section("title")
Quản lý bài đăng
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
<!-- <div class="col-sm-3">	
	<div class="row" style="background-color:#ecf0f1;padding:2px;margin:5px 2px;">
					<div class="col-sm-12">
						<a href="">Thông tin chung </a>
					</div>
					<div class="col-sm-12">
						
						<a href="{{Asset('member/post/show')}}">Quản lý tin đăng</a>
					</div>
					
	</div>
</div> -->
<div class="col-sm-6">
	@if(!empty($post_list))
		<?php foreach ($post_list as $index => $product): ?>
				<div class="row">
					<div class="col-sm-12">
						<div class="title">			
							<div class="tit"><h3><?php echo $product['title']; ?></h3> <a href="{{Asset("member/post/delete")}}/<?php echo $product['post_id']; ?>">Xóa</a></div>			
							<div class="descript">			
								<div class="left_"><?php echo $product['category_id']." >> ".$product['category_id2']; ?></div>
								<div class="right_price">Gia:<span><?php echo $product['price']; ?></span></div>			
							</div>

							<div class="clear"></div>
						</div>

						<div class="pre_image">
							@if(empty($product['image']))
							<img src="{{Asset('assets/img/logo/1.jpg')}} ">
							@else
							<img src="{{Asset('')}}/<?php echo $product['image'];?>">
							@endif
						</div>

						<div class="info">
							<div class="left_address">
								<div class="user_ava">
									@if(empty($product['avatar ']))
									<img style="width:30px;" src="{{Asset('assets/img/logo/7.jpg')}} ">
									@else
									<img style="width:30px;" src="{{Asset('')}}/<?php echo $product['avatar']; ?>">
									@endif

								</div>
								<div class="user_info">
									<span style="color:green"><?php echo $product['user_id']; ?></span><br>
									<?php echo $product['address']; ?><br>
									<?php echo $product['phone']; ?>
								</div>
							</div>
							<div class="right_view">
								<?php echo $product['location']; ?> - <?php echo $product['created_at']; ?><br>
								View: <?php echo $product['view_count']; ?>
							</div>
							<div class="clear"></div>
						</div>	

						<div class="clear"></div>

					</div>
				</div>
				<hr>
				<?php endforeach; ?>
	@else
	@endif
</div>
@endsection