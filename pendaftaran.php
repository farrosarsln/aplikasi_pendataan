<html>
<head>
	<title>Pendaftaran</title>
</head>
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
		background: linear-gradient(90deg, rgba(199, 21, 133, 1 )0px, rgba(25, 25, 112, 1 )100%);
	}	
		
	</style>
<body align="center" style="background-color: pink;">
	<h2 align="center">Selamat Datang Di Halaman Pendaftaran | SMK Luqman Al-Hakim Kudus</h2>
		<hr>
		<br>
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
		<br>
		<br>
		<br>
		<br>
		<br>
		<form method="POST" action="proses_pendaftaran.php">
			<fieldset>
				<legend><h2>Pendaftaran</h2></legend>
				<table cellpadding="10" cellspacing="5">
					<tr>
						<td>Nama :</td>
						<td><input type="text" name="nama" placeholder="masukan nama anda ..."></td>
					</tr>
					<tr>
						<td>Email :</td>
						<td><input type="email" name="email" placeholder="masukan email anda ..."></td>
					</tr>
					<tr>
						<td>Tanggal Lahir :</td>
						<td><input type="date" name="tanggal_lahir"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><textarea name="alamat"></textarea></td>
					</tr>
					<tr>
						<td><input type="submit" value="login" /></td>
					</tr>
				</table>
			</fieldset>
			<a href="login.php">LOGOUT</a>
			<br>
			<br>
			<hr>
			<div>Copy right &copy; 2023| SMK Luqman Al-Hakim Kudus</div>
			<hr>
		</form>
	</p>
</body>
</html>