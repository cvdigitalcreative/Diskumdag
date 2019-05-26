<div class="container">
	<div class="row mt-4 mb-6">
		<div class="col">
			<div class="col-lg-9 order-1 order-lg-2">
							<?php foreach($pejabat->result_array() as $row) : ?>
							<h1 class="font-weight-normal text-center text-7 mt-5 mb-4"><?php echo $row['tulisan_judul'] ?></h1>
							<div class="img-thumbnail border-0 p-0 d-block">
								<img class="img-fluid border-radius-0" src="<?php echo base_url() ?>assets/images/<?php echo $row['tulisan_gambar'] ?>" alt="pejabat-kukmp">
							</div>
							<?php endforeach;?>
						</div>
					</div>
				</div>
			</div>
