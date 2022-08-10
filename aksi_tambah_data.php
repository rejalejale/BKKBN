<?php
$username=$_POST['username'];

include("config.php");

$sql="insert into masuk(username) values('$username')";

$query=mysqli_query($mysqli,$sql);
if ($query) {
	header("location:../index2.php?hal=fungsi&pesan=berhasil_tambah");
}else{
	header("location:../index2.php?hal=fungsi&pesan=gagal_tambah");
	echo mysqli_error();
	echo "$sql";
}


