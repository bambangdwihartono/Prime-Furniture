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
				<p id="title-main-halaman-utama"><span class="glyphicon glyphicon-arrow-right"></span> Halaman Katalog</p>
				<h4 class="text-center warna" id="judul-paragraf">Produk Yang Dapat Dipesan</h4>
				<p class="warna paragraf-halaman-utama text-justify col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
					Prime furniture merupakan suatu usaha yang menyediakan berbagai jenis barang mebel yang dapat anda Pesan. Berikut adalah produk berdasarkan Katagori, yang dapat anda lihat dengan mengklik katagori:
				</p>
			</div>
			<div class="row">
				<div class=" col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
					<p class="warna text-center" id="title-main-halaman-utama">KATAGORI</p>
					 <?php foreach ($katagori as $item_katagori) {?>
	                     <a target="_blank" href="<?php echo base_url('produk_katagori/'.$item_katagori['nama_katagori']); ?>" class="warna alert alert-success" id="katagori-katalog"><span class="glyphicon glyphicon-tags"></span> <?php echo $item_katagori['nama_katagori']; ?><span style="color: green"> [Klik Untuk Melihat Produk <?php echo $item_katagori['nama_katagori']; ?>]</span></a>
                  <?php }; ?>
				</div>
			</div>
		</div>
	</div>
</div>
