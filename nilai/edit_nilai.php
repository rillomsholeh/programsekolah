<?php
include "../include/koneksi_db.php";
include "../nilai/link.php";
$id_nilai		= isset($_GET['id_nilai']) ? $_GET['id_nilai'] : "";
if ($id_nilai=="") {
	echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=nilai'>";
} else {

	$query=mysql_query("SELECT tbsiswa.idSiswa, tbsiswa.nama,tbsiswa.kelas, tbmatrik.idSiswa, tbmatrik.Minat,tbmatrik.Nilai, tbmatrik.Psikotes FROM tbsiswa INNER JOIN tbmatrik ON tbsiswa.idSiswa=tbmatrik.idSiswa WHERE tbsiswa.idSiswa='$id_nilai'", $konek);
	$hasil=mysql_fetch_array($query);
	$nama=$hasil['nama'];
	$jabatan=$hasil['kelas'];	
	$nilai1=$hasil['Minat'];
	$nilai2=$hasil['Nilai'];
	$nilai3=$hasil['Psikotes'];
?>
<form method="post" action="?page=act_edit_nilai">
<input type="hidden" name="id_nilai" value="<?php echo $id_nilai; ?>">
<table class="table-data" width=100% border=1>
<tr><td colspan="2" class="head-data">Edit Data</td></tr>
<tr><td class="pinggir-data">Nama Calon</td><td class="pinggir-data"><input type="text" name="nama" value="<?php echo $nama; ?>"></td></tr>
<tr><td class="pinggir-data">Kelas</td><td class="pinggir-data"><input type="text" name="kelas" value="<?php echo $kelas; ?>"></td></tr>
<tr><td class="pinggir-data">Minat</td><td class="pinggir-data"><input type="text" name="nilai1" value="<?php echo $nilai1; ?>"></td></tr>
<tr><td class="pinggir-data">Nilai</td><td class="pinggir-data"><input type="text" name="nilai2" value="<?php echo $nilai2; ?>"></td></tr>
<tr><td class="pinggir-data">Psikotes</td><td class="pinggir-data"><input type="text" name="nilai3" value="<?php echo $nilai3; ?>"></td></tr>
<tr><td colspan="2" align="center" class="head-data">
<input type="submit" value=" Edit ">
</td></tr>
</table>
</form>
<?php } ?>
