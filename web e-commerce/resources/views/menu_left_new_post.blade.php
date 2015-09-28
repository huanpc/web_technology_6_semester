@extends("main")

@section("title")

@endsection

@section("content")
<div class="row">

	<div class="col-sm-3" id="col-menu">			
			<div class="well well-sm" style="background-color: white"><h4><font face="octemberscript">Lựa chọn chuyên mục</font></h4></div>
				
				<div class="menu1" style="cursor:pointer">
					<div class="row" id="row-list-1">						
						<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-nhadat.png" ></div>
						<div class="col-sm-8" id="content-list">Mua bán nhà, đất</div>
						<div class="col-sm-2" id="content-list"><span class="glyphicon glyphicon-chevron-right"></span></div>
						</a>
					</div>

					<div class="content-menu1">
						<div class="row">
							<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-nhadat.png" ></div>
							<div class="col-sm-8" id="content-list">
								<strong>Mua bán nhà, đất</strong>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-8">
								<div class="list">
									<ul>								
										<li><button style="border:none;background-color:white;color:#337ab7" class="category_id2_" value="1">Nhà trong ngõ</button></li>
										<li><button style="border:none;background-color:white;color:#337ab7" class="category_id2_" value="2">Căn hộ chung cư</button></li>
										<li><button style="border:none;background-color:white;color:#337ab7" class="category_id2_" value="3">Nhà mặt phố</button></li>
										<li><button style="border:none;background-color:white;color:#337ab7" class="category_id2_" value="4">Nhà tập thể</button></li>
										<li><button style="border:none;background-color:white;color:#337ab7" class="category_id2_" value="5">Biệt thự</button></li>										
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div><!--kết thúc div menu1-->

				<div class="menu2"style="cursor:pointer">
					<div class="row" id="row-list-2">						
						<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-thuenha.png" ></div>
						<div class="col-sm-8" id="content-list">Thuê, cho thuê nhà</div>
						<div class="col-sm-2" id="content-list"><span class="glyphicon glyphicon-chevron-right"></span></div>					
					</div>
					<div class="content-menu2">
						<div class="row">
							<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-thuenha.png" ></div>
							<div class="col-sm-8" id="content-list">
								<strong>Thuê, cho thuê nhà</strong>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-10">
								<div class="list">									
									<ul>										
										<li><button style="border:none;background-color:white;color:#337ab7" class="category_id2_" value="6">Nhà riêng/ nguyên căn</button></li>
										<li><button style="border:none;background-color:white;color:#337ab7" class="category_id2_" value="7">Nhà trọ/ phòng trọ</button></li>										
									</ul>
								</div>
							</div>							
						</div>
					</div>
				</div><!--kết thúc div menu2-->

				<div class="menu3"style="cursor:pointer">
					<div class="row" id="row-list-3">
						<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-xeco.png" ></div>
						<div class="col-sm-8" id="content-list">Ô tô xe máy</div>
						<div class="col-sm-2" id="content-list"><span class="glyphicon glyphicon-chevron-right"></span></div>
					</div>
					<div class="content-menu3">
						<div class="row">
							<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-xeco.png" ></div>
							<div class="col-sm-8" id="content-list">
								<strong>Ô tô, xe máy</strong>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-10">
								<div class="list">									
									<ul>
										<li><button style="border:none;background-color:white;color:#337ab7" class="category_id2_" value="8">Xe mới</button></li>
										<li><button style="border:none;background-color:white;color:#337ab7" class="category_id2_" value="9">Xe cũ</button></li>										
									</ul>
								</div>
							</div>							
						</div>
					</div>
				</div><!--kết thúc div menu3-->

				<div class="menu4"style="cursor:pointer">	
					<div class="row" id="row-list-4">
						<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-thoitrang.png" ></div>
						<div class="col-sm-8" id="content-list">Thời trang</div>
						<div class="col-sm-2" id="content-list"><span class="glyphicon glyphicon-chevron-right"></span></div>
					</div>
					<div class="content-menu4">
						<div class="row">
							<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-thoitrang.png" ></div>
							<div class="col-sm-8" id="content-list">
								<strong>Thời trang nam nữ</strong>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-10">
								<div class="list">
									<ul>
										<li><button style="border:none;background-color:white;color:#337ab7" class="category_id2_" value="10">Thời trang nam</button></li>
										<li><button style="border:none;background-color:white;color:#337ab7" class="category_id2_" value="11">Thời trang nữ</button></li>										
									</ul>
								</div>
							</div>							
						</div>
					</div>
				</div><!--kết thúc div menu4-->

				<div class="menu5"style="cursor:pointer">
					<div class="row" id="row-list-5">						
						<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-nhavuon.png" ></div>
						<div class="col-sm-8" id="content-list">Nhà vườn</div>
						<div class="col-sm-2" id="content-list"><span class="glyphicon glyphicon-chevron-right"></span></div>
						
					</div>
					<div class="content-menu5">
						<div class="row">
							<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-nhavuon.png" ></div>
							<div class="col-sm-8" id="content-list"><strong>Nhà và vườn</strong></div>
						</div>
						<div class="row">
							<div class="col-sm-10">
								<div class="list">									
									<ul>										
										<li><button style="border:none;background-color:white;color:#337ab7" class="category_id2_" value="12">Đồ nội thất</button></li>
										<li><button style="border:none;background-color:white;color:#337ab7" class="category_id2_" value="13">Vườn/ Đồ ngoại thất</button></li>										
									</ul>
								</div>
							</div>							
						</div>
					</div>
				</div><!--kết thúc div menu5-->

				<div class="menu6"style="cursor:pointer">
					<div class="row" id="row-list-6">						
						<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-dienmay.png" ></div>
						<div class="col-sm-8" id="content-list">Điện máy</div>
						<div class="col-sm-2" id="content-list"><span class="glyphicon glyphicon-chevron-right"></span></div>						
					</div>
					<div class="content-menu6">
						<div class="row">
							<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-dienmay.png" ></div>
							<div class="col-sm-8" id="content-list">
								<strong>Điện máy</strong>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-10">
								<div class="list">									
									<ul>	
										<li><button style="border:none;background-color:white;color:#337ab7" class="category_id2_" value="14">Điện tử, kỹ thuật số</button></li>																			
										<li><button style="border:none;background-color:white;color:#337ab7" class="category_id2_" value="15">Điện lạnh, gia dụng</button></li>																			
										<li><button style="border:none;background-color:white;color:#337ab7" class="category_id2_" value="16">Máy tính, Laptop</button></li>																													
									</ul>
								</div>
							</div>							
						</div>
					</div>
				</div><!--kết thúc div menu6-->

				<div class="menu7"style="cursor:pointer">
					<div class="row" id="row-list-7">						
						<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-dienthoai.png" ></div>
						<div class="col-sm-8" id="content-list">Điện thoại, chợ sim</div>
						<div class="col-sm-2" id="content-list"><span class="glyphicon glyphicon-chevron-right"></span></div>						
					</div>
					<div class="content-menu7">
						<div class="row">
							<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-dienthoai.png" ></div>
							<div class="col-sm-8" id="content-list">
								<strong>Điện thoại, chợ sim</strong>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-10">
								<div class="list">									
									<ul>
										<li><button style="border:none;background-color:white;color:#337ab7" class="category_id2_" value="17">Điện thoại, máy tính bảng</button></li>
										<li><button style="border:none;background-color:white;color:#337ab7" class="category_id2_" value="18">Chợ SIM</button></li>																			
									</ul>
								</div>
							</div>							
						</div>
					</div>
				</div><!--kết thúc div menu7-->
				<div class="menu8"style="cursor:pointer">
					<div class="row" id="row-list-8">						
						<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-vieclam.png" ></div>
						<div class="col-sm-8" id="content-list">Việc làm</div>
						<div class="col-sm-2" id="content-list"><span class="glyphicon glyphicon-chevron-right"></span></div>						
					</div>
					<div class="content-menu8">
						<div class="row">
							<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-vieclam.png" ></div>
							<div class="col-sm-8" id="content-list">
								<strong>Việc làm</strong>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-10">
								<div class="list">
									<p></p>
									<ul>
										<li><button style="border:none;background-color:white;color:#337ab7" class="category_id2_" value="19">Lao động phổ thông</button></li>
										<li><button style="border:none;background-color:white;color:#337ab7" class="category_id2_" value="20">Lao động trí óc</button></li>										
									</ul>
								</div>
							</div>							
						</div>
					</div>
				</div><!--kết thúc div menu8-->

				<div class="menu9"style="cursor:pointer">
					<div class="row" id="row-list-9">						
						<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-dichvu.png" ></div>
						<div class="col-sm-8" id="content-list">Du lịch</div>
						<div class="col-sm-2" id="content-list"><span class="glyphicon glyphicon-chevron-right"></span></div>
						
					</div>
					<div class="content-menu9">
						<div class="row">
							<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-dichvu.png" ></div>
							<div class="col-sm-8" id="content-list">
								<strong>Du Lịch</strong>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-10">
								<div class="list">
									<ul>
										<li><button style="border:none;background-color:white;color:#337ab7" class="category_id2_" value="24">Tour du lịch</button></li>
										<li><button style="border:none;background-color:white;color:#337ab7" class="category_id2_" value="25">Vé máy bay/ Tàu xe</button></li>																						
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div><!--kết thúc div menu9-->					
	</div>
	
	<div class="col-sm-9">
		@yield("col_right")
	</div>				
</div>	

	
@endsection