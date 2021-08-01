<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Admin</title>
	<link rel='stylesheet' href='styladmin.css'>
</head>
<body bgcolor="2F4F4F">
	<h2 align="center">Selamat Datang Admin</h2>

	<?php
	if (isset($_GET['pesan'])) {
		if ($_GET['pesan']=="gagal") {
			echo "Login Gagal! username dan password salah!";
		}else if ($_GET['pesan']=="Logout"){
			echo "Anda Berhasil Logout";
		}else if ($_GET['pesan']=="belum_login"){
			echo "Anda harus login untuk melanjutkan di halaman ini";
		}
	}

	?>
	<form method="post" action="cek_login.php" onsubmit="retrun validasi()">
		<table border="0" cellspacing="10" align="center">
			<tr>
				<td><b>Username</b></td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan Username" size="50" maxlength="30" autocomplete="off" autofocus></td>
			</tr>
			<tr>
				<td><b>Password</b></td>
				<td>:</td>
				<td><input type="Password" name="password" placeholder="Masukkan Password" size="50" maxlength="30" autocomplete="off" autofocus></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Login" ></td>
			</tr>
		</table>
		
	</form>

</body>
<script type="text/javascript">
	function validasi() {
		var username = document.getElementsBy("username").value;
		var password = document.getElementsBy("password").value;
		if (username !=""&&password!=""){
			retrun true;
		}else{
			alter('username dan password harus di isi');
			retrun false;

		}
	}
</script>
</html>