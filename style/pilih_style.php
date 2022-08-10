<?php
    if (isset($_GET['hal'])) {

        if ($_GET['hal']=='siswa') {
          include "style/style_tabel.php";
        }
        elseif ($_GET['hal']=='tambah_siswa') {
          include "style/style2.php";
        }
        elseif ($_GET['hal']=='edit_siswa') {
          include "style/style2.php";
        }
        elseif ($_GET['hal']=='driver') {
          include "style/style_tabel.php";
        }
        elseif ($_GET['hal']=='tambah_driver') {
          include "style/style2.php";
        }
        elseif ($_GET['hal']=='edit_driver') {
          include "style/style2.php";
        }
        elseif ($_GET['hal']=='worker') {
          include "style/style_tabel.php";
        }
        elseif ($_GET['hal']=='tambah_worker') {
          include "style/style2.php";
        }
        elseif ($_GET['hal']=='edit_worker') {
          include "style/style2.php";
        }
        elseif ($_GET['hal']=='fungsi') {
          include "style/style_tabel.php";
        }
        elseif ($_GET['hal']=='tambah_fungsi') {
          include "style/style2.php";
        }
        elseif ($_GET['hal']=='edit_fungsi') {
          include "style/style2.php";
        }
        else
        {
          include "style/style1.php";
        }
    }else{
    include "style/style1.php";
    }
?>