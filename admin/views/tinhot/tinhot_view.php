
<div class="content">
  <div class="header">
    <h1 class="page-title">Quản lý Tin HOT</h1>
  </div>

<?php
  if (isset($_GET['tieude'])) {
      $tieude=$_GET['tieude'];
  } else {
      $tieude="";
  }
?>

     <form class="form-inline" action="tinhot.php" method="GET">
        <div class="form-group">
         <input type="" class="form-control" placeholder="Nhập Tiêu đề..." name="tieude" value="<?php echo $tieude ?>">
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
          <th style="text-align:center">Tiêu đề</th>
          <th style="text-align:center">Nội dung</th>
          <th style="text-align:center">Tóm tắt</th>
          <th style="text-align:center">Chủ đề</th>
          <th style="text-align:center">Ảnh</th>
          <th style="text-align:center">Chỉnh sửa</th>
        </tr>
      </thead>
      <tbody>
      <?php while ($row=mysql_fetch_row($dsth)) { ?>
       <tr>
        <td style="text-align:center;padding-top:25px"><?php echo $row[0] ?></td>
        <td style="text-align:center;padding-top:25px"><?php echo $row[1] ?></td>
        <td style="text-align:center;padding-top:25px"><a href="?controller=tinhot&action=read&id=<?php echo $row[0] ?>">Xem</a></td>
        <td style="text-align:center;padding-top:25px"><a href="" data-toggle="tooltip_xemtomtat" title="<?php echo $row[3] ?>">Xem</a></td>
        <td style="text-align:center;padding-top:25px"><?php echo $row[4] ?></td>
        <td style="text-align:center"><img src="<?php echo '../'.$row[5] ?>" alt="hình ảnh" width="50px" height="50px" /></td>
        <td style="text-align:center;padding-top:25px">
          <a href="?controller=tinhot&action=edit&id=<?php echo $row[0] ?>"><i class="fa fa-pencil"></i></a>
          <i class="fa fa-trash-o" onClick="confirmDelete('tinhot',<?php echo $row[0] ?>)"></i>
        </td>
       </tr>
       <?php } ?>
      </tbody>
     </table>
    </div>

    <!-- Start set tooltip cho link xem -->
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip_xemtomtat"]').tooltip();
    });
    </script>
    <!-- End set tooltip cho link xem -->

    <!-- Start include footer here -->
    <?php   try { require 'views/footer.html';
    } catch (ErrorException $ex) {
    echo "Unable to load configuration file.";
    } ?>
    <!-- End include footer here -->

  </div>
</div>


