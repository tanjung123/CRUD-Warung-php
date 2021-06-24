<?php 
require 'functions08.php';
// ambil data di URL
$id08 = $_GET["id"];
// query data warung_08 berdasarkan id
$mhs08 = query("SELECT * FROM warung_08 WHERE id = $id08")[0];
// cek apakah tombol sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	// cek apakah data berhasil di ubah atau tidak
	if ( ubah($_POST) > 0) {
		echo "
		<script>
			alert('data berhasil di ubah!');
			document.location.href = 'index08.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('data gagal di ubah!');
			document.location.href = 'index08.php';
		</script>
		";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah data menu</title>
	<link rel="stylesheet" href="css/style08.css">
</head>
<body>
	<h1>Ubah data menu</h1>
	<form action="" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?= $mhs08["id"]; ?>">
				<input type="hidden" name="gambarlama" value="<?= $mhs08["gambar"]; ?>">
		<ul>
			<li>
				<label for="type">Type Menu :</label>
				<input type="text" name="type" id="type" required value="<?= $mhs08['type']; ?>">
			</li>
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama" required value="<?= $mhs08['nama']; ?>">
			</li>
			<li>
				<label for="harga">Harga :</label>
				<input type="text" name="harga" id="harga" required value="<?= $mhs08['harga']; ?>">
			</li>
			<li>
				<label for="gambar">Gambar :</label><br>
				<img src="img/<?= $mhs08['gambar']; ?>" width="50"> <br>
				<input type="file" name="gambar" id="gambar">
			</li>
			<p>
				<button type="submit" name="submit">Ubah</button>
			</p>
		</ul>
	</form>

</body>
</html>