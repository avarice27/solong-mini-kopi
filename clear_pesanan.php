<?php 

include('koneksidatabase.php');

$id = $_GET['id'];
#eksekusi sql query menghapus record pembayaran pd id
$hapus= mysqli_query($conn, "DELETE FROM pembayaran WHERE id_pembayaran='$id'");

if($hapus)
	header('location: kasir.php');
else
	echo "Hapus data gagal";

 ?>