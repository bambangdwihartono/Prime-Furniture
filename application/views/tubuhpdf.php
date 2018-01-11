<div class="container">
	<div class="row background-isi warna kesalahan_dalam">
		<center><h1 class="text-center">Prime Furniture</h1></center>
		<center><h4 class="text-center">primefurniture.com</h4></center>
		<hr>
		<div>
		<p style="margin-left: 40px;">Data Pembeli :</p>
			<table>
					<tr>
						<td style="padding: 10px;">Nama</td>
						<td style="padding: 10px;">:</td>
						<td style="padding: 10px;"><?php echo $user_info['nama']; ?></td>
					</tr>
					<tr>
						<td style="padding: 10px;">Jenis Kelamin</td>
						<td style="padding: 10px;">:</td>
						<td style="padding: 10px;"><?php echo $user_info['j_kelamin']; ?></td>
					</tr>
					<tr>
						<td style="padding: 10px;">Propinsi</td>
						<td style="padding: 10px;">:</td>
						<td style="padding: 10px;"><?php echo $user_info['propinsi']; ?></td>
					</tr>
					<tr>
						<td style="padding: 10px;">Kabupaten</td>
						<td style="padding: 10px;">:</td>
						<td style="padding: 10px;"><?php echo $user_info['kabupaten']; ?></td>
					</tr>
					<tr>
						<td style="padding: 10px;">Kecamatan</td>
						<td style="padding: 10px;">:</td>
						<td style="padding: 10px;"><?php echo $user_info['kecamatan']; ?></td>
					</tr>
					<tr>
						<td style="padding: 10px;">Desa</td>
						<td style="padding: 10px;">:</td>
						<td style="padding: 10px;"><?php echo $user_info['desa']; ?></td>
					</tr>
					<tr>
						<td style="padding: 10px;">Rt Rw</td>
						<td style="padding: 10px;">:</td>
						<td style="padding: 10px;"><?php echo $user_info['rt_rw']; ?></td>
					</tr>
					<tr>
						<td style="padding: 10px;">Nomor Hp</td>
						<td style="padding: 10px;">:</td>
						<td style="padding: 10px;"><?php echo $user_info['no_hp']; ?></td>
					</tr>
					<tr>
						<td style="padding: 10px;">Email</td>
						<td style="padding: 10px;">:</td>
						<td style="padding: 10px;"><?php echo $user_info['email']; ?></td>
					</tr>
					<tr>
						<td style="padding: 10px;">Tanggal</td>
						<td style="padding: 10px;">:</td>
						<td style="padding: 10px;"><?php echo $user_info['tanggal']; ?></td>
					</tr>
					<tr>
						<td style="padding: 10px;">Kode</td>
						<td style="padding: 10px;">:</td>
						<td style="padding: 10px;"><?php echo $user_info['kode']; ?></td>
					</tr>
			</table>
		</div>
		<center><?php echo $link_download; ?></center>
	</div>
</div>