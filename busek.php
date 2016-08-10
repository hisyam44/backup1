<?php 
	include("penghubung.php");
	$id = $_GET['id'];
	$query ="delete from produk where id= '$id' ";
	$hasil = mysql_query($query);
	if($hasil){
		header("location:http://localhost/ecommerce2");}
		else{echo "gagal mblo";
	}

?>