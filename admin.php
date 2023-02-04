<html>
<head>
	<title>Admin</title>
</head>
<body bgcolor="red purple">
	<p>Selamat Datang Di Halaman Admin | SMK Luqman Al-Hakim Kudus
		<br>
		<form method="POST" action="proses_admin.php">
			<fieldset>
				<legend><h2>Admin</h2></legend>
				<table>
					<tr>
						<td>Nama :</td>
						<td><input type="text" name="nama"></td>
					</tr>
					<tr>
						<td>Tanggal :</td>
						<td><input type="date" name="tanggal"></td>
					</tr>
					<tr>
						<td>Informasi</td>
						<td><textarea name="informasi"></textarea></td>
					</tr>
					<tr>
				<td><input type="submit" value="daftar" /></td>
			</tr>
		</table>
	</fieldset>
	<p><a href="show_admin.php">kembali</a>
	</p>
</form>
</p>
</body>