<?php

include "../koneksi.php";

$id_produk	= $_GET["id_produk"];

$querykategori = mysqli_query($konek, "SELECT *
									  FROM produk WHERE id_produk='$id_produk'");
if($querykategori == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($kategori = mysqli_fetch_array($querykategori)){



?>

	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		  $('#Tanggal_Lahir2').daterangepicker({
			  singleDatePicker: true,
			  showDropdowns: true,
			  format: 'YYYY-MM-DD'
		  });
      });
    </script>
<!-- Modal Popup -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Barang</h4>
					</div>
					<div class="modal-body">
						<form action="barang_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<input name="id_produk" type="hidden" value="<?php echo "$kategori[id_produk]"; ?>">						
							<div class="form-group">
								<div class="form-group col-md-6">
								<label>Kode Barang</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<input name="kode_produk" type="text" class="form-control" placeholder="" value="<?php echo $kategori["kode_produk"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Nama Barang</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<input name="nama_produk" type="text" class="form-control" placeholder="" value="<?php echo $kategori["nama_produk"]; ?>" required />
									</div>
							</div>
							<div class="form-group">
								<label>Kategori Barang</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<select name="kode_kategori" class="form-control" required>
										<?php 
										echo "<option value='$kode_kategori'> $kode_kategori </option>";
										$qsql=mysqli_query($konek,"SELECT * FROM kategori_barang ORDER BY kode_kategori");
										  while ($grd=mysqli_fetch_array($qsql))
										  {
											echo "<option value='$grd[kode_kategori]'>$grd[kode_kategori] - $grd[nama_kategori]</option>";
										  }
										?>  
										</select>
									</div>
							</div>							<div class="form-group">
								<label>Satuan Barang</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
									   <select name="satuan" class="form-control input-lgx" required>
												<option value="pc">Pcs</option>
												<option value="box">Box</option>
												<option value="pasang">Pasang</option>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Supplier</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<select name="kode_supplier" class="form-control" required>
										<?php 
										echo "<option value='$kode_supplier'> $kode_supplier </option>";
										$qsql=mysqli_query($konek,"SELECT * FROM supplier ORDER BY kode_supplier");
										  while ($grd=mysqli_fetch_array($qsql))
										  {
											echo "<option value='$grd[kode_supplier]'>$grd[kode_supplier] - $grd[nama_supplier]</option>";
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
										<input name="harga_grosir" type="text" class="form-control" value="<?php echo $kategori["harga_grosir"]; ?>"
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
										<input name="harga" type="text" class="form-control" value="<?php echo $kategori["harga"]; ?>" 
													onblur="if (value == '') {value = '0'}" 
													onfocus="if (value == '0') {value =''}" required>
									</div>
							</div>								
							<div class="form-group col-md-6">
								<label>Stock</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<input name="stok" type="text" class="form-control" placeholder="" value="<?php echo $kategori["stok"]; ?>" required>
									</div>
							</div>
							<div class="form-group col-md-6">
								<label>Tgl Masuk</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input id="Tanggal_Lahir2" name="tgl_masuk" type="text" class="form-control" placeholder="" value="<?php echo $kategori["tgl_masuk"]; ?>" required>
									</div>
							</div>								
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Save
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
<?php
			}

?>