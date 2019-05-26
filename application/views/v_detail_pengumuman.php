<?php  
$b=$data->row_array();
?>
<div class="container">
	<div class="row mt-4 mb-6">
		<div class="col">
			<div class="col-lg-8 order-1 order-lg-2">
						<?php if(!empty($b['album_gambar'])) {?>
							<?php  
							$tanggal = date_create($b['tanggal_pengumuman']);	
							$gambar=$b['album_gambar'];

							?>
							<p class="font-weight-normal text-center text-6 mt-5 mb-1" style="margin:0px;font-family:Comic Sans MS;text-align: center;color: black;"><?php echo $b['tulisan_judul']; ?></p>
							<p class="text-center text-4 mb-5" style="margin:0px;"><?php echo date_format($tanggal,"d/m/Y"); ?></p>	
							<?php foreach($data->result_array() as $row) :?>					
							<div class="img-thumbnail border-0 p-0 d-block">
								<a href="#">
								<img class="img-fluid border-radius-0" alt="" title="<?php echo $row['album_nama'] ?>" src="<?php echo base_url() ?>assets/images/<?php echo $row['album_gambar'] ?>" alt="struktur-organisasi">
								</a>
							</div>
							<?php endforeach; ?>
							<?php } else{?>
								
							<p class="font-weight-normal text-center text-6 mt-5 mb-1" style="margin:0px;font-family:Comic Sans MS;text-align: center;color: black;"><?php echo $b['tulisan_judul']; ?></p>
							<?php } ?>				
			</div>
			<div class="row">
						<?php $b=$link_before->row_array(); 
							  $a=$link_after->row_array();
						?>
							<div class="col-ms-2 col-md-4 col-lg-4">
								<div class="portfolio-item bordered-1">
									<a href="<?php echo base_url() ?>Pengumuman/detail/<?php echo $b['tulisan_slug']?>/<?php echo $b['tulisan_id'] ?>">
									<p class="font-weight-semibold mt-3" style="border: 1px solid;border-color:#ccc;padding: 1em; margin-bottom:0px;"><?php echo limit_words($b['tulisan_judul'],20).'...'; ?></p>
									</a>
								</div>
							</div>
						
							<div class="col-ms-2 col-md-4 col-lg-4">
								<div class="portfolio-item bordered-1">
									<a class="" href="<?php echo base_url() ?>Pengumuman/detail/<?php echo $a['tulisan_slug']?>/<?php echo $a['tulisan_id'] ?>">
									<p class="font-weight-semibold mt-3" style="border: 1px solid;border-color:#ccc;padding: 1em;"><?php echo limit_words($a['tulisan_judul'],20).'...'; ?></p>
									</a>
								</div>
							</div>
						
			</div>

		</div>
	</div>
</div>