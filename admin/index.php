<?php 
session_start();
include "../include/fungsi2.php";
$sesi	= $_SESSION['sesi'];
if($_SESSION['sesi'] == "" || $_SESSION['sesi']  == NULL || empty($_SESSION['sesi'])){
	echo "<center><font color='red'>Anda tidak diperkenankan memasuki halaman ini, jika anda belum <a href='../index.php'>login</a> !!</font></center>";
	exit;
}
function logout() {
	session_start();
	session_destroy();
	echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
}
	$utama="<center><span class='s'>Selamat Datang di MAN Serpong </span></center>";
?>
<html>
<head>
<title>:: Halaman Utama ::</title>
<link rel="stylesheet" type="text/css" href="../include/style.css" />
</head>

<body bgcolor="#006600">
<table border=0 width="100%" bgcolor="#EFBC9B" cellpadding=2 cellspacing=2 >
	<tr>
		<td colspan=2><marquee onMouseOver="this.stop();" behavior="alternate" onMouseOut="this.start();">Halaman Administrator</marquee>
		</td>
	</tr>
	<tr>
	<td width="20%" valign="top">
	<h3>Menu</h3>
	<div class="kotak">
	<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="?page=inputnilai">Input Data Siswa</a></li>
	<li><a href="?page=matrikawal">Data Siswa</a></li>
	<li><a href="?page=normalisasi">Data Kriteria</a></li>
	<li><a href="?page=rangking">Hasil Penjurusan</a></li>
	<li><a href="?page=logout" onClick="return confirm('Anda yakin ingin Keluar ?')" >Log Out</a></li>
	</ul>
	</td>
	<td width="80%" valign="top">
	<h3>
		<?php 
			$page	= isset($_GET['page']) ? $_GET['page'] : "";
			
			if(strstr($page,"inputnilai")) {
			$j="Input Data Siswa";
			} else if(strstr($page,"matrikawal")) {
			$j="Data Siswa";
			} else if(strstr($page,"normalisasi")) {
			$j="Data Kriteria";
			} else if(strstr($page,"rangking")) {
			$j="Hasil Penjurusan";
			} else {
			$j="Menu Utama";
			} 
			echo $j;
		?>
			</h3>
			<div class="tengah">
		<?php 
	//======== akhir menu transaksi =========
		//menu user
	if($page=="inputnilai") {
	include "../nilai/lihat_nilai.php";
	} else if($page=="input_nilai") {
	include "../nilai/input_nilai.php";
	} else if($page=="act_input_nilai") {
	include "../nilai/act_input_nilai.php";
	} else if($page=="edit_nilai") {
	include "../nilai/edit_nilai.php";
	} else if($page=="act_edit_nilai") {
	include "../nilai/act_edit_nilai.php";
	} else if($page=="act_hapus_nilai") {
	include "../nilai/act_hapus_nilai.php";
	} else if($page=="matrikawal") {
	include "matrikawal.php";
	} else if($page=="normalisasi") {
	include "normalisasi.php";
	} else if($page=="rangking") {
	include "rangking.php";
	}else if($page=="logout") {
		logout();
	} else {
		echo $utama;
	}
	?>
	</div>
	</td>
	
	</tr>
</table>
