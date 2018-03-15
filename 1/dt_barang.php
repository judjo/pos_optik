				
				<thead>
					<tr>
						<th>No</th>
						<th>Kode Barang</th>
						<th>Nama Barang</th>
						<th>Kategori</th>
						<th>Harga Beli</th>
						<th>Harga Jual</th>
						<th>Satuan</th>
						<th>Supplier</th>
						<th>Stok</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i="";
						$querybrg = mysqli_query ($konek, "SELECT *
														FROM produk
														WHERE id_produk");
						if($querybrg == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($barang = mysqli_fetch_array ($querybrg)){
							$i++;
							echo "
								<tr>
									<td>".$i.".</td>
									<td>$barang[kode_produk]</td>
									<td>$barang[nama_produk]</td>
									<td>$barang[kode_kategori]</td>
									<td>Rp. ". number_format($barang["harga"], 0, ".", "."). "</td>
									<td>Rp. ". number_format($barang["harga_grosir"], 0, ".", "."). "</td>
									<td>$barang[satuan]</td>
									<td>$barang[kode_supplier]</td>
									<td>$barang[stok]</td>
									<td>
										<a href='#' class='open_modal' id='$barang[id_produk]'> <i class='fa fa-pencil'></i></a> |
										<a href='#' onClick='confirm_delete(\"barang_delete.php?id_produk=$barang[id_produk]\")'> <i class='fa fa-trash'></i></a>
									</td>
								</tr>";
						}
					?>
				</tbody>