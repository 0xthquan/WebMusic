<div class="col-md-4">
    <div class="box3 w_3" style="margin-top: 82px; background-color: white">
        <h4 style="text-align: center"><b>Bài Hát HOT</b></h4>
        <hr>
        <div class="album" style="padding: 10px 10px 0 10px;">
            <?php
            $sql = "select * from nghenhac order by id desc limit 10";
            $result = mysql_query($sql);
                $i = 0;
                while ($row = mysql_fetch_array($result)) {
                    $i+=1;
                    ?>
                    <div class="top_mp3" style="margin-right: 0 !important;"> 
                    <?php if ($i > 3) echo "<div class='x_1 margin-right: 0 !important;' style='background: #999;'>";
                    else echo "<div class='x_1 margin-right: 0 !important;'>"; ?>
                        <?php echo $i; ?></div> 
                    <div class="x_2"> 
                        <p class="song">
                        	<?php $id = $row['ID'] ?>
                            <a class="song_a" <?php echo "href='./?mod=listen&id=".$id."'"; ?> >
                            	<strong><?php echo $row['TenBaiHat']; ?></strong>
                            </a>
                        </p> 
                        <p class="singer"> 
                            <a href="#"><?php echo $row['CaSy']; ?></a>
                       	</p> 
                    </div> 
                    <div class="clr"></div> 
                </div> 
                <?php
            }
        ?> 
    </div>

</div>