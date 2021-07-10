 <?php 
	 	require 'koneksi.php';

	 	$id_konsumen = $_GET['id_konsumen'];
	 	$a = konsumen("SELECT * FROM konsumen WHERE id_konsumen = $id_konsumen")[0];

		 	if(isset($_POST['ubah'])) {
		 		if(edit($_POST) >0) {
		 			echo "<script>
							alert('Data berhasil diubah');
							document.location.href='index.php';
						  </script>";
		 		} else {
		 			echo "<script>
							alert('Data gagal diubah');
						  </script>";
		 		}
		 	}
  ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>UBAH DATA</title>
 </head>
 <body>

 	<h1><u>Isi Form dibawah</u></h1>

 	<form action="" method="post">
 			<ul>
 				<li>
 					<input type="text" name="id_konsumen" id="id_konsumen" value="<?= $a['id_konsumen']; ?>">
 				</li>
 					<br>
 				<li>
 					<input type="text" name="kode_konsumen" id="kode_konsumen" value="<?= $a['kode_konsumen']; ?>">
 				</li>
 					<br>
 				<li>
 					<input type="text" name="nama_konsumen" id="nama_konsumen" value="<?= $a['nama_konsumen']; ?>">
 				</li>
 					<br>
 				<li>
 					<input type="text" name="alamat" id="alamat" value="<?= $a['alamat']; ?>">
 				</li>
 					<br>
 				<li>
 					<input type="text" name="type_motor" id="type_motor" value="<?= $a['type_motor']; ?>">
 				</li>
 			</ul>
 			<button type="submit" name="ubah">Ubah Data</button>
 	</form>
 			<br>
 			<a href="index.php">Kembali</a>
 
 </body>
 </html>
