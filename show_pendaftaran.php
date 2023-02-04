<?php
include "koneksi.php";
?>
<body bgcolor="purple">
	<p align="center">Halo Selamat Datang</p>
	<hr>
	<p align="center">
	<a href="tambah_event.php">Event|</a>
	<a href="index.php">Logout</a>
	<hr>
</p>
<h2 align="center">DATA PESERTA</h2>
<p align="center"><a href="pendaftaran.php">+Tambah Pendaftaran</a></p>
<table align="center" border="1" cellpadding="10" cellspacing="5" >
	<tr>
		<td align="center">ID</td>
		<td align="center">NAMA</td>
		<td align="center">TANGGAL</td>
		<td align="center">INFORMASI</td>
		<td align="center">OPSI</td>
	</tr>
	<?php

	$tampil = mysqli_query($mysqli, "select * from admin");
	$no = 1;
	while($hasil = mysqli_fetch_array($tampil)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $hasil['nama']; ?></td>
			<td><?php echo $hasil['tanggal']; ?></td>
			<td><?php echo $hasil['informasi']; ?></td>
			<td>
				<a href="edit_pendaftaran.php?id=<?php echo $hasil['id']; ?>">edit</a>
				<a href="hapus_admin_pendaftaran.php?hapus&id=<?=$hasil['id']; ?>">hapus</a>

			</td>
		</tr>
		<?php
	}
	?>
</table>
<p align="center"><a href="login.php">Logout</a></p>
<br>
<hr>
<p align="center">
<div>Copy right &copy; 2023 | SMK Luqman Al-Hakim Kudus</div></p>
</body>
</html>