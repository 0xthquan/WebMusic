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
<!--
function breakout_of_frame()
{
  // see https://www.thesitewizard.com/archive/framebreak.shtml
  // for an explanation of this script and how to use it on your
  // own website
  if (top.location != location) {
    top.location.href = document.location.href ;
  }
}
-->
</script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <table id="tableReport" class="table table-hover table-striped ">
                <tbody>
                    <?php
                // PHẦN XỬ LÝ PHP
                // BƯỚC 2: TÌM TỔNG SỐ RECORDS
                $sql = "select count(id) as total from nghenhac where " . $qtype;
                $result = mysql_query($sql);
                $row = mysql_fetch_assoc($result);
                $total_records = $row['total'];

                // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                $limit = 10;

                // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
                // tổng số trang
                $total_page = ceil($total_records / $limit);

                // Giới hạn current_page trong khoảng 1 đến total_page
                if ($current_page > $total_page) {
                    $current_page = $total_page;
                } else if ($current_page < 1) {
                    $current_page = 1;
                }

                // Tìm Start
                $start = ($current_page - 1) * $limit;

                // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
                // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
                $sql = "select * from nghenhac where " . $qtype . " order by id desc limit $start, $limit";
                $result = mysql_query($sql);
                ?>
                  <?php
                // PHẦN HIỂN THỊ TIN TỨC
                // BƯỚC 6: HIỂN THỊ DANH SÁCH TIN TỨC
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
                        // PHẦN HIỂN THỊ PHÂN TRANG
                        // BƯỚC 7: HIỂN THỊ PHÂN TRANG
                        // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                        if ($current_page > 1 && $total_page > 1) {
                            echo '<a href="view_song.php?type='.$type.'&page='. ($current_page - 1) . '"><b>Prev</b></a> | ';
                        }

                        // Lặp khoảng giữa
                        for ($i = 1; $i <= $total_page; $i++) {
                            // Nếu là trang hiện tại thì hiển thị thẻ span
                            // ngược lại hiển thị thẻ a
                            if ($i == $current_page) {
                                echo '<span>' . $i . '</span> | ';
                            } else {
                                echo '<a href="view_song.php?type='.$type.'&page=' . $i . '"><b>' . $i . '</b></a> | ';
                            }
                        }

                        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
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
