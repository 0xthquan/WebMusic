<?php
$topic = isset($_GET['topic']) ? $_GET['topic'] : '';

switch ($topic) {
    case "nhacviet":
        $qtopic = "TheLoai like '%Việt Nam%'";
        break;
    case "nhacchaua":
        $qtopic = "TheLoai like '%Châu Á%'";
        break;
    case "nhacaumy":
        $qtopic = "TheLoai like '%Âu Mỹ%'";
        break;
    default: $qtopic = '1';
}
?>


    <div class="col-md-8">

        <div class="row">
            <hr>
            <section id="pinBoot">
                <?php

                $sql = "select count(id) as total from nhacmoi where " . $qtopic;
                $result = mysql_query($sql);
                $row = mysql_fetch_assoc($result);
                $total_records = $row['total'];

                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                $limit = 6;

                $total_page = ceil($total_records / $limit);

                if ($current_page > $total_page) {
                    $current_page = $total_page;
                } else if ($current_page < 1) {
                    $current_page = 1;
                }

                $start = ($current_page - 1) * $limit;

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

                        <?php
                        $temp1 = trim(strstr($noiDung, "</p>"), "</p>");
                        $temp2 = trim(strstr($temp1, "</p>"), "</p>");
                        echo substr($noiDung, 0, strpos($noiDung, "</p>")) . substr($temp1, 0, strpos($temp1, "</p>")) . substr($temp2, 0, strpos($temp2, "</p>"));
                        ?>
                        <br>
                        <br>
                        <a href="./?mod=nhacmoi&id=<?php echo $id ?>" style="float: right;">Xem thêm</a>

                    </article>
                    <hr>
                <?php } ?>
</div>
            </section>


            <hr>

            <div class="pagination" style="margin-left: 40%">
                <?php

                if ($current_page > 1 && $total_page > 1) {
                    echo '<a href="./?mod=new-songs&topic=' . $topic . '&page=' . ($current_page - 1) . '"><b>Prev</b></a> | ';
                }

                for ($i = 1; $i <= $total_page; $i++) {

                    if ($i == $current_page) {
                        echo '<span>' . $i . '</span> | ';
                    } else {
                        echo '<a href="./?mod=new-songs&topic=' . $topic . '&page=' . $i . '"><b>' . $i . '</b></a> | ';
                    }
                }

                if ($current_page < $total_page && $total_page > 1) {
                    echo '<a href="./?mod=new-songs&topic=' . $topic . '&page=' . ($current_page + 1) . '"><b>Next</b></a> | ';
                }
                ?>
            </div>
        </div>

    </div>
