<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			

			<div class="card">
				<div class="card-header">
					Detail Data Mahasiswa
				</div>
				<div class="card-body">	
					<table>
						<tr>
							<td>ID</td>
							<td>:</td>
							<td><?= $mahasiswa['id']; ?></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><h5 class="card-title"><?= $mahasiswa['nama']; ?></h5></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td><?= $mahasiswa['alamat']; ?></td>
						</tr>
						<tr>
							<td>Pekerjaan</td>
							<td>:</td>
							<td><?= $mahasiswa['pekerjaan']; ?></td>
						</tr>
						<tr>
							<td>Tanggal ditambahkan</td>
							<td>:</td>
							<td><?= $mahasiswa['tanggal']; ?></td>
						</tr>
					</table>
					
				</div>
			</div>



		</div>
	</div>
</div>