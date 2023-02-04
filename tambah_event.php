<html>
<head>
	<title>tambah event</title>
</head>

<body bgcolor="pink">
	<h2>|selamat datang di halaman pendaftaran|</h2>
	<hr>

	<fieldset>
		<legend><h2>Tambah Event</h2></legend>
		<form action="proses_tambah_event.php" method="post">

			<table>
				<tr>
					<td>Nama event:</td>
					<td><input type="text" name="nama" placeholder="masukan event..." required></td>
				</tr>
				<tr>
					<td>tanggal event:</td>
					<td><input type="date" name="tanggal" title="masukan tanggal..." required></td>
				</tr>
				<tr>
					<td>informasi tanggal:</td>
					<td><textarea name="informasi" style="width: 645px; height: 275px;" placeholder="masukan informasi..." required></textarea></td>
				</tr>
				<tr>
					<td><input type="submit" name="simpan" value="simpan"></td>
				</tr>
			</table>
		</form>
	</fieldset>
	<br>
	<hr>
	<p>Copy right &copy; SMK LUKMAN AL HAKIM KUDUS</p>
</body>
</html>