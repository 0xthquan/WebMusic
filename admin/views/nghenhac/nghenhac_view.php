
<div class="content">
  <div class="header">
    <h1 class="page-title">Quản lý Nghe nhạc</h1>
  </div>

<?php
  if (isset($_GET['tenbaihat'])) {
      $tenbaihat=$_GET['tenbaihat'];
  } else {
      $tenbaihat="";
  }
?>

     <form class="form-inline" action="nghenhac.php" method="GET">
        <div class="form-group">
         <input type="" class="form-control" id="" placeholder="Nhập Tên bài hát" name="tenbaihat" value="<?php echo $tenbaihat ?>">
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
          <th style="text-align:center">Lời</th>
          <th style="text-align:center">Ca sỹ</th>
          <th style="text-align:center">Thể loại</th>
          <th style="text-align:center">Đường dẫn</th>
          <th style="text-align:center">Số lượt nghe</th>
          <th style="text-align:center">Chỉnh sửa</th>
        </tr>
      </thead>
      <tbody>
      <?php while ($row=mysql_fetch_row($dsnn)) { ?>
        <tr>
          <td style="text-align:center"><?php echo $row[0] ?></td>
          <td style="text-align:center"><?php echo $row[1] ?></td>
          <td style="text-align:center"><a href="?controller=nghenhac&action=read&id=<?php echo $row[0] ?>">Xem</a></td>
          <td style="text-align:center"><?php echo $row[3] ?></td>
          <td style="text-align:center"><?php echo $row[5] ?></td>
          <td style="text-align:center"><?php echo $row[6] ?></td>
          <td style="text-align:center"><?php echo $row[7] ?></td>
          <td style="text-align:center">
            <a href="?controller=nghenhac&action=edit&id=<?php echo $row[0] ?>"><i class="fa fa-pencil"></i></a>
            <i class="fa fa-trash-o" onClick="confirmDelete('nghenhac',<?php echo $row[0] ?>)"></i>
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


