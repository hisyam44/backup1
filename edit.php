<?php
	include("penghubung.php");
	$id = $_GET['id'];
	$query = "select * from produk where id='$id'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
	?>
	<div>
	<form method="get" action="update.php">
	<div>
		<input type="text" name="id" value="<?php echo $data['id']; ?>" hidden>
		</div>
		<div>
		<label>Nama</label>
		<input  type="text" name="nama" value="<?php echo $data['nama']; ?>">
		</div>
		<div>
		<label>produk</label>
		<input type=text name="produk" value="<?php echo $data['produk']; ?>">
		</div>
		<div>
		<label>deskripsi</label>
		<textarea name="deskripsi"><?php echo $data['deskripsi'];?></textarea>
		</div>
		<div>
		<label>harga</label>
		<input type=text name="harga" value="<?php echo $data['harga']; ?>">
		</div>
		<div>
		<input type="submit" value="update">
		</div>

</form>
</div>
	

		