<?php
	$path = FCPATH . 'assets/img/logo/sd.png';
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bukti Pendaftaran Ekstrakurikuler</title>
	<style>
		body { font-family: Arial, sans-serif; }
		.header { text-align: center; margin-bottom: 30px; }
		.header img { width: 80px; }
		h2 { margin: 5px 0; }
		.table-data { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
		.table-data td { padding: 8px; border: 1px solid #ccc; }
		.signature {
			width: 100%;
			margin-top: 50px;	
		}
		.signature td {
			text-align: center;
			padding-top: 60px;
		}
	</style>
</head>
<body>

	<div class="header">
		<img src="<?= $base64 ?>" style="width:80px;" alt="Logo Sekolah">
		<h2>SDN SRIMAHI 02</h2>
		<p><strong>Bukti Pendaftaran Ekstrakurikuler</strong></p>
	</div>

	<table class="table-data">
		<tr><td>Nama</td><td><?= $nama ?></td></tr>
		<tr><td>NIS</td><td><?= $nis ?></td></tr>
		<tr><td>Kelas</td><td><?= $kelas ?></td></tr>
		<tr><td>Jenis Kelamin</td><td><?= $jk ?></td></tr>
		<tr><td>No HP</td><td><?= $no_hp ?></td></tr>
		<tr><td>Alamat</td><td><?= $alamat ?></td></tr>
		<tr><td>Nama Ekskul</td><td><?= $nama_ekskul ?></td></tr>
		<tr><td>Tanggal Daftar</td><td><?= date('d-m-Y', strtotime($tgl_daftar)) ?></td></tr>
	</table>

	<table class="signature">
		<tr>
			<td style="width: 60%;"></td>
			<td style="width: 40%;">
				Guru Pembimbing,<br><br><br><br>
				_____________________
			</td>
		</tr>
	</table>

</body>
</html>
