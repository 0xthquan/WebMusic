<?php
    $topic = isset($_GET['topic']) ? $_GET['topic'] : '';

    switch($topic)
    {
        case "nhacviet":
            $qtopic = "ChuDe like '%Việt Nam%'";
            break;
        case "nhacchaua":
            $qtopic = "ChuDe like '%Châu Á%'";
            break;
        case "nhacaumy":
            $qtopic = "ChuDe like '%Âu Mỹ%'";
            break;
        default: $qtopic = '1'; 
    }
?>

<div class="col-md-8"> 
<hr>
    <div class="panel-body">
        <div class="tab-content">
            <div class="tab-pane fade in active" id="tab1primary">

                <?php

                $sql = "select count(id) as total from tintuc where ".$qtopic;
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

                $sql = "select * from tintuc where ".$qtopic." limit $start, $limit";
                $result = mysql_query($sql);
                ?>
                <div>
                <?php
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
                                    
                                </div>
                                <?php echo substr($noiDung, 0, 300) . "..."; ?>
                            </div>
                        </div>
                        <hr>
                        <?php } ?>
                    </div>
                    <div class="pagination" style="margin-left: 40%">
                        <?php

                        if ($current_page > 1 && $total_page > 1) {
                            echo '<a href="./?mod=news&topic='.$topic.'&page=' . ($current_page - 1) . '"><b>Prev</b></a> | ';
                        }

                        for ($i = 1; $i <= $total_page; $i++) {

                            if ($i == $current_page) {
                                echo '<span><b>' . $i . '</b></span> | ';
                            } else {
                                echo '<a href="./?mod=news&topic='.$topic.'&page=' . $i . '"><b>' . $i . '</b></a> | ';
                            }
                        }

                        if ($current_page < $total_page && $total_page > 1) {
                            echo '<a href="./?mod=news&topic='.$topic.'&page=' . ($current_page + 1) . '"><b>Next</b></a> | ';
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>
