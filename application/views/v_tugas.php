<div class="container">
	<div class="row mt-4 mb-6">
		<div class="col">
			<div class="col-lg-9 order-1 order-lg-2">
							<?php foreach($tugas->result_array() as $row) : ?>
							<h3 style="text-align: center;"> <?php echo $row['tulisan_judul'] ?></h3>
							<p style="color:black;text-size:13px;"><?php echo strip_tags($row['tulisan_isi']); ?></p>
							<?php endforeach;?>
                        </div>
                </div>
        </div>
</div>