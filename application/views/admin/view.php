<div class="table-responsive">
	<table class="table table-bordered">
		<tr>
			<th class="text-center">NO</th>

			<th>KODE BARANG</th>
			<th>NAMA BARANG</th>
			<th>FOTO BARANG</th>
			<th>STOK</th>
			<th>HARGA</th>
			<th>KODE DISKON</th>
			<th colspan="2" class="text-center"><span class="glyphicon glyphicon-cog"></span></th>
		</tr>
		<?php
        $no = 1;
		foreach($barang as $data){
		?> 
			<tr>
				<td class="align-middle text-center"><?php echo $no; ?></td>
				<td class="align-middle"><?php echo $data->kd_barang; ?></td>
				<td class="align-middle"><?php echo $data->nama_barang; ?></td>
				<td class="align-middle"><?php echo $data->foto_barang; ?></td>
				<td class="align-middle"><?php echo $data->stok; ?></td>
				<td class="align-middle"><?php echo $data->harga; ?></td>
				<td class="align-middle"><?php echo $data->kd_diskon; ?></td>
				<td class="align-middle text-center">
					<a href="javascript:void();" data-id="<?php echo $data->kd_barang; ?>" data-toggle="modal" data-target="#form-modal" class="btn btn-default btn-form-ubah"><span class="glyphicon glyphicon-pencil"></span></a>

                    <!-- Membuat sebuah textbox hidden yang akan digunakan untuk form ubah -->
        			<input type="hidden" class="kd_barang-value" value="<?php echo $data->kd_barang; ?>">
        			<input type="hidden" class="nama_barang-value" value="<?php echo $data->nama_barang; ?>">
        			<input type="hidden" class="foto_barang-value" value="<?php echo $data->foto_barang; ?>">
        			<input type="hidden" class="stok-value" value="<?php echo $data->stok; ?>">
        			<input type="hidden" class="harga-value" value="<?php echo $data->harga; ?>">
					<input type="hidden" class="diskon-value" value="<?php echo $data->kd_diskon; ?>">
				</td>
				
				<td class="align-middle text-center">
					<a href="javascript:void();" data-id="<?php echo $data->kd_barang; ?>" data-toggle="modal" data-target="#delete-modal" class="btn btn-danger btn-alert-hapus"><span class="glyphicon glyphicon-erase"></span></a>
				</td>
			</tr>
		<?php
			$no++; // Tambah 1 setiap kali looping
		}
		?>
	</table>

		
</div>