 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kantor POS | Blank Page</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=base_url()?>assets/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>OD</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>COD</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url()?>assets/dist/img/user3-128x128.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">RIZQI AFIF KHAIRULLAH</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url()?>assets/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">

                <p>
                  Rizqi Afif Khairullah - 180441100034
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?=site_url('auth/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>assets/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>RIZQI AFIF KHAIRULLAH</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
    
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
                  <li class="header">MENU UTAMA</li>
                  <li>
                      <a href="<?=base_url('Dashboard')?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                    </li>
                    <li class="treeview">
                    <a href="#">
                      <i class="fa fa-shopping-cart"></i> <span>Pesanan</span>
                      <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="<?=base_url('pesananbaru')?>"><i class="fa fa-cart-plus"></i> Buat Pesanan Baru</a></li>
                      <li><a href="<?=base_url('pesananblm')?>"><i class="fa fa-spinner"></i> Pesanan Belum Diproses</a></li>
                      <li><a href="<?=base_url('dataorder')?>"><i class="fa fa-hourglass-start"></i> Data order COD</a></li>
                    </ul>
                  </li>
                    <li class="treeview">
                    <a href="#">
                      <i class="fa fa-file"></i> <span>Laporan</span>
                      <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="<?=base_url('pesananharian')?>"><i class="fa fa-list-alt"></i> Rekap Pesanan Harian</a></li>
                      <li><a href="<?=base_url('rekapinvoice')?>"><i class="fa fa-list-alt"></i> Rekap Invoice</a></li>
                      <li><a href="<?=base_url('cetaklabel')?>"><i class="fa fa-barcode"></i> Cetak Label </a></li>
                    </ul>
                  </li>
                  </li>
                  <li class="treeview">
                    <a href="#">
                      <i class="fa fa-gears"></i> <span>Utility</span>
                      <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="<?=base_url('cekstatus')?>"><i class="fa fa-info"></i> Cek Status Kiriman</a></li>
                      <li><a href="<?=base_url('cektarif')?>"><i class="fa fa-money"></i> Cek Tarif Kiriman</a></li>
                      <li><a href="#"><i class="fa fa-lock"></i> Ganti Password</a></li>
                    </ul>
                  </li>

                  <li class="header">TENTANG APLIKASI</li>
                  <li><a href="#"><i class="fa fa-gear text-green"></i> <span>TENTANG APLIKASI</span></a></li>
                  <li><a href="#"><i class="fa fa-envelope text-blue"></i> <span>BANTUAN</span></a></li>
                </ul>
            </section>
          </aside>

          <!-- Content Wrapper -->
          <div class="content-wrapper"> 
          		<?php echo $contents ?>  
            
          </div>

          <footer class="main-footer">
            <div class="pull-right hidden-xs">
              <b>Version</b> 1.0
            </div>
           <strong>Copyright &copy; 2019 <a href="https://posindonesia.co.id">PT. Pos Indonesia (Persero)</a>.</strong> All rights
    reserved.  </footer>
    </div>  

  <script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>

</body>
</html>
