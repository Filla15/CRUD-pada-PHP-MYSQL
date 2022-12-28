</!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<h1 aligh=center>Laporan Data Mahasiswa</h1><br>
	<a href="tambah4.php">Tambah Data</a>
	<table border=1>
		<tr>
			<th>NO</th><th>NIM</th><th>NAMA MAHASISWA</th><th>PRODI</th><th colspan=2 align=center>Aksi</th>
		</tr>
		<?php
			$no=0;
			include("koneksi.php");
			$query=mysql_query("select * from mahasiswa");
			while ($row=mysql_fetch_array($query)) {
				$no++;
		?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $row['nim']; ?></td>
					<td><?php echo $row['Nama']; ?></td>
					<td><?php echo $row['prodi']; ?></td>
					<td><?php echo "<a href='edit.php?nim=$row[nim]'>Edit</a>"?></td>
					<td><?php echo "<a href='hapus.php?nim=$row[nim]'>Hapus</a>"?></td>
				</tr>
				<?php } ?>
		</table>
	</body>
</html>