<?php
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/config.php"; //memanggil file fungsi.php
$nama = $_POST['nama'];
$jabatan = $_POST['kelas'];
$nilai1 = $_POST['nilai1'];
$nilai2 = $_POST['nilai2'];
$nilai3 = $_POST['nilai3'];
$query = mysql_query("INSERT INTO tbsiswa VALUES (null,'$nama','$kelas')", $konek);

$Perintah = mysql_query("SELECT * FROM tbsiswa ORDER BY idSiswa DESC");
$Jumlah = mysql_num_rows($Perintah);	
$DataMasuk = mysql_fetch_array($Perintah);
$Jumlah = $DataMasuk['idSiswa'];
$query1 = mysql_query("INSERT INTO tbmatrik VALUES (null, '$Jumlah', '$nilai1', '$nilai2', '$nilai3')", $konek);
echo "<meta http-equiv='refresh' content='0; url=?page=inputnilai'>";

?>
