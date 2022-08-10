<div class="content-wrapper" style="min-height: 956px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        EDIT DATA KENDARAAN
      </h1>
      <ol class="breadcrumb">
        
      </ol>
    </section>
<?php
include ("koneksi.php");
$sql="select * from listKendaraan where id='$_GET[id]' ";
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
              <h3 class="box-title">Form edit data kendaraan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="driver/aksi_edit_driver.php" method="POST">
              <div class="box-body">
              <div class="form-group">
                	<label>Model (Plat Nomor)</label>
                	<textarea class="form-control" placeholder="Nama kendaraan (Plat Nomor)" name="model"><?php echo $row['model'];?></textarea>
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