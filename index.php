<?php
	require("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>
	<title>Trang Web gioi thieu am nhac</title>
	<link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="libs/audioplayer/css/style.css" rel="stylesheet">
	<link href="css/mystyle.css" rel="stylesheet">
	<link href="css/slider.css" rel="stylesheet">

	<script src="libs/jquery-1.11.1.min.js"></script>
	<script src="libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="libs/audioplayer/js/audioplayer-script.js"></script>
	<script src="js/myscript.js" type="text/javascript"/></script>
	<script src="js/slider.js"></script>
	
</head>
<body >
	<div class="top-frame" >
		<div class="search-frame">
			<img src="res/images/images.jpg" width="100%" height="200px">
		</div>
		<div class="menu-frame">
			<?php include("frame/menu-top.php");?>
		</div>
	</div>

	<div class="main-frame">
		<?php require ("main.php");?>
	</div>

</body>
</html>