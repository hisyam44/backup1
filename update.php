<?php
	include("penghubung.php");
	$id = $_GET['id'];
	$nama = $_GET['nama'];
	$produk = $_GET['produk'];
	$deskripsi = $_GET['produk'];
	$harga = $_GET['harga'];
	$query = "update produk set nama='$nama',produk='$produk', deskripsi='$deskripsi', harga='$harga' where id='$id'";
	$hasil = mysql_query($query);
	if($hasil){
		header("location://localhost/ecommerce2");

	}else{
		echo"error mblo";
	}

?>