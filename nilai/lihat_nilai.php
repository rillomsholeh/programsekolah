<?php

include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
//include "../include/config.php"; //memanggil file fungsi.php
include "../nilai/link.php";

$query=mysql_query("SELECT tbsiswa.idSiswa, tbsiswa.nama, tbmatrik.idSiswa, tbmatrik.Minat,tbmatrik.Nilai, tbmatrik.Psikotes FROM tbsiswa, tbmatrik WHERE tbsiswa.idSiswa=tbmatrik.idSiswa", $konek);
?>

<table class="table-data" width=100% border=1>
<tr>
<td class="head-data">No</td>
<td class="head-data">Nama Siswa</td>
<td class="head-data">Minat</td>
<td class="head-data">Nilai</td>
<td class="head-data">Psikotes</td>
<td class="head-data">Edit</td>
<td class="head-data">Hapus</td>
</tr>
<?php
$no=0;
while ($hasil=mysql_fetch_array($query)) {
$no++;
echo "<tr><td class='td-data'>$no</td>
      <td class='td-data'>$hasil[nama]</td>
	  <td class='td-data'>$hasil[Minat]</td>
	  <td class='td-data'>$hasil[Nilai]</td>
	  <td class='td-data'>$hasil[Psikotes]</td>
	  <td class='td-data'><a href='?page=edit_nilai&id_nilai=$hasil[idSiswa]'>Edit</a></td>
	  <td class='td-data'><a href='?page=act_hapus_nilai&id_nilai=$hasil[idSiswa]' onclick='return confirm(\"Anda yakin ingin menghapus data ini ?\")'>Hapus</a></td></tr>";
}
?>
</table>