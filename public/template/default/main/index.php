
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="<?php echo  $this->_dirImg ?>/logon-ico.ico">

	<?php
	echo $this->_title;
	echo $this->_metaHTTP;
	echo $this->_metaName;
	echo $this->_fileCSS;
	echo $this->_fileJS;

	$imageURL = $this->_dirImg;
	?>

	<!-- <meta http-equiv="refresh" content="3" > -->
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
</head>
<body>
	<!--header-->
	<?php include_once 'html/header.php' ?>
	<!--//header-->

	<!--banner-->
	<?php 
	if($this->_fileView =='index/index')
		include_once 'html/banner.php' 
	?>
	<!--//banner-->

	<!--content-->
	<div id="content">
				<!-- <div class="col-md-8">
					<?php// include_once MODULE_PATH . DS . $this->_moduleName . DS . 'views' . DS . $this->_fileView . '.php'; ?>
				</div>
				<div class="col-md-4">
					<?php// include_once 'html/support.php' ?>
				</div>  -->
				<?php include_once MODULE_PATH . DS . $this->_moduleName . DS . 'views' . DS . $this->_fileView . '.php'; ?>
			</div>
			<!--//content-->

	<!--footer-->
	<?php include_once 'html/footer.php' ?>
	<!--//footer-->
</body>
</html>
