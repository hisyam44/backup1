<?php include("penghubung.php"); ?>
<div>
<form method="get" action="posting.php">
				<div>
			<label>nama</label>
			<input type="text" name="nama">
			</div>
				<div>
			<label>produk</label>
			<input type="text" name="produk">
				</div>
				<div>
       <label>deskripsi</label>
		<textarea name="deskripsi"></textarea>
				<div>
			<label>harga</label>
			<input type="text" name="harga">
				</div>
				<div>
				<input type="submit" value="post">
				</div>
</form>
</div><div>
<?php
	$query="select * from produk";
	$hasil= mysql_query($query);
	while($data = mysql_fetch_array($hasil)){
		echo "<div>".$data['nama']."</div>";
		echo "<div>".$data['produk']."</div>";
		echo "<div>".$data['deskripsi']."</div>";
		echo "<div>".$data['harga']."</div>";
		echo '<div><a href="busek.php?id='.$data['id'].'">hapus</a></div>';
		echo '<div><a href="edit.php?id='.$data['id'].'">edit</a></div>';
    }

?>
</div>