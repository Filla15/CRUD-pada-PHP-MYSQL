<!DOCTYPE html>
<html>
<head>
	<title>Input Data Mahasiswa</title>
</head>
<body>
	FORM INPUT DATA MAHASISWA
		<form action ="simpan4.php" method="post">
			<table>
				<tr><td>NIM</td><td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr><td>NAMA</td><td>:</td>
				<td><input type="text" name="Nama"></td>
			</tr>
			<tr><td>PRODI</td><td>:</td>
				<td><input type="text" name="prodi"></td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<input type="submit" value="simpan data">
					<input type="reset" value="batal">
				</td>
			</tr>
			</table>
		</form>
</body>
</html>