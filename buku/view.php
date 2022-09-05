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
		<br/>
		<br/>
		<?php
			include'../koneksi.php';
			$buku = mysqli_query($koneksi,"select * from buku");
		?>
		<div class='container'>
			<h1>Data Buku</h1>
			<br/>
			<a href="add.php" class='btn btn-success'>Tambah</a>
			<br/>
			<br/>
			<table class="table table-striped">
			<tr>
				<th>NO</th>
				<th>Kode</th>
				<th>Judul</th>
				<th>Keterangan</th>
				<th>Pengarang</th>
				<th>Penerbit</th>
				<th>Tahun</th>
			</tr>
			<?php 
				$no = 1;
				$total = mysqli_num_rows($buku);
				foreach($buku as $key => $value){
				
			?>
				<tr>
					<td><?=$no?></td>
					<td><?=$value['kode_buku']?></td>
					<td><?=$value['judul']?></td>
					<td><?=$value['keterangan']?></td>
					<td><?=$value['pengarang']?></td>
					<td><?=$value['penerbit']?></td>
					<td><?=$value['tahun']?></td>
					<td>
						<a href="add.php?id=<?=$value['id_buku']?>" class='btn btn-success'>EDIT</a>
						<a href="delete.php?id=<?=$value['id_buku']?>" class='btn btn-danger'>HAPUS</a>
					</td>
				</tr>
				<?php 
				$no++;
			}
			?>

		</table>
		<p>total data : <?=$total?></p>
	</div>
</body>
</html>