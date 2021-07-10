<?php 

	$conn = mysqli_connect("localhost","root","","rahmatd_311810257");

	function konsumen($query) {
		global $conn;
			 $result = mysqli_query($conn, $query);
			 $array = [];
			 while($row = mysqli_fetch_array($result)) {
			 	$array[] = $row;
			 }
			 	return $array;
		}

	function service($query) {
		global $conn;
			 $result = mysqli_query($conn, $query);
			 $array = [];
			 while($row = mysqli_fetch_array($result)) {
			 	$array[] = $row;
			 }
			 	return $array;
		}

	function inner_join($query) {
		global $conn;
			 $result = mysqli_query($conn, $query);
			 $array = [];
			 while($row = mysqli_fetch_assoc($result)) {
			 	$array[] = $row;
			 }
			 	return $array;
		}

	function outer_join($query) {
		global $conn;
			 $result = mysqli_query($conn, $query);
			 $array = [];
			 while($row = mysqli_fetch_assoc($result)) {
			 	$array[] = $row;
			 }
			 	return $array;
		}


	function tambah_konsumen($data) {
		global $conn;

			$id_konsumen = htmlspecialchars($data['id_konsumen']);
			$kode_konsumen = htmlspecialchars($data['kode_konsumen']);
			$nama_konsumen = htmlspecialchars($data['nama_konsumen']);
			$alamat = htmlspecialchars($data['alamat']);
			$type_motor = htmlspecialchars($data['type_motor']);

				$query = "INSERT INTO konsumen VALUES
					('$id_konsumen','$kode_konsumen','$nama_konsumen','$alamat','$type_motor')";

					mysqli_query($conn, $query);
					return mysqli_affected_rows($conn);
	}	

	function tambah_service($data) {
		global $conn;

			$id_service = htmlspecialchars($data['id_service']);
			$kode_konsumen = htmlspecialchars($data['kode_konsumen']);
			$jenis_service = htmlspecialchars($data['jenis_service']);
			$tanggal_service = htmlspecialchars($data['tanggal_service']);

				$query = "INSERT INTO id_service VALUES
					('$id_service','$kode_konsumen','$jenis_service','$tanggal_service')";

					mysqli_query($conn, $query);
					return mysqli_affected_rows($conn);
	}	

	function edit($data) {
		global $conn;

			$id_konsumen = htmlspecialchars($data['id_konsumen']);
			$kode_konsumen = htmlspecialchars($data['kode_konsumen']);
			$nama_konsumen = htmlspecialchars($data['nama_konsumen']);
			$alamat = htmlspecialchars($data['alamat']);
			$type_motor = htmlspecialchars($data['type_motor']);

				$query = "UPDATE konsumen SET
							id_konsumen = '$id_konsumen',
							kode_konsumen = '$kode_konsumen',
							nama_konsumen = '$nama_konsumen',
							alamat = '$alamat',
							type_motor = '$type_motor'
						WHERE id_konsumen = $id_konsumen";

					mysqli_query($conn, $query);
					return mysqli_affected_rows($conn);
	}	

	function hapus($id_konsumen) {
			global $conn;
				$query = "DELETE FROM konsumen WHERE id_konsumen = $id_konsumen";
				mysqli_query($conn, $query);
				return mysqli_affected_rows($conn);
		}
 ?>
