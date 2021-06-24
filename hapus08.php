<?php 
require 'functions08.php';
$id08 = $_GET["id"];

if( hapus($id08) > 0 ) {
		echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = 'index08.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('data gagal dihapus!');
			document.location.href = 'index08.php';
		</script>
		";
	}
?>