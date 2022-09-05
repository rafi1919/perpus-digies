<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<title>Perpusku</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ICO">
	
     <!--bootstrap-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- css -->
    <link rel='stylesheet' type='text/css' media='screen' href='print.css' media="print">    

</head>
<body style="background-color: white" onload="window.print()">
		<br/>
		<?php
			include'../koneksi.php';
			$anggota = mysqli_query($koneksi,"select * from anggota");
		?>
		<div class='container'>
			<h1>Data Anggota</h1>
			<br/>
            <!-- <col md=2>
				<button id="btn-print" onclick="window.print();" class="btn btn-primary">print</button>
			</col> -->
            <br/>
			<table class="table table-striped">
			<tr>
				<th>NO</th>
				<th>Kode</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Telpon</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
			</tr>
			<?php 
				$no = 1;
				$total = mysqli_num_rows($anggota);
				foreach($anggota as $key => $value){
				
			?>
				<tr>
					<td><?=$no?></td>
					<td><?=$value['kode_anggota']?></td>
					<td><?=$value['nama']?></td>
					<td><?=$value['email']?></td>
					<td><?=$value['telp']?></td>
					<td><?=$value['alamat']?></td>
					<td><?=$value['gender']?></td>
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