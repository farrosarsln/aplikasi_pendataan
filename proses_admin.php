<?php
include "koneksi.php";
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$informasi = $_POST['informasi'];
$insert =mysqli_query($mysqli,"insert into admin set nama='$nama',tanggal='$tanggal',informasi='$informasi'");
if ($insert){
	header('location:show_admin.php?status=sukses');
}else{
	header('location:admin.php?status:gagal');
}
?>