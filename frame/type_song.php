<!DOCTYPE html>
<html>
<head>
	<link href="../libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../libs/audioplayer/css/style.css" rel="stylesheet">
	<link href="../css/mystyle.css" rel="stylesheet">
	<link href="../css/slider.css" rel="stylesheet">

	<script src="../libs/jquery-1.11.1.min.js"></script>
	<script src="../libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="../libs/audioplayer/js/audioplayer-script.js"></script>
	<script src="../js/myscript.js" type="text/javascript"/></script>
	<script src="../js/slider.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div id="cssmenu">
            <ul class="type">
             <li class="active"><a href="../view_song.php?type=1" target="view_song">Tất cả</a></li>
             <li><a href="../view_song.php?type=vietnam" target="view_song">Việt Nam</a></li>
             <li><a href="../view_song.php?type=chaua" target="view_song">Châu Á</a></li>
             <li><a href="../view_song.php?type=aumy" target="view_song">Âu Mỹ</a></li>
            </ul>
        </div>
    </div>
</div>

<script>
    $(".type li").on("click", function() {
      $(".type li").removeClass("active");
      $(this).addClass("active");
    });

</script>
</body>
</html>