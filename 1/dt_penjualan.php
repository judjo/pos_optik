<section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12 main-chart">
						<div class="col-sm-5">
							<div class="panel panel-info">
								<div class="panel-heading">
									<h4><i class="fa fa-search"></i> Cari Barang</h4>
								</div>
								<div class="panel-body">
									<form method="POST">
										<input type="text" class="form-control" name="cari" placeholder="Masukan Nama Barang / Kode Barang">
									</form>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="panel panel-info">
								<div class="panel-heading">
									<h4><i class="fa fa-list"></i> Hasil Pencarian</h4>
								</div>
								<div class="panel-body">
									
									<table class="table table-stripped">
										<tr>
											<td><h4></h4></td>
											<td><h4></h4></td>
											<td><h4></h4></td>
											<form method="POST" action="">
												<input type="hidden" value="" name="id">
												<input type="hidden" value="" name="kasir">
												<input type="hidden" value="" name="tgl">
												<td><button class="btn btn-success">Taruh</button></td>
											</form>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h4><i class="fa fa-shopping-cart"></i> Kasir
									<a class="pull-right" href="">
										<button class="btn btn-danger">RESET</button>
									</a>
									</h4>
								</div>
								<div class="panel-body">
									<div id="keranjang">
										<table class="table table-bordered">
											<tr>
												<td><b>Tanggal</b></td>
												<td><input type="text" readonly="readonly" class="form-control" value="" name="tgl"></td>
											</tr>
										</table>
										<table class="table table-bordered" id="example1">
											<thead>
												<tr>
													<td> No</td>
													<td> Nama Barang</td>
													<td style="width:10%;"> Jumlah</td>
													<td style="width:20%;"> Total</td>
													<td> Kasir</td>
													<td> Aksi</td>
												</tr>
											</thead>
											<tbody>

												<tr>
													<td></td>
													<td></td>
													<td>
														<form method="POST" action="">
															<input type="number" name="jumlah" value="" class="form-control">
															<input type="hidden" name="id" value="" class="form-control">
															<input type="hidden" name="id_barang" value="" class="form-control">
													</td>
													<td></td>
													<td></td>
													<td>
															<button class="btn btn-warning">Update</button>
														</form>
														<a href="">
															<button class="btn btn-danger">x</button>
														</a>
													</td>
												</tr>
											</tbody>
									</table>
									<br/>

									<div id="kasirnya">
										<table class="table table-stripped">

											<form method="POST" action="">
												<tr>
													<td>Total Semua  </td>
													<td><input type="text" class="form-control" name="total" value=""></td>
												
													<td>Bayar  </td>
													<td><input type="text" class="form-control" name="bayar" value=""></td>
													<td><button class="btn btn-success"><i class="fa fa-shopping-cart"></i> Bayar</button></td>
												</tr>
											</form>
											<tr>
												<td>Kembali</td>
												<td><input type="text" class="form-control" value=""></td>
												<td></td>
												<td>
													<a href="" target="_blank">
													<button class="btn btn-default">
														<i class="fa fa-print"></i> Print Untuk Bukti Pembayaran
													</button></a>
												</td>

											</tr>
										</table>
										<br/>
										<br/>
									</div>
								</div>
							</div>
						</div>
				  </div>
              </div>
          </section>
      </section>