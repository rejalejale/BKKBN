<?php

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Rekapan Driver" . date('Y-m-d') . ".xls");

$mysqli=mysqli_connect("localhost","root","","db_siswa");

$sql = "SELECT * FROM rekapan";
if ($result = $mysqli->query($sql)) {
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Nama</th>";
        echo "<th>Kendaraan</th>";
        echo "<th>Tujuan</th>";
        echo "<th>Bidang</th>";
        echo "<th>Keterangan</th>";
        echo "<th>TanggalA</th>";
        echo "<th>TanggalB</th>";
        echo "</tr>";
        while ($row = $result->fetch_array()) {
            echo "<tr>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['kendaraan'] . "</td>";
            echo "<td>" . $row['tujuan'] . "</td>";
            echo "<td>" . $row['bidang'] . "</td>";
            echo "<td>" . $row['keterangan'] . "</td>";
            echo "<td>" . $row['tanggalA'] . "</td>";
            echo "<td>" . $row['tanggalB'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        $result->free();
    } else {
        echo "Data tidak tersedia.";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

$mysqli->close();
?>
