<?php
	include "../include/koneksi.php";
	include "../include/koneksi_tgl.php";

	//bagian home admin
	if($_GET[module]=='home'){
		echo "<h2> Halaman utama </h2>
		<p class=welcome>Selamat Datang <b>$_SESSION[namauser]</b>,silahkan klik menu pilihan disebelah kiri untuk mengelola konten website<br> Terima Kasih</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p class=jam align=right>Login hari ini: ";
		echo " | ";
		echo date("H:i:s");
		echo "</p>";
	}
	//bagian user
	elseif ($_GET[module]=='user') {
		include "modul/user.php";
	}
	//bagian galeri
	elseif ($_GET[module]=='galeri') {
		include "modul/galeri.php";
	}
	//bagian bukutamu
	elseif ($_GET[module]=='bukutamu') {
		include "bukutamu.php";
	}
	//apabila modul tidak ditemukan
	else{
		echo "<p><b>MODUL BELUM ADA</b></p>";
	}
?>