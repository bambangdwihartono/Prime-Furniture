<?php

if (!$this->session->userdata('username')) {
    redirect('primefurniture/log_in');
  }

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
      <p id="title-main-halaman-utama"><span class="glyphicon glyphicon-arrow-right"></span> Halaman Proses Kerja</p>
      <h4 class="text-center">Tambahkan Informasi Proses Kerja</h4>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
        <form method="post" action="<?php echo base_url('primefurniture/tambahproseskerja'); ?>">
          <div class="form-group">
              <label for="email" class="warna">Pilih Email: </label>
              <select name="email" class="form-control">
                <?php foreach ($pemesan as $item_pemesan) {?>
                   <option value="<?php echo $item_pemesan['email']; ?>"><?php echo $item_pemesan['email']; ?></option>
                 <?php }; ?>
              </select>
          </div>
          <fieldset>
            <legend class="warna">Apa Yang Sedang Dikerjakan : </legend>
            <input type="radio" name="jenis" value="Pemilihan Bahan">Pemilihan Bahan
            <input type="radio" name="jenis" value="Pengerjaan Produk">Pengerjaan Produk
            <input type="radio" name="jenis" value="Penyemprotan Produk">Penyemprotan Produk
            <input type="radio" name="jenis" value="Pengriman Produk">Pengriman Produk
          </fieldset>
          <button class="btn btn-success" style="margin-top: 20px;">Tambah</button>
        </form>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3" style="margin-top: 30px;">
        <h4 class="text-center">Tampilkan Data Pengerjaan</h4>
        <form method="post" action="<?php echo base_url('primefurniture/proseskerja'); ?>">
          <div class="form-group">
              <label for="email" class="warna">Pilih Email: </label>
              <select name="email" class="form-control">
                <?php foreach ($pemesan as $item_pemesan) {?>
                   <option value="<?php echo $item_pemesan['email']; ?>"><?php echo $item_pemesan['email']; ?></option>
                 <?php }; ?>
              </select>
          </div>
          <button class="btn btn-success">Tampilkan</button>
        </form>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 30px;">
        <div class="table-responsive">
          <table class="table table-borsered table-striped">
            <tr>
              <td>Email</td>
              <td>Jenis Pengerjaan</td>
            </tr>
            <?php foreach ($proseskerja as $item_proseskerja) {?>
              <tr>
                <td><?php echo $item_proseskerja['email']; ?></td>
                <td><?php echo $item_proseskerja['jenis_pengerjaan']; ?></td>
              </tr>
            <?php }; ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
