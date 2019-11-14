<div class="container">
	<div class="row mt-4 mb-6">
		<div class="col">
			<div class="col-lg-9 order-1 order-lg-2">
							<h1 class="font-weight-normal text-center text-7 mt-5 mb-4">Struktur Organisasi</h1>
							<?php foreach($struktur->result_array() as $row) : ?>
							<div class="img-thumbnail border-0 p-0 d-block">
								<img class="img-fluid border-radius-0" src="<?php echo base_url() ?>assets/images/<?php echo $row['tulisan_gambar'] ?>" alt="struktur-organisasi">
							</div>
							<?php endforeach;?>
