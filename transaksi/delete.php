<?php 
include '../koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM transaksi WHERE id_transaksi ='$id'");
header("location:view.php?delete=sukses"); 
    
?>