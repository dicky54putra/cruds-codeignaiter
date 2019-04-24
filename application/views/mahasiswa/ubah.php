<div class="container">
	
	<div class="row mt-3">
		<div class="col-md-6">
			
			<div class="card">
				<div class="card-header">
					Form Ubah Data Mahasiswa
				</div>
				<div class="card-body">	
					<form action="" method="post">

						<input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">

						<input type="text" name="tanggal" hidden="" value="<?= $mahasiswa['tanggal']; ?>">

						<div class="form-group">
						    <label for="nama">Nama</label>
						    <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama']; ?>">
						    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>	

						<div class="form-group">
						    <label for="alamat">Alamat</label>
						    <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $mahasiswa['alamat']; ?>">
						    <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
						</div>	

						<div class="form-group">
						    <label for="pekerjaan">Pekerjaan</label>
						    <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" value="<?= $mahasiswa['pekerjaan']; ?>">
						    <small class="form-text text-danger"><?= form_error('pekerjaan'); ?></small>
						</div>	

						<button type="submit" name="ubah" class="btn btn-primary float-right">Ubah</button>

					</form>
				</div>
			</div>

		</div>
	</div>

</div>