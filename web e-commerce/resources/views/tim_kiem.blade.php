@extends("menu_left_1")

@section("title")
Tìm kiếm
@endsection

@section("content")
<div class="col-sm-11">
	<div class="row">
		<div class="col-sm-3" style="border-right: 2px dotted   gray;">
			<div class="row" >
			@if(!empty($result))
				<h4><?php echo $count;?></h4>
				<p>Kết quả với từ khóa  <?php echo $key;?></p>
			@else
				<h4>0!</h4>
				<p>Kết quả với từ khóa  "<?php echo $key;?>"</p>
			@endif

			</div>
			<div class="row" style="background: #f7f7f7;padding:5px 3px;">
				<label><?php echo $kind;?></label>
			</div>
		</div>
				
		<div class="col-sm-9">
				@if(!empty($result))
					<table class="table table-striped">
						<tr>	
							<th>
								Tiêu đề
							</th>
							<th>
								Tỉnh/ Thành phố
							</th>
							<th>
								Ngày
							</th>
						</tr>	
					<?php foreach ($result as $ky => $value) :?>
						<tr>
							<td>
								<?php echo $value["title"];?>
							</td>
							<td>
								<?php echo $value["location"];?>
							</td>
							<td>
								<?php echo $value["created_at"];?>
							</td>
						</tr>
					<?php endforeach;?>
				
					</table>
				@else
				@endif

		</div>
	</div>
</div>

@endsection