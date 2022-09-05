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
      $query = mysqli_query($koneksi,"select * from transaksi WHERE id_transaksi = '$id'");
      $transaksi = mysqli_fetch_array($query);
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
               <td>Id Anggota</td>
               <td> :<input type='text' name="id_anggota" value="<?=@$transaksi['id_anggota']?>"></td>
            </tr>
            <tr>
               <td>Id Buku</td>
               <td> :<input type='text' name="id_buku" value="<?=@$transaksi['id_buku']?>"></td>
            </tr>
            <tr>
               <td>Tanggal Pinjam</td>
               <td> :<input type='date' name="tanggal_pinjam" value="<?=@$transaksi['tanggal_pinjam']?>"></td>
            </tr>
            <tr>
               <td>Tanggal Kembali</td>
               <td> :<input type='date' name="tanggal_kembali" value="<?=@$transaksi['tanggal kembali']?>"></td>
            </tr>
            <tr>
               <td>Tanggal Kembali Asli</td>
               <td> :<input type='date' name="tanggal_kembali_asli" value="<?=@$transaksi['tanggal_kembali_asli']?>"></td>
            </tr>
            <tr>
               <td><input type='hidden' name='id' value='<?=@$transaksi['id_transaksi']?>'></td>
               <td><button type='submit' name='submit' class='btn btn-success'>simpan</button></td>
            </tr>
        
        </table>
    </form>
</div>
</body>
</html>