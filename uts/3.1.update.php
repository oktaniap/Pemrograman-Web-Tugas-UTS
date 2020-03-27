 <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css.css">
	<style>
		body{
			background-color: #B0C4DE; font-family: arial;
		}
		div{
			padding-left: 30%;
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
</body>
</html>
<?php
include 'koneksi.php';
if ($_GET['edit']==1) {
	$kode=$_GET['kode'];
	$nama=$_GET['nama'];
	$harga=$_GET['harga'];
	$stok=$_GET['stok'];
	echo "<center><h3>EDIT DATA BARANG</h3>
	<br><br>Kode Barang:".$kode."
	<br><br>Tuliskan Perubahan Langsung di Tabel...
	<form method='POST' action='3.2.update1.php'>
		<table class='table1'>
			<tr>
				<th colspan='4'>FORM EDIT</th>
			</tr>
			<tr align='center'>
				<td>NAMA BARANG</td>
				<td>HARGA BARANG</td>
				<td>STOK BARANG</td>
			</tr>
			<tr>
				<td><input type='text' name='nm' value='".$nama."'></td>
				<td align='right'><input type='text' name='hrg' value='".$harga."'></td>
				<td align='right'><input type='text' name='stk' value='".$stok."'></td>
				<input type='hidden' name=kode value='".$kode."'>
			</tr>
		</table>
		<br><button type='Submit'class='tombol'>UPDATE DATA</button>
	</form>
	<br>
	<br></center>";
}	
mysqli_close($conn);
?>