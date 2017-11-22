<?php

// $a=new MuasamModel();
// $arr=$a->dataLazada();
$data_edit=$this->arr;
$data_edit1=$this->arr1;
$count1=count($data_edit);
$sumCount=count($data_edit)+count($data_edit1);
// echo"<pre>";
// print_r($data_edit1);
// echo "</pre>";
?>
<div class="container wrap-coupon ">
	
	
	<?php for($i=0;$i<count($data_edit);$i++){
		$pos=mb_strpos($data_edit[$i]["content"]," ",30);
		?>
		<div class="col-md-4 float-left mt-3">
			<!-- <a href="<?php echo $data[$i]["aff_link"];?>"> -->
				<div class="card card-height ">
					<div class="card-block khung_khuyenmai">
						<h5 class="card-title ten_khuyenmai"><?php echo $data_edit[$i]["name"]; ?></h5>
						<img src="public/template/default/main/images/lazada1.png" alt="" class="image_lazada">
						
						<p class="card-text content_sale" ><?php echo nl2br(mb_substr($data_edit[$i]["content"],0,$pos));?>
							<span class="content_sale<?php echo $i;?> same_content" ><?php echo nl2br(mb_substr( $data_edit[$i]["content"],$pos));?>
								
							</span>
							<span class="chitiet" setid="<?php echo $i;?>">
								<span class="xemthem<?php echo $i;?> xem_them">...Xem thêm</span>
							</span>
						</p>
						<p class="start-time">Ngày bắt đầu: <?php echo $data_edit[$i]["start_time"];?></p>
						<p class="end-time">Ngày kết thúc: <?php echo $data_edit[$i]["end_time"];?></p>
						
					</div>
					<!-- <div class="get_coupon" id_get="<?php echo URL::createLink('default','muasam','a')?>" >lấy coupon</div> -->
					<div class="get_coupon" id_get="<?php echo $i;?>" onclick="pupUp(<?php echo "'".URL::createLink('default','shopping','ajaxLazada')."'"?>,<?php echo $i;?>)">Lấy Coupon</div>
				</div>
				<!-- </a> -->
			</div>
			<?php
		}
		for($i=0;$i<count($data_edit1);$i++){
			$vt=mb_strpos($data_edit1[$i]["content"]," ",50);
			?>
			
			<div class="col-md-4 float-left mt-3">
				<!-- <a href="<?php echo $data[$i]["aff_link"];?>"> -->
					<div class="card card-height">
						<div class="card-block khung_khuyenmai">
							<h5 class="card-title ten_khuyenmai"><?php echo $data_edit1[$i]["name"]; ?></h5>
							<img src="public/template/default/main/images/lazada1.png" alt="" class="image_lazada">

							<p class="card-text content_sale" ><?php echo nl2br(mb_substr($data_edit1[$i]["content"],0,$vt));?>
								<span class="content_sale<?php echo $i+$count1;?> same_content" ><?php echo nl2br(mb_substr( $data_edit1[$i]["content"],$vt));?></span>
								<span class="chitiet" setid="<?php echo $i+$count1;?>">
									<span class="xemthem<?php echo $i+$count1;?> xem_them">...Xem thêm</span>
									
								</span>
							</p>
							<p class="start-time">Ngày bắt đầu: <?php echo $data_edit1[$i]["start_time"];?></p>
							<p class="end-time">Ngày kết thúc: <?php echo $data_edit1[$i]["end_time"];?></p>

						</div>
						<div  ><a class="go_lazada" target="_blank" href="<?php echo $data_edit1[$i]["aff_link"]?>">Đến Lazada</a></div>
					</div>
				</div>
				<?php
			}
			?>

		</div>

		<div class="modal_lazada" id="mymodal">
			<img src="public/template/default/main/images/logo.png" alt="" class="image_logo">
			<div class="show_coupon">

				<div class="close">&times;</div>
				<img src="public/template/default/main/images/lazada1.png" alt="" class="image_show_lazada">
				<div class="copy_coupon"></div>

				<div><a class="btn_golazada" target="_blank" href="">Đến Lazada để sử dụng mã coupon</a></div>
			</div>


		</div>
