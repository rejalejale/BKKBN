<?php
$nama=$_POST['nama'];
$kendaraan=$_POST['kendaraan'];
$tujuan=$_POST['tujuan'];
$bidang=$_POST['bidang'];
$keterangan=$_POST['keterangan'];
$tanggalA=$_POST['tanggalA'];
$tanggalB=$_POST['tanggalB'];

include("../koneksi.php");

$sql="insert into driver(nama,kendaraan,tujuan,bidang,keterangan,tanggalA,tanggalB,setatus) values('$nama','$kendaraan','$tujuan','$bidang','$keterangan','$tanggalA','$tanggalB','INACTIVE')";

$query=mysqli_query($mysqli,$sql);
if ($query) {
	header("location:../index.php?hal=siswa&pesan=berhasil_tambah");
}else{
	header("location:../index.php?hal=siswa&pesan=gagal_tambah");
	echo mysqli_error();
	echo "$sql";
}


