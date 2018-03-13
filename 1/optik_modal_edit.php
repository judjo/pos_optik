<?php

include "../koneksi.php";

$id_data_optik	= $_GET["id_data_optik"];

$queryoptik = mysqli_query($konek, "SELECT * FROM data_optik WHERE id_data_optik='$id_data_optik'");
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
						<h4 class="modal-title">Edit Data Optik</h4>
					</div>
					<div class="modal-body">
						<form action="optik_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<input name="id_data_optik" type="hidden" value="<?php echo "$optik[id_data_optik]"; ?>">
							<div class="form-group col-md-6">
								<label>Kode Optik</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<input name="kode_optik" type="text" class="form-control" value="<?php echo $optik["kode_optik"]; ?>">
									</div>
							</div>
							<div class="form-group">
								<label>Nama Optik</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<input name="nama_optik" type="text" class="form-control" value="<?php echo $optik["nama_optik"]; ?>">
									</div>
							</div>
							<div class="form-group col-md-6">
								<label>No Telp</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<input name="telp" type="text" class="form-control" value="<?php echo $optik["telp"]; ?>">
									</div>
							</div>
							<div class="form-group">
								<label>Fax</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<input name="fax" type="text" class="form-control" value="<?php echo $optik["fax"]; ?>">
									</div>
							</div>	
							<div class="form-group col-md-6">
								<label>Kota</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<input name="kota" type="text" class="form-control" value="<?php echo $optik["kota"]; ?>">
									</div>
							</div>								
							<div class="form-group col-md-6">
								<label>Alamat Optik</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<textarea name="alamat_optik" type="text" class="form-control"><?php echo $optik["alamat_optik"]; ?></textarea>
									</div>
							</div>					
							<div class="form-group">
								<label>Keterangan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-list"></i>
										</div>
										<textarea name="keteranga" type="text" class="form-control"><?php echo $optik["keteranga"]; ?></textarea>										
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