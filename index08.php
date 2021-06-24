<?php 
include 'functions08.php';
$menu08 = query("SELECT * FROM warung_08");
// tombol cari ditekan
if( isset($_POST["cari"]) ) {
	$menu08 = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" href="css/style08.css">
<body>
<h1>Daftar Menu</h1>
<a href="tambah08.php">Tambah data menu</a>
<br></br>
<form action="" method="post">
	<input type="text" name="keyword" size="40" 
		autofocus placeholder="masukan keyword pencarian..." autocomplete="off">
	<button type="submit" name="cari">Cari!</button>
</form>
<br>
<table border="1" cellpadding="10" cellspacing="0">
<tr>
	<th>No.</th>
	<th>Aksi</th>
	<th>Gambar</th>
	<th>Type Menu</th>
	<th>Nama Menu</th>
	<th>Harga</th>
</tr>
<?php $i = 1; ?>
<?php foreach ($menu08 as $row08) : ?>
<tr>
	<td><?= $i; ?></td>
	<td><a href="ubah08.php?id= <?= $row08["id"]; ?>">ubah</a> |
		<a href="hapus08.php?id= <?= $row08["id"]; ?>" 
			onclick = "return confirm('yakin hapus?');">hapus</a>
	</td>
	<td><img src="img/<?= $row08["gambar"]; ?>" width="50" ></td>
	<td><?= $row08["type"]; ?></td>
	<td><?= $row08["nama"]; ?></td>
	<td><?= $row08["harga"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
</body>
</html>