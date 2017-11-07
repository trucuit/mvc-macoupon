<?php 
$listItem   = empty($this->listItem) ? [] : $this->listItem;

// echo "<pre>";
// print_r($listItem );    
// echo "</pre>";
?>
<?php if(!empty($listItem)) {?>
<div class="container">
	<div class="row ">
		<?php foreach ($listItem['title'] as $key => $value): ?>
			<div class="col-md-4 col-sm-6 ">
				<a href="<?php if(isset($listItem['link'][$key])) echo URL_ACCESSTRADE."?url=".urlencode($listItem['link'][$key]) ?>" target="_blank">
					<div class="product-detail">
						<img  src="<?php if(isset($listItem['image'][$key])) echo $listItem['image'][$key] ?>" alt="Card image cap">
						<div>
							<h6><?php if(isset($listItem['title'][$key])) echo $listItem['title'][$key] ?></h6>
							<p class="price">
								<strike>
									<?php  if(isset($listItem['giacu'][$key])) {echo $listItem['giacu'][$key]; }
									?>
								</strike>
								<strong><?php if(isset($listItem['price'][$key])) echo $listItem['price'][$key] ?></strong>
							</p>
							<p class="time">
								<?php if(isset($listItem['time'][$key])) echo $listItem['time'][$key] ?>
							</p>
						</div>
					</div>
				</a>
			</div> 
		<?php endforeach ?>
	</div>
</div>
<?php } ?>
