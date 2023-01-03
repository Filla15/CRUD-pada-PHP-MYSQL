<?php
	include('koneksi.php');
	$query= mysql_query("SELECT * FROM mahasiswa where nim='$_GET[nim]'");
	$row= mysql_fetch_array($query);
	echo"
	<form action='update.php' method='POST'>
	EDIT DATA MAHASISWA<br>
	NIM :<input type='text' name='nim' value='$row[nim]' readonly> <br>
	NAMA :<input type='text' name='nama' value='$row[Nama]'<br>
	PRODI :<input type='text' name='prodi' value='$row[prodi]'<br>
	<input type='submit' value='update data'><br>
	</form>";
 ?>