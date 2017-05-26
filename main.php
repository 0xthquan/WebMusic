<?php
	$mod = isset($_GET['mod']) ? $_GET['mod'] : '';

	switch($mod)
	{
		case "news":
			include("news.php");
			break;
		case "new-songs":
			include("new_songs.php");
			break;
		case "listen":
			include("listen.php");
			break;	
		case "list-songs":
			include("list_songs.php");
			break;
		case "search":
			include("search.php");
			break;	
		case "tinhot":
			include("read.php");
			break;
		case "nhacmoi":
			include("read.php");
			break;	
		case "tintuc":
			include("read.php");
			break;						
		default: include("home.php");
	}
?>