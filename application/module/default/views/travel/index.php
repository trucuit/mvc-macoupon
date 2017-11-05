<?php 
$listTravel = $this->listTravel;
$arrOpen = [6,9];
?>
<div class="travel">
	<?php foreach ($listTravel as $value) {
		if(in_array($value['id'],$arrOpen)){
			$link = URL_ACCESSTRADE . '?url='. urlencode($value['domain']);
		}else{
			$link = URL::createLink('default','travel','detail',['id'=>$value['id']]);
		}
		?>
		<div class="product">
			<div class="row">
				<div class="col-md-4 img-coupon">
					<?php echo $value['banner'] ?>
				</div>
				<div class="col-md-8 info-coupon">
					<h5 class="title">

						<a href="<?php echo $link ?>" target="_blank"><?php echo $value['title'] ?></a></h5>
						<?php 
						$link = mb_substr($value['banner'], 9, (mb_stripos($value['banner'],"'",20)) - 9);
						echo '<a href="'.$link.'" target="_blank">'.$value['domain'].'</a>' 
						?>
						<p>
							<?php 
							$description = mb_substr($value['description'], 0, mb_stripos($value['description'],' ',150));
							$description .= '<a href=""> [... read more ...]</a>';
							echo $description;
							?>
						</p>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>

 

 <!-- dad -->