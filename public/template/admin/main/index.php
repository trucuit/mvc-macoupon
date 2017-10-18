<!DOCTYPE html>
<html>
<head>
	<?php

	echo $this->_title;
	echo $this->_metaHTTP;
	echo $this->_metaName;
	echo $this->_fileCSS;
	echo $this->_fileJS;

	$imageURL = $this->_dirImg;
	?>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300i,400,500,700,700i" rel="stylesheet">
</head>
<body>
	<!--header-->
	<?php include_once 'html/header.php' ?>
	<!--//header-->

	<!--content-->
	
	<div id="admin">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3 menu">
					<?php include_once MODULE_PATH . DS . $this->_moduleName . DS . 'views/html/menu.php';?>
				</div>
				
				<div class="col-md-9 view-product">
					<?php include_once MODULE_PATH . DS . $this->_moduleName . DS . 'views' . DS . $this->_fileView . '.php'; ?>
				</div>
			</div>
		</div>
	</div>

	<!--//content-->

	<!--footer-->
	<?php include_once 'html/footer.php' ?>
	<!--//footer-->
</body>
</html>
