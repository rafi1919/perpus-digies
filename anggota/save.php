<?php

include '../koneksi.php';

$kode_anggota =@$_POST['kode_anggota'];
$nama         =@$_POST['nama'];
$email        =@$_POST['email'];
$telp         =@$_POST['telp'];
$alamat       =@$_POST['alamat'];
$gender       =@$_POST['gender'];

// mysqli_query($koneksi,"insert into anggota values('','$kode_anggota','$nama','$email', '$telp', '$alamat')");

if(@$_POST['id']){
    $id = $_POST['id'];

    $query = "UPDATE anggota SET
    kode_anggota = '$kode_anggota',
    nama = '$nama',
    email = '$email',
    telp= '$telp',
    alamat='$alamat',
    gender='$gender'
    where id_anggota ='$id'";
    mysqli_query($koneksi, $query) or die('Error');
    header('location:view.php?update=sukses');
}  
else{
    
    mysqli_query($koneksi,"insert into anggota values(0,'$kode_anggota','$nama','$email', '$telp', '$alamat', '$gender')");
    
    header('location:view.php?tambah=sukses');
}


header('location:view.php');

?>