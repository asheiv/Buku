<?php

$msg = "";

if (isset($_POST['upload'])) {
	$target_folder = "images/".basename($_FILES['image']['name']);
	
	$db = mysqli_connect("localhost","root","","maker");
	
	
	$no_isbn = $_POST['isbn'];
	$nama_buku = $_POST['nama_buku'];
	$penulis = $_POST['penulis'];
	$penerbit = $_POST['penerbit'];
	$tanggal = $_POST['tanggal'];
	$harga = $_POST['harga'];
	$image = $_FILES['image']['name'];
	
	$sql = "INSERT INTO info_buku (no_isbn, nama_buku, penulis, penerbit, tanggal_terbit, harga_jual, image) VALUES('$no_isbn','$nama_buku','$penulis','$penerbit','$tanggal','$harga','$image')";
	mysqli_query($db, $sql);
	
	if(move_uploaded_file($_FILES['image']['tmp_name'], $target_folder )) {
		header("Location: halaman_admin.php?page=daftar_buku_admin");
	}else{
		$msg = "failed";
	}
}
 ?>