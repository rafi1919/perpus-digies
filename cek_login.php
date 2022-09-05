<?php 

include 'koneksi.php';
    $user =@$_POST ['user'];
    $pass =@$_POST ['pass'];
    $query ="select * from login where user='$user' and pass='$pass' ";
    $result = mysql1_query($koneksi, $query);
    $count=mysqli_num_rows($result);

    mysqli_query($koneksi,"insert into anggota values('','$user','$pass')");


?>
















// session_start();
// $_SESSION['sesi']=null;

// if(@$_POST['user'] AND @$_POST['pass']){
//     include './anggota/koneksi.php';
//     $user =(@$_POST['user']) ?: '';
//     $pass =(@$_POST['pass']) ?: '';
//     $query = mysqli_query($koneksi, "SELEST * FROM admin WHERE ='$user' AND password ='$pass' ");
//     $sesi = mysqli_num_rows($query);

//     if($sesi == 1 ){
//         $admin = mysqli_fetch_array($query);

//         $_SESSION['sesi'] = $admin['nama_admin'];
//         $_SESSION['id_admin'] = $admin['id_admin'];

//         header('location : index.html?msg=sukses');
//     }
// }