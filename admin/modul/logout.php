<?php
	session_start();
	include "../include/koneksi.php";
	if(empty (empty($_SESSION[namauser]))){
		exit("<script>window.alert('Anda harus login terlebih dahulu');
			window.location='index.php';</script>");
	}
	session_destroy();
	exit ("<script>window.alert('Thank you');
		window.location='index.php';</script>");
	?>