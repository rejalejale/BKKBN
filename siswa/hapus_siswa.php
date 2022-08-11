<?php
include("../koneksi.php");
$sql1="INSERT INTO rekapan
	  SELECT *
	  FROM driver where id='$_GET[id]'";
$query1=mysqli_query($mysqli,$sql1);
$sql="delete from driver where id='$_GET[id]'";
$query=mysqli_query($mysqli,$sql);
if ($query) {
	header("location:../index.php?hal=siswa&pesan=berhasil_hapus");
}else{
	header("location:../index.php?hal=siswa&pesan=gagal_hapus");
	echo mysqli_error();
	echo "$sql";
}
?>