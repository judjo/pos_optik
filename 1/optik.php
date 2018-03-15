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
			        <li><a href="#"><i class="fa fa-info-circle"></i><span>Tentang Aplikasi</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Optik
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user"></i> Data Optik</li>
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
				<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Tambah</button></a>
                  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "dt_optik.php";
						?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
		<!-- Modal Popup  -->
		<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah Data Optik</h4>
					</div>
					<div class="modal-body">
						<form action="optik_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group col-md-6">
								<label>Kode Optik</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="kode_optik" type="text" class="form-control" placeholder="" required />
									</div>
							</div>
							<div class="form-group">
								<label>Nama Optik</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="nama_optik" type="text" class="form-control" placeholder="" required />
									</div>
							</div>
							<div class="form-group col-md-6">
								<label>Kota</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="kota" type="text" class="form-control" placeholder="" required>
									</div>
							</div>
							<div class="form-group col-md-6">
								<label>No. Telp</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-phone"></i>
										</div>
										<input name="telp" type="text" class="form-control" placeholder="" required />
									</div>
							</div>
							<div class="form-group col-md-6">
								<label>Fax</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-phone"></i>
										</div>
										<input name="fax" type="text" class="form-control" placeholder="" required/>
									</div>
							</div>
							<div class="form-group">
								<label>Alamat</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="alamat_optik" type="text" class="form-control" placeholder="" required>
									</div>
							</div>							
							<div class="form-group col-md-6">
								<label>Keterangan</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<input name="keteranga" type="text" class="form-control" placeholder="" required>
									</div>
							</div>							
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Tambah
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Batal
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal Popup Edit -->
		<div id="ModalEditOptik" class="modal fade" tabindex="-1" role="dialog"></div>
		
		<!-- Modal Popup untuk delete--> 
		<div class="modal fade" id="modal_delete">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top:100px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Anda Yakin Hapus Data ini?</h4>
					</div>    
					<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
						<a href="#" class="btn btn-danger" id="delete_link">Delete</a>
						<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		
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
