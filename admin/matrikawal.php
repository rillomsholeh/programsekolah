<?php
	//Gunakan Koneksi
	include "../include/koneksi_db.php"; //memanggil file koneksi_db.php

	$bobot = array(0.40, 0.35, 0.25);

	//Buat fungsi tampilkan nama
	function getNama($id){
		$q =mysql_query("SELECT * FROm tbsiswa where idSiswa = '$id'");
		$d = mysql_fetch_array($q);
		return $d['nama'];
	}
	
	//Setelah bobot terbuat select semua di tabel Matrik
	$sql = mysql_query("SELECT * FROM tbmatrik");
	//Buat tabel untuk menampilkan hasil
	echo "
	<table class=table-data>
		<tr>
			<td class=head-data>No</td><td class=head-data>Nama</td><td class=head-data>Minat</td><td class=head-data>Nilai</td><td class=head-data>Psikotes</td>
		</tr>
		";
	$no = 1;
	while ($dt = mysql_fetch_array($sql)) {
		echo "<tr>
			<td class='td-data'>$no</td><td class='td-data'>".getNama($dt['idSiswa'])."</td><td class='td-data'>$dt[Minat]</td>
			<td class='td-data'>$dt[Nilai]</td><td class='td-data'>$dt[Psikotes]</td>
		</tr>";
	$no++;
	}
	echo "</table>";

	//Lakukan Normalisasi dengan rumus pada langkah 2
	//Cari Max atau min dari tiap kolom Matrik
	$crMax = mysql_query("SELECT max(Minat) as maxK1, 
						max(Nilai) as maxK2,
						max(Psikotes) as maxK3,
			FROM tbmatrik");
	$max = mysql_fetch_array($crMax);

	
?>
	
