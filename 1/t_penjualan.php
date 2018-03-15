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
            <li><a href="supplier.php"><i class="fa fa-list"></i> Data Supplier</a></li>
          </ul>
        </li>
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
			        <li><a href="#"><i class="fa fa-info-circle"></i><span>Tentang Aplikasi</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      <!-- Content Header (Page header) -->
				<div class="row">
                  <div class="col-lg-12 main-chart">
						<div class="col-sm-5">
							<div class="panel panel-info">
								<div class="panel-heading">
									<h4><i class="fa fa-search"></i> Cari Barang</h4>
								</div>
								<div class="panel-body">
									<form method="POST">
										<input type="text" class="form-control" name="cari" placeholder="Masukan Nama Barang / Kode Barang">
									</form>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="panel panel-info">
								<div class="panel-heading">
									<h4><i class="fa fa-list"></i> Hasil Pencarian</h4>
								</div>
								<div class="panel-body">
									
									<table class="table table-stripped">
										<tr>
											<td><h4></h4></td>
											<td><h4></h4></td>
											<td><h4></h4></td>
											<form method="POST" action="">
												<input type="hidden" value="" name="id">
												<input type="hidden" value="" name="kasir">
												<input type="hidden" value="" name="tgl">
												<td><button class="btn btn-success">Taruh</button></td>
											</form>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h4><i class="fa fa-shopping-cart"></i> Kasir
									<a class="pull-right" href="">
										<button class="btn btn-danger">RESET</button>
									</a>
									</h4>
								</div>
								<div class="panel-body">
									<div>
										<table class="table table-bordered">
											<tr>
												<td><b>Tanggal</b></td>
												<td><input type="text" readonly="readonly" class="form-control" value="<?php echo date("j F Y, G:i");?>" name="tgl"></td>
											</tr>
										</table>
										<table class="table table-bordered">
											<thead>
												<tr>
													<td> No</td>
													<td> Nama Barang</td>
													<td style="width:10%;"> Jumlah</td>
													<td style="width:20%;"> Total</td>
													<td> Kasir</td>
													<td> Aksi</td>
												</tr>
											</thead>
											<tbody>

												<tr>
													<td></td>
													<td></td>
													<td>
														<form method="POST" action="">
															<input type="number" name="jumlah" value="" class="form-control">
															<input type="hidden" name="id" value="" class="form-control">
															<input type="hidden" name="id_barang" value="" class="form-control">
													</td>
													<td></td>
													<td></td>
													<td>
															<button class="btn btn-warning">Update</button>
														</form>
														<a href="">
															<button class="btn btn-danger">x</button>
														</a>
													</td>
												</tr>
											</tbody>
									</table>
									<br/>

									<div >
										<table class="table table-stripped">

											<form method="POST" action="">
												<tr>
													<td>Total Semua  </td>
													<td><input type="text" class="form-control" name="total" value=""></td>
												
													<td>Bayar  </td>
													<td><input type="text" class="form-control" name="bayar" value=""></td>
													<td><button class="btn btn-success"><i class="fa fa-shopping-cart"></i> Bayar</button></td>
												</tr>
											</form>
											<tr>
												<td>Kembali</td>
												<td><input type="text" class="form-control" value=""></td>
												<td></td>
												<td>
													<a href="" target="_blank">
													<button class="btn btn-default">
														<i class="fa fa-print"></i> Print Untuk Bukti Pembayaran
													</button></a>
												</td>

											</tr>
										</table>
										<br/>
										<br/>
									</div>
								</div>
							</div>
						</div>
				  </div>
              </div>					
    </div>
        
		
    </div>
	<!-- /.content-wrapper -->
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
