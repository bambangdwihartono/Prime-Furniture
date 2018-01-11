 <?php 

        $sasaran = $url;
        $judul = str_replace("%20", " ", $sasaran);

  ?>
 <div class="container">
	<div class="row background-isi">
	       <h3 class="text-center warna" id="judul-paragraf"><?php echo $judul; ?></h3>
	</div>
    <div class="row background-isi" style="padding-top: 20px; padding-bottom: 20px;">
       <?php foreach ($produk_per_katagori as $item_produk_katagori) {?>
    	       <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 bg-warning" style="padding-top: 10px; padding-bottom: 10px;  border-bottom: 2px solid green">
    		      <center><img class="thumbnail img-responsive ukuran-gambar" src="<?php echo base_url('assets/produk/'.$item_produk_katagori['gambar']); ?>"></center>
    		      <p style="padding-bottom: 20px; padding-top: 20px;" class="warna text-center bg-success"><?php echo $item_produk_katagori['kode']; ?></p>
    		      <center>
    			     <?php if ($this->session->userdata('pembeli')){ ?>
                        <a href="<?php echo base_url('primefurniture/tambahkeranjang/'.$item_produk_katagori['id']); ?>" class="btn btn-success">Tambah Ke Keranjang</a>
                    <?php }else{ ?>
                        <a href="<?php echo base_url('primefurniture/daftarpembeli')?>" class="btn btn-success">Tambah Ke Keranjang</a>
                    <?php } ?>
    			     <a target="_blank" href="<?php echo base_url('produk_kode/'.$item_produk_katagori['kode']); ?>" class="btn btn-warning">Detail</a>
    		      </center>
    	       </div>
        <?php }; ?>
	</div>
</div>