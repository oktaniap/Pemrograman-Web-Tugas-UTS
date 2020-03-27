<?php
include 'koneksi.php';
$kode=$_GET['kode'];
$sql="DELETE FROM toko WHERE kode='$kode'";
if(mysqli_query($conn,$sql)){
	echo "<script>alert('Hapus Berhasil')
    location.replace('4.delete.php')</script>";
} else{
	echo "<script>alert('Hapus Gagal')
    location.replace('4.delete.php')</script>";
}
mysqli_close($conn)
?>