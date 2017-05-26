<div class="col-md-7" style="margin-left: 70px; margin-top: 20px">
    <h4 class="cont-title"><span>Tin mới</span></h4>
    <section id="blog-section" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <?php
                        $sql = "select * from tintuc order by id desc limit 4";
                        $result = mysql_query($sql);
                        while ($row = mysql_fetch_array($result)) {
                            $id = $row['ID'];
                            $anhDaiDien = $row['AnhDaiDien'];
                            $tieuDe = $row['TieuDe'];
                            $tomTat = $row['TomTat'];
                            ?>
                            <div class="col-lg-6 col-md-6 ">
                                <aside>
                                    <div class="thumbnail">
                                        <div class="thumb img-responsive" <?php echo "style=\"background-image: url('$anhDaiDien');\""; ?> ></div>
                                        <div class="title_link content-title">
                                            <div class="title_link text-center">
                                                <h4><b><a href=""><?php echo "$tieuDe"; ?></a></b></h4>
                                            </div>
                                        </div>
                                        <hr class="line">
                                        <p><?php echo "$tomTat"; ?></p>
                                    </div>
                                </aside>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
