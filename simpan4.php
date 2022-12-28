<?php 
		$nim    =$_POST['nim'];
		$Nama   =$_POST['Nama'];
		$prodi  =$_POST['prodi'];
		
	include('koneksi.php');
	$simpan = mysql_query("INSERT INTO mahasiswa VALUES ('$nim','$Nama','$prodi')");
	header('location:tampil.php');



 ?>