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
      <p id="title-main-halaman-utama"><span class="glyphicon glyphicon-arrow-right"></span> Halaman Pemesan</p>
      <h4 class="text-center">Pembeli</h4>
      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <tr>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Propinsi</td>
            <td>Kabupaten</td>
            <td>Kecamatan</td>
            <td>Desa</td>
            <td>Rt/Rw</td>
            <td>Nomor Hp</td>
            <td>Email</td>
            <td>Kode</td>
            <td>Waktu</td>
          </tr>
          <?php foreach ($pemesan as $item_pemesan) {?>
            <tr>
              <td><?php echo $item_pemesan['nama']; ?></td>
              <td><?php echo $item_pemesan['j_kelamin']; ?></td>
              <td><?php echo $item_pemesan['propinsi']; ?></td>
              <td><?php echo $item_pemesan['kabupaten']; ?></td>
              <td><?php echo $item_pemesan['kecamatan']; ?></td>
              <td><?php echo $item_pemesan['desa']; ?></td>
              <td><?php echo $item_pemesan['rt_rw']; ?></td>
              <td><?php echo $item_pemesan['no_hp']; ?></td>
              <td><?php echo $item_pemesan['email']; ?></td>
              <td><?php echo $item_pemesan['kode']; ?></td>
              <td><?php echo $item_pemesan['tanggal']; ?></td>
            </tr>
          <?php } ?>
        </table>
      </div>
      <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-2 col-md-offset-3 col-lg-offset-3">
        <h4 class="text-center">Hapus Data Pembeli</h4>
        <form method="post" action="<?php echo base_url('primefurniture/hapusdatapembeli'); ?>">
          <div class="form-group">
            <label for="email" class="warna">Pilih Email: </label>
            <select name="email" class="form-control">
              <?php foreach ($pemesan as $item_pemesan) {?>
                <option value="<?php echo $item_pemesan['email']; ?>"><?php echo $item_pemesan['email']; ?></option>
              <?php }; ?>
            </select>
          </div>
          <center><button type="submit" class="btn btn-danger batas-bawah">Hapus</button></center>
        </form>
      </div>
    </div>
  </div>
</div>
