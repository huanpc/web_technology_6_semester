@extends('menu_left_new_post')

@section("title")
Them bai dang moi
@endsection

@section("col_right")						
		<div class="col-sm-6">
			<div class="them-bai">
			
			<form class="form-horizontal" action="" method="POST" id="form-create" enctype=multipart/form-data >
				  	<input type="hidden" name="_token" value="{{ csrf_token() }}">				  	
				  	<input type="hidden" name="category_id2" id="category_id2" value="">
				  	<input type="hidden" name="priority"  value="0">						  			  	
				  	<div class="form-group" style="margin-left:auto;margin-right:auto;width:40%;">
				  		<h4 id="error" class="label label-warning" style="font-size:17px;">Hãy chọn chuyên mục trước khi đăng bài!</h4>	
				  	</div>
				  	<div class="form-group" style="margin-left:auto;margin-right:auto;width:40%;">
				  		<h4 id="headTitle" class="label label-success" style="font-size:17px;"></h4>	
				  	</div>
				  	<div class="form-group">				  		
						<label class="col-sm-2 control-label">Tiêu để</label>
					    <div class="col-sm-5">
					     	<input type="text" name="title" class="form-control" placeholder="Tiêu đề" maxlength="100" required>
					    </div>
				  	</div>
				  	<div class="form-group">
						<label class="col-sm-2 control-label">Nội dung</label>
					    <div class="col-sm-5">
					     	<textarea name="description" class="form-control" id="area1"></textarea>
					    </div>
				  	</div>
				  	<div class="form-group">
						<label class="col-sm-2 control-label">Giá</label>
					    <div class="col-sm-5">
					     	<input type="number" name="price"class="form-control" placeholder="Giá tiền" required>
					    </div>
				  	</div>
				  	<div class="form-group">
						<label class="col-sm-2 control-label">Điện thoại</label>
					    <div class="col-sm-5">
					     	<input type="number" name="phone" class="form-control"placeholder="Điện thoại" maxlength="13" required>
					    </div>
				  	</div>
				  	<div class="form-group">
						<label class="col-sm-2 control-label">Nơi rao</label>
					    <div class="col-sm-5">
					     	<input type="text" name="address"class="form-control"placeholder="Nơi rao" maxlength="32" required>
					    </div>
				  	</div>
				  	<div class="form-group">
						<label class="col-sm-2 control-label">Tỉnh, thành phố</label>
					    <div class="col-sm-5">
					     	<select name="location" style="font-size:14px;" required>
											<option value="Toan quoc" >Toàn quốc</option>
											<option value="Ha noi" >Hà Nội</option>											
											<option value="Hai phong">Hải Phòng</option>
											<option value="Da nag">Đà Nẵng</option>									
											<option value="Ho chi minh">Tp Hồ Chí Minh</option>									
							</select>
					    </div>
				  	</div>				  	
				  	<div class="form-group">
				  		<label class="col-sm-2 control-label">Picture</label>
				  		<div class="col-sm-5">
					     	<!-- <textarea name="pic" class="form-control" id="area2"></textarea> -->
					     	<input type="file" name="image"class="form-control"placeholder="Hình ảnh" maxlength="100" required>
					    </div>
				  	</div>				  					  	
				  	<div class="form-group">
				    	<div class="col-sm-offset-2 col-sm-10">
				      		<button type="submit" name="submit" class="btn btn-primary">Thêm bài</button>
				      		<button type="reset" class="btn btn-primary">Hủy biểu mẫu</button>
				    	</div>
				  	</div>
				</form>
			</div>
		</div>

			
			<script type="text/javascript" charset="utf-8" async defer>
				// $(document).ready(function() {
				// 		$(".nhap-thong-tin").click(function(event) {
				// 			 Act on the event 
				// 			$(".thong-tin-quy-dinh").slideToggle(400);
				// 		});
				// 	});		
			</script>
			<script src="{{Asset("assets/js/nicEdit.js")}}" type="text/javascript"></script>
			<script type="text/javascript">
				bkLib.onDomLoaded(function() {
					new nicEditor({maxHeight:180,externalCSS : 'adminstyle.css',buttonList:['bold','italic','underline','left','center','right',
						'justify','ol','ul','fontSize','fontFamily','fontFormat','indent','outdent','link','unlink','forecolor',
						'bgcolor']}).panelInstance('area1');
					// new nicEditor({maxHeight:180,buttonList:['upload']}).panelInstance('area2');
				});
		
			$(function(){		
				var a;	
				var b;	
				$(".category_id2_").click(function(){	
					a =$(this).val();					
					b =$(this).text();
					$("#category_id2").val(a);					
					$("#error").hide();					
					$("#headTitle").html("Bạn đang đăng bài vào chuyên mục: <strong>"+b+"</strong>");

				});				
				$("#form-create").on('submit',function(){
					c = $("#category_id2").val();	
					if(c=="")
					{	alert("Bạn chưa chọn mục đăng!");
										return false;
									}
				});			

			// $("#form-create").validate({
			// 	rules:{
			// 		category_id2:{required:true}										
			// 	},
			// 	messages:{		
			// 		category_id2:{
			// 			required:"Bạn chưa chọn mục đăng!"						
						
			// 		}					
					
			// 	}
			//  });
			});
			</script>	
		
			

@endsection