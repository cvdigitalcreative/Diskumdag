<div class="container">
	<div class="row mt-4 mb-6">
		<div class="col">
			<div class="col-lg-8 order-1 order-lg-2">				
			<?php foreach($download->result_array() as $row) : 
			$tanggal = date_create($row['tanggal_pengumuman']);
			?>
			<p style="margin: 0px;font-weight: bold;"><?php echo date_format($tanggal,"d/m/Y"); ?></p>
			<a href="<?= $row['tulisan_keterangan'] ?>" target="_blank">	
			<h4 class="font-weight-normal" style="font-size: 18px;margin-bottom:0px;color:#2185d0;"><?php echo $row['tulisan_judul']; ?></h4>
			</a>
                        <p style="margin-bottom:2px;"><?= $row['tulisan_isi'] ?></p>
			<?php endforeach;?>
			</div>
			</div>
		</div>
	</div>
</div>