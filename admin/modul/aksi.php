<?php
	include "../include/koneksi.php";
	$module=$_GET[module];
	$act=$_GET[act];

	//delete data dalam database
	if(isset($module) AND $act=='hapus'){
		mysql_query("delete from ".$module." where id_".$module."='$_GET[id]'");
		header('location:server.php?module='.$module);
	}
	//bagian user
	//input user
	elseif ($module=='user' and $act=='input'){
		$id_login=$_POST[id_user];
		$id=mysql_query("select * from admin where id_user='$id_login'");
		$r=mysql_fetch_array($id);
		$cek=$r[id_user];
	if($id_login = $cek){
		print "<script>alert(\"user dengan nama $id_login sudah terdaftar, silahkan cek kembali !!!\");
		location.href = \"server.php?module=user$act=tambahuser\";</script>";
	}
	elseif (empty($_POST[id_user])) {
		print "<script>alert(\"username tidak boleh kosong!!!\";
		location.href = \"javascript:history.go(-1)\";</script>";
	}
	elseif (empty($_POST[password])) {
		print "<script>alert(\"password tidak boleh kosong!!!\";
		location.href = \"javascript:history.go(-1)\";</script>";
	}
	else{
		$pass=$_POST[password];
		mysql_query("insert into admin(id_user,password) values ('$_POST[id_user]','$pass')");
		header('location:server.php?module='.$module);
	}
	}
//update user
elseif ($module=='user' and $act=='update'){
	if(empty($_POST[id_user])){
		print "<script>alert(\"username tidak boleh kosong !!!\");
		location.href = \"javascript:history.go(-1)\";</script>";
	}
	else{
		//apabila password tidak dirubah
		if(empty($_POST[password])){
			mysql_query("update user set id_user='$_POST[id_user]',password='$pass' where id_user='$_POST[id]'");
		}
		header('location:server.php?module='.$module);
	}
}
?>