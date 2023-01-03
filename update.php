<?php
	include('koneksi.php');
	$update = mysql_query("update mahasiswa set
		Nama = '$_POST[nama]',
		prodi = '$_POST[prodi]'
		where nim = '$_POST[nim]'
		");
	header('location:tampil.php');

?>