<?php 
include '../koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku ='$id'");
header("location:view.php?delete=sukses"); 
    
?>