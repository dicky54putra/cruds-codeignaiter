<div class="container">
	
	<div class="row mt-3">
		<div class="col-md-6">
			
			<div class="card">
				<div class="card-header">
					Form Tambah Data Mahasiswa
				</div>
				<div class="card-body">	
					<form action="" method="post">
						<?php $tanggal = date("Y-m-d H:i:s"); ?>
						<input type="text" hidden="" name="tanggal" value="<?php echo $tanggal; ?>">

						<div class="form-group">
						    <label for="nama">Nama</label>
						    <input type="text" name="nama" class="form-control" id="nama">
						    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>	

						<div class="form-group">
						    <label for="alamat">Alamat</label>
						    <input type="text" name="alamat" class="form-control" id="alamat">
						    <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
						</div>	

						<div class="form-group">
						    <label for="pekerjaan">Pekerjaan</label>
						    <input type="text" name="pekerjaan" class="form-control" id="pekerjaan">
						    <small class="form-text text-danger"><?= form_error('pekerjaan'); ?></small>
						</div>	

						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah</button>

					</form>
				</div>
			</div>

		</div>
	</div>

</div>