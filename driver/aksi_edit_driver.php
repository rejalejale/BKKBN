<?php
$id=$_POST['id'];
$model=$_POST['model'];

include("../koneksi.php");

$sql="UPDATE listKendaraan SET model = '$model' WHERE id = '$id'";

$query=mysqli_query($mysqli,$sql);
if ($query) {
	header("location:../index.php?hal=driver&pesan=berhasil_edit");
}else{
	header("location:../index.php?hal=driver&pesan=gagal_edit");
	echo mysqli_error();
	echo "$sql";
}


