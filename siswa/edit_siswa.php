<head>
<link rel="stylesheet" href="dist/css/skins/coba.css">
</head>

<div class="content-wrapper" style="min-height: 956px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        EDIT JADWAL
      </h1>
      <ol class="breadcrumb">
        
      </ol>
    </section>
<?php
include ("koneksi.php");
$sql="select * from driver where id='$_GET[id]' ";
$query=mysqli_query($mysqli, $sql);
$row=mysqli_fetch_array($query);
?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form edit jadwal</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="siswa/aksi_edit_siswa.php" method="POST">
              <div class="box-body">
              <div class="f">
                  <label>Driver</label>
                </div>
                <div Class="select-style">
                  <?php
                  include("database.php");
                  include("fetch-data.php");
                  ?>
                  <select name="nama">
                  <option>Pilih Driver</option>
                  <?php 
                  foreach ($options as $option) {
                  ?>
                  <option><?php echo $option['nama']; ?> </option>
                  <?php 
                  }
                  ?>
                  </select>
                </div>
                <div class="">
                	<label>Kendaraan</label>
                </div>
                <div Class="select-style">
                  <?php
                  include("database.php");
                  include("fetch-data2.php");
                  ?>
                  <select name="kendaraan">
                  <option>Pilih Kendaraan</option>
                  <?php 
                  foreach ($options as $option) {
                  ?>
                  <option><?php echo $option['model']; ?> </option>
                  <?php 
                  }
                  ?>
                  </select>
                </div>
                <div class="form-group">
                	<label>Tujuan</label>
                	<textarea class="form-control" name="tujuan"><?php echo $row['tujuan'];?></textarea>
                </div>
                <div class="form-group">
                	<label>Bidang</label>
                	<textarea class="form-control" name="bidang"><?php echo $row['bidang'];?></textarea>
                </div>
                <div class="form-group">
                	<label>Keterangan</label>
                	<textarea class="form-control" name="keterangan"><?php echo $row['keterangan'];?></textarea>
                </div>
                <div class="form-group">
                	<label>Tanggal berangkat</label>
                	<input class="form-control" name="tanggalA" type="date" value="<?php echo $row['tanggalA'];?>">
                </div>
                <div class="form-group">
                	<label>Tanggal datang</label>
                	<input class="form-control" name="tanggalB" type="date" value="<?php echo $row['tanggalB'];?>">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                <button type="submit" class="btn btn-primary">Ubah</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>