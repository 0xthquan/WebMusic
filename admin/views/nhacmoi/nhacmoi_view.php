
<div class="content">
  <div class="header">
    <h1 class="page-title">Quản lý Nhạc mới</h1>
  </div>

<?php
  if (isset($_GET['tenbaihat'])) {
      $tenbaihat=$_GET['tenbaihat'];
  } else {
      $tenbaihat="";
  }
?>

     <form class="form-inline" action="nhacmoi.php" method="GET">
        <div class="form-group">
         <input type="" class="form-control" id="" placeholder="Nhập Tên bài hát..." name="tenbaihat" value="<?php echo $tenbaihat ?>">
        </div>
        <button type="submit" class="btn btn-default">Tìm</button>
     </form>
     <br>

  <div class="main-content">
    <div class="panel panel-default">
     <table class="table" border="1" width="100%">
       <thead>
         <tr class="info">
          <th style="text-align:center">ID</th>
          <th style="text-align:center">Tên bài hát</th>
          <th style="text-align:center">Tác giả</th>
          <th style="text-align:center">Thể loại</th>
          <th style="text-align:center">Nội dung</th>
          <th style="text-align:center">Ảnh</th>
          <th style="text-align:center">Chỉnh sửa</th>
        </tr>
      </thead>
      <tbody>
      <?php while ($row=mysql_fetch_row($dsnm)) { ?>
        <tr>
          <td style="text-align:center;padding-top:25px"><?php echo $row[0] ?></td>
          <td style="text-align:center;padding-top:25px"><?php echo $row[1] ?></td>
          <td style="text-align:center;padding-top:25px"><?php echo $row[3] ?></td>
          <td style="text-align:center;padding-top:25px"><?php echo $row[4] ?></td>
          <td style="text-align:center;padding-top:25px"><a href="?controller=nhacmoi&action=read&id=<?php echo $row[0] ?>">Xem</a></td>
          <td style="text-align:center"><img src="<?php echo '../'.$row[9] ?>" alt="hình ảnh" width="50px" height="50px" /></td>
          <td style="text-align:center;padding-top:25px">
            <a href="?controller=nhacmoi&action=edit&id=<?php echo $row[0] ?>"><i class="fa fa-pencil"></i></a>
            <i class="fa fa-trash-o" onClick="confirmDelete('nhacmoi',<?php echo $row[0] ?>)"></i>
          </td>
        </tr>
      <?php } ?>
      </tbody>
     </table>
    </div>

    <!-- Start include footer here -->
    <?php   try { require 'views/footer.html';
    } catch (ErrorException $ex) {
    echo "Unable to load configuration file.";
    } ?>
    <!-- End include footer here -->

  </div>
</div>


