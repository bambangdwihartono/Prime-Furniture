<div class="container penebal">
	<div class="row background-isi ">
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 margin-bawah background-katagori">
			<h4 class="text-center " id="katagori">Katagori : </h4>
			<?php foreach ($katagoriaside as $item_katagori10) {?>
				<a href="<?php echo base_url('produk_katagori/'.$item_katagori10['nama_katagori']); ?>" class="aside-katagori text-center"><?php echo $item_katagori10['nama_katagori']; ?></a>
			<?php }; ?>
			<center><a href="<?php echo base_url('primefurniture/katalog')?>" class="btn btn-success" id="lihat-selengkapnya-katagori">Lihat Selengkapnya</a></center>
		</div>
		<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 batas-main-kiri background-isi">
			<div class="row">
				<p id="title-main-halaman-utama"><span class="glyphicon glyphicon-arrow-right"></span> Halaman Utama</p>
				<h4 class="text-center warna" id="judul-paragraf">Selamat Datang Di Prime Furiture</h4>
				<p class="warna paragraf-halaman-utama text-justify col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
					Prime furniture merupakan suatu usaha yang menyediakan berbagai jenis barang mebel seperti Meja, Kursi, Almari, Tempat Berhias, Dipan, Kaligrafi, Peralatan Dapur, Peralatan InDor atau OutDor, dan perkakas lainnya yang bisa anda pesan. Usaha prime furniture ini berada atau berpusat di kota Jepara (kota ukir) tepatnya di Slagi.
				</p>
			</div>
			<div class="row">
				<div class=" col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
					<p class="warna text-center" id="title-main-halaman-utama">Produk Terbaru : </p>
					<?php foreach ($produk as $item_produk9) {?>
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 bg-warning" style="padding-top: 10px; padding-bottom: 10px;  border-bottom: 2px solid green">
        					<center>
        						<img class="thumbnail img-responsive ukuran-gambar" src="<?php echo base_url('assets/produk/'.$item_produk9['gambar']); ?>">
        					</center>
        						<p style="padding-bottom: 20px; padding-top: 20px;" class="warna text-center bg-success"><?php echo $item_produk9['kode']; ?></p>
        					<center>
        						<?php if ($this->session->userdata('pembeli')){ ?>
        							<a href="<?php echo base_url('primefurniture/tambahkeranjang/'.$item_produk9['id']); ?>" class="btn btn-success">Tambah Ke Keranjang</a>
        						<?php }else{ ?>
        							<a href="<?php echo base_url('primefurniture/daftarpembeli')?>" class="btn btn-success">Tambah Ke Keranjang</a>
        						<?php } ?>
        						<a target="_blank" href="<?php echo base_url('produk_kode/'.$item_produk9['kode']); ?>" class="btn btn-warning">Detail</a>
        					</center>
        				</div>
					<?php }; ?>
				</div>
					<center><a href="<?php echo base_url('katalog')?>" class="btn btn-success" id="lihat-selengkapnya-produk">Lihat Selengkapnya</a></center>
			</div>
		</div>
	</div>
</div>
