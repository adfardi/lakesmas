<?php
include 'koneksi.php';
$kpasien= mysqli_query($koneksi, "select * from pasien");
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Halaman admin</title>
	<link rel='stylesheet' href='styleadmin.css'>
</head>
<body bgcolor="2F4F4F">
	<h2 align="center">Data Pasien baru</h2>
	<br/>
	<?php
	session_start();
	if ($_SESSION['status']!="login") {
		header("location:index.php?pesan=belum_login");
	}

	?>
	<table border="2" align="center" bgcolor="white">
		<tr align="center">
			<td> <b>Nama Lengkap</b></td>
			<td><b>Alamat</b></td>
			<td><b>Tanggal Lahir</b></td>
			<td><b>Tlp</b></td>
			<td><b>Tempat Tinggal</b></td>
			<td><b>Rumah Sakit</b></td>
			<td><b>Hari</b></td>
		</tr>
		<?php while ($pasien = mysqli_fetch_assoc($kpasien)) { ?>
	<tr>
		<td><?php echo $pasien['namalengkap'] ?></td>
		<td><?php echo $pasien['alamat'] ?></td>
		<td><?php echo $pasien['tanggallahir'] ?></td>
		<td><?php echo $pasien['tlp'] ?></td>
		<td><?php echo $pasien['tempattinggal'] ?></td>
		<td><?php echo $pasien['RS'] ?></td>
		<td><?php echo $pasien['hari'] ?></td>
		
</tr>
		<?php } ?>
	</table>

</body>
</html>