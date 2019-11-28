<?php
	$server= "localhost";
	$username = "root";
	$password = "";
	$database = "coba_db";

	//koneksi dan pilih database di server
	$db = mysqli_connect($server,$username,$password) or die("gagal ");
	mysqli_select_db($db,$database) or die ("database tidak ditemukan");
	?>