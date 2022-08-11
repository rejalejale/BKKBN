

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
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      <?php
include "koneksi.php";
$worker=mysqli_query($mysqli,"select nama from listdriver ORDER BY nama ASC");
$no=1;
while($kotak=mysqli_fetch_array($worker)){
  $name=$kotak['nama'];
  $hitung=mysqli_query($mysqli,"select * from driver where nama='$name'");
  $jumlah=mysqli_num_rows($hitung);
?>


                <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h><?php echo $kotak['nama']?></h3>

              <p><?php echo $jumlah?></p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
          </div>
        </div>
<?php } ?>
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
              <table id="example2" class="table table-bordered table-striped">
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

  <script>
    fuction myFunction 
  </script>