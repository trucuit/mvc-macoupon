<?php
//include 'E:/datxampp/htdocs/do-an/mvc-macoupon/application/module/default/models/MuasamModel.php';
$a   = new MuasamModel();
$arr = $a->dataLazada();

echo"<pre>";
print_r($arr);
echo "</pre>";

?>
<div class="container wrap-coupon ">
	
	
	<?php for($i=0;$i<count($arr);$i++){
		?>
		<div class="col-md-4 float-left mt-3">
			<!-- <a href="<?php echo $data[$i]["aff_link"];?>"> -->
				<div class="card card-height">
					<div class="card-block khung_khuyenmai">
						<h5 class="card-title ten_khuyenmai"><?php echo $arr[$i]["name"]; ?></h5>
						<img src="public/template/default/main/images/lazada1.png" alt="" class="image_lazada">
						<p class="card-text content_sale"><?php echo nl2br($arr[$i]["content"]);?></p>
						<p class="start-time">Ngày bắt đầu: <?php echo $arr[$i]["start_time"];?></p>
						<p class="end-time">Ngày kết thúc: <?php echo $arr[$i]["end_time"];?></p>
						
					</div>
					<div class="get_coupon" id_get="<?php echo $i;?>" >lấy coupon</div>
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
			<span><div class="contain_coupon"><?php echo $arr[0]['coupons'][0]['coupon_code'];?></div>
				<div class="copy_coupon">copy</div>
			</span>
			<div class="btn_golazada">Đến Lazada để sử dụng mã coupon</div>
		</div>
		
		
	</div>
	