<div class="container">
	<div class="row mt-4 mb-6">
		<div class="col">
			<div class="col-lg-9 order-1 order-lg-2">
							<h1 class="font-weight-normal text-center text-7 mt-5 mb-4">Visi Dan Misi</h1>

							<?php foreach($visi->result_array() as $row) : ?>
							<h3 style="text-align: center;"> <?php echo $row['tulisan_judul'] ?></h3>
							<p style="font-size: 16px;color: black;text-align: justify;"><?php echo $row['tulisan_isi']; ?></p>
							<?php endforeach;?>
			</div>
		</div>
	</div>
</div>