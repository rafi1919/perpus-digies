<?php
include '../koneksi.php';

$kode_buku      =@$_POST['kode_buku'];
$judul          =@$_POST['judul'];
$keterangan     =@$_POST['keterangan'];
$pengarang      =@$_POST['pengarang'];
$penerbit       =@$_POST['penerbit'];
$tahun          =@$_POST['tahun'];

$id = $_GET['id'];

$query = "UPDATE buku SET
    kode_buku = '$kode_buku',
    judul = '$judul',
    keterangan = '$keterangan',
    pengarang = '$pengarang',
    penerbit ='$penerbit',
    tahun = '$tahun'
    where id_buku ='$id'";
mysqli_query($koneksi, $query) or die('Error');

// header('location:add.php');

?>