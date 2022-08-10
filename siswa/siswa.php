

<?php 


if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        JADWAL DRIVER BKKBN
      </h1>
      <ol class="breadcrumb">
        <li><a href="excelRekap/spread.php?filename=RekapDriver.xlsx"><button type="button" class="btn btn-success" name=""> <i class="fa fa-folder-open"></i> DOWNLOAD LAPORAN</button></a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
                    
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <a href="index.php?hal=tambah_siswa">
              <input type="button" value="Tambah" class="btn btn-primary" name="">
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Kendaraan</th>
                  <th>Tujuan</th>
                  <th>Bidang</th>
                  <th>keterangan</th>
                  <th>Tanggal Berangkat</th>
                  <th>Tanggal Datang</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
<?php
include "koneksi.php";
$hasil=mysqli_query($mysqli,"select * from driver ORDER BY nama ASC");
$no=1;
while($row=mysqli_fetch_array($hasil)){
?>
                <tr>
                  <td><?php echo $no; $no++;?></td>
                  <td><?php echo $row['nama']?></td>
                  <td><?php echo $row['kendaraan']?></td>
                  <td><?php echo $row['tujuan']?></td>
                  <td><?php echo $row['bidang']?></td>
                  <td><?php echo $row['keterangan']?></td>
                  <td><?php echo $row['tanggalA']?></td>
                  <td><?php echo $row['tanggalB']?></td>
                  <td><?php echo $row['setatus']?></td>
                  
                  <td><a href="index.php?hal=edit_siswa&id=<?php echo $row['id']?>"><button type="button" class="btn btn-warning" name=""> <i class="fa fa-pencil"></i> Edit</button></a>
                    <a onclick="return confirm('Anda Yakin...?')" href="siswa/hapus_siswa.php?id=<?php echo $row['id']?>">
                    <button type="button" class="btn btn-danger" name=""> <i class="fa fa-trash"></i> Hapus</button></a>
                  </td>
                </tr>
<?php } ?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>