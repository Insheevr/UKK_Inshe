<?php
include "header.php";
include "navbar.php";
?>

<style>

    .card {
			background-color: #c5baff; 
			box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
			border-radius: 12px;
		}

		.btn-primary {
		background-color: #6c48c5;
		border-color: #c5baff;
		}
		
		.card-body {
			background-color: #c5baff;
			border-radius: 10px;
		}

		.modal-content {
			background-color: #c5baff; 
			border-radius: 10px;
		}

		table {
			background-color: #c5baff;
		}

		th, td {
			background-color: #c4d9ff;
		}

		.alert {
			background-color: rgba(25, 135, 84, 0.1);
			color: #c5baff;
			border: 1px solidrgb(25, 135, 89);
		}

		.form-control {
			background-color: #c5baff;
		}




</style>

<div class="card mt-2">
	<div class="card-body">
		<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambah-data">
		<i class="fi fi-rr-add"></i>  Tambah Data
		</button>
	</div>
	<div class="card-body">
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan']=="simpan"){?>
				<div class="alert alert-success" role="alert">
					Data Berhasil Di Simpan
				</div>
			<?php } ?>
			<?php if($_GET['pesan']=="update"){?>
				<div class="alert alert-success" role="alert">
					Data Berhasil Di Update
				</div>
			<?php } ?>
			<?php if($_GET['pesan']=="hapus"){?>
				<div class="alert alert-success" role="alert">
					Data Berhasil Di Hapus
				</div>
			<?php } ?>
			<?php 
		}
		?>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Petugas</th>
					<th>Username</th>
					<th>Akses Petugas</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				include '../koneksi.php';
				$no = 1;
				$data = mysqli_query($koneksi,"select * from petugas");
				while($d = mysqli_fetch_array($data)){
					?>
				      	<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['nama_petugas']; ?></td>
						<td><?php echo $d['username']; ?></td>
						<td>
							<?php 
							if ($d['level'] == '1') { ?>
								Administrator
							<?php } ?>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

<!-- Modal Tambah Data-->
<div class="modal fade" id="tambah-data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="proses_simpan_petugas.php" method="post">
				<div class="modal-body">				
					<div class="form-group">
						<label>Nama Petugas</label>
						<input type="text" name="nama_petugas" class="form-control">
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="text" name="password" class="form-control">
					</div>
					<div class="form-group">
						<label>Akses Petugas</label>
						<select name="level" class="form-control">
							<option>--- Akses Petugas ---</option>
							<option value="1">Administrator</option>
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
include "footer.php";
?>