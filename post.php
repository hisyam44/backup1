<?php
	include("penghubung.php");
	$nama = $_GET['nama'];
	$produk = $_GET['produk'];
	$deskripsi = $_GET['deskripsi'];
	$query = "insert into produk(nama,produk,deskripsi) values('$nama','$produk','$deskripsi')";
	$hasil =mysql_query($query);
	if($hasil){
		header("location:http://localhost/ecommerce2/");

	}else{
		echo "error gan";
	}
?>
<div>
<input type="submit" value="update">
</div>