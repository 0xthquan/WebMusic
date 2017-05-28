<?php
    $table = isset($_GET['mod']) ? $_GET['mod'] : '';
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $sql = "select * from $table where ID = '$id'";
    $result = mysql_query($sql); 
 ?>
 <div class="col-md-8 col-md-offset-2" style="margin-top: 20px">
        <div class="row">
            <hr>
            <section id="pinBoot">
                
                <div>
                <?php
                if ($row = mysql_fetch_array($result)) {
                    $id = $row['ID'];
                    $anhDaiDien = $row['AnhDaiDien'];
                    $tieuDe = empty($row['TenBaiHat'])? $row['TieuDe']: $row['TenBaiHat'];
                    $tomTat = $row['TomTat'];
                    $noiDung = $row['NoiDung'];
                    ?>     
                    <article class="white-panel">
                        <h3 class="media-heading"><b><?php echo "$tieuDe"; ?></b></h3>
                        <br>
                        <br>
                        <br>

                        <?php
                            echo $noiDung;
                        ?>
                        <br>

                    </article>
                    <hr>
                <?php } ?>
                </div>
            </section>
            <hr>            
        </div>
    </div>
