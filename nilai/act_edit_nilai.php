<?php
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/config.php"; //memanggil file fungsi.php
$id_nilai	  = $_POST['id_nilai'];
$nama = $_POST['nama'];
$jabatan = $_POST['kelas'];
$nilai1 = $_POST['nilai1'];
$nilai2 = $_POST['nilai2'];
$nilai3 = $_POST['nilai3'];
$query = mysql_query("UPDATE tbcalon SET nama='$nama', kelas='$kelas' WHERE idSiswa='$id_nilai'", $konek);
$query = mysql_query("UPDATE tbmatrik SET Minat='$nilai1', Nilai='$nilai2', Psikotes='$nilai3' WHERE idSiswa='$id_nilai'", $konek);
echo "<meta http-equiv='refresh' content='0; url=?page=inputnilai'>";

?>
