<?php
$id=$_POST['id'];
$nama=$_POST['nama'];

include("../koneksi.php");

$sql="UPDATE listdriver SET nama = '$nama' WHERE id = '$id'";

$query=mysqli_query($mysqli,$sql);
if ($query) {
	header("location:../index.php?hal=worker&pesan=berhasil_edit");
}else{
	header("location:../index.php?hal=worker&pesan=gagal_edit");
	echo mysqli_error();
	echo "$sql";
}


