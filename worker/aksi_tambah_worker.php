<?php
$nama=$_POST['nama'];

include("../koneksi.php");

$sql="insert into listdriver(nama) values('$nama')";

$query=mysqli_query($mysqli,$sql);
if ($query) {
	header("location:../index.php?hal=worker&pesan=berhasil_tambah");
}else{
	header("location:../index.php?hal=worker&pesan=gagal_tambah");
	echo mysqli_error();
	echo "$sql";
}


