@extends("menu_left_1")

@section("title")
<?php echo $title;?>
@endsection

@section("col_right")	
<div class="row">
		<!-- <div class="col-sm-2">
			<?php foreach ($category_lv2_array as $index => $value): ?>
				<?php 
					if($value["id"]==$cate_2)
						$cate_2=$value["name"];
				?>
				<div class="row" style="background-color:#ecf0f1;padding:2px;margin:5px 2px;">
					<div class="col-sm-12">
						<a href="{{Asset("home/mua-ban-nha-dat")}}/<?php echo $value["id"]; ?>"><?php echo $value["name"]; ?></a>
					</div>
				</div>
			<?php endforeach; ?>					
		</div> -->
	  	<div class="col-sm-9">
			<div class="well" style="min-height: 40px;padding: 8px;margin-bottom: 10px;background-color: #ecf0f1;font-size: 13px;">
				<div class="col-sm-6"><strong style="color:#2980b9;"><?php echo $title." >>> ".$cate_2;?></strong></div>
				<div class="col-sm-6">
					Sắp xếp theo
					<select name="">
						<option value="">Số người xem</option>
						<option value="">Mới nhất</option>
						<option value="">Đánh giá</option>
					</select>
				</div>
			</div>
	  			@if(!empty($productList))
				<?php foreach ($productList as $index => $product): ?>

				<div class="row">
					<div class="col-sm-12">
						<div class="title">			
							<div class="tit"><h3><a href="{{Asset("bai-dang/")}}/<?php echo $product['post_id']; ?>"><?php echo $product['title']; ?></a></h3></div>			
							<div class="descript">			
								<div class="left_"><?php echo $product['category_id']." >> ".$product['category_id2']; ?></div>
								<div class="right_price">Gia:<span><?php echo $product['price']; ?></span></div>			
							</div>

							<div class="clear"></div>
						</div>

						<div class="pre_image">
							@if(empty($product['image']))
							<img src="{{Asset('assets/img/car.jpg')}} ">
							@else
							<img src="{{Asset("")}}/<?php echo $product['image']; ?>">
							@endif
						</div>

						<div class="info">
							<div class="left_address">
								<!-- <div class="user_ava">
									<img style="width:20px" src="{{Asset("ass")}}">
								</div> -->
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
					<div class="row">
						<div class="col-sm-12">
							Chưa có bài đăng nào trong mục này!
						</div>	
					</div>	
				@endif

		  		</div>	  
		  		<div class="col-sm-3">
							<div class="row">
								<div class="col-sm-12">
									<div class="well" style="padding:0px;"><img width="100%" src="{{Asset("assets/img/logo/quang-cao-1.png")}}"></div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="well" style="padding:0px;"><img width="100%" src="{{Asset("assets/img/logo/quang-cao-1.png")}}"></div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="well" style="padding:0px;"><img width="100%" src="{{Asset("assets/img/logo/quang-cao-1.png")}}"></div>
								</div>
							</div>
						</div>		
	  	</div>		
@endsection