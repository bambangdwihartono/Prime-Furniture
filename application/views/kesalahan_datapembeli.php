<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Prime Furniture | Jual Furniture</title>
     <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css')?>">
     <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/style.css')?>">
     <script src="<?php echo base_url('assets/bootstrap/js/JQ.js')?>"></script>
     <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js')?>"></script>
 </head>
 <body>
	<div class="container kesalahan">
		<div class="row background-isi warna kesalahan_dalam">
			<h1 class="text-center">Kesalahan</h1>
			<p class="text-center">Mohon Periksa Kembali:</p>
			<center><?php echo validation_errors(); ?></center>
			<center><a class="btn btn-primary" href="<?php echo base_url('primefurniture/daftarpembeli'); ?>">Kembali</a></center>
		</div>
	</div>
</body>
</html>