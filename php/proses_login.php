<?php
session_start();
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password' ");
$cek = mysqli_num_rows($login);
if($cek > 0){
 
$data = mysqli_fetch_assoc($login);
	if($data['hak_akses']=="Admin")
	{
		$_SESSION['username'] = $username;
		$_SESSION['hak_akses'] = "Admin";
		header("location:halaman_admin");
	}
	else if($data['hak_akses']=="Customer")
	{
		$_SESSION['username'] = $username;
		$_SESSION['hak_akses'] = "Customer";
		header("location:halaman_customer");	
	}
	else
	{
		header("location:../login?pesan=gagal");
	}	
}else{
	header("location:../login?pesan=gagal");
}
 
?>