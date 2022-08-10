<?php
    if (isset($_GET['hal'])) {

        if ($_GET['hal']=='siswa') {
          include "siswa/siswa.php";
        }
        elseif ($_GET['hal']=='tambah_siswa') {
          include "siswa/tambah_siswa.php";
        }
        elseif ($_GET['hal']=='edit_siswa') {
          include "siswa/edit_siswa.php";
        }
        elseif ($_GET['hal']=='driver') {
          include "driver/driver.php";
        }
        elseif ($_GET['hal']=='tambah_driver') {
          include "driver/tambah_driver.php";
        }
        elseif ($_GET['hal']=='edit_driver') {
          include "driver/edit_driver.php";
        }
        elseif ($_GET['hal']=='worker') {
          include "worker/worker.php";
        }
        elseif ($_GET['hal']=='tambah_worker') {
          include "worker/tambah_worker.php";
        }
        elseif ($_GET['hal']=='edit_worker') {
          include "worker/edit_worker.php";
        }
        elseif ($_GET['hal']=='fungsi') {
          include "fungsi/fungsi.php";
        }
        elseif ($_GET['hal']=='tambah_fungsi') {
          include "fungsi/tambah_fungsi.php";
        }
        elseif ($_GET['hal']=='edit_fungsi') {
          include "fungsi/edit_fungsi.php";
        }
        else
        {
          include "home.php";
        }
    }else{
    include "home.php";
    }
?>