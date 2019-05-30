<div class="container">
	<div class="row mt-4 mb-6">
		<div class="col">
			<div class="col-lg-8 order-1 order-lg-2">
				
							<h1 class="font-weight-normal text-center text-8 mt-5 mb-4" style="font-family: Comic Sans MS;">Pengumuman</h1>
							<?php foreach($pengumuman->result_array() as $row) : 
								$tanggal = date_create($row['tanggal_pengumuman']);
							?>
							<p style="margin: 0px;font-weight: bold;"><?php echo date_format($tanggal,"d/m/Y"); ?></p>
							<a href="<?php echo base_url() ?>Pengumuman/detail/<?php echo $row['tulisan_slug'];?>/<?php echo $row['tulisan_id'] ?>" target="_blank">	
							<p class="lead" style="font-size: 21px;color:black;"><?php echo $row['tulisan_judul']; ?></p>
							</a>
							<?php endforeach;?>
							<div class="mt-5 mb-5">
							
							<?php echo $page; ?>

							</div>
			</div>
		</div>
	</div>
</div>