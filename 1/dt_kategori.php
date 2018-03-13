				<thead>
					<tr>
						<th>No</th>
						<th>Kode Kategori</th>
						<th>Nama Kategori</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i="";
						$queryoptik = mysqli_query ($konek, "SELECT * FROM kategori_barang ORDER BY id_kategori DESC");
						if($queryoptik == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($optik = mysqli_fetch_array ($queryoptik)){
							$i++;
							echo "
								<tr>
									<td>".$i.".</td>
									<td>$optik[kode_kategori]</td>
									<td>$optik[nama_kategori]</td>
									<td>
										<a href='#' class='open_modal' id='$optik[id_kategori]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"kategori_delete.php?id_kategori=$optik[id_kategori]\")'>Hapus</a>
									</td>
								</tr>";
						}
					?>
				</tbody>