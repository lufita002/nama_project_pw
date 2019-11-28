<?php
session_start();

//apabila user yang mengakses tidak sah
if(empty($_SESSION[namauser]) and empty($_SESSION[passuser])){
	echo "<center> untuk mengakses halaman ini, anda harus login terlebih dahulu<br>";
	echo "<a href=index.php><b>LOGIN</b></a></center>";
}
//apabila user yang mengakses sah
else{
?>

	<html>
	<head>
		<title>.:: Halaman Utama Administrator ::.</title>
		//contoh script untuk memanggil file *.css
		<link href="../include/style_admin.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td colspan="2" align="left" valign="top" background="../pictures/12.jpg">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="57%"></td>
				<td width="14%" valign="bottom">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td align="right" class="judul">
				<a href="server.php?module=home">Beranda</a> | <a href="server.php?module=gantipwd&id=<? echo"$_SESSION[namauser]";?>">Ganti Password</a> | <a href="logout.php">Logout</a>$nbsp;</td>
			</tr>
		</table>
				</td>
			</tr>
						
		</table>
				</td>
			</tr>
			<tr>
				<td width="200" valign="top" bgcolor="#CFD7C0" id="menu">
					<? include "menu.php"; ?>
					
				</td>
				<td align="left" valign="top" bgcolor="$FEFDF7" class="text" id="content"><? include "konten.php"; ?>
					
				</td>
			</tr>
			<tr>
			<td height="40" colspan="2" align="center" valign="middle" background="../images/background_1.jpg"><span class="kecil">Copyright <b> Polindra</b> &copy; 2011.All right reserved<br><span class="style_text">Design By <a href="http://www.polindra.ac.id" target="_blank"> Training center TI Polindra</a></span></span></td>
		</tr>
		</table>
	</body>
	</html>
<?
}
?>