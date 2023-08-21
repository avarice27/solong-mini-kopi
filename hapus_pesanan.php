<?php 
session_start();
 
$id_menu = $_GET["id_menu"];
#hapus session tertentu dgn spesifik
unset($_SESSION["pesanan"][$id_menu]);

echo "<script>alert('Produk telah dihapus');</script>"; 
echo "<script>location= 'daftar_pesanan.php'</script>";


?>