<?php

  if ($this->session->userdata('username')) {
    redirect('admin_dashboard');
  }

 ?>
<div class="container">
	<div class="row background-isi">
		<div class="col-xs-8 col-sm-6 col-md-6 col-lg-6 col-xs-offset-2 col-sm-offset-3 col-md-offset-3 col-lg-offset-3" id="batas-login">
			<h4 class="text-center" id="title-main-halaman-utama">LOGIN</h4>
			<p class="text-center">Catatan : Hanya Untuk Admistrator Saja, Tidak Untuk Umum</p>
			<p class="text-center">Silahkan Masukan Username Dan Password Untuk Login Kebagian Pengaturan</p>
			<form class="form-horizontal" role="form" method="post" action="<?php echo base_url('primefurniture/login')?>">
		  		<div class="form-group">
		    		<label for="username">Username : </label>
		    		<input type="text" class="form-control" name="username" placeholder="Masukan Username">
		  		</div>
		  		<div class="form-group">
		    		<label for="password">Password : </label>
		    		<input type="password" class="form-control" name="password" placeholder="Masukan Password">
		  		</div>
		  		<input type="submit" name="submit-login" class="btn btn-success" value="Login">
			</form>
		</div>
	</div>
</div>
