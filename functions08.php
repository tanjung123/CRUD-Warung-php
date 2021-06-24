<?php 
// koneksi ke database
$conn08 = mysqli_connect("localhost", "root", "", "warung_08");

function query($query08) {
	global $conn08;
	$result08 = mysqli_query($conn08, $query08);
	$rows08 = [];
	while ($row08 = mysqli_fetch_assoc($result08) ) {
		$rows08[] = $row08;
	}
	return $rows08;
}

function tambah($data08) {
	global $conn08;
	// ambil data dari tiap elemen dalam form
	$type08 = htmlspecialchars($data08["type"]);
	$nama08 = htmlspecialchars($data08["nama"]);
	$harga08 = htmlspecialchars($data08["harga"]);
	// uploud gambar
	$gambar08 = uploud();
	if( !$gambar08 ) {
		return false;
	}
	$query08 = "INSERT INTO warung_08
				VALUES
				('', '$type08', '$nama08', '$harga08', '$gambar08')
				";
	mysqli_query($conn08, $query08);
	return mysqli_affected_rows($conn08);
}

function uploud() {
	$namaFile08 = $_FILES['gambar']['name'];
	$ukuranFile08 = $_FILES['gambar']['size'];
	$error08 = $_FILES['gambar']['error'];
	$tmpName08 = $_FILES['gambar']['tmp_name'];
	// cek apakah tdk ada gambar yg diuploud
	if( $error08 === 4 ) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
				</script>";
				return false;
	}
	// cek apakah yg diuploud adl gambar
	$ekstensiGambarValid08 = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar08 = explode('.', $namaFile08);
	$ekstensiGambar08 = strtolower(end($ekstensiGambar08));
	if( !in_array($ekstensiGambar08, $ekstensiGambarValid08) ) {
		echo "<script>
				alert('yang anda uploud bukan gambar!');
				</script>";
		return false;
	}
	// cek jika ukurannya terlalu besar
	if( $ukuranFile08 > 1000000 ) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
				</script>";
			return false;
	}
	// lolos pengecekan gambar siap diuploud
	// generate nama gambar baru
	$namaFileBaru08 = uniqid();
	$namaFileBaru08 .= '.';
	$namaFileBaru08 .= $ekstensiGambar08;
	move_uploaded_file($tmpName08, 'img/' . $namaFileBaru08);
	return $namaFileBaru08;
}

function hapus($id08) {
	global $conn08;
	mysqli_query($conn08, "DELETE FROM warung_08 WHERE id = $id08");
	return mysqli_affected_rows($conn08);
}

function ubah($data08) {
	global $conn08;
	// ambil data dari tiap elemen dalam form
	$id08 = $data08["id"];
	$type08 = htmlspecialchars($data08["type"]);
	$nama08 = htmlspecialchars($data08["nama"]);
	$harga08 = htmlspecialchars($data08["harga"]);
	$gambarlama08 = htmlspecialchars($data08["gambarlama"]);
	// cek apakah user pilih gambar baru atau tidak
	if( $_FILES['gambar']['error'] === 4 ) {
		$gambar08 = $gambarlama08;
	} else {
		$gambar08 = uploud();
	}
	$query08 = "UPDATE warung_08 SET
				type = '$type08',
				nama = '$nama08',
				harga = '$harga08',
				gambar = '$gambar08'
			WHERE id = $id08
				";
	mysqli_query($conn08, $query08);
	return mysqli_affected_rows($conn08);
}

function cari($keyword08) {
	$query08 = "SELECT * FROM warung_08 
				WHERE
			nama LIKE '%$keyword08%' OR
			type LIKE '%$keyword08%' OR
			harga LIKE '%$keyword08%'
		";
	return query($query08);
}

?>