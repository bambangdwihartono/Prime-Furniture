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
				<p id="title-main-halaman-utama"><span class="glyphicon glyphicon-arrow-right"></span> Halaman Kontak Kami</p>
				<h4 class="text-center warna" id="judul-paragraf">Kontak Prime Furniture</h4>
				<div class="warna col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
					<p class=" paragraf-halaman-utama">
						Anda Dapat Menghubungi Kami Di :
					</p>
					<div class="table-responsive">
						<table class="table table-striped table-hover">
							<tr>
								<td>No.Handphone</td>
								<td> : </td>
								<td>085230818328</td>
							</tr>
							<tr>
								<td>WA</td>
								<td> : </td>
								<td>085230818328</td>
							</tr>
							<tr>
								<td>BBM</td>
								<td> : </td>
								<td>D2E3F439</td>
							</tr>
							<tr>
								<td>Email</td>
								<td> : </td>
								<td>bambangdwihartono3@gmail.com</td>
							</tr>
							<tr>
								<td>Facebook</td>
								<td> : </td>
								<td>Bambang Dwi Hartono</td>
							</tr>
							<tr>
								<td>Twitter</td>
								<td> : </td>
								<td>Bambang Dwi Hartono</td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td> : </td>
								<td><span class="glyphicon glyphicon-map-marker"></span> Jl.Kyai Nawawi, Slagi Rt03 Rw01 Pakis Aji,jepara,Indonesia</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
