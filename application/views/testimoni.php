<div class="container penebal">
	<div class="row background-isi ">
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 margin-bawah background-katagori">
			<h4 class="text-center " id="katagori">Katagori : </h4>
			<?php foreach ($katagoriaside as $item_katagori10) {?>
				<a href="<?php echo base_url('produk_katagori/'.$item_katagori10['nama_katagori']); ?>" class="aside-katagori text-center"><?php echo $item_katagori10['nama_katagori']; ?></a>
			<?php }; ?>
			<center><a href="<?php echo base_url('primefurniture/katalog')?>" class="btn btn-success" id="lihat-selengkapnya-katagori">Lihat Selengkapnya</a></center>
		</div>
		<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 batas-main-kiri  background-isi">
			<div class="row">
				<p id="title-main-halaman-utama"><span class="glyphicon glyphicon-arrow-right"></span> Halaman Testimoni</p>
				<h4 class="text-center warna" id="judul-paragraf">Silahkan Masukan Testimoni</h4>
				<div class="warna col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
					<p class="text-center"><?php echo validation_errors(); ?></p>
					<div>
						<form class="form-horizontal" role="form" method="post" action="<?php echo base_url('primefurniture/tambahtestimoni'); ?>" style="padding: 20px">
					  		<div class="form-group">
					    		<label for="nama">Nama : </label>
					    		<input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
					  		</div>
					  		<div class="form-group">
					    		<label for="email">Email : </label>
					    		<input type="email" class="form-control" name="email" placeholder="Masukan Email">
					  		</div>
					  		<div class="form-group">
					    		<label for="kota">Kota : </label>
					    		<input type="text" class="form-control" name="kota" placeholder="Masukan Kota">
					  		</div>
					  		<div class="form-group">
					    		<label for="testimoni">Testimoni : </label>
					    		<textarea placeholder="Masukan Testimoni" class="form-control" name="testimoni"></textarea>
					  		</div>
					  		<button type="submit" name="submit-testimoni" class="btn btn-success">Kirim Testimoni</button>
						</form>
					</div>
					<div>
						<p id="title-main-halaman-utama" class="text-center warna">TESTIMONI</p>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 table-responsive">
							<table class="table table-hover table-striped">
								<tr>
									<td>Nama</td>
									<td>Email</td>
									<td>Kota</td>
									<td>Testimoni</td>
								</tr>
								<?php foreach ($testimoni as $item_testimoni) {?>
					            	<tr>
					              		<td><?php echo $item_testimoni['nama']; ?></td>
					               		<td><?php echo $item_testimoni['email']; ?></td>
					               		<td><?php echo $item_testimoni['kota']; ?></td>
					               		<td><?php echo $item_testimoni['testimoni']; ?></td>
					            	</tr>
					          	<?php }; ?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
