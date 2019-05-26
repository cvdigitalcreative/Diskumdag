<?php  
$b=$perdagangan->row_array();

$isi = $b['tulisan_isi'];
?>
<div class="container">
	<div class="row mt-4 mb-6">
		<div class="col">
			<div class="col-lg-9 order-1 order-lg-2">
						
							<div class="img-thumbnail border-0 p-0 d-block">
								<img class="img-fluid" src="<?php echo base_url() ?>assets/images/<?php echo $b['tulisan_gambar'] ?>">
							</div>
							<h3 class="mt-3 mb-2"> <?php echo $b['tulisan_judul'] ?></h3>
							<hr>
							<?php foreach ($perdagangan->result_array() as $row) :?>							
							<p class="lead"><?php echo $row['tulisan_isi'] ?></p>
							<?php endforeach; ?>
							
			</div>
		</div>
	</div>
</div>