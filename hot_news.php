<?php
$sql = "select * from tinhot order by id desc limit 5";
$result = mysql_query($sql);
$i = 0;
?>
<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php
            while ($row = mysql_fetch_array($result)) {
                $id = $row['ID'];
                $anhDaiDien = $row['AnhDaiDien'];
                $tieuDe = $row['TieuDe'];
                $tomTat = $row['TomTat'];

                if ($i > 0) {
                    $class = 'class = "item"';
                } else {
                    $class = 'class = "item active"';
                }
                $i+= 1;
                ?>
                <div <?php echo $class ?>>
                    <a href="./?mod=tinhot&id=<?php echo $id ?>"><div class="thumb-slider" <?php echo "style=\"background-image: url('$anhDaiDien');\""; ?>></div></a>
                    <div class="carousel-caption">
                        <h4><a href="./?mod=tinhot&id=<?php echo $id ?>" style="color: gold"><b><?php echo $tieuDe ?></b></a></h4>
                        <p><?php echo $tomTat ?></p>
                    </div>
                </div><!-- End Item -->
            <?php } ?>

        </div><!-- End Carousel Inner -->


        <ul class="list-group col-sm-4">
            <?php
            $sql = "select * from tinhot order by id desc limit 5";
            $result = mysql_query($sql);
            $i = 0;
            while ($row = mysql_fetch_array($result)) {
                $id = $row['ID'];
                $anhDaiDien = $row['AnhDaiDien'];
                $tieuDe = $row['TieuDe'];
                $tomTat = $row['TomTat'];

                if ($i > 0) {
                    $class = 'class = "list-group-item "';
                } else {
                    $class = 'class = "list-group-item"';
                }
                ?>
                <li data-target="#myCarousel" data-slide-to="<?php echo $i ?>" <?php echo $class ?>><h4><?php echo $tieuDe ?></h4></li>
                <?php $i+= 1;
            } ?>
        </ul>

        <!-- Controls -->
        <div class="carousel-controls">
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>

    </div><!-- End Carousel -->
    <hr>
</div>