<div id="detail">
	<h4><?php echo $travelItem['title'];?></h4>
	<p class="description">	<?php echo $travelItem['description'];?></p>
	<div class="banner">
		<a href='https://pub.accesstrade.vn/deep_link/4649810820063061924?url=https%3A%2F%2Fwww.ivivu.com%2F' target="_blank"> <img src='http://images.accesstrade.vn.s3.amazonaws.com/14bfa6bb14875e45bba028a21ed38046/1495_BANNER-gia-tot-nhat-(600x150).jpg'/> </a>
	</div>

	<?php
	$pattern = '#cardItem.*href="(.*)".*<span class="cardItemTourName">(.*)<.*</i>(.*)<.*glyphicon-calendar"></i>(.*)<.*class="price vcolor-info">(.*)<#ismU';
	$matches = Helper::pregMatchAll($pattern, 'https://www.ivivu.com/du-lich/');

	?>

	<?php foreach ($matches[0] as $key => $value){
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
					<div class="coupontitle"> <strong><?php echo $matches[1][$key] ?> </strong></div>
					<div class="cpinfo">
						Thời gian:  <strong><?php echo $matches[2][$key] ?> </strong>
						<br>
						Khuyến mãi:  <strong><?php echo $matches[3][$key] ?> </strong>
						<br>
						Giá: <strong><?php echo $matches[4][$key] ?>đ</strong>
					</div>
				</div>
				<div class="cpbutton">
					<a href="<?php echo $url.urlencode($travelItem['domain'].$matches[0][$key])?>" class="xemngayz" target="_blank">XEM NGAY</a>
				</div>
			</div>
		</div>
		<?php }?>
</div>
