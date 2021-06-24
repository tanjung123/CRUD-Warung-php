<?php 
require 'functions08.php';
// cek apakah tombol sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	// cek apakah data berhasil di tambahkan atau tidak
	if ( tambah($_POST) > 0) {
		echo "
		<script>
			alert('data berhasil ditambahkan!');
			document.location.href = 'index08.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('data gagal ditambahkan!');
			document.location.href = 'index08.php';
		</script>
		";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah data menu</title>
	<link rel="stylesheet" href="css/style08.css">
</head>
<body>
	<h1>Tambah data menu</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="type">Type Menu :</label>
				<label><input type="radio" name="type" id="type" value="Makanan">Makanan</label>
				<label><input type="radio" name="type" id="type" value="Minuman">Minuman</label>
			</li>
			<li>
				<label for="nama">Nama Menu :</label>
				<input type="text" name="nama" id="nama" required>
			</li>
			<li>
				<label for="harga">Harga :</label>
				<input type="text" name="harga" id="harga" required>
			</li>
			<li>
				<label for="gambar">Gambar :<br>wajib diisi</br></label><br>
				<input type="file" name="gambar" id="gambar" >
			</li>
			<p>
				<button type="submit" name="submit">Tambah</button>
			</p>
		</ul>
</form>

</body>
</html>