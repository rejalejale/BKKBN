<?php
include("../koneksi.php");
$sql="delete from rekapan ";
$query=mysqli_query($mysqli,$sql);
if ($query) {
	header("location:../index.php?hal=riwayat&pesan=berhasil_hapus");
}else{
	header("location:../index.php?hal=riwayat&pesan=gagal_hapus");
	echo mysqli_error();
	echo "$sql";
}
?>