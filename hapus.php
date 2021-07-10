<?php 	
		require 'koneksi.php';
		
		$id_konsumen = $_GET['id_konsumen'];

			if(hapus($id_konsumen)) {
				echo "<script>
							alert('Data berhasil dihapus');
							document.location.href='index.php';
						  </script>";
		 		} else {
		 			echo "<script>
							alert('Data gagal dihapus');
							document.location.href='index.php';
						  </script>";
				}
 ?>
