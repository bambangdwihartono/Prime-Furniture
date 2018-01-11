<?php

if (!$this->session->userdata('username')) {
    redirect('primefurniture/log_in');
  }
?>
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
	<div class="container" style="margin-top: 70px;">
		<div class="row warna kesalahan_dalam background-isi">
			<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 ukuran_pembeli_seteangah">
				<center><a class="btn btn-danger" href="<?php echo base_url('primefurniture/perpesanan'); ?>">kembali</a></center>
				<p id="targetpesan" class="text-center"></p>
		          <label for="pesan">Pesan : </label>
		          <input name="pesan" type="text" placeholder="Masukan Pesan" class="form-control">
		          <input type="hidden" name="email" value="<?php echo $email; ?>" />
		          <button class="btn btn-success" onclick="tambahdata()">Kirim</button>
	        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 scroll" style="height: 300px; margin-top: 20px;">
	        		<div id="targetdata"></div>
	        	</div>
	      	</div>
		</div>
	</div>
	<script type="text/javascript">
		ambildata();
		function ambildata(){
			var	email 		= $("[name='email']").val();
			$.ajax({
				type 		: 'POST',
				data 		: 'email='+email,
				url  		: '<?php echo base_url("primefurniture/perpesananperemailajax")?>',
				dataType 	: 'json',
				success		: function(data){
					var baris = '';
					for (var i = 0; i < data.length; i++) {
						baris += '<p class="'+data[i].perataan+' pesan_padding '+data[i].bg_warna+'">'+data[i].pesan+'</p>'
					}
					$("#targetdata").html(baris);
				}
			});
		};
		setInterval(function(){
			ambildata();
		},2000);

		function tambahdata(){
			var pesan 			= $("[name='pesan']").val();
			var email 			= $("[name='email']").val();

			$.ajax({
				type 		: 'POST',
				data 		: 'nama='+email+'&pesan='+pesan,
				url  		: '<?php echo base_url("primefurniture/tambahpesansc")?>',
				dataType 	: 'json',
				success		: function(hasil){
					ambildata();
					$("#targetpesan").html(hasil.pesan);
					if (hasil.pesan == "Pesan Berhasil Ditambahkan") {
						$("[name='pesan']").val('');

					}
				}
			})
		}

	</script>
</body>
</html>