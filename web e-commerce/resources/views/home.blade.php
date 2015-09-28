
@extends("menu_left_1")

@section("title")
Home
@endsection
@section("col_right")						

				<div class="well well-lg" id="box-dangtin">
					<label>Đăng tin rao vặt miễn phí</label>
					<a href="{{Asset("member/post/create")}}"><input type="button" name="dangtin" value="Đăng tin" id="btn-dang-tin"></a>
				</div>
					<div class="row">
						<div class="col-sm-9">
							<div class="well well-sm"><strong>Các chuyên mục được xem nhiều nhất</strong></div>
							<div class="row">
								<div class="col-sm-12">
									<div class="well" id="hot-box">
										
											<div class="row" id="hot-row">
											<?php foreach ($categoryList as $key => $value) :?>	
											<a href="">
												<div class="col-sm-6" id="hot-col">
													<div class="hot-click">
														<img src="{{Asset("assets/img/logo")}}/<?php echo $value["category_id"];?>.jpg" alt="hot-1" width="100%" height="160px">
														<strong><?php echo $value["name"];?></strong> <span style="color:orange;">      View: <?php echo $value["view_count"];?></span>
													</div>
												</div>
											</a>
											
										<?php endforeach;?>	
											</div>
										
									</div>
								</div>
							</div><!-- end of row -->
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


