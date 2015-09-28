@extends("menu_left_1")

@section("title")
<?php echo $postDetail["title"];?>
@endsection

@section("col_right")	
<div class="row">
						<div class="col-sm-10">
							<div class="well well-sm" id="chi-tiet-bai-dang-des">Bạn đang ở mục: <strong><?php echo $postDetail["category_id"]." >>> ".$postDetail["category_id2"];?></strong></div>
							<div class="row">
								<div class="chi-tiet-title"><h2><?php echo $postDetail["title"];?></h2></div>
							</div><!-- end of row -->
							<div class="row">
								<div class="col-sm-3" id="col-3-thong-tin-nguoi-dang">
									<div class="chi-tiet-title" style="color:black;">
									<p>Thời gian đăng:</p>
									<p><?php echo $postDetail["created_at"];?></p>
									</div>
								</div>
								<div class="col-sm-3" id="col-3-thong-tin-nguoi-dang">
									<div class="chi-tiet-title" style="color:black">
									<p>Mã tin:</p>
									<p><?php echo $postDetail["post_id"];?></p>
									</div>
								</div>
								<div class="col-sm-3" id="col-3-thong-tin-nguoi-dang">
									<div class="chi-tiet-title" style="color:black">
									<p>Lượt xem:</p>
									<p><?php echo $postDetail["view_count"];?></p>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="chi-tiet-title" style="color:black">
									<p><span style="color: #337ab7" class="glyphicon glyphicon-user">&nbsp;</span><?php echo $postDetail["user_id"];?></p>
									<p><span style="color: #337ab7" class="glyphicon glyphicon-earphone">&nbsp;</span><strong style="color:red"><?php echo $postDetail["phone"];?></strong></p>
									<p><span style="color: #337ab7" class="glyphicon glyphicon-info-sign">&nbsp;</span><strong style="color:red"><?php echo $postDetail["address"];?></strong></p>
									<p><span style="color: #337ab7" class="glyphicon glyphicon-home">&nbsp;</span><strong style="color:red"><?php echo $postDetail["location"];?></strong></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="line" style="background-color: gray;
											height:1px;
											width:100%;
											margin-top:0px;
											margin-bottom:13px"></div>
							</div>
							<div class="row">
								<div class="well"><?php echo $postDetail["description"];?></div>
							</div>
							<div class="row">
								@if(empty($postDetail['image']))								
								<div class="well"><img src="{{Asset('assets/img/logo/7.jpg')}}" width="100%"></div>
								@else								
								<div class="well"><img src="{{Asset("")}}/<?php echo $postDetail['image']; ?>" width="100%"></div>
								@endif
								
							</div>
						</div>
						<div class="col-sm-2">
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