<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

  <title><?php echo $page_title ?></title>

  <?=link_tag('assets/admin/css/jquery-ui.min.css');?>
  <?=link_tag('assets/admin/css/bootstrap.min.css');?>
  <?=link_tag('assets/admin/css/font-awesome.min.css');?>
  <?=link_tag('assets/admin/css/ionicons.min.css');?>
  <?=link_tag('assets/admin/css/adminlte.css');?>
  <?=link_tag('assets/admin/css/custom.css');?>

  <?=script_tag('assets/admin/js/jquery.min.js');?>
  <?=script_tag('assets/admin/js/jquery-ui.min.js');?>
  <?=script_tag('assets/admin/js/bootstrap.min.js');?>

  <script type="text/javascript">
  var SERVER = '<?php echo site_url("/")?>';
  var BASE_URI = '<?php echo BASE_URI;?>';
  </script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>
<body class="skin-blue" onload="init()">
  <?php echo $header;?>
  <div class="wrapper row-offcanvas row-offcanvas-left">
    <aside class="left-side sidebar-offcanvas">
      <?php echo $sidebar;?>
    </aside>
    <aside class="right-side">
      <section class="content-header">
        <h1> <?=isset($page_header) ? $page_header : ''?> <small> <?=isset($page_header_small) ? $page_header_small : ''?> </small> </h1>
      </section>
      <section class="content">
        <?php echo $content;?>
      </section>
    </aside>
  </div>

</body>
</html>
