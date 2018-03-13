				
				<thead>
					<tr>
						<th>No</th>
						<th>Kode Supplier</th>
						<th>Nama Supplier</th>
						<th>No Telp</th>
						<th>Alamat</th>
						<th>Sales</th>
						<th>Keterangan</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i="";
						$querybrg = mysqli_query ($konek, "SELECT *
														FROM supplier
														WHERE id_supplier");
						if($querybrg == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($suplier = mysqli_fetch_array ($querybrg)){
							$i++;
							echo "
								<tr>
									<td>".$i.".</td>
									<td>$suplier[kode_supplier]</td>
									<td>$suplier[nama_supplier]</td>
									<td>$suplier[no_telp]</td>
									<td>$suplier[alamat_lengkap]</td>
									<td>$suplier[sales]</td>
									<td>$suplier[keterangan]</td>
									<td>
										<a href='#' class='open_modal' id='$suplier[id_supplier]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"supplier_delete.php?id_supplier=$suplier[id_supplier]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>