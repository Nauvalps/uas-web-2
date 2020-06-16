<main class="app-content">
	<div class="app-title">
		<h5>Form Add Mutasi Masuk</h5>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card shadow p-3 mb-5 bg-white rounded" style="border-radius: 15px !important;">
					<!-- <h5 class="card-header">Data Mutasi Masuk</h5> -->
					<div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h4>Data Siswa</h4>
                                <hr style="border-top: 1px solid black; width: 100%;" align="left">
                            </div>
                            <div class="col">
                                <h4>Data Mutasi Masuk</h4>
                                <hr style="border-top: 1px solid black; width: 100%;" align="right">
                            </div>
                        </div> 
						<form>
							<div class="form-group row">
								<label for="nisn" class="col-sm-2 col-form-label">Nisn</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" id="nisn" placeholder="Nisn">
                                </div>
                                <label for="npsn_asal_sekolah" class="col-sm-2 col-form-label">Npsn Asal Sekolah</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" id="npsn_asal_sekolah" placeholder="">
								</div>
							</div>
							<div class="form-group row">
                                <label for="tgl_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
								<div class="col-sm-4">
									<input type="date" class="form-control" id="tgl_masuk" placeholder="">
                                </div>
                                <label for="asal_sekolah" class="col-sm-2 col-form-label">Asal Sekolah</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" id="asal_sekolah" placeholder="">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-2">Checkbox</div>
								<div class="col-sm-10">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Example checkbox
										</label>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-primary">Sign in</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
