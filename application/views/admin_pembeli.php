<?php

 if (!$this->session->userdata('username')) {
    redirect('primefurniture/log_in');
  }

 ?>
<div class="container background-isi">
	<div class="row">
		<center><a href="<?php echo base_url('primefurniture/logout_pembeli'); ?>" class="btn btn-warning" >Logout</a></center>
	</div>
	<div class="row">
		<div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6 ukuran_pembeli_seteangah">
			<h4 class="text-center warna bg-success pembeli_jarak">Pesan Dengan Customer service</h4>
			<div id="targetpesan" class="text-center"></div>
			<label for="pesan">Pesan : </label>
			<input name="pesan" type="text" placeholder="Masukan Pesan" class="form-control">
			<button class="btn btn-success" onclick="tambahdata()">Kirim</button>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 scroll" style="height: 300px; margin-top: 20px;">
				<div id="targetdata"></div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 scroll ukuran_pembeli_seteangah">
			<h4 class="text-center warna bg-success pembeli_jarak">Produk Yang Dipesan</h4>
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<tr>
						<td>Produk</td>
						<td>Jumlah</td>
						<td>Harga</td>
						<td>Total Harga</td>
					</tr>
					<?php foreach ($pesanan as $item_pesanan) {?>
						<tr>
							<td><?php echo $item_pesanan['nama']; ?></td>
							<td><?php echo $item_pesanan['jumlah']; ?></td>
							<td>Rp. <?php echo $item_pesanan['harga']; ?></td>
							<td>Rp. <?php echo $item_pesanan['subtotal']; ?></td>
						</tr>
					<?php } ?>
				</table>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 scroll ukuran_pembeli_satu">
			<h4 class="text-center warna bg-success pembeli_jarak">Proses Kerja</h4>
				<?php foreach ($proseskerja as $item_proseskerja) {?>
					<p class="bg-warning warna text-center col-xs-6 col-sm-3 col-md-3 col-lg-3" style=" padding:20px;border:1px solid yellow"><?php echo $item_proseskerja['jenis_pengerjaan']; ?> <span class="glyphicon glyphicon-arrow-right"></span></p>
				<?php } ?>
		</div>
	</div>
</div>
<script type="text/javascript">
	ambildata();
	function ambildata(){
		$.ajax({
			type 		: 'POST',
			url  		: '<?php echo base_url("primefurniture/ambildatapesan")?>',
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

		$.ajax({
			type 		: 'POST',
			data 		: 'pesan='+pesan,
			url  		: '<?php echo base_url("primefurniture/tambahpesanc")?>',
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