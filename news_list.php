<?php
    $topic = isset($_GET['topic']) ? $_GET['topic'] : '';

    switch($topic)
    {
        case "nhacviet":
            $qtopic = "ChuDe like '%Nhạc Việt%'";
            break;
        case "nhacchaua":
            $qtopic = "ChuDe like '%Nhạc Châu Á%'";
            break;
        case "nhacaumy":
            $qtopic = "ChuDe like '%Nhạc Âu Mỹ%'";
            break;
        default: $qtopic = '1'; 
    }
?>

<div class="col-md-8" style="margin-left: 70px; margin-top: 20px"> 
    <div class="panel-body">
        <div class="tab-content">
            <div class="tab-pane fade in active" id="tab1primary">

                <?php
                // PHẦN XỬ LÝ PHP
                // BƯỚC 2: TÌM TỔNG SỐ RECORDS
                $sql = "select count(id) as total from tintuc where ".$qtopic;
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
                $sql = "select * from tintuc where ".$qtopic." limit $start, $limit";
                $result = mysql_query($sql);
                ?>
                <div>
                <?php
                // PHẦN HIỂN THỊ TIN TỨC
                // BƯỚC 6: HIỂN THỊ DANH SÁCH TIN TỨC
                while ($row = mysql_fetch_assoc($result)) {
                    $id = $row['ID'];
                    $anhDaiDien = $row['AnhDaiDien'];
                    $tieuDe = $row['TieuDe'];
                    $tomTat = $row['TomTat'];
                    $noiDung = $row['NoiDung'];
                    ?>          
                        <div class="news-list">
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <div class="thumb media-object show" <?php echo "style=\"background-image: url('$anhDaiDien');\""; ?> ></div>
                                </a>
                                <div class="title_link media-body">
                                    <a <?php echo "href='./?mod=tintuc&id=$id'"; ?> ><h4 class="media-heading"><?php echo "$tieuDe"; ?></h4></a>
                                    <p><?php echo substr($noiDung, 0, 350) . "..."; ?></p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <?php } ?>
                    </div>
                    <div class="pagination" style="margin-left: 40%">
                        <?php
                        // PHẦN HIỂN THỊ PHÂN TRANG
                        // BƯỚC 7: HIỂN THỊ PHÂN TRANG
                        // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                        if ($current_page > 1 && $total_page > 1) {
                            echo '<a href="./?mod=news&topic='.$topic.'&page=' . ($current_page - 1) . '"><b>Prev</b></a> | ';
                        }

                        // Lặp khoảng giữa
                        for ($i = 1; $i <= $total_page; $i++) {
                            // Nếu là trang hiện tại thì hiển thị thẻ span
                            // ngược lại hiển thị thẻ a
                            if ($i == $current_page) {
                                echo '<span><b>' . $i . '</b></span> | ';
                            } else {
                                echo '<a href="./?mod=news&topic='.$topic.'&page=' . $i . '"><b>' . $i . '</b></a> | ';
                            }
                        }

                        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                        if ($current_page < $total_page && $total_page > 1) {
                            echo '<a href="./?mod=news&topic='.$topic.'&page=' . ($current_page + 1) . '"><b>Next</b></a> | ';
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>
