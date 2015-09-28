@extends("main")

@section("title")

@endsection

@section("content")
<div class="row">

	<div class="col-sm-3" id="col-menu">			
			<div class="well well-sm" style="background-color: white"><h4><font face="octemberscript">Lựa chọn chuyên mục</font></h4></div>
				
				<div class="menu1">
					<div class="row" id="row-list-1">						
						<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-nhadat.png" ></div>
						<div class="col-sm-8" id="content-list"><a href="{{Asset("home/mua-ban-nha-dat")}}">Mua bán nhà, đất</a></div>
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
										<li><a href="{{Asset("home/mua-ban-nha-dat/1")}}">Nhà trong ngõ</a></li>
										<li><a href="{{Asset("home/mua-ban-nha-dat/2")}}">Căn hộ chung cư</a></li>
										<li><a href="{{Asset("home/mua-ban-nha-dat/3")}}">Nhà mặt phố</a></li>
										<li><a href="{{Asset("home/mua-ban-nha-dat/4")}}">Nhà tập thể</a></li>
										<li><a href="{{Asset("home/mua-ban-nha-dat/5")}}">Biệt thự</a></li>										
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div><!--kết thúc div menu1-->

				<div class="menu2">
					<div class="row" id="row-list-2">						
						<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-thuenha.png" ></div>
						<div class="col-sm-8" id="content-list"><a href="{{Asset("home/cho-thue-nha")}}">Thuê, cho thuê nhà</a></div>
						<div class="col-sm-2" id="content-list"><span class="glyphicon glyphicon-chevron-right"></span></div>
						</a>
					</div>
					<div class="content-menu2">
						<div class="row">
							<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-thuenha.png" ></div>
							<div class="col-sm-8" id="content-list">
								<strong>Thuê, cho thuê nhà</strong>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-8">
								<div class="list">									
									<ul>
										<li><a href="{{Asset("home/cho-thue-nha/6")}}">Nhà riêng/ nguyên căn</a></li>										
										<li><a href="{{Asset("home/cho-thue-nha/7")}}">Nhà trọ/ phòng trọ</a></li>										
									</ul>
								</div>
							</div>							
						</div>
					</div>
				</div><!--kết thúc div menu2-->

				<div class="menu3">
					<div class="row" id="row-list-3">
						<a href="">
						<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-xeco.png" ></div>
						<div class="col-sm-8" id="content-list"><a href="{{Asset("home/oto-xe-may")}}">Ô tô xe máy</a></div>
						<div class="col-sm-2" id="content-list"><span class="glyphicon glyphicon-chevron-right"></span></div>
						</a>
					</div>
					<div class="content-menu3">
						<div class="row">
							<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-xeco.png" ></div>
							<div class="col-sm-8" id="content-list">
								<strong>Ô tô, xe máy</strong>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="list">									
									<ul>
										<li><a href="{{Asset("home/oto-xe-may/8")}}">Xe mới</a></li>
										<li><a href="{{Asset("home/oto-xe-may/9")}}">Xe cũ</a></li>										
									</ul>
								</div>
							</div>							
						</div>
					</div>
				</div><!--kết thúc div menu3-->

				<div class="menu4">	
					<div class="row" id="row-list-4">
						<a href="">
						<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-thoitrang.png" ></div>
						<div class="col-sm-8" id="content-list"><a href="{{Asset("home/thoi-trang")}}">Thời trang</a></div>
						<div class="col-sm-2" id="content-list"><span class="glyphicon glyphicon-chevron-right"></span></div>
						</a>
					</div>
					<div class="content-menu4">
						<div class="row">
							<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-thoitrang.png" ></div>
							<div class="col-sm-8" id="content-list">
								<strong>Thời trang nam nữ</strong>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-8">
								<div class="list">
									<ul>
										<li><a href="{{Asset("home/thoi-trang/10")}}">Thời trang nam</a></li>
										<li><a href="{{Asset("home/thoi-trang/11")}}">Thời trang nữ</a></li>
									</ul>
								</div>
							</div>							
						</div>
					</div>
				</div><!--kết thúc div menu4-->

				<div class="menu5">
					<div class="row" id="row-list-5">						
						<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-nhavuon.png" ></div>
						<div class="col-sm-8" id="content-list"><a href="{{Asset("home/nha-vuon")}}">Nhà vườn</a></div>
						<div class="col-sm-2" id="content-list"><span class="glyphicon glyphicon-chevron-right"></span></div>
						
					</div>
					<div class="content-menu5">
						<div class="row">
							<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-nhavuon.png" ></div>
							<div class="col-sm-8" id="content-list"><strong>Nhà và vườn</strong></div>
						</div>
						<div class="row">
							<div class="col-sm-8">
								<div class="list">									
									<ul>										
										<li><a href="{{Asset("home/nha-vuon/12")}}">Đồ nội thất</li>
										<li><a href="{{Asset("home/nha-vuon/13")}}">Vườn/ Đồ ngoại thất</li>
									</ul>
								</div>
							</div>							
						</div>
					</div>
				</div><!--kết thúc div menu5-->

				<div class="menu6">
					<div class="row" id="row-list-6">						
						<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-dienmay.png" ></div>
						<div class="col-sm-8" id="content-list"><a href="{{Asset("home/dien-may")}}">Điện máy</a></div>
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
										<li><a href="{{Asset("home/dien-may/14")}}">Điện tử, kỹ thuật số</a></li>
										<li><a href="{{Asset("home/dien-may/15")}}">Điện lạnh, máy, gia dụng</a></li>
										<li><a href="{{Asset("home/dien-may/16")}}">Máy tính, Laptop</a></li>
									</ul>
								</div>
							</div>							
						</div>
					</div>
				</div><!--kết thúc div menu6-->

				<div class="menu7">
					<div class="row" id="row-list-7">						
						<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-dienthoai.png" ></div>
						<div class="col-sm-8" id="content-list"><a href="{{Asset("home/dt-sim")}}">Điện thoại, chợ sim</a></div>
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
										<li><a href="{{Asset("home/dt-sim/17")}}">Điện thoại, máy tính bảng</a></li>
										<li><a href="{{Asset("home/dt-sim/18")}}">Chợ SIM</a></li>										
									</ul>
								</div>
							</div>							
						</div>
					</div>
				</div><!--kết thúc div menu7-->
				<div class="menu8">
					<div class="row" id="row-list-8">						
						<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-vieclam.png" ></div>
						<div class="col-sm-8" id="content-list"><a href="{{Asset("home/viec-lam")}}">Việc làm</a></div>
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
										<li><a href="{{Asset("home/viec-lam/19")}}">Lao động phổ thông</a></li>
										<li><a href="{{Asset("home/viec-lam/20")}}">Lao động trí óc</a></li>
									</ul>
								</div>
							</div>							
						</div>
					</div>
				</div><!--kết thúc div menu8-->
				<div class="menu9">
					<div class="row" id="row-list-9">
						
						<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-dichvu.png" ></div>
						<div class="col-sm-8" id="content-list"><a href="{{Asset("home/dich-vu")}}">Du lịch</a></div>
						<div class="col-sm-2" id="content-list"><span class="glyphicon glyphicon-chevron-right"></span></div>
						
					</div>
					<div class="content-menu9">
						<div class="row">
							<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-dichvu.png" ></div>
							<div class="col-sm-8" id="content-list">
								<strong>Du lịch</strong>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-10">
								<div class="list">
									<ul>
										<li><a href="{{Asset("home/du-lich/24")}}">Tour du lịch</a></li>
										<li><a href="{{Asset("home/du-lich/25")}}">Vé máy bay/ Tàu xe</a></li>															
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="content-menu9">
						<div class="row">
							<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-dichvu.png" ></div>
							<div class="col-sm-8" id="content-list">
								<strong>Dịch vụ</strong>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-10">
								<div class="list">
									<ul>
										<li><a href="{{Asset("home/dich-vu/21")}}">Dịch vụ gia đình</a></li>
										<li><a href="{{Asset("home/dich-vu/22")}}">Dịch vụ văn phòng</a></li>
										<li><a href="{{Asset("home/dich-vu/23")}}">Dịch vụ sửa chữa</a></li>										
									</ul>
								</div>
							</div>
						</div>
					</div> -->
				</div><!--kết thúc div menu9-->			

				<!-- <div class="menu9">
					<div class="row" id="row-list-9">
						
						<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-dichvu.png" ></div>
						<div class="col-sm-8" id="content-list"><a href="{{Asset("home/du-lich")}}">Du lịch</a></div>
						<div class="col-sm-2" id="content-list"><span class="glyphicon glyphicon-chevron-right"></span></div>
						
					</div>
					<div class="content-menu9">
						<div class="row">
							<div class="col-sm-2" id="logo-list"><img src="{{Asset('assets/img/logo')}}/logo-dichvu.png" ></div>
							<div class="col-sm-8" id="content-list">
								<strong>Du lịch</strong>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-10">
								<div class="list">
									<ul>
										<li><a href="{{Asset("home/du-lich/24")}}">Tour du lịch</a></li>
										<li><a href="{{Asset("home/du-lich/25")}}">Vé máy bay/ Tàu xe</a></li>															
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