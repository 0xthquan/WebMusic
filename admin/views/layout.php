<!-- Start include header here-->
<?php   try { require 'header.html';
        } catch (ErrorException $ex) {
            echo "Unable to load configuration file.";
        }?>
<!-- End include header here-->

<body class=" theme-blue">

    <script type="text/javascript">
        $(function() {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
            if(match) var color = match[1];
            if(color) {
                $('body').removeClass(function (index, css) {
                    return (css.match (/\btheme-\S+/g) || []).join(' ')
                })
                $('body').addClass('theme-' + color);
            }

            $('[data-popover="true"]').popover({html: true});

        });
    </script>
    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover {
            color: #fff;
        }
    </style>

    <script type="text/javascript">
        $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        });
    </script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">


  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!-->

  <!--<![endif]-->

    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="" href=""><span class="navbar-brand"><span class="fa fa-paper-plane"></span> Admin Giới thiệu âm nhạc</span></a>
        </div>

        <div class="navbar-collapse collapse" style="height: 1px;">
          <ul id="main-menu" class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-xs">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span> Admin
                <i class="fa fa-caret-down"></i>
              </a>
              <ul class="dropdown-menu">
<!--                 <li><a href="#">My Account</a></li>
<li class="divider"></li>
<li class="dropdown-header">Admin Panel</li>
<li><a href="#">Users</a></li>
<li><a href="#">Security</a></li>
<li><a tabindex="-1" href="#">Payments</a></li>
<li class="divider"></li> -->
                <li><a tabindex="-1" href="sign_out.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>

<?php
switch($controller){
    case 'home':
        $in1="";
        $in2="";
        $in3="";
        $in4="";
        break;

    case 'tinhot':
        $in1="in";
        $in2="";
        $in3="";
        $in4="";
        break;

    case 'tintuc':
        $in1="";
        $in2="in";
        $in3="";
        $in4="";
        break;

    case 'nhacmoi':
        $in1="";
        $in2="";
        $in3="in";
        $in4="";
        break;

    case 'nghenhac':
        $in1="";
        $in2="";
        $in3="";
        $in4="in";
        break;
}
?>

    <div class="sidebar-nav">
      <ul>
        <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class=""></i> Quản lý Tin HOT<i class="fa fa-collapse"></i></a></li>
        <li><ul class="dashboard-menu nav nav-list collapse <?php echo $in1 ?>">
              <li><a href="?controller=tinhot&action=view" target=""><span class="fa fa-caret-right "></span> Xem danh sách</a></li>
              <li ><a href="?controller=tinhot&action=create"><span class="fa fa-caret-right"></span> Tạo tin mới</a></li>
            </ul>
        </li>

        <li><a href="#" data-target=".premium-menu" class="nav-header collapsed" data-toggle="collapse"><i class=""></i> Quản lý Tin tức<i class="fa fa-collapse"></i></a></li>
        <li><ul class="premium-menu nav nav-list collapse <?php echo $in2 ?>">
              <li ><a href="?controller=tintuc&action=view" target=""><span class="fa fa-caret-right"></span> Xem danh sách</a></li>
              <li ><a href="?controller=tintuc&action=create"><span class="fa fa-caret-right"></span> Tạo tin mới</a></li>
            </ul>
        </li>

        <li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class=""></i> Quản lý Nhạc mới<i class="fa fa-collapse"></i></a></a></li>
        <li><ul class="accounts-menu nav nav-list collapse <?php echo $in3 ?>">
              <li ><a href="?controller=nhacmoi&action=view" target=""><span class="fa fa-caret-right"></span> Xem danh sách</a></li>
              <li ><a href="?controller=nhacmoi&action=create"><span class="fa fa-caret-right"></span> Tạo tin mới</a></li>
            </ul>
        </li>

        <li><a href="#" data-target=".legal-menu" class="nav-header collapsed" data-toggle="collapse"><i class=""></i> Quản lý Nghe nhạc<i class="fa fa-collapse"></i></a></li>
          <li><ul class="legal-menu nav nav-list collapse <?php echo $in4 ?>">
                <li ><a href="?controller=nghenhac&action=view" target=""><span class="fa fa-caret-right"></span> Xem danh sách</a></li>
                <li ><a href="?controller=nghenhac&action=create"><span class="fa fa-caret-right"></span> Thêm bài hát</a></li>
             </ul>
          </li>
      </ul>
    </div>


    <!-- Start include content here -->
    <?php
    require_once 'views/routes.php';
    ?>
  <!-- End include content here -->


    <script src="public/lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>

</body></html>
