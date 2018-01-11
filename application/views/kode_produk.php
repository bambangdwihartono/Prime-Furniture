<div class="container">
	<div class="row background-isi">
		<?php foreach ($produk_per_katagori as $item_produk_katagori) {?>
			<div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
				<center><img class="img-responsive thumbnail" src="<?php echo base_url('assets/produk/'.$item_produk_katagori['gambar']); ?>"></center>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
				<h4>Deskripsi Produk</h4>
				<div class="table-responsive">
					<table class="table table-striped table-hover">
						<tr>
							<td>Kode</td>
							<td> : </td>
							<td><?php echo $item_produk_katagori['kode']; ?></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td> : </td>
							<td><?php echo $item_produk_katagori['nama']; ?></td>
						</tr>
						<tr>
							<td>Katagori</td>
							<td> : </td>
							<td><?php echo $item_produk_katagori['katagori']; ?></td>
						</tr>
						<tr>
							<td>Harga</td>
							<td> : </td>
							<td>Rp.<?php echo $item_produk_katagori['harga']; ?></span></td>
						</tr>
					</table>
				</div>	
				<center>
					<?php if ($this->session->userdata('pembeli')){ ?>
						<a href="<?php echo base_url('primefurniture/tambahkeranjang/'.$item_produk_katagori['id']); ?>" class="btn btn-success">Tambah Ke Keranjang</a>
					<?php }else{ ?>
						<a href="<?php echo base_url('primefurniture/daftarpembeli')?>" class="btn btn-success">Tambah Ke Keranjang</a>
					<?php } ?>
				</center>
			</div>
		<?php }; ?>
	</div>
</div>