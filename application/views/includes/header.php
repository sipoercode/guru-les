<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    
    <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <style>
    	.error{
    		color:red;
    		font-weight: normal;
    	}
    </style>
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>
    
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>G L</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>GURU LES</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $name; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $name; ?>
                      <small><?php echo $role_text; ?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url(); ?>loadChangePass" class="btn btn-default btn-flat"><i class="fa fa-key"></i> Change Password</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            
            <li class="header">MENU</li>
            
            <li class="treeview">
              <a href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>
            
            <li class="treeview">
              <a href="<?php echo base_url(); ?>userListing">
                <i class="fa fa-users"></i>
                <span>Data User</span>
              </a>
            </li>
            
            <li class="treeview">
              <a href="<?php echo base_url('guru');?>">
                <i class="fa fa-plane"></i>
                <span>Data Guru</span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?php echo base_url('murid'); ?>" >
                <i class="fa fa-ticket"></i>
                <span>Data Murid</span>
              </a>
            </li>
            
            <?php
            if($role == ROLE_ADMIN)
            {
            ?>
            
            <li class="active treeview">
              <li><a href="#"><i class="fa fa-circle-o"></i><span> Data Transaksi</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="active treeview-menu">
                  <li><a href="<?php echo base_url('transaksi'); ?>"><i class="fa fa-circle-o"></i> Permintaan</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Tiket Belajar</a></li>
                </ul>
              </li>
            </li>

            <li class="treeview">
              <a href="<?php echo base_url('jadwal'); ?>" >
                <i class="fa fa-upload"></i>
                <span>Jadwal Mengajar</span>
              </a>
            </li>
            
            <li class="active treeview">
              <li><a href="#"><i class="fa fa-circle-o"></i><span> Mail</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="active treeview-menu">
                  <li><a href="#"><i class="fa fa-circle-o"></i> Inbox</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Outbox</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Draft</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Create Mail</a></li>
                </ul>
              </li>
            </li>

            <li class="treeview">
              <a href="#" >
                <i class="fa fa-files-o"></i>
                <span>Statistik</span>
              </a>
            </li>

            <?php
            }
            ?>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>