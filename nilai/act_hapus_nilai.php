<?php
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/config.php"; //memanggil file fungsi.php
$id_nilai = isset($_GET['id_nilai']) ? $_GET['id_nilai'] : "";
$query = mysql_query("DELETE FROM tbmatrik WHERE idSiswa='$id_nilai'", $konek);
$query = mysql_query("DELETE FROM tbsiswa WHERE idSiswa='$id_nilai'", $konek);
echo "<meta http-equiv='refresh' content='0; url=?page=inputnilai'>";
?>
