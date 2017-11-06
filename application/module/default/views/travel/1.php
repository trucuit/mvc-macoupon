<?php
$listTravel = $this->listTravel;
$listItem   = empty($this->listItem) ? [] : $this->listItem;
// echo "<pre>";
// print_r($listItem);    
// echo "</pre>";
?>
<div class="logo-item">
	<!-- <div class="container-fluid"> -->
		<div class="row">
			<?php foreach ($listTravel as $value): 
			$link = URL::createLink('default','travel','ajaxTravel',['id'=>Helper::cutCharacter($value['domain'],'/','.')]);
			?>
			<div class="card">
				<div class="card-block">
					<div class="logo-product">
						<a href="#" title="<?php echo $value['domain'] ?>" onclick="selectTravel(<?php echo "'".$link ."'"?>)">
							<img src="<?php echo  $value['logo']?>" class="card-img-top">
						</a>
					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
	<!-- </div> -->
</div>
<div class="w-100"></div>
<?php if(!empty($listItem)) {?>
<div class="product-item">
	<div class="container">
		<div class="row ">
			<?php foreach ($listItem['title'] as $key => $value): ?>
				<div class="col-md-4 col-sm-6 ">
					<div class="product-detail">
						<img  src="<?php echo $listItem['link'][$key] ?>" alt="Card image cap">
						<div>
							<h6><?php echo $listItem['title'][$key] ?></h6>
							<p class="price">
								<strike>
									<?php  if(isset($listItem['giacu'][$key])) {echo $listItem['giacu'][$key]; }
									?>
								</strike>
								<strong><?php echo $listItem['giamoi'][$key] ?></strong>
							</p>
							<p class="price-product">
								<?php echo $listItem['time'][$key] ?>
							</p>
						</div>
					</div>
				</div> 
			<?php endforeach ?>
		</div>
	</div>
</div>
<?php } ?>
<!-- echo mb_substr($listItem['title'][$key], 0, mb_stripos($listItem['title'][$key], ' ', 40)). ' ...'  -->