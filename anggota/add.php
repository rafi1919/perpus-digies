<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Perpusku</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ICO">
    <meta name='viewport' content='width=device-width, initial-scale=1'>

     <!--bootstrap-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

     <!-- css -->
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style.css'>
    
</head>
<body>
   <?php include '../header.php' ?>
   <?php
   if(@$_GET['id'])
   {
      $id = $_GET['id'];
      include'../koneksi.php';
      $query = mysqli_query($koneksi,"select * from anggota WHERE id_anggota = '$id'");
      $anggota = mysqli_fetch_array($query);
   }
   ?>
   <br/>
	<br/>
   <div class='container'>
    <form method="POST" action="save.php">
      <h1>Tambah data </h1>
      <br/>
        <table class="table table-striped">
            <tr>
               <td>kode</td>
               <td> :<input type='text' name="kode_anggota" value="<?=@$anggota['kode_anggota']?>"></td>
            </tr>
            <tr>
               <td>Nama</td>
               <td> :<input type='text' name="nama" value="<?=@$anggota['nama']?>"></td>
            </tr>
            <tr>
               <td>Email</td>
               <td> :<input type='text' name="email" value="<?=@$anggota['email']?>"></td>
            </tr>
            <tr>
               <td>Telp</td>
               <td> :<input type='text' name="telp" value="<?=@$anggota['telp']?>"></td>
            </tr>
            <tr>
               <td>alamat</td>
               <td> :<input type='date' name="alamat" value="<?=@$anggota['alamat']?>"></td>
            </tr>
            <tr>
               <td>Jenis klamin </td>
               <td>
                  <input type="radio" name="gender" value="Laki-Laki">Laki-laki
                  <input type="radio" name="gender" value="Perempuan">Perempuan
               </td>
            </tr>
            <tr>
               <td><input type='hidden' name='id' value='<?=@$anggota['id_anggota']?>'></td>
               <td><button type='submit' name='submit' class='btn btn-success'>simpan</button></td>
            </tr>
        
        </table>
    </form>
</div>
</body>
</html>