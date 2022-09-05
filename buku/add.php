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
      $query = mysqli_query($koneksi,"select * from buku WHERE id_buku = '$id'");
      $buku = mysqli_fetch_array($query);
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
               <td> :<input type='text' name="kode_buku" value="<?=@$buku['kode_buku']?>"></td>
            </tr>
            <tr>
               <td>Judul</td>
               <td> :<input type='text' name="judul" value="<?=@$buku['judul']?>"></td>
            </tr>
            <tr>
               <td>Keterangan</td>
               <td> :<input type='text' name="keterangan" value="<?=@$buku['keterangan']?>"></td>
            </tr>
            <tr>
               <td>Pengarang</td>
               <td> :<input type='text' name="pengarang" value="<?=@$buku['pengarang']?>"></td>
            </tr>
            <tr>
               <td>Penerbit</td>
               <td> :<input type='text' name="penerbit" value="<?=@$buku['penerbit']?>"></td>
            </tr>
            <tr>
               <td>Tahun</td>
               <td> :<input type='year' name="tahun" value="<?=@$buku['tahun']?>"></td>
            </tr>
            <tr>
               <td><input type='hidden' name='id' value='<?=@$buku['id_buku']?>'></td>
               <td><button type='submit' name='submit' class='btn btn-success'>simpan</button></td>
            </tr>
        
        </table>
    </form>
</div>
</body>
</html>