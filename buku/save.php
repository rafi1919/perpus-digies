<?php

include '../koneksi.php';

$kode_buku     =@$_POST['kode_buku'];
$judul         =@$_POST['judul'];
$keterangan    =@$_POST['keterangan'];
$pengarang     =@$_POST['pengarang'];
$penerbit      =@$_POST['penerbit'];
$tahun         =@$_POST['tahun'];

// mysqli_query($koneksi,"insert into anggota values('','$kode_anggota','$nama','$email', '$telp', '$alamat')");

if(@$_POST['id']){
    $id = $_POST['id'];

    $query = "UPDATE buku SET
    kode_buku = '$kode_buku',
    judul = '$judul',
    keterangan = '$keterangan',
    pengarang = '$pengarang',
    penerbit = '$penerbit',
    tahun ='$tahun'
    where id_buku ='$id'";
    mysqli_query($koneksi, $query) or die('Error');
    header('location:view.php?update=sukses');
}  
else{
    
    mysqli_query($koneksi,"insert into buku values(0,'$kode_buku','$judul','$keterangan', '$pengarang', '$penerbit', '$tahun' )");
    
    header('location:view.php?tambah=sukses');
}


header('location:view.php');

?>