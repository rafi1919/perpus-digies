<?php
include '../koneksi.php';

$kode_anggota   =@$_POST['kode_anggota'];
$nama           =@$_POST['nama'];
$email          =@$_POST['email'];
$telp           =@$_POST['telp'];
$alamat         =@$_POST['alamat'];

$id = $_GET['id'];

$query = "UPDATE anggota SET
    kode_anggota = '$kode_anggota',
    nama = '$nama',
    email = '$email',
    telp= '$telp',
    alamat='$alamat'
    where id_anggota ='$id'";
mysqli_query($koneksi, $query) or die('Error');

// header('location:add.php');

?>