<?php
session_start();

include ("koneksi_db.php");

$username=$_POST['username'];
$password=$_POST['password'];

$sql = "select * from tbl_user where username='$username' AND password='$password'";
$result=mysqli_query($conn,$sql);

$cek = mysqli_num_rows($result);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	
	header("location:index1.php");
}else{
	header("location:index.html?pesan=gagal");
}
?>