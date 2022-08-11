<?php
include("../koneksi.php");
$sql="delete from rekapan where id='$_GET[id]'";
$query=mysqli_query($mysqli,$sql);
if ($query) {
	header("location:../index.php?hal=riwayat&pesan=berhasil_hapus");
}else{
	header("location:../index.php?hal=riwayat&pesan=gagal_hapus");
	echo mysqli_error();
	echo "$sql";
}
?>