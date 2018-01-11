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
      <p id="title-main-halaman-utama"><span class="glyphicon glyphicon-arrow-right"></span> Halaman Testimoni</p>
      <h3 class="text-center batas-bawah">Menghapus Testimoni</h3>
      <div class=" col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 batas-bawah">
  			<p class="text-center warna">Menghapus Testimoni</p>
  			<form class="form-horizontal" role="form" method="post" action="<?php echo base_url('primefurniture/hapustestimoni'); ?>">
  				<div class="form-group">
  					<label for="hapustestimoni" class="warna">testimoni: </label>
  		    		<select name="hapustestimoni" class="form-control">
                <?php foreach ($testimoni as $item_testimoni) {?>
  						   <option value="<?php echo $item_testimoni['nama']; ?>"><?php echo $item_testimoni['nama']; ?></option>
                 <?php }; ?>
  					  </select>
  				</div>
  				<center><button type="submit" name="submit-hapus-testimoni" class="btn btn-danger batas-bawah">Hapus Testimoni</button></center>
  			</form>
  		</div>
    </div>
  </div>
</div>
