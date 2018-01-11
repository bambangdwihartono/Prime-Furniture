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
      <p id="title-main-halaman-utama"><span class="glyphicon glyphicon-arrow-right"></span> Halaman Produk</p>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 batas-bawah">
          <p class="text-center"><?php echo validation_errors(); ?></p>
          <h4 class="text-center">Menambah Produk</h4>
          <?php echo form_open_multipart(base_url('primefurniture/tambahproduk')) ?>
            <div class="form-group">
              <label for="kodeproduk" class="warna">Kode Produk : </label>
              <input type="text" class="form-control" name="kodeproduk" placeholder="Masukan Kode Produk">
              <label for="namaproduk" class="warna">Nama Produk : </label>
              <input type="text" class="form-control" name="namaproduk" placeholder="Masukan Nama Produk">
              <label for="katagoriproduk" class="warna">Katagori Produk : </label>
              <select name="katagoriproduk" class="form-control">
                <?php foreach ($katagori as $item_katagori) {?>
                    <option value="<?php echo $item_katagori['nama_katagori']; ?>"><?php echo $item_katagori['nama_katagori']; ?></option>
                  <?php }; ?>
            </select>
              <label for="hargaproduk" class="warna">Harga Produk : </label>
              <input type="text" class="form-control" name="hargaproduk" placeholder="Masukan Harga Produk">
              <label class="control-label" for="file" class="warna">Gambar Produk:</label>
              <?php echo form_upload('file'); ?>
            </div>
            <button name="submit-tambah-produk" class="btn btn-success">Tambah Produk</button>
          <?php echo form_close(); ?>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 batas-bawah">
        <h4 class="text-center">Mengedit Produk</h4>
          <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('primefurniture/editproduk'); ?>">
          <div class="form-group">
            <label for="kodeprodukyangedit" class="warna">KOde Produk Yang Diedit: </label>
              <select name="kodeprodukyangedit" class="form-control">
                <?php foreach ($produk as $item_produk) {?>
                  <option value="<?php echo $item_produk['kode']; ?>"><?php echo $item_produk['kode']; ?></option>
                <?php }; ?>
            </select>
          </div>
          <div class="form-group">
              <label for="kodeprodukedit" class="warna">Kode Produk : </label>
              <input type="text" class="form-control" name="kodeprodukedit" placeholder="Masukan Kode Produk">
              <label for="namaprodukedit" class="warna">Nama Produk : </label>
              <input type="text" class="form-control" name="namaprodukedit" placeholder="Masukan Nama Produk">
              <label for="katagoriprodukedit" class="warna">Katagori Produk : </label>
              <select name="katagoriprodukedit" class="form-control">
                <?php foreach ($katagori as $item_katagori) {?>
                  <option value="<?php echo $item_katagori['nama_katagori']; ?>"><?php echo $item_katagori['nama_katagori']; ?></option>
                <?php }; ?>
              </select>
              <label for="hargaprodukedit" class="warna">Harga Produk : </label>
              <input type="text" class="form-control" name="hargaprodukedit" placeholder="Masukan Harga Produk">
              <label class="control-label" for="gambarprodukedit" class="warna">Gambar Produk:</label>
              <input type="file" class="form-control" name="gambarprodukedit" placeholder="Masukan Gambar Produk">
            </div>
            <button type="submit" name="submit-produk-edit" class="btn btn-primary batas-bawah">Edit Produk</button>
          </form>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 batas-bawah">
          <h4 class="text-center">Menghapus Produk</h4>
          <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('primefurniture/hapusproduk'); ?>">
          <div class="form-group">
            <label for="hapusproduk" class="warna">Kode Produk: </label>
              <select name="hapusproduk" class="form-control">
                <?php foreach ($produk as $item_produk) {?>
                  <option value="<?php echo $item_produk['kode']; ?>"><?php echo $item_produk['kode']; ?></option>
                <?php }; ?>
            </select>
          </div>
          <button type="submit" name="submit-hapus-produk" class="btn btn-danger">Hapus Produk</button>
        </form>
       </div>
      </div>
    </div>
  </div>
</div>
