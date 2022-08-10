<div class="content-wrapper" style="min-height: 956px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        EDIT DATA DRIVER
      </h1>
      <ol class="breadcrumb">
        
      </ol>
    </section>
<?php
include ("koneksi.php");
$sql="select * from listdriver where id='$_GET[id]' ";
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
              <h3 class="box-title">Form edit data driver</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="worker/aksi_edit_worker.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" placeholder="Enter Nama" name="nama" value="<?php echo $row['nama'];?>">
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