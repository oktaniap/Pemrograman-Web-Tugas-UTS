<?php
$conn=mysqli_connect('localhost','root','','uts_web');
if (mysqli_connect_error()){
	echo "Connection failed: ".mysqli_connect_error();
	exit();	
} 
?>