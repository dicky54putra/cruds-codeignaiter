<div class="container">

	<?php if ($this->session->flashdata('flash')):?>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		</div>
	</div>
	<?php endif ?>

	<?php if ($this->session->flashdata('hapus')):?>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('hapus'); ?>.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		</div>
	</div>
	<?php endif ?>

	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="post">
				<div class="input-group">
					<input type="text" name="keyword" placeholder="cari data Mahasiswa.." class="form-control">
					<div class="input-group-append">
						<button type="submit" class="btn btn-outline-primary">Cari</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	
	<div class="row mt-3">
		<div class="col-md-6">
			
			<h3>Daftar Mahasiswa</h3>
			<?php if ( empty($mahasiswa) ) : ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Data mahasiswa tidak ditemukan!
				</div>
			<?php endif ?>

			<ul class="list-group">
				<?php foreach ($mahasiswa as $mhs) : ?>
				<li class="list-group-item">
					<?= $mhs['nama']; ?>
					<a class="badge badge-danger float-right" href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" onclick="return confirm('yakin?');">Hapus</a>
					<a class="badge badge-success float-right" href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>">Ubah</a>
					<a class="badge badge-primary float-right" href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" >Detail</a>
				</li>
				<?php endforeach ?>
			</ul>

		</div>
	</div>

</div>