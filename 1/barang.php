<?php

session_start();
include "../koneksi.php";
include "auth_user.php";

$harga			= isset($_POST['harga']) ? $_POST['harga'] : '0';
$harga_grosir	= isset($_POST['harga_grosir']) ? $_POST['harga_grosir'] : '0';	
//$harga_pokok	= isset($_POST['harga_pokok']) ? $_POST['harga_pokok'] : '0';	
//$harga_distributor	= isset($_POST['harga_distributor']) ? $_POST['harga_distributor'] : '0';	

$query = "SELECT max(kode_produk) as maxKode FROM produk";
$hasil = mysqli_query($konek,$query);
$data = mysqli_fetch_array($hasil);
$kodeBarang = $data['maxKode'];

$noUrut = (int) substr($kodeBarang, 3, 3);
$noUrut++;

$char = "B ";
$newID = $char . sprintf("%03s", $noUrut);

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
            <li><a href="konsumen.php"><i class="fa fa-list"></i> Data Konsumen</a></li>
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
        <section class="content-header">
          <h1>
            Data Barang
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user"></i> Data Barang</li>
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
							include "dt_barang.php";
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
						<h4 class="modal-title">Tambah Data Barang</h4>
					</div>
					<div class="modal-body">
						<form action="barang_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group col-md-6">
								<label>Kode Barang</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<input name="kode_produk" type="text" class="form-control" placeholder="" value="<?php echo $newID;?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Nama Barang</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<input name="nama_produk" type="text" class="form-control" placeholder="" required />
									</div>
							</div>
							<div class="form-group col-md-6">
								<label>Kategori Barang</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<select name="kode_kategori" class="form-control input-lgx" required>
										<?php 
											echo "<option value=''>Pilih Kategori</option>";
											$qsql=mysqli_query($konek,"SELECT * FROM kategori_barang ORDER BY nama_kategori");
											while ($grd=mysqli_fetch_array($qsql))
											{
											echo "<option value='$grd[kode_kategori]'>$grd[nama_kategori]</option>";
											}
										?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Satuan Barang</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
									   <select name="satuan" class="form-control input-lgx" required>
												<option value=''>Pilih Satuan</option>									   
												<option value="pc">Pcs</option>
												<option value="box">Box</option>
												<option value="pasang">Pasang</option>
										</select>
									</div>
							</div>							
							<div class="form-group col-md-6">
								<label>Supplier</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<select name="kode_supplier" class="form-control input-lgx"  required>
										<?php 
											echo "<option value=''>Pilih Suplier</option>";
											$qsql=mysqli_query($konek,"SELECT * FROM supplier ORDER BY nama_supplier");
											while ($grd=mysqli_fetch_array($qsql))
											{
											echo "<option value='$grd[kode_supplier]'>$grd[nama_supplier]</option>";
											}
										?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Harga Beli</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-money"></i>
										</div>
										<input name="harga_grosir" type="text" class="form-control" value="<?php echo $harga_grosir; ?>" 
													onblur="if (value == '') {value = '0'}" 
													onfocus="if (value == '0') {value =''}" required>
									</div>
							</div>							
							<div class="form-group col-md-6">
								<label>Harga Jual</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-money"></i>
										</div>
										<input name="harga" type="text" class="form-control" value="<?php echo $harga; ?>" 
													onblur="if (value == '') {value = '0'}" 
													onfocus="if (value == '0') {value =''}" required>
									</div>
							</div>	
							<div class="form-group">
								<label>Stock</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<input name="stok" type="text" class="form-control" placeholder="" required>
									</div>
							</div>
							<div class="form-group col-md-6">
								<label>Tgl Masuk</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input id="Tanggal_Lahir" name="tgl_masuk" type="text" class="form-control" placeholder="" required>
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
		<div id="ModalEditBarang" class="modal fade" tabindex="-1" role="dialog"></div>
		
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
