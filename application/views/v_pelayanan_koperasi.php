<div class="container">
	<div class="row mt-4">
		<div class="col">
			<div class="blog-posts">
				<div class="row">
					<div class="col-md-6 col-lg-7 mt-5 mb-4" style="text-align:center;font-size: 24px;color: black;font-family: bold;"> Pelayanan Koperasi dan UKM </div>
				</div>
				<div class="row">
						<?php foreach($pelayanan->result_array() as $row) :
							$gambar = $row['tulisan_gambar'];
						?>
							<div class="col-md-3 col-lg-4 mt-3">
								<div class="portfolio-item">
									<h3><?php echo $row['tulisan_judul']; ?></h3>
									<hr style="background-color: #333333">
										<span class="thumb-info thumb-info-lighten border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="<?php echo base_url()?>assets/images/<?php echo $gambar?>" class="img-fluid border-radius-0" alt="">
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
												</span>
											</span>
										</span>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
