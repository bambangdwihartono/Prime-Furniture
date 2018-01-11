<div class="container">
	<div class="row background-isi">
		<div class="col-xs-8 col-sm-6 col-md-6 col-lg-6 col-xs-offset-2 col-sm-offset-3 col-md-offset-3 col-lg-offset-3" id="batas-login">
			<h4 class="text-center" id="title-main-halaman-utama">Masukan Kode</h4>
			<form class="form-horizontal" role="form" method="post" action="<?php echo base_url('primefurniture/loginpembeli')?>">
				<div class="form-group">
		    		<label for="email">Email : </label>
		    		<input type="email" class="form-control" name="email" placeholder="Masukan Email">
		  		</div>
		  		<div class="form-group">
		    		<label for="kode">Kode : </label>
		    		<input type="text" class="form-control" name="kode" placeholder="Masukan Kode">
		  		</div>
		  		<input type="submit" name="submit-login" class="btn btn-success" value="Masuk">
			</form>
		</div>
	</div>
</div>
