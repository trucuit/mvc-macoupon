<?php 
$listCampaigns = $this->listCampaigns->data;
$listTravel    = $this->listTravel;
$listTravlSuccessfulDoamin = [];
foreach ($listCampaigns as $value) {
	if($value->approval == 'successful' && $value->category == 'TRAVEL and LEISURE'){
		$listTravlSuccessfulDoamin[] = substr($value->url, 0, strripos($value->url,'/',10));
	}
}

?>

<div class="row">
	<div class="col-sm-6">
		<table class="table">
			<thead>
				<tr>
					<th>Domain</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($listTravlSuccessfulDoamin as $value) {?>
				<tr>
					<th scope="row"><?php echo $value ?></th>
				</tr>		
				<?php } ?>
			</tbody>
		</table>
	</div>
	<div class="col-sm-6">
		<table class="table">
			<thead>
				<tr>
					<th>Domain</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($listTravel as $value) {?>
				<tr>
					<th scope="row"><?php echo $value['domain']  ?></th>
				</tr>		
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

<table class="table">
	<thead>
		<tr>
			<th>STT</th>
			<th>Domain</th>
			<th>Title</th>
			<th  class="logo">Logo</th>
			<th class="banner">Banner</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($listTravel as $key => $value) {?>
		<tr>
			<th scope="row"><?php echo $key +1  ?></th>
			<td><?php echo $value['domain'] ?></td>
			<td><?php echo $value['title'] ?></td>
			<td><a href=""><img src="<?php echo $value['logo'] ?>"></a></td>
			<td><?php echo $value['banner'] ?></td>
			<td><?php echo $value['description'] ?></td>
		</tr>		
		<?php } ?>
	</tbody>
</table>