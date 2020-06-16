<main class="app-content">
	<div class="app-title">
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<form action="">
					<div class="row">
						<div class="col">
							<div class="form-group col-md-12">
								<label for="tgl_awal">Tgl Awal</label>
								<input type="date" name="" id="" class="form-control">
							</div>
						</div>
						<div class="col">
							<div class="form-group col-md-12">
								<label for="tgl_akhir">Tgl Akhir</label>
								<input type="date" name="" id="" class="form-control">
							</div>
						</div>
					</div>
					<div class="col">
						<button type="submit" class="btn btn-success btn-sm"><i class="fas fa-print"></i> Print
							Laporan</button>
					</div>
				</form>
			</div>
			<div class="col">
				<a class="btn btn-primary float-right mt-auto btn-sm"
					style="margin-right: 15px; margin-top: 30px !important;" id="btnTambah" href="#"><i
						class="fas fa-plus"></i> Tambah Data</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card shadow p-3 mb-5 bg-white rounded" style="border-radius: 15px !important;">
					<!-- <h5 class="card-header">Data Mutasi Masuk</h5> -->
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped" id="mutasi_masuk">
								<thead class="thead-dark">
									<tr>
										<th scope="col">#</th>
										<th scope="col">Nip</th>
										<th scope="col">Nama Petugas</th>
										<th scope="col">Foto</th>
										<th scope="col">Username</th>
										<th scope="col">Password</th>
										<th scope="col">Level</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>0123123123</td>
										<td>Agung Gumelar</td>
										<td>Masul</td>
										<td>SMK</td>
										<td>SMKN 3 KOTA BEKASI</td>
										<td>Petugas</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
