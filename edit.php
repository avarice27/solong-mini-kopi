<?php 
include('koneksidatabase.php');

$id_menu = $_POST['id_menu'];
$nama_menu = $_POST['nama_menu'];
$jenis_menu = $_POST['jenis_menu'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$nama_file = $_FILES['gambar']['name'];
$source = $_FILES['gambar']['tmp_name'];
$folder = './Gambar/';
#untuk mengambil nama gambar & temp name untuk dialokasikan di server 'tmp_name'
move_uploaded_file($source, $folder.$nama_file);
$edit = mysqli_query($conn, "UPDATE menu SET nama_menu='$nama_menu', jenis_menu='$jenis_menu', stok='$stok', harga='$harga', gambar='$nama_file' WHERE id_menu='$id_menu' ");

if($edit)
	header('location: menu_admin.php');
else
	echo "Edit Menu Gagal";


 ?>