<?php

// $a=new MuasamModel();
// $arr=$a->dataLazada();
$data_edit=$this->arr;
echo"<pre>";
print_r($data_edit);
echo "</pre>";
?>
<div class="container wrap-coupon ">
	
	
	<?php for($i=0;$i<count($data_edit);$i++){
		?>
		<div class="col-md-4 float-left mt-3">
			<!-- <a href="<?php echo $data[$i]["aff_link"];?>"> -->
				<div class="card card-height">
					<div class="card-block khung_khuyenmai">
						<h5 class="card-title ten_khuyenmai"><?php echo $data_edit[$i]["name"]; ?></h5>
						<img src="public/template/default/main/images/lazada1.png" alt="" class="image_lazada">
						<p class="card-text content_sale"><?php echo nl2br($data_edit[$i]["content"]);?></p>
						<p class="start-time">Ngày bắt đầu: <?php echo $data_edit[$i]["start_time"];?></p>
						<p class="end-time">Ngày kết thúc: <?php echo $data_edit[$i]["end_time"];?></p>
						
					</div>
					<!-- <div class="get_coupon" id_get="<?php echo URL::createLink('deafult','muasam','a')?>" >lấy coupon</div> -->
					<div class="get_coupon" onclick="pupUp(<?php echo "'".URL::createLink('deafult','muasam','a')."'"?>)">lấy coupon</div>
				</div>
				<!-- </a> -->
			</div>
			<?php
		}
		?>

	</div>
	
	<div class="modal_lazada" id="mymodal">
		<img src="public/template/default/main/images/lazada1.png" alt="" class="image_show_lazada">
		<div class="show_coupon">
			
			<span class="close">&times;</span>
			<span><div class="contain_coupon"><?php echo $data_edit[0]['coupons'][0]['coupon_code'];?></div>
				<div class="copy_coupon">copy</div>
			</span>
			<div class="btn_golazada">Đến Lazada để sử dụng mã coupon</div>
		</div>
		
		
	</div>
	