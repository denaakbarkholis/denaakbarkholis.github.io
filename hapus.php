<?php 

include 'functions.php';


if( isset($_GET['id'])) {
   $hapus =  mysqli_query($conn, "DELETE FROM pengguna WHERE id = '".$_GET['id']."' ");
		echo "
			<script>
				alert('data berhasil dihapus');
				document.location.href = 'pengguna.php';
			</script>
		";
	}
	else {
		echo "
			<script>
				alert('data gagal dihapus');
				document.location.href = 'pengguna.php';
			</script>
			";
		
}


?>