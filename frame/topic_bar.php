
<?php $mod = isset($_GET['mod']) ? $_GET['mod'] : ''; ?>

<div class="col-md-3" style="padding-right: 40px">
    <p class="lead">Chủ đề</p>
    <div class="list-group">
        <a  class="list-group-item home" <?php echo "href='./?mod=".$mod."&topic='" ?> >Tất cả</a>
        <a  class="list-group-item home" <?php echo "href='./?mod=".$mod."&topic=nhacviet'" ?> >Nhạc Việt</a>
        <a  class="list-group-item home" <?php echo "href='./?mod=".$mod."&topic=nhacchaua'" ?> >Nhạc Châu Á</a>
        <a  class="list-group-item home" <?php echo "href='./?mod=".$mod."&topic=nhacaumy'" ?> >Nhạc Âu Mỹ</a>
    </div>
</div>
