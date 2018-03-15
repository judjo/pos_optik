<?php

include "../koneksi.php";

$id_supplier	= $_GET["id_supplier"];

$querykategori = mysqli_query($konek, "SELECT id_supplier,kode_supplier, nama_supplier, no_telp, alamat_lengkap, sales, keterangan
									  FROM supplier 
									  WHERE 
									  id_supplier='$id_supplier'");
if($querykategori == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($kategori = mysqli_fetch_array($querykategori)){

?>

<!-- Modal Popup -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Supplier</h4>
					</div>
					<div class="modal-body">
						<form action="supplier_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<input name="id_supplier" type="hidden" value="<?php echo "$kategori[id_supplier]"; ?>">						
							<div class="form-group col-md-6">
								<label>Kode Suplier</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-university"></i>
										</div>
										<input name="kode_supplier" type="text" class="form-control" placeholder="" value="<?php echo $kategori["kode_supplier"]; ?>"/>										
									</div>
							</div>
							<div class="form-group">
								<label>Nama Suplier</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-university"></i>
										</div>
										<input name="nama_supplier" type="text" class="form-control" value="<?php echo $kategori["nama_supplier"]; ?>"/>
									</div>
							</div>
							<div class="form-group col-md-6">
								<label>No Telp</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-university"></i>
										</div>
										<input name="no_telp" type="text" class="form-control" value="<?php echo $kategori["no_telp"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-university"></i>
										</div>
										<input name="alamat_lengkap" type="text" class="form-control" value="<?php echo $kategori["alamat_lengkap"]; ?>"/>
									</div>
							</div>							
							<div class="form-group col-md-6">
								<label>Sales</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-university"></i>
										</div>
										<input name="sales" type="text" class="form-control" value="<?php echo $kategori["sales"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Keterangan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-university"></i>
										</div>
										<input name="keterangan" type="text" class="form-control" value="<?php echo $kategori["keterangan"]; ?>"/>
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