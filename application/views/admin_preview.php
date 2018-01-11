<?php

  if (!$this->session->userdata('username')) {
    redirect('primefurniture/log_in');
  }

  $no = 1;

?>

<div class="container background-isi">
  <div class="row">
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3" id="margin_menu_admin">
        <div>
          <a class="text-center" id="menu_admin">Halaman Admin</a>
          <a class="menu_admin text-center" href="<?php echo base_url('primefurniture/admin_dashboard')?>"> Dashboard</a>
          <a class="menu_admin text-center" id="katagori-tersentuh" href="<?php echo base_url('primefurniture/admin_katagori')?>"> Katalog</a>
          <a class="menu_admin text-center" href="<?php echo base_url('primefurniture/admin_produk')?>"> Produk</a>
          <a class="menu_admin text-center" href="<?php echo base_url('primefurniture/admin_testimoni')?>"> Testimoni</a>
          <a class="menu_admin text-center" href="<?php echo base_url('primefurniture/admin_preview')?>"> Preview Data</a>
          <a class="menu_admin text-center" href="<?php echo base_url('primefurniture/logout')?>"> Logout</a>
        </div>
        <div style="margin-top: 20px;">
          <a class="menu_admin text-center" href="<?php echo base_url('primefurniture/pemesan')?>"> Pemesan</a>
          <a class="menu_admin text-center" id="katagori-tersentuh" href="<?php echo base_url('primefurniture/produkpesanan')?>"> Produk Pesanan</a>
          <a class="menu_admin text-center" href="<?php echo base_url('primefurniture/perpesanan')?>"> Perpesanan</a>
          <a class="menu_admin text-center" href="<?php echo base_url('primefurniture/proseskerja')?>"> Proses Keja</a>
        </div>
      </div>
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 warna batas-main-kiri " id="margin_menu_admin">
      <p id="title-main-halaman-utama"><span class="glyphicon glyphicon-arrow-right"></span> Halaman Preview Data</p>
      <h3 class="text-center">Melihat Perubahan data</h3>
      <p class=" paragraf-halaman-utama text-justify">Untuk melihat perubahan data, semisal katagori dan testimoni dapat dilihat dibawah ini dan sedangkan untuk perubahan produk anda dapat melihatnya dengan memilih katagori produk.</p>
      <p class=" paragraf-halaman-utama">Katagori : </p>
      <div class="table-responsive">
        <table class="table table-hover table-striped">
          <tr>
            <td>No</td>
            <td>Nama</td>
          </tr>
          <?php foreach ($katagori as $item_katagori) {?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><a target="_blank" href="<?php echo base_url('produk_katagori/'.$item_katagori['nama_katagori']); ?>"><?php echo $item_katagori['nama_katagori']; ?></a></td>
            </tr>
          <?php }; ?>
        </table>
      </div>
      <p class=" paragraf-halaman-utama">Testimoni : </p>
      <div class="table-responsive">
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
