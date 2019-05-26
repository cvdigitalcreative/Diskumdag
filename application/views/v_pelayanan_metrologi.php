<div class="container">
	<div class="row mt-4">
		<div class="col">
			<div class="blog-posts">
				<div class="row">
					<div class="col-md-6 col-lg-8 mt-5 mb-4" style="text-align:center;font-size: 32px;color: black;font-family: bold;"> Pelayanan Metrologi </div>
				</div>
				<div class="row">
						<?php foreach($metrologi->result_array() as $row) :
							$gambar = $row['tulisan_gambar'];
						?>
							<div class="col-md-3 col-lg-3 mt-5">
								<div class="portfolio-item">
									<a href="portfolio-single-wide-slider.html">
										<img src="<?php echo base_url()?>assets/images/<?php echo $gambar?>" class="img-fluid border-radius-0" alt="">
									</a>
								</div>
							</div>
							<div class="col-md-3 col-lg-6 mt-3">
								<p class="lead"><?php echo $row['tulisan_isi'] ?></p>
							</div>
						<?php endforeach; ?>
				</div>
				</div>
				<div class="row">
						<?php foreach($metrologi1->result_array() as $row) :
							$gambar = $row['tulisan_gambar'];
						?>
							<div class="col-md-4 col-lg-4 mt-5">
								<div class="portfolio-item">
									<a href="portfolio-single-wide-slider.html">
										<img src="<?php echo base_url()?>assets/images/<?php echo $gambar?>" class="img-fluid border-radius-0" alt="">
									</a>
								</div>
							</div>
						<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
	

