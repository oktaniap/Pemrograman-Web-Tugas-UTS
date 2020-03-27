<?php
include'koneksi.php';
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];
$sql="INSERT INTO toko (kode,nama,harga,stok) VALUES ('$kode','$nama','$harga','$stok')";
if(mysqli_query($conn,$sql)){
	echo "<script>alert('Insert Berhasil')
    location.replace('2.entri.php')</script>";
} else{
	echo "<script>alert('Insert Gagal')
    location.replace('2.entri.php')</script>";
}
mysqli_close($conn);
?>