<?php
include 'koneksi.php';
$kode=$_POST['kode'];
$nama=$_POST['nm'];
$harga=$_POST['hrg'];
$stok=$_POST['stk'];
$sql="UPDATE toko SET kode='$kode', nama='$nama', harga='$harga', stok='$stok' WHERE kode='$kode'";
if(mysqli_query($conn,$sql)){
	echo "<script>alert('Update Berhasil')
    location.replace('3.edit.php')</script>";
} else{
	echo "<script>alert('Update Gagal')
    location.replace('3.edit.php')</script>";
}
mysqli_close($conn);
?>