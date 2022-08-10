<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: utama.php");
}

?>
<?php
$id=$_POST['id'];
$nama=$_POST['nama'];
$kendaraan=$_POST['kendaraan'];
$tujuan=$_POST['tujuan'];
$bidang=$_POST['bidang'];
$keterangan=$_POST['keterangan'];
$tanggalA=$_POST['tanggalA'];
$tanggalB=$_POST['tanggalB'];

include("../koneksi.php");

$sql="UPDATE driver SET nama = '$nama',kendaraan = '$kendaraan',tujuan = '$tujuan',bidang = '$bidang',keterangan = '$keterangan',tanggalA = '$tanggalA',tanggalB = '$tanggalB' WHERE id = '$id'";

$query=mysqli_query($mysqli,$sql);
if ($query) {
	header("location:../index.php?hal=siswa&pesan=berhasil_edit");
}else{
	header("location:../index.php?hal=siswa&pesan=gagal_edit");
	echo mysqli_error();
	echo "$sql";
}


