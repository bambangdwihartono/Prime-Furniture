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
    <!-- Open Footer -->
      <div class="container background-footer" style="margin-bottom: 60px;">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <p class="title-footer text-center">Halaman</p>
              <p><a class="halaman-footer" href="<?php echo base_url('primefurniture/index')?>"> Halaman Utama</a></p>
              <p><a class="halaman-footer" href="<?php echo base_url('primefurniture/katalog')?>"> Katalog</a></p>
              <p><a class="halaman-footer" href="<?php echo base_url('primefurniture/carapemesanan')?>"> Cara Pemesanan</a></p>
              <p><a class="halaman-footer" href="<?php echo base_url('primefurniture/testimoni')?>"> Testimoni</a></p>
              <p><a class="halaman-footer" href="<?php echo base_url('primefurniture/kontakkami')?>"> kontak Kami</a></p>
              <p><a class="halaman-footer" href="<?php echo base_url('primefurniture/tentangkami')?>"> Tentang Kami</a></p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <p class="title-footer text-center">kontak Kami</p>
              <p class="halaman-kontak-footer">No.Handphone : 085230818328</p>
              <p class="halaman-kontak-footer">WA : 085230818328</p>
              <p class="halaman-kontak-footer">BBM : D2E3F439</p>
              <p class="halaman-kontak-footer">Email : bambangdwihartono3@gmail.com</p>
              <p class="halaman-kontak-footer">Facebook : Bambang Dwi Hartono</p>
              <p class="halaman-kontak-footer">Twitter : Bambang Dwi Hartono</p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <p class="title-footer text-center">Testimoni</p>
              <p class="halaman-footer">Testimoni Terbaru : </p>
              <?php foreach ($testimoni2 as $item_testimoni2) {?>
                <p class="halaman-footer"><span>Nama : <?php echo $item_testimoni2['nama']; ?></span>, Testimoni : <?php echo $item_testimoni2['testimoni']; ?></p>
              <?php } ?>
          </div>
          <div class="row">
            <p class="text-center footer col-xs-12 col-sm-12 col-md-12 col-lg-12"> Copyright &copy :: Bambang Dwi Hartono :: 2017</p>
          </div>
        </div>
      </div>

      <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">PrimeFurniture.com</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <?php if ($this->session->userdata('pembeli')){ ?>
                  <li><a href="<?php echo base_url('primefurniture/tampilkankeranjangbelanja'); ?>" >Ke Keranjang</a></li>
              <?php }else{ ?>
                  <li><a href="<?php echo base_url('primefurniture/daftarpembeli');?>">Ke Keranjang</a></li>
              <?php } ?>
              <?php if ($this->session->userdata('kode')) {?>
                <li><a href="<?php echo base_url('primefurniture/admin_pembeli'); ?>">Halaman Pembeli</a></li>
              <?php }else{ ?>
                <li><a href="<?php echo base_url('primefurniture/pembeli'); ?>">Halaman Pembeli</a></li>
              <?php } ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <?php if (!$this->session->userdata('username')){?>
                  <li><a href="<?php echo base_url('primefurniture/log_in')?>">Halaman Customer service</a></li> 
              <?php }else{ ?>
                  <li><a href="<?php echo base_url('primefurniture/admin_dashboard')?>">Halaman Customer service</a></li> 
              <?php }; ?>
            </ul>
          </div>
        </div>
      </nav>
    <!-- Close Footer -->
 </body>
</html>