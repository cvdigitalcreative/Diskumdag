<div class="container">
	<div class="row mt-4 mb-6">
		<div class="col">
			<div class="col-lg-9 order-1 order-lg-2">
							<h1 class="font-weight-normal text-center text-7 mt-5 mb-4">Tugas Pokok</h1>

							<?php foreach($tugas->result_array() as $row) : ?>
							<h3 style="text-align: center;"> <?php echo $row['tulisan_judul'] ?></h3>
							<p class="lead"><?php echo $row['tulisan_isi']; ?></p>
							<?php endforeach;?>