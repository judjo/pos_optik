<?php

include "../koneksi.php";

$id_kategori	= $_GET["id_kategori"];

$queryoptik = mysqli_query($konek, "SELECT * FROM kategori_barang WHERE id_kategori='$id_kategori'");
if($queryoptik == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($optik = mysqli_fetch_array($queryoptik)){

?>
<!-- Modal Popup -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Kategori Barang</h4>
					</div>
					<div class="modal-body">
						<form action="kategori_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<input name="id_kategori" type="hidden" value="<?php echo "$optik[id_kategori]"; ?>">
							<div class="form-group">
								<label>Kode Kategori</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<input name="kode_kategori" type="text" class="form-control" value="<?php echo $optik["kode_kategori"]; ?>">
									</div>
							</div>
							<div class="form-group">
								<label>Nama Kategori</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<input name="nama_kategori" type="text" class="form-control" value="<?php echo $optik["nama_kategori"]; ?>">
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