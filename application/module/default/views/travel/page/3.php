<div id="detail">
	<h4><?php echo $travelItem['title'];?></h4>
	<p class="description">	<?php echo $travelItem['description'];?></p>
	<div class="banner">
		<a href='https://pub.accesstrade.vn/deep_link/4649810820063061924?url=http%3A%2F%2Fdivui.com%2F'> <img src='https://s3-ap-southeast-1.amazonaws.com/images.accesstrade.vn/84d9ee44e457ddef7f2c4f25dc8fa865/5727_DV-AT-Banner-Blog-600x150_20161212044827641.jpg'/> </a>	
	</div>
	<h4>Lý do nên đặt vé tại divui.com?</h4>
	<ul class="list-unstyled">
		<li>
			<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;
			Hoạt động du lịch đặc sắc nhất
		</li>
		<li>
			<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;
			Hơn 500 hoạt động khắp Đông Nam Á từ những nhà cung cấp tốt nhất.		
		</li>
		<li>
			<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;
			Cam kết giá tốt nhất
		</li>
		<li>
			<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;
			Tiết kiệm từ 10%-50% so với mua vé trực tiếp!
		</li>
		<li>
			<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;
			Tiện lợi tối đa
		</li>
		<li>
			<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;
			Không lo hết chỗ, không xếp hàng mua vé, đưa đón tận nơi.	
		</li>
	</ul>
	<?php
	$xpath = Helper::pregDOM('http://divui.com');
	$name   = $xpath->query('//div[@class="image-box-label-title"]');
	$travel = $xpath->query('//div[@class="image-box-counter-title"]');	
	
	?>
	
	<?php for($i=0; $i < $name->length; $i++){ ?>
		<div class="coupondiv">
			<div class="promotiontype">
				<div class="promotag">
					<div class="promotagcont">
						<div class="saveamount"><img src="<?php echo $travelItem['logo']?>"></div>
						<div class="saleorcoupon">SALE</div>
					</div>
				</div>
				<div class="promotiondetails">
					<div class="coupontitle"><strong>Địa điểm: </strong><?php echo $name[$i]->textContent ?></div>
					<div class="cpinfo">
						Đặt vé hằng ngày - Nhận vé trong vòng 24h </br>
						<strong>Hiện có: <?php echo $travel[$i]->textContent ?></strong>
					</div>
				</div>
				<div class="cpbutton">
					<a href="<?php echo $url.urlencode($travelItem['domain'])?>" class="xemngayz" target="_blank">XEM NGAY</a>
				</div>
			</div>
		</div>
		<?php }?>
		<!-- <div class="image-box-caption">
			<div class="image-box-label">
				<div class="image-box-label-title">Hồ Chí Minh</div>
			</div>
			<div class="image-box-counter">
				<div class="image-box-counter-title"> 14 hoạt động du lịch</div>
			</div>
		</div> -->
	</div>


