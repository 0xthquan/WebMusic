<?php
$topic = isset($_GET['topic']) ? $_GET['topic'] : '';

switch ($topic) {
    case "nhacviet":
        $qtopic = "TheLoai like '%Nhạc Việt%'";
        break;
    case "nhacchaua":
        $qtopic = "TheLoai like '%Nhạc Châu Á%'";
        break;
    case "nhacaumy":
        $qtopic = "TheLoai like '%Nhạc Âu Mỹ%'";
        break;
    default: $qtopic = '1';
}
?>


    <div class="col-md-8" style="margin-left: 70px; margin-top: 20px">
        <div class="row">
            <hr>
            <section id="pinBoot">
                <?php
                // PHẦN XỬ LÝ PHP
                // BƯỚC 2: TÌM TỔNG SỐ RECORDS
                $sql = "select count(id) as total from nhacmoi where " . $qtopic;
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
                $sql = "select * from nhacmoi where " . $qtopic . " order by id desc limit $start, $limit";
                $result = mysql_query($sql);
                ?>
                <div>
                <?php
                while ($row = mysql_fetch_array($result)) {
                    $id = $row['ID'];
                    $anhDaiDien = $row['AnhDaiDien'];
                    $tieuDe = $row['TenBaiHat'];
                    $tomTat = $row['TomTat'];
                    $noiDung = $row['NoiDung'];
                    ?>     
                    <article class="white-panel">
                        <h3 class="media-heading"><a href="./?mod=nhacmoi&id=<?php echo $id ?>"><b><?php echo "$tieuDe"; ?></b></a></h3>
                        <br>
                        <br>
                        <a href="./?mod=nhacmoi&id=<?php echo $id ?>"><img class="img-song" <?php echo "src='$anhDaiDien'"; ?>  alt=""></a>

                        <br>
                        <br>
                        <br>

                        <?php
                        $temp1 = trim(strstr($noiDung, "</p>"), "</p>");
                        $temp2 = trim(strstr($temp1, "</p>"), "</p>");
                        echo substr($noiDung, 0, strpos($noiDung, "</p>")) . substr($temp1, 0, strpos($temp1, "</p>")) . substr($temp2, 0, strpos($temp2, "</p>"));
                        ?>
                        <br>
                        <a href="./?mod=nhacmoi&id=<?php echo $id ?>">Xem thêm</a>

                    </article>
                    <hr>
                <?php } ?>
</div>
            </section>


            <hr>

            <div class="pagination" style="margin-left: 40%">
                <?php
                // PHẦN HIỂN THỊ PHÂN TRANG
                // BƯỚC 7: HIỂN THỊ PHÂN TRANG
                // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                if ($current_page > 1 && $total_page > 1) {
                    echo '<a href="./?mod=new-songs&topic=' . $topic . '&page=' . ($current_page - 1) . '"><b>Prev</b></a> | ';
                }

                // Lặp khoảng giữa
                for ($i = 1; $i <= $total_page; $i++) {
                    // Nếu là trang hiện tại thì hiển thị thẻ span
                    // ngược lại hiển thị thẻ a
                    if ($i == $current_page) {
                        echo '<span>' . $i . '</span> | ';
                    } else {
                        echo '<a href="./?mod=new-songs&topic=' . $topic . '&page=' . $i . '"><b>' . $i . '</b></a> | ';
                    }
                }

                // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                if ($current_page < $total_page && $total_page > 1) {
                    echo '<a href="./?mod=new-songs&topic=' . $topic . '&page=' . ($current_page + 1) . '"><b>Next</b></a> | ';
                }
                ?>
            </div>
        </div>

    </div>
