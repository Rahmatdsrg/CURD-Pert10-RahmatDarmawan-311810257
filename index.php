<?php 
	require 'koneksi.php';
		$konsumen = konsumen("SELECT * FROM konsumen");
		$service = service("SELECT * FROM service");
		$inner_join = inner_join("SELECT * FROM konsumen");
		$outer_join = outer_join("SELECT * FROM service");

		if(isset($_POST['tambah'])) {
		 		if(tambah_konsumen($_POST) >0) {
		 			echo "<script>
							alert('Data berhasil ditambahkan');
							document.location.href='index.php';
						  </script>";
		 		} else {
		 			echo "<script>
							alert('Data gagal ditambahkan');
						  </script>";
		 		}
		 	}

		if(isset($_POST['tambah'])) {
		 		if(tambah_service($_POST) >0) {
		 			echo "<script>
							alert('Data berhasil ditambahkan');
							document.location.href='index.php';
						  </script>";
		 		} else {
		 			echo "<script>
							alert('Data gagal ditambahkan');
						  </script>";
		 		}
		 	} 	
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tugas Inner Join</title>
 </head>
 <body>

 	<h3>TABLE CUSTOMER (mysqli_fetch_array)</h3>

<!-- FORM TAMBAH DATA -->
 	<form action="" method="post">
 		
 			<tr>
 				<td>
 					<input type="text" name="id_konsumen" placeholder="masukan id konsumen.." required>
 				</td>
 				<td>
 					<input type="text" name="kode_konsumen" placeholder="masukan kode.." required>
 				</td>
 				<td>
 					<input type="text" name="nama_konsumen" placeholder="masukan nama.." required>
 				</td>
 				<td>
 					<input type="text" name="alamat" placeholder="masukan alamat.." required>
 				</td>
 				<td>
 					<input type="text" name="type_motor" placeholder="masukan type_motor.." required>
 				</td>
 				<td>
 					<button type="submit" name="tambah">Tambah Data</button>
 				</td>
 			</tr>
 
 	</form>

<!-- TABLE KONSUMEN -->
 	<table border="1" cellpadding="10" cellspacing="">
 		<tr>
 			<th>ID_KONSUMEN</th>
 			<th>KODE_KONSUMEN</th>
 			<th>NAMA_KONSUMEN</th>
 			<th>ALAMAT</th>
 			<th>TYPE_MOTOR</th>
 			<th>Aksi</th>
 		</tr>

 	<?php foreach ($konsumen as $b) : ?>

 		<tr>
 			<td><?= $b["id_konsumen"]?></td>
 			<td><?= $b["kode_konsumen"]?></td>
 			<td><?= $b["nama_konsumen"]?></td>
 			<td><?= $b["alamat"]?></td>
 			<td><?= $b["type_motor"]?></td>
 			<td>
		 			<a href="edit.php?id_konsumen=<?= $b['id_konsumen']; ?>">Edit |</a>
		 			<a href="hapus.php?id_konsumen=<?= $b['id_konsumen']; ?>" onclick='return confirm("Menghapus data?");'>Delete</a>
		 		</td>
 		</tr>

 	<?php endforeach; ?>
 	</table>

 		<!-- ============================================================== --><br>

 		<h3>TABLE SERVICE (mysqli_fetch_array)</h3>

 	<!-- FORM TAMBAH DATA -->
 	<form action="" method="post">
 		<table border="0">
 			<tr>
 				<td>
 					<input type="number" name="id_service" placeholder="masukan id_service.." required>
 				</td>
 				<td>
 					<input type="number" name="kode_konsumen" placeholder="masukan kode.." required>
 				</td>
 				<td>
 					<input type="text" name="jenis_service" placeholder="masukan jenis service.." required>
 				</td>
 				<td>
 					<input type="number" name="tanggal_service" placeholder="masukan tanggal.." required>
 				</td>
 				<td>
 					<button type="submit" name="tambah">Tambah Data</button>
 				</td>
 			</tr>
 		</table>
 	</form> 		

<!-- TABLE SERVICE -->
 	<table border="1" cellpadding="10" cellspacing="">
 		<tr>
 			<th>ID_SERVICE</th>
 			<th>KODE_KONSUMEN</th>
 			<th>JENIS_SERVICE</th>
 			<th>TANGGAL_SERVICE</th>
 		</tr>

 	<?php foreach ($service as $b) : ?>
 		<tr>
 			<td><?= $b["id_service"]?></td>
 			<td><?= $b["kode_konsumen"]?></td>
 			<td><?= $b["jenis_service"]?></td>
 			<td><?= $b["tanggal"]?></td>
 		</tr>
 	<?php endforeach; ?>
 	</table>

 		<!-- ============================================================== --><br>

 	<h3>TABLE INNER JOIN (mysqli_fetch_assoc)</h3>

 	<table border="1" cellpadding="10" cellspacing="">
 		<tr>
 			<th>ID_KONSUMEN</th>
 			<th>KODE_KONSUMEN</th>
 			<th>NAMA_KONSUMEN</th>
 			<th>ALAMAT</th>
 			<th>TYPE_MOTOR</th>
 		</tr>

 	<?php foreach ($inner_join as $b) : ?>

 		<tr>
 			<td><?= $b["id_konsumen"]?></td>
 			<td><?= $b["kode_konsumen"]?></td>
 			<td><?= $b["nama_konsumen"]?></td>
 			<td><?= $b["alamat"]?></td>
 			<td><?= $b["type_motor"]?></td>
 		</tr>

 	<?php endforeach; ?>
 	</table>

 		<!-- ============================================================== --><br>

 		<h3>TABLE LEFT OUTER JOIN (mysqli_fetch_assoc)</h3>

 	<table border="1" cellpadding="10" cellspacing="">
 		<tr>
 			<th>ID_SERVICE</th>
 			<th>KODE_KONSUMEN</th>
 			<th>JENIS_SERVICE</th>
 			<th>TANGGAL_SERVICE</th>
 		</tr>

 	<?php foreach ($outer_join as $b) : ?>
 		<tr>
 			<td><?= $b["id_service"]?></td>
 			<td><?= $b["kode_konsumen"]?></td>
 			<td><?= $b["jenis_service"]?></td>
 			<td><?= $b["tanggal"]?></td>
 		</tr>
 	<?php endforeach; ?>
 	</table>

 
 </body>
 </html> 
