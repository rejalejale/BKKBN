<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: utama.php");
}

?>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
            <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">          
        <li>
          <a href="index.php?hal=siswa">
            <i class="fa fa-dashboard	"></i> <span>Dashboard</span>
          </a>
        </li>
        
        <li>
          <a href="index.php?hal=driver">
            <i class="fa fa-car"></i> <span>List Kendaraan</span>
          </a>
        </li>
        <li>
          <a href="index.php?hal=worker">
            <i class="fa fa-id-card"></i> <span>List Driver</span>
          </a>
        </li>
        <li>
          <a href="index.php?hal=riwayat">
          <i class="fa fa-history"></i><span>Riwayat</span>
          </a>
        </li>
        <li>
          <a onclick="return confirm('Anda Yakin...?')" href="logout.php">
            <i class="fa fa-power-off"></i> <span>LOGOUT</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>