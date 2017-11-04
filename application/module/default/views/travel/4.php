<div id="detail">
	<h4><?php echo $travelItem['title'];?></h4>
	<p class="description">	<?php echo $travelItem['description'];?></p>
	<div class="banner no-full">
		<a href='https://pub.accesstrade.vn/deep_link/4649810820063061924?url=https%3A%2F%2Fwww.gotadi.com%2F%3Faff%3DACCESSTRADE'> <img src='https://s3-ap-southeast-1.amazonaws.com/images.accesstrade.vn/28dd2c7955ce926456240b2ff0100bde/5803_tet-2018_320x100_20170929102830512.jpg'/>
		</a>
	</div>
	<h4>Tại sao nên chọn & sử dụng Dịch vụ của Gotadi.com?</h4>
	<ul class="list-unstyled">
		<li>
			<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;
			<strong>Cam kết giá luôn rẻ</strong>
		</li>
		<li>
			<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;
			<strong>3</strong> hãng hàng không nội địa.
		</li>
		<li>
			<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;
			<strong>900</strong> hãng hàng không quốc tế.
		</li>
		<li>
			<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;
			<strong> 400.000</strong> khách sạn trong &amp; ngoài nước
		</li>
		<li>
			<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;
			<strong>Dịch vụ khách hàng tận tình: </strong>
			Hỗ trợ và chăm sóc khách hàng (8h00 – 22h00 mỗi ngày).
		</li>
		<li>
			<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;
			<strong>Xuất hóa đơn giá trị gia tăng: </strong> Xuất hóa đơn GTGT cho mọi đơn hàng.
		</li>
	</ul>
	<?php
	$pattern = '#class="info".*href="(.*)".*class="title">(.*)<.*span>(.*)</div.*span>(.*)</div.*price">(.*)</span#ismU';
	$matches = Helper::pregMatchAll($pattern, 'https://www.gotadi.com/Tours.aspx');
	?>
	<?php foreach ($matches[0] as $key => $value){
		$s  = $matches[0][$key];
		$s = substr($s, strripos($s,'Tours'));
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
					<div class="coupontitle"><?php echo $matches[1][$key] ?></div>
					<div class="cpinfo">
						<?php echo $matches[2][$key] ?>
						<br>
						<?php echo $matches[3][$key] ?>
						Giá: <strong><?php echo $matches[4][$key] ?>đ</strong>
					</div>
				</div>
				<div class="cpbutton">
					<a href="<?php echo $url.urlencode($travelItem['domain'].$s)?>" class="xemngayz" target="_blank">XEM NGAY</a>
				</div>
			</div>
		</div>
		<?php }?>
	</div>