<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css.css">
	<style>
		body{
			background-color: #B0C4DE; font-family: arial;
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
	<center><h3>DATA BARANG YANG TERSEDIA DI TOKO</h3></center><br>
	<?php
	include 'koneksi.php';
	$sql="SELECT * FROM toko";
	$query=mysqli_query($conn,$sql);
	echo "<center><table class='table1'>
		<thead>
			<tr>
				<th>NO</th>
				<th>KODE BARANG</th>
				<th>NAMA BARANG</th>
				<th>HARGA BARANG</th>
				<th>STOK BARANG</th>
			</tr>
		</thead>
		<tbody>";
	$no=1;
	while ($row=mysqli_fetch_assoc($query)) {
		echo"<tr>
				<td align='center'>$no</td>
				<td align='center'>".$row['kode']."</td>
				<td>".$row['nama']."</td>
				<td align='right'>".number_format($row['harga'],0,',','.')."</td>
				<td align='right'>".$row['stok']."</td>
			</tr>";
		$no++;
	}
	echo "</tbody>
	</table></center>";
	mysqli_free_result($query);
	mysqli_close($conn);
	?>
</body>
</html>