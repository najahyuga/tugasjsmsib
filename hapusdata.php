<?php
include_once "config.php";

$id = $_GET['id'];

$query = "SELECT * FROM customer WHERE id = '" . $id . "' ";
$sql = mysqli_query($host, $query);
$data = mysqli_fetch_array($sql);


$query2 = "DELETE FROM customer WHERE id='".$id."' ";
$sql2 = mysqli_query($host, $query2); 

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
	
	// Jika Sukses, Lakukan :
	header("location: index.php"); // Redirect ke halaman index1.php
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>
