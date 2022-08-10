
<?php
$id=$_POST['id'];
$setatus=$_POST['setatus'];

include("../koneksi.php");

$sql="UPDATE driver SET setatus = 'IN PROGRESS' where id='$_GET[id]'";
$query=mysqli_query($mysqli,$sql);
if ($query) {
	header("location:../index2.php?hal=fungsi&pesan=berhasil_hapus");
}else{
	header("location:../index2.php?hal=fungsi&pesan=gagal_hapus");
	echo mysqli_error();
	echo "$sql";
}
?>


