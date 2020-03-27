<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css.css">
	<style>
		body{
			background-color: #B0C4DE; padding-bottom: 30%; font-family: arial;
		}
		h5{
			padding-left: 300px;
		}
	</style>
	<title></title>
</head>
<body>
	<center>
		<img src="1.png" height="100" width="150">
		<h1>PENDATAAN BARANG TOKO KUCING MAKMUR</h1>
	</center>
	<nav>
    <ul>
        <li><a href="1.home.php">Home</a></li>
        <li><a href="2.entri.php">Entri Data</a></li>
        <li><a href="3.edit.php">Edit Data</a></li>
        <li><a href="4.delete.php">Hapus Data</a></li>
    </ul>
	</nav>
	<br>
	<center><h3>MENGHAPUS DATA BARANG</h3></center>
	<br><br>
	<h5>Klik pada Kolom Hapus untuk Menghapus...</h5>
	<center>
	<table class="table1">
		<thead>
			<tr>
				<th>KODE BARANG</th>
				<th>NAMA BARANG</th>
				<th>HARGA BARANG</th>
				<th>STOK BARANG</th>
				<th>HAPUS</th>
			</tr>
		</thead>
		<tbody>
	<?php
	include 'koneksi.php';
	$sql="SELECT * FROM toko";
	$query=mysqli_query($conn,$sql);
	while ($row=mysqli_fetch_array($query)) {
		?>
		<tr>
			<td align="center"><?php echo $row['kode']; ?></td>
			<td><?php echo $row['nama']; ?></td>
			<td align="right"><?php echo number_format($row['harga'],0,',','.'); ?></td>
			<td align="right"><?php echo $row['stok']; ?></td>
			<td><a href="4.1.delete1.php?edit=1&kode=<?php echo $row[0];?>">Klik disini</a></td>
		</tr>
		<?php
	}
	echo "</tbody>
	</table></form></center>";
	mysqli_free_result($query);
	mysqli_close($conn);
	?>
</body>
</html>