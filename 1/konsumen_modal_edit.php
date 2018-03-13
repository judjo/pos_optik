<?php

include "../koneksi.php";

$id_konsumen	= $_GET["id_konsumen"];

$queryoptik = mysqli_query($konek, "SELECT * FROM konsumen WHERE id_konsumen='$id_konsumen'");
if($queryoptik == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($optik = mysqli_fetch_array($queryoptik)){

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
						<h4 class="modal-title">Edit Kategori Barang</h4>
					</div>
					<div class="modal-body">
						<form action="konsumen_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<input name="id_konsumen" type="hidden" value="<?php echo "$optik[id_konsumen]"; ?>">
							<div class="form-group">
								<label>Kode</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<input name="kode_konsumen" type="text" class="form-control" placeholder="" value="<?php echo $optik["kode_konsumen"]; ?>" readonly />
									</div>
							</div>							
							<div class="form-group">
								<label>Nama</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<input name="nama" type="text" class="form-control" value="<?php echo $optik["nama"]; ?>">
									</div>
							</div>
							<div class="form-group">
								<label>No HP</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<input name="no_hp" type="text" class="form-control" value="<?php echo $optik["no_hp"]; ?>">
									</div>
							</div>	
							<div class="form-group">
								<label>Email</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<input name="email" type="email" class="form-control" value="<?php echo $optik["email"]; ?>">
									</div>
							</div>							
							<div class="form-group">
								<label>Jenis Kelamin</label>
									<div class="input-group">
										<input type="radio" name="jenis_kelamin" value="Laki-laki"<?php if($optik['jenis_kelamin']=="Laki-laki"){ echo "checked";}?> />Laki-laki &nbsp;&nbsp;
										<input type="radio" name="jenis_kelamin"  value="Perempuan" <?php if($optik['jenis_kelamin']=="Perempuan"){ echo "checked";}?>/>Perempuan
									</div>
							</div>
							<div class="form-group">
								<label>Tgl Lahir</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<input id="Tanggal_Lahir2" name="tgl_lahir" type="text" class="form-control" value="<?php echo $optik["tgl_lahir"]; ?>">
									</div>
							</div>	
							<div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<input name="alamat" type="text" class="form-control" value="<?php echo $optik["alamat"]; ?>">
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