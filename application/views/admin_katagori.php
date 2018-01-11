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
      <p id="title-main-halaman-utama"><span class="glyphicon glyphicon-arrow-right"></span> Halaman Katagori</p>
      	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 batas-bawah">
          <p><?php echo validation_errors(); ?></p>
          <h4 class="text-center">Menambah Katagori</h4>
      		<form class="form-horizontal" role="form" method="post" action="<?php echo base_url('primefurniture/tambahKatalog')?>">
      			<div class="form-group">
      		  	<label for="tambah-katagori" class="warna">Nama Katagori Yang Ingin Ditambahkan: </label>
      		  	<input type="text" class="form-control" name="tambahkatagori" placeholder="Masukan Nama Katagori">
      		  </div>
      		  <input type="submit" name="submit-tambah-katagori" class="btn btn-success" value="Tambah Katagori">
      		</form>
      	</div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 batas-bawah">
          <h4 class="text-center">Menghapus Katagori</h4>
            <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('primefurniture/hapusKatalog')?>">
              <div class="form-group">
                <label for="hapuskatagori" class="warna">Nama Katagori Yang Ingin Dihapus : </label>
                <select name="hapuskatagori" class="form-control">
                  <?php foreach ($katagori as $item_katagori) {?>
                    <option value="<?php echo $item_katagori['nama_katagori']; ?>"><?php echo $item_katagori['nama_katagori']; ?></option>
                  <?php }; ?>
                </select>
              </div>
              <button type="submit" name="submit-hapus-katagori" class="btn btn-danger">Hapus Katagori</button>
            </form>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 batas-bawah">
          <h4 class="text-center">Mengedit Katagori</h4>
          <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('primefurniture/editKatalog')?>">
              <div class="form-group">
                <label for="editkatagorilama" class="warna">Nama Katagori Yang Ingin Diubah: </label>
                <select name="editkatagorilama" class="form-control">
                  <?php foreach ($katagori as $item_katagori) {?>
                    <option value="<?php echo $item_katagori['nama_katagori']; ?>"><?php echo $item_katagori['nama_katagori']; ?></option>
                  <?php }; ?>
                </select>
              </div>
              <div class="form-group">
                  <label for="editkatagoribaru" class="warna">Nama Katagori Diubah Menjadi : </label>
                  <input type="text" class="form-control" name="editkatagoribaru" placeholder="Masukan Nama Katagori Yang Baru">
              </div>
              <button type="submit" name="submit-edit-katagori" class="btn btn-primary batas-bawah">Edit Katagori</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
