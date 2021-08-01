<!DOCTYPE html>
<html>
<? php
include 'koneksi.php';
$kpasien = mysqli_query($koneksi, "select * from pasien");
?>
<head>
	<title>Registrasi</title>
	<link rel='stylesheet' href='styleuser.css'>
	
</head>
<body bgcolor=#E6E6FA>
<div class="table">
	<h3 align="center">Masukan Data Diri Pasien</h3>
	<form method="post" action="rujukan.php">
		<table border="0" cellspacing="10" align="center">
			<tr>
				<td>Nama Lengkap</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggallahir"></td>
			</tr>
			<tr>
				<td>Tlp</td>
				<td><input type="text" name="tlp"></td>
			</tr>
			<tr>
				<td>Tempat Tinggal</td>
				<td><input type="text" name="tempattinggal"></td>
			</tr>
			<tr>
				<td>Pilih Rumah Sakit</td>
				<td>
					<select name="RumahSakit">
						<option value="RSUP H.Adam Malik">RSUP H.Adam Malik</option>
						<option value="RSUP Dr. M. Djamil">RSUP Dr. M. Djamil</option>
						<option value="RSUP Fatmawati">RSUP Fatmawati</option>
						<option value="RSUPN Dr. Cipto Mangunkusumo">RSUPN Dr. Cipto Mangunkusumo</option>
						<option value="RS Kanker Dharmais">RS Kanker Dharmais</option>
						<option value="RS Anak Bunda Harapan Kita">RS Anak Bunda Harapan Kita</option>
						<option value="RS Khusus Mata Cicendo">RS Khusus Mata Cicendo</option>
						<option value="RS Paru Dr. H. A. Rotinsulu">RS Paru Dr. H. A. Rotinsulu</option>
						<option value="RSUP Sanglah">RSUP Sanglah</option>
						<option value="RSUP Dr. Wahidin Sudirohusodo">RSUP Dr. Wahidin Sudirohusodo</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Pilih Hari</td>
				<td>
					<select name="hari">
						<option value="Senin"> Senin</option>
						<option value="Selasa"> Selasa</option>
						<option value="Rabu"> Rabu</option>
						<option value="Kamis"> Kamis</option>
						<option value="Jumat"> Jumat</option>
						<option value="Sabtu"> Sabtu</option>
						<option value="Minggu"> Minggu</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="Submit" value="SIMPAN">
					<input type="Reset" value="BATAL"></td>
			</tr>
		</table>
	</form>
</div>
<div class='footer'>
    <p><marquee>Jagalah Kesehatan, Karna Kesehatan Itu Mahal..... </marquee></p>
</div>
</body>
</html>






