<?php

session_start();
include "../koneksi.php";
include "auth_user.php";
?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>SIFO OPTIK</title>
	<!-- Library CSS -->
	<?php
		include "bundle_css.php";
	?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php
        include 'content_header.php';
       ?>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <p></p>
            </div>
          </div><!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
              <li class="header"><h4><b><center>Menu Panel</center></b></h4></li>
              <li><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Master</span>

          </a>
          <ul class="treeview-menu">
            <li><a href="optik.php"><i class="fa fa-list"></i> Data Optik</a></li>
            <li><a href="kategori.php"><i class="fa fa-list"></i> Data Kategori</a></li>
            <li><a href="barang.php"><i class="fa fa-list"></i> Data Barang</a></li>
            <li><a href="supplier.php"><i class="fa fa-list"></i> Data Suplier</a></li>
            <li><a href="konsumen.php"><i class="fa fa-list"></i> Data Konsumen</a></li>
          </ul>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i>
            <span>Transaksi</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="t_penjualan.php"><i class="fa fa-list"></i> Penjualan Barang</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Laporan</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="l_penjualan.php"><i class="fa fa-list"></i> Penjualan Barang</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Users</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="u_admin.php"><i class="fa fa-list"></i> Admin</a></li>
            <li><a href="u_karyawan.php"><i class="fa fa-list"></i> Karyawan</a></li>
          </ul>
        </li>		  
        </li>
			        <li><a href="about.php"><i class="fa fa-info-circle"></i><span>Tentang Aplikasi</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Laporan
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user"></i> Penjualan Barang</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">
				<a href="#"></a>
                  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "dt_lp.php";
						?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->		
		
    </div><!-- /.content-wrapper -->
    <?php
		include	"content_footer.php";
	?>
    </div><!-- ./wrapper -->
	<!-- Library Scripts -->
	<?php
		include "bundle_script.php";
	?>
  </body>
</html>
