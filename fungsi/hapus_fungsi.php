<?php
$id=$_POST['id'];
$setatus=$_POST['setatus'];

include("../koneksi.php");

$sql="UPDATE driver SET setatus = 'INACTIVE' where id='$_GET[id]'";
$query=mysqli_query($mysqli,$sql);
$sql1="INSERT INTO rekapan
	  SELECT *
	  FROM driver where id='$_GET[id]'";
$query1=mysqli_query($mysqli,$sql1);
$sql2="delete from driver where id='$_GET[id]'";
$query2=mysqli_query($mysqli,$sql2);
if ($query) {
	header("location:../index2.php?hal=fungsi&pesan=berhasil_hapus");
}else{
	header("location:../index2.php?hal=fungsi&pesan=gagal_hapus");
	echo mysqli_error();
	echo "$sql";
}
?>


