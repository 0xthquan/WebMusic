<?php
    require("config.php");
?>

<?php
$type = isset($_GET['type']) ? $_GET['type'] : '';

switch ($type) {
    case "vietnam":
        $qtype = "TheLoai like '%Việt Nam%'";
        break;
    case "chaua":
        $qtype = "TheLoai like '%Châu Á%'";
        break;
    case "aumy":
        $qtype = "TheLoai like '%Âu Mỹ%'";
        break;
    default: $qtype = '1';
}
?>
<!DOCTYPE html>
<html>
<head>
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
<?php 
	$id = isset($_GET['id']) ? $_GET['id'] : '';
	$sql = "select * from nghenhac where ID = '$id'";
  	$result = mysql_query($sql); 
	if ($row = mysql_fetch_array($result)) {
        $id = $row['ID'];
        $tenBaiHat = $row['TenBaiHat'];
        $loiBaiHat = $row['LoiBaiHat'];
        $caSy = $row['CaSy'];
        $theLoai = $row['TheLoai'];
        $luotNghe = $row['LuotNghe'];
        $source = $row['DuongDan'];
    }
?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-offset-1 col-sm-4">
        <h3 style="text-align: center;"><b><?php echo $tenBaiHat ?></b></h3>
        <h4 style="text-align: center;"><?php echo $caSy ?></h4>
			<div class="progress-radial progress">
				<div class="overlay">

					<input id="source" <?php echo "value='$source'" ?>  hidden="hidden" />
					<img class="img-responsive img-circle" src="libs/audioplayer/img/music_default.jpg" alt="">
					<div class="controls">
							<span class="glyphicon glyphicon-volume-up" id="mute" data-toggle="audioplayer" data-icon="muted" data-active="false"></span>
						<span class="glyphicon glyphicon-volume-off hide" id="muted" data-toggle="audioplayer" data-icon="mute" data-active="false"></span>
    					
						<span class="glyphicon glyphicon-play" id="play" data-toggle="audioplayer" data-icon="play"></span>
						<span class="glyphicon glyphicon-pause" id="pause" data-toggle="audioplayer" data-icon="pause"></span>
						<span class="glyphicon glyphicon-stop" id="stop" data-toggle="audioplayer" data-icon="stop"></span>
					</div>
					<div class="clearfix"></div>
				</div>
			</div> 
		</div>

        <div class="col-xs-12 col-sm-offset-2 col-sm-4" style="margin-top: 17px">
            <h4 style="text-align: center;"><b>Lời Bài hát: <?php echo $tenBaiHat ?> - <?php echo $caSy ?></b></h4>
            <hr>
            <div class="scroll scroll2">
                <p class="lyric"><?php echo $loiBaiHat ?></p>
            </div>
            <br>
        </div>

        
	</div>

</div>
