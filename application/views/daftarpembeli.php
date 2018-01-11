<div class="container">
	<div class="row background-isi">
		<div class="col-xs-8 col-sm-6 col-md-6 col-lg-6 col-xs-offset-2 col-sm-offset-3 col-md-offset-3 col-lg-offset-3" id="batas-login">
			<h4 class="text-center" id="title-main-halaman-utama">Form Pendaftaran</h4>
			<p class="text-center">Silahkan masukan data pembeli</p>
			<form class="form-horizontal" role="form" method="post" action="<?php echo base_url('primefurniture/beliproduk')?>">
		  		<div class="form-group">
		    		<label for="nama">Nama : </label>
		    		<input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
		  		</div>
		  		<div class="form-group">
		    		<label for="j_kelamin">Katagori Produk : </label>
              		<select name="j_kelamin" class="form-control">
                    	<option value="laki-laki">Laki-Laki</option>
                    	<option value="perempuan">Perempuan</option>
              		</select>
		  		</div>
		  		<p class="warna">Alamat : </p>
		  		<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
			  		<div class="form-group">
			    		<label for="propinsi">Propinsi : </label>
			    		<input type="text" class="form-control" name="propinsi" placeholder="Masukan Propinsi">
			  		</div>
			  		<div class="form-group">
			    		<label for="kabupaten">Kabupaten : </label>
			    		<input type="text" class="form-control" name="kabupaten" placeholder="Masukan Kabupaten">
			  		</div>
			  		<div class="form-group">
			    		<label for="kecamatan">Kecamatan : </label>
			    		<input type="text" class="form-control" name="kecamatan" placeholder="Masukan Kecamatan">
			  		</div>
			  		<div class="form-group">
			    		<label for="desa">Desa : </label>
			    		<input type="text" class="form-control" name="desa" placeholder="Masukan Desa">
			  		</div>
			  		<div class="form-group">
			    		<label for="rtrw">Rt/Rw : </label>
			    		<input type="text" class="form-control" name="rtrw" placeholder="Masukan Rt/Rw ">
			  		</div>
		  		</div>
		  		<div class="form-group">
		    		<label for="no_hp">No_Handphone : </label>
		    		<input type="text" class="form-control" name="no_hp" placeholder="Masukan No_Handphone">
		  		</div>
		  		<div class="form-group">
		    		<label for="email">E-mail : </label>
		    		<input type="email" class="form-control" name="email" placeholder="Masukan E-mail">
		  		</div>
		  		<input type="submit" name="submit" class="btn btn-success" value="Dafar">
			</form>
		</div>
	</div>
</div>