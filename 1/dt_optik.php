				<thead>
					<tr>
						<th>No</th>
						<th>Kode Optik</th>
						<th>Nama Optik</th>
						<th>Alamat</th>
						<th>Kota</th>
						<th>Telp</th>
						<th>Fax</th>
						<th>Keterangan</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i="";
						$queryoptik = mysqli_query ($konek, "SELECT * FROM data_optik ORDER BY id_data_optik DESC");
						if($queryoptik == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($optik = mysqli_fetch_array ($queryoptik)){
							$i++;
							echo "
								<tr>
									<td>".$i.".</td>
									<td>$optik[kode_optik]</td>
									<td>$optik[nama_optik]</td>
									<td>$optik[alamat_optik]</td>
									<td>$optik[kota]</td>
									<td>$optik[telp]</td>
									<td>$optik[fax]</td>
									<td>$optik[keteranga]</td>
									<td>
										<a href='#' class='open_modal' id='$optik[id_data_optik]'><button class='fa fa-edit btn btn-primary'> </button></a> |
										<a href='#' onClick='confirm_delete(\"optik_delete.php?id_data_optik=$optik[id_data_optik]\")'>
										<button class='fa fa-trash btn btn-danger'> </button></a>
									</td>
								</tr>";
						}
					?>
				</tbody>