<?php
$key1 = isset($_GET['key']) ? $_GET['key'] : '';

$key1 = isset($_POST['key'])?  $_POST['key'] : $key1;
$key = "like '%$key1%'";
?>

<div class="container" style="display: block;">
    <h2>Kết quả tìm kiếm</h2>
    <H3>Từ khóa: <?php echo $key1 ?></H3>
    <div class="row">
    	<?php

                $sql1 = "select count(id) as total from tintuc where TieuDe " . $key;
                $sql2 = "select count(id) as total from nhacmoi where TenBaiHat " . $key;
                $sql3 = "select count(id) as total from nghenhac where TenBaiHat " . $key;

                $result = mysql_query($sql1);
                $row = mysql_fetch_assoc($result);

                $max = $row['total'];

                $result = mysql_query($sql2);
                $row = mysql_fetch_assoc($result);

                ($max > $row['total'])? $max = $max : $max = $row['total'];

                $result = mysql_query($sql3);
                $row = mysql_fetch_assoc($result);

                ($max > $row['total'])? $max = $max : $max = $row['total'];

                $total_records = $max;

                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                $limit = 10;

                $total_page = ceil($total_records / $limit);

                if ($current_page > $total_page) {
                    $current_page = $total_page;
                } else if ($current_page < 1) {
                    $current_page = 1;
                }

                $start = ($current_page - 1) * $limit;

        ?>
        <div class="col-md-4" style="margin-right: 20px">
            <h4 style="background-color:springgreen;" ><b><i>Tin tức</i></b></h4>
            <table id="tableReport" class="table table-hover table-striped ">
                <tbody>
            <?php
            $sql = "select * from tintuc where TieuDe " . $key . " order by id desc limit $start, $limit";
            $result = mysql_query($sql);
            if($result === FALSE ){
                echo "Không có kết quả phù hợp";

            } else {
            while ($row = mysql_fetch_array($result)) {
                $id = $row['ID'];
                $tieuDe = $row['TieuDe'];
                $tomTat = $row['TomTat'];
                $noiDung = $row['NoiDung'];
                ?>
                <tr class="media" style="margin-bottom: 0px">
                    <td class="media-body" style="padding-bottom: 0px">
                       <a <?php echo "href='./?mod=tintuc&id=$id'"; ?> ><h5 class="media-heading"><?php echo "$tieuDe"; ?></h5></a>
                    </td>       
                </tr>    
            <?php }} ?>
            </tbody>
            </table>
        </div>

        <div class="col-md-4" style="margin-right: 20px">
        	<h4 style="background-color:springgreen;" ><b><i>Tác phẩm âm nhạc</i></b></h4>
        	<table id="tableReport" class="table table-hover table-striped ">
                <tbody>
            <?php
            $sql = "select * from nhacmoi where TenBaiHat " . $key . " order by id desc limit $start, $limit";
            $result = mysql_query($sql);
            if($result === FALSE ){
                echo "Không có kết quả phù hợp";

            } else {
                while ($row = mysql_fetch_array($result)) {
                $id = $row['ID'];
                $tieuDe = $row['TenBaiHat'];
                $tomTat = $row['TomTat'];
                $noiDung = $row['NoiDung'];
                ?>
                <tr class="media" style="margin-bottom: 0px">
                    <td class="media-body" style="padding-bottom: 0px">
                       <a <?php echo "href='./?mod=nhacmoi&id=$id'"; ?> ><h5 class="media-heading"><?php echo "$tieuDe"; ?></h5></a>
                    </td>       
                </tr>    
            <?php }} ?>
            </tbody>
            </table>
        </div>
        <div class="col-md-3" style="margin-right: 20px">
        	<h4 style="background-color:springgreen;" ><b><i>Bài Hát</i></b></h4>
        	<table id="tableReport" class="table table-hover table-striped ">
                <tbody>
            <?php
            $sql = "select * from nghenhac where TenBaiHat " . $key . " order by id desc limit $start, $limit";
            $result = mysql_query($sql);
            if($result === FALSE ){
                echo "Không có kết quả phù hợp";

            } else {
            while ($row = mysql_fetch_array($result)) {
                $id = $row['ID'];
                $tieuDe = $row['TenBaiHat'];
                $caSy = $row['CaSy'];
                ?> 
                <tr class="media" style="margin-bottom: 0px">
                    <td class="media-body" style="padding-bottom: 0px">
                        <a <?php echo "href='./?mod=listen&id=$id'"; ?> ><h5 class="media-heading" style="font-size: 15px"><?php echo "$tieuDe"; ?></h5></a>
                        <p style="font-size: 12px"><?php echo " $caSy";  ?></p>
                    </td>       
                </tr>    
            <?php }} ?>
            	</tbody>
            </table>
        </div>
        <div class="pagination" style="margin-left: 40%">
                        <?php

                        if ($current_page > 1 && $total_page > 1) {
                            echo '<a href="./?mod=search&key='.$key1.'&page=' . ($current_page - 1) . '">Prev</a> | ';
                        }

                        for ($i = 1; $i <= $total_page; $i++) {

                            if ($i == $current_page) {
                                echo '<span>' . $i . '</span> | ';
                            } else {
                                echo '<a href="./?mod=search&key='.$key1.'&page=' . $i . '">' . $i . '</a> | ';
                            }
                        }

                        if ($current_page < $total_page && $total_page > 1) {
                            echo '<a href="./?mod=search&key='.$key1.'&page=' . ($current_page + 1) . '">Next</a> | ';
                        }
                        ?>
                </div>
    </div>
</div>