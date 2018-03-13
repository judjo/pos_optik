				<thead>
					<tr>
						<th>Kode</th>
						<th>Nama</th>
						<th>No HP</th>
						<th>Email</th>
						<th>Gender</th>
						<th>Tgl Lahir</th>
						<th>Alamat</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$queryoptik = mysqli_query ($konek, "SELECT * FROM konsumen ORDER BY id_konsumen DESC");
						if($queryoptik == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($optik = mysqli_fetch_array ($queryoptik)){
							
							echo "
								<tr>
									<td>$optik[kode_konsumen]</td>
									<td>$optik[nama]</td>
									<td>$optik[no_hp]</td>
									<td>$optik[email]</td>
									<td>$optik[jenis_kelamin]</td>
									<td>$optik[tgl_lahir]</td>
									<td>$optik[alamat]</td>
									<td>
										<a href='#' class='open_modal' id='$optik[id_konsumen]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"konsumen_delete.php?=$optik[id_konsumen]\")'>Hapus</a>
									</td>
								</tr>";
						}
					?>
				</tbody>