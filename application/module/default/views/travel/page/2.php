<div id="detail">
	<h4><?php echo $travelItem['title'];?></h4>
	<p class="description">	<?php echo $travelItem['description'];?></p>
	<div class="banner">
		<a href='https://pub.accesstrade.vn/deep_link/4649810820063061924?url=https%3A%2F%2Ftravel.com.vn%2F'> <img src='https://s3-ap-southeast-1.amazonaws.com/images.accesstrade.vn/757b505cfd34c64c85ca5b5690ee5293/6408_850x120,_20170320035701038.jpg'/> </a>
	</div>
	<h4>VÌ SAO CHỌN TRAVEL.COM.VN</h4>
	<ul class="list-unstyled">
		<li>
			<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;MẠNG BÁN TOUR SỐ 1 VIỆT NAM
			Ứng dụng công nghệ mới nhất
		</li>
		<li>
			<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;THANH TOÁN AN TOÀN VÀ LINH HOẠT
			Liên kết với các tổ chức tài chính
		</li>
		<li>
			<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;LUÔN CÓ MỨC GIÁ TỐT NHẤT
			Bảo đảm giá tốt
		</li>
		<li>
			<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;SẢN PHẨM ĐA DẠNG, CHẤT LƯỢNG
			Đạt chất lượng tốt nhất
		</li>
		<li>
			<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;&nbsp;ĐẶT TOUR DỄ DÀNG VÀ NHANH CHÓNG
			Đặt tour chỉ với 3 bước
		</li>
	</ul>
	<h4>Các tour TRAVEL.COM.VN giờ chót</h4>
	<p>Travel cung cấp rất nhiều tour từ trong nước ra ngoài nước với nhiều khuyến mãi hấp dẫn</p>
</div>
<div class="coupondiv">
	<div class="promotiontype">
		<div class="promotag">
			<div class="promotagcont">
				<div class="saveamount">30%</div>
				<div class="saleorcoupon"> CODE</div>
			</div>
		</div>
		<div class="promotiondetails">
			<div class="coupontitle"> Mã giảm giá 50% (Tối đa 50.000đ x 4 chuyến GrabCar)</div>
			<div class="cpinfo"> <strong>Hạn dùng:</strong> 31/10/2017<br> Áp dụng tại Hà Nội. Số lượng mã có hạn mỗi ngày.</div>
		</div>
		<div class="cpbutton">
			<div class="copyma" >
				<div class="coupon-code">XANHLA</div>
				<div>COPY MÃ</div>
			</div>
		</div>
	</div>
</div>
<div class="coupondiv">
	<div class="promotiontype">
		<div class="promotag">
			<div class="promotagcont">
				<div class="saveamount"> 50%</div>
				<div class="saleorcoupon"> CODE</div>
			</div>
		</div>
		<div class="promotiondetails">
			<div class="coupontitle"> Mã giảm giá 50% (Tối đa 50.000đ x 4 chuyến GrabCar)</div>
			<div class="cpinfo"> <strong>Hạn dùng:</strong> 31/10/2017<br> Áp dụng tại Hà Nội. Số lượng mã có hạn mỗi ngày.</div>
		</div>
		<div class="cpbutton">
			<div class="xemngayz">XEM NGAY</div>
		</div>
	</div>
</div>
<div class="coupondiv">
	<div class="promotiontype">
		<div class="promotag">
			<div class="promotagcont">
				<div class="saveamount"><i class="fa fa-ticket" aria-hidden="true"></i></div>
				<div class="saleorcoupon">SALE</div>
			</div>
		</div>
		<div class="promotiondetails">
			<div class="coupontitle"> TOUR GIẢM GIÁ SỐC</div>
			<div class="cpinfo"> <strong>Khue</strong> 31/10/2017<br> Áp dụng tại Hà Nội. Số lượng mã có hạn mỗi ngày.</div>
		</div>
		<div class="cpbutton">
			<div class="xemngayz">XEM NGAY</div>
		</div>
	</div>
</div>
<?php
$pattern = '#class="item-tour-main">.*giacu">(.*)<.*giamoi">(.*)<.*title="(.*)".*tour-info">(.*)\|#ismU';
$matches = Helper::pregMatchAll($pattern, 'https://travel.com.vn/du-lich-gio-chot.aspx');
?>
<?php foreach ($matches[0] as $key => $value):
if(!empty($value)){ ?>
<div class="coupondiv">
	<div class="promotiontype">
		<div class="promotag">
			<div class="promotagcont">
				<div class="saveamount"><img src="<?php echo $travelItem['logo']?>"></div>
				<div class="saleorcoupon">SALE</div>
			</div>
		</div>
		<div class="promotiondetails">
			<div class="coupontitle"><?php echo $matches[2][$key] ?></div>
			<div class="cpinfo"> <strong>Hạn chót: </strong> <?php echo $matches[3][$key] ?><br><strong>Giá: </strong> <strike><?php echo $matches[0][$key] ?></strike>&nbsp;<?php echo $matches[1][$key] ?></div>
		</div>
		<div class="cpbutton">
			<a href="<?php echo $url.urlencode($travelItem['domain']) ?>" class="xemngayz" target="_blank">XEM NGAY</a>
		</div>
	</div>
</div>
<?php 
}
endforeach ?>