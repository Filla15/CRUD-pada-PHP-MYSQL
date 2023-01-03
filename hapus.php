<?php 
	include('koneksi.php');
	$update =mysql_query("DELETE FROM mahasiswa where nim ='$_GET[nim]'");
	header('location:tampil.php');


 ?>