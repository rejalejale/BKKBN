<?php
$model=$_POST['model'];

include("../koneksi.php");

$sql="insert into listKendaraan(model) values('$model')";

$query=mysqli_query($mysqli,$sql);
if ($query) {
	header("location:../index.php?hal=driver&pesan=berhasil_tambah");
}else{
	header("location:../index.php?hal=driver&pesan=gagal_tambah");
	echo mysqli_error();
	echo "$sql";
}


