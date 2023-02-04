<?php
include "koneksi.php";
?>
<head>
	<style>
	.dropbtn {
		background-color: white;
		color: red;
		padding: 16px;
		font-size: 16px;
		border: none;
		cursor: pointer;
	}
	.dropdown {
		position: relative;
		display: inline-block;
	}

	.dropdown-content {
		display: none;
		position: absolute;
		right: 0;
		background-color: gray
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0,2);
	}

	.dropdown-content a{
		color: gray;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
	}
	.dropdown-content a:hover {
		background-color: #f1f1f1
	}

	.dropdown:hover
	.dropdown-content {
		display: block;
	}

	.dropdown:hover
	.dropbtn{
		background-color: #FF99CC
	}

	body {
		background-color: rgb(34, 193, 195);
		background: linear-gradient(90deg, rgba(0, 255, 0, 1 )0px, rgba(240,45,253,1)100%);
	}	
		
	</style>
<body align="center" style="background-color: pink">
	<p align="center">Halo Selamat Datang</p>
	<hr>
	<div class="dropdown" style="float:left;" align="center">
			<button class="dropbtn">Beranda</button>
			<div class="dropdown-content" style="left:0;">
				<a href=index.php> Log out </a>
			</div>
		</div>
		<div class="dropdown" style="float: left;" align="center">
			<button class="dropbtn">Event</button>
			<div class="dropdown-content" style="left: 0;">
				<a href="admin.php">Show Event</a>
				<a href="tambah_event.php">Tambah Event</a>
			</div>
		</div>
		<div class="dropdown" style="float: left;" align="center">
			<button class="dropbtn">Peserta</button>
			<div class="dropdown-content" style="left: 0;">
				<a href="pendaftaran.php">Show Peserta</a>
			</div>
		</div>
</p>
<br>
<br>
<br>
<h2 align="center">DATA ADMIN</h2>
<p align="center"><a href="admin.php">+Tambah Siswa <a href="show_pendaftaran.php">+DATA PESERTA</a></a></p>

<table align="center" border="1">
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
				<a href="edit_event.php?id=<?php echo $hasil['id']; ?>">edit</a>
				<a href="hapus_admin.php?hapus&id=<?=$hasil['id']; ?>">hapus</a>

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