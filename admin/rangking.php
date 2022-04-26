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


	//Lakukan Normalisasi dengan rumus pada langkah 2
	//Cari Max atau min dari tiap kolom Matrik
	$crMax = mysql_query("SELECT max(Minat) as maxK1, 
						max(Nilai) as maxK2,
						max(Psikotes) as maxK3, 
			FROM tbmatrik");
	$max = mysql_fetch_array($crMax);

	//Hitung Normalisasi tiap Elemen
	$sql2 = mysql_query("SELECT * FROM tbmatrik");
	//Buat tabel untuk menampilkan hasil


	//Proses perangkingan dengan rumus langkah 3
	$sql3 = mysql_query("SELECT * FROM tbmatrik");
	//Buat tabel untuk menampilkan hasil
	echo "
	<table class=table-data>
		<tr>
			<td class=head-data>No</td><td class=head-data>Nama</td><td class=head-data>Rangking</td>
		</tr>
		";
	$no = 1;
	//Kita gunakan rumus (Normalisasi x bobot)
	while ($dt3 = mysql_fetch_array($sql3)) {
		echo "<tr>
			<td class=td-data>$no</td><td class=td-data>".getNama($dt3['idSiswa'])."</td>
			<td class=td-data>"
			.round((($dt3['Minat']/$max['maxK1'])*$bobot[0])+
			(($dt3['Nilai']/$max['maxK2'])*$bobot[1])+
			(($dt3['Psikotes']/$max['maxK3'])*$bobot[2]),2)."</td>
		</tr>";
	$no++;
	}
	echo "</table>";

?>	