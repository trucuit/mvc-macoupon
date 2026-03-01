<div id="detail">
	<h4><?php echo $travelItem['title'];?></h4>
	<p class="description">	<?php echo $travelItem['description'];?></p>
	<div class="banner no-full">
		<a href='https://pub.accesstrade.vn/deep_link/4649810820063061924?url=http%3A%2F%2Fwww.bookin.vn%2Fve-may-bay' target="_blank"> <img src='https://s3-ap-southeast-1.amazonaws.com/images.accesstrade.vn/fc490ca45c00b1249bbe3554a4fdf6fb/2881_320x100_20160607103912166.jpg'/> </a>
	</div>
	<ul class="list-unstyled">
		<li>
			<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;
			<strong>Sự hài lòng của khách hàng: </strong>Đội ngũ nhân viên tư vấn nhiệt tình – phản hồi nhanh chóng – tác phong chuyên nghiệp.
		</li>
		<li>
			<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;
			<strong>Nhiều ưu đãi đặc biệt,hấp dẫn: </strong>Luôn luôn khuyến mãi – sẵn sàng ưu đãi – quà tặng bất ngờ.
		</li>
		<li>
			<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;
			<strong>Đối tác hàng không uy tín: </strong>Đại lý cấp 1 của Vietjet Air, Jetstar Pacific và các hãng hàng không khác, Bookin mang đến mức giá ưu đãi dành cho khách hàng.
		</li>
		<li>
			<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;
			<strong>Thanh toán an toàn, linh hoạt: </strong>Hệ thống bảo mật quốc tế, mang lại sự tin tưởng và an tâm tuyệt đối.
		</li>
		<li>
			<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;
			<strong>Đặt vé nhanh chóng và dễ dàng: </strong>Giao diện đơn giản – nội dung đầy đủ – thao tác dễ dàng, chỉ mất 03 phút để hoàn thành đơn vé trên Bookin.vn.
		</li>
		<li>
			<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;
			<strong>Giữ chỗ tự động với API: </strong>Giữ chỗ ngay – tránh tăng giá – không lo hết vé.
		</li>
	</ul>
	
	<?php
	$xpath = Helper::pregDOM('http://www.bookin.vn/tour-du-lich');
	$name = $xpath->query('//div[@class="name"]/a/h2');
	$day = $xpath->query('//div[@class="name"]/span');
	$addressStart = $xpath->query('//div[@class="departure"]');
	$price = $xpath->query('//span[@class="price actual-price pull-right"]');
	$link = $xpath->query('//div[@class="col-lg-5 col-md-4 col-sm-4"]/a');
	
	for($i=0; $i < $name->length; $i++){
		?>
		<div class="coupondiv">
			<div class="promotiontype">
				<div class="promotag">
					<div class="promotagcont">
						<div class="saveamount"><img src="<?php echo $travelItem['logo']?>"></div>
						<div class="saleorcoupon">SALE</div>
					</div>
				</div>
				<div class="promotiondetails">
					<div class="coupontitle"> <strong><?php echo $name->item($i)->textContent ?> </strong></div>
					<div class="cpinfo">
						Thời gian:  <strong><?php echo trim($day->item($i)->textContent,"())") ?> </strong>
						<br>
						Nơi xuất phát:  <strong><?php echo $addressStart->item($i)->textContent ?> </strong>
						<br>
						Giá: <strong><?php echo $price->item($i)->textContent ?>đ</strong>
					</div>
				</div>
				<div class="cpbutton">
					<a href="<?php echo $url.urlencode($travelItem['domain'].$link->item($i)->getAttribute('href'))?>" class="xemngayz" target="_blank">XEM NGAY</a>
				</div>
			</div>
		</div>
		<?php }?>
	</div>
