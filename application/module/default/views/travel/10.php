<div id="detail">
	<h4><?php echo $travelItem['title'];?></h4>
	<p class="description">	<?php echo $travelItem['description'];?></p>
	<div class="banner">
		<a href='https://pub.accesstrade.vn/deep_link/4649810820063061924?url=https%3A%2F%2Fwww.fiditour.com%2F' target="_blank"> <img src='https://s3-ap-southeast-1.amazonaws.com/images.accesstrade.vn/e3796ae838835da0b6f6ea37bcf8bcb7/7644_3087adac97995ef96350b8eca1a5103c_20171013102036322.png'/> </a>
	</div>

	<?php
	$pattern = '#class="tour_hot_phu".*alt="(.*)".*alt="may bay">(.*)<.*class="hot_gia">(.*)<.*class="hot_gia2">(.*)</div#ismU';
	$matches = Helper::pregMatchAll($pattern, 'https://www.fiditour.com/');	
	?>
	<?php foreach ($matches as $key => $value){ 
		if(!empty($value)){
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
						<div class="coupontitle"><?php echo $matches[0][$key] ?></div>
						<div class="cpinfo">
							<strong>Ngày khởi hành: </strong>
							<?php echo $matches[1][$key] ?><br>
							<strong>Giá: </strong>
							<strike><?php echo $matches[2][$key] ?></strike>&nbsp;<?php echo $matches[3][$key] ?>
						</div>
					</div>
					<div class="cpbutton">
						<a href="<?php echo $url.urlencode($travelItem['domain']) ?>" class="xemngayz" target="_blank">XEM NGAY</a>
					</div>
				</div>
			</div>
			<?php }
		} ?>
	</div>