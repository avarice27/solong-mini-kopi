<?php 
session_start();
#untuk menangkap value dari parameter id menu
$id_menu = $_GET['id_menu'];
#detect jika ada session pesanan +=1
if (isset($_SESSION['pesanan'][$id_menu]))
{
	$_SESSION['pesanan'][$id_menu]+=1;
}

else 
{
	$_SESSION['pesanan'][$id_menu]=1;
}

echo "<script>alert('Produk telah masuk ke pesanan anda');</script>";
echo "<script>location= 'daftar_pesanan.php'</script>";

?>