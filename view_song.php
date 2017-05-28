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

    <script language="JavaScript" type="text/javascript">

function breakout_of_frame()
{

  if (top.location != location) {
    top.location.href = document.location.href ;
  }
}

</script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <table id="tableReport" class="table table-hover table-striped ">
                <tbody>
                    <?php

                $sql = "select count(id) as total from nghenhac where " . $qtype;
                $result = mysql_query($sql);
                $row = mysql_fetch_assoc($result);
                $total_records = $row['total'];


                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                $limit = 10;


                $total_page = ceil($total_records / $limit);

                if ($current_page > $total_page) {
                    $current_page = $total_page;
                } else if ($current_page < 1) {
                    $current_page = 1;
                }

                $start = ($current_page - 1) * $limit;

                $sql = "select * from nghenhac where " . $qtype . " order by id desc limit $start, $limit";
                $result = mysql_query($sql);
                ?>
                  <?php

                while ($row = mysql_fetch_assoc($result)) {
                    $id = $row['ID'];
                    $tenBaiHat = $row['TenBaiHat'];
                    $caSy = $row['CaSy'];
                    $luotNghe = $row['LuotNghe'];
                    $theLoai = $row['TheLoai'];
                    ?>                 
                    <tr class="media">
                        <td class="song_link media-body">
                            <a <?php echo "href='./?mod=listen&id=".$id."'"; ?> target="_top" ><h4 class="media-heading font-yellow text-bold hidden-xs"><?php echo "$tenBaiHat" ?></h4></a>
                            <span style="color: #666666">Ca sỹ: <span style="color: black"><?php echo " $caSy";  ?></span></span>
                            <span style="color: #666666"> • Thể Loại: <span style="color: black"><?php echo " $theLoai"; ?></span></span>
                            <span style="color: #666666"> • Lượt Nghe: <span style="color: black"><?php echo " $luotNghe" ?></span></span>

                        </td>       
                        </tr>
                        <?php } ?>
                </tbody>
            </table>

             <div class="pagination" style="margin-left: 40%">
                        <?php

                        if ($current_page > 1 && $total_page > 1) {
                            echo '<a href="view_song.php?type='.$type.'&page='. ($current_page - 1) . '"><b>Prev</b></a> | ';
                        }

                        for ($i = 1; $i <= $total_page; $i++) {

                            if ($i == $current_page) {
                                echo '<span>' . $i . '</span> | ';
                            } else {
                                echo '<a href="view_song.php?type='.$type.'&page=' . $i . '"><b>' . $i . '</b></a> | ';
                            }
                        }

                        if ($current_page < $total_page && $total_page > 1) {
                            echo '<a href="view_song.php?type='.$type.'&page=' . ($current_page + 1) . '"><b>Next</b></a> | ';
                        }
                        ?>
                </div>
        </div>
    </div>
</div>

</body>
</html>
</div>
