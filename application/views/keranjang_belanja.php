<?php 

	if (!$this->session->userdata('pembeli')){
		redirect(base_url('primefurniture/daftarpembeli'));
	}

 ?>

<div class="container">
	<div class="row background-isi">
	<h2 class="text-center warna">Keranjang Belanja</h2>
		<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-2 col-md-offset-3 col-lg-offset-3 warna">
			<?php echo form_open('primefurniture/updatedatacart'); ?>
				<div class="table-responsive">
					<table cellpadding="6" cellspacing="1" class="table table-striped table-hover">
						<tr>
							<th>Opsi</th>
					        <th>Jumlah</th>
					        <th>Nama Produk</th>
					        <th style="text-align:right">Harga Produk</th>
					        <th style="text-align:right">Harga (Jumlah * Harga)</th>
						</tr>
						<?php $i = 1; ?>
						<?php foreach ($this->cart->contents() as $items): ?>
						    <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
						    <tr>
						    	<td align="center"><?php echo anchor('primefurniture/hapusdatacart/'.$items['rowid'],'X'); ?></td>
				                <td><?php echo form_input(array('name' => 'qty'.$i, 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
				                <td>
				                    <?php echo $items['name']; ?>
				                    <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
				                        <p>
				                            <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
				                                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />
				                            <?php endforeach; ?>
				                        </p>
				                	<?php endif; ?>
					        	</td>
				                <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
				                <td style="text-align:right">Rp <?php echo $this->cart->format_number($items['subtotal']); ?></td>
					        </tr>
							<?php $i++; ?>
						<?php endforeach; ?>
						<tr>
					        <td colspan="3"> </td>
					        <td style="text-align:right" class="right"><strong>Total Harga</strong></td>
					        <td style="text-align:right" class="right">Rp <?php echo $this->cart->format_number($this->cart->total()); ?></td>
						</tr>
					</table>
				</div>
			<?php echo form_submit('', 'Perbarui Keranjang','class="btn btn-info"'); ?>
			<p>Keterangan : Harga Total Belum Termasuk Ongkos Kirim</p>
			<center>
				<a target="_blank" href="<?php echo base_url('primefurniture/beli'); ?>" class="btn btn-success">Beli Sekarang</a>
				<a href="<?php echo base_url('primefurniture/keluarkeranjang'); ?>" class="btn btn-danger">Keluar</a>
			</center>
		</div>
	</div>
</div>