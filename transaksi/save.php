<?php

include 'koneksi.php';

$id_anggota         =@$_POST['id_anggota'];
$id_buku            =@$_POST['id_buku'];
$tanggal_pinjam     =@$_POST['tanggal_pinjam'];
$tanggal_kembali    =@$_POST['tanggal_kembali'];
$tanggal_kembali_asli=@$_POST['tanggal_kembali_asli'];

// mysqli_query($koneksi,"insert into anggota values('','$kode_anggota','$nama','$email', '$telp', '$alamat')");

if(@$_POST['id']){
    $id = $_POST['id'];

    $query = "UPDATE transaksi SET
    id_anggota = '$id_anggota',
    id_buku = '$id_buku',
    tanggal_pinjam = '$tanggal_pinjam',
    tanggal_kembali= '$tanggal_kembali',
    tanggal_kembali_asli='$tanggal_kembali_asli'
    where id_transaksi ='$id'";
    mysqli_query($koneksi, $query) or die('Error');
    header('location:view.php?update=sukses');
}  
else{
    
    mysqli_query($koneksi,"insert into transaksi values(0,'$id_anggota','$id_buku','$tanggal_pinjam', '$tanggal_kembali', '$tanggal_kembali_asli')");
    
    header('location:view.php?tambah=sukses');
}


header('location:view.php');

?>