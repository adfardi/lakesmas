<!DOCTYPE html>
<html>
<?php

include 'koneksi.php';

$namalengkap = $_POST['nama'];
$alamat = $_POST['alamat'];
$tanggallahir = $_POST['tanggallahir'];
$tlp = $_POST['tlp'];
$tempattinggal = $_POST['tempattinggal'];
$RS = $_POST['RumahSakit'];
$hari = $_POST['hari'];


mysqli_query($koneksi,"insert into pasien values('$namalengkap','$alamat','$tanggallahir','$tlp','$tempattinggal','$RS','$hari')");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel='stylesheet' href='styleuser.css'>
</head>
<body bgcolor="#E6E6FA">
	<h1 align="center">Terima kasih ..</h1>
	<h2 align="center">Anda Sudah Terdaftar, Pastikan datang dari jam 08:00 waktu setempat..</h2>
		<div class='btn'>
            <ul>
                <li><a href='index.php'>LOG OUT</a></li>
</ul>
</div>
</body>
</html>