<div class="container py-3">
	<div class="row">
           <div class="col-lg-12 col-md-12">
	      <h1 style="text-align: center;"> Video</h1>
                <hr style="height: 1px; background-color: black;"> 
	   </div>
         </div>
	       <div class="row">
           <?php foreach($vidio->result_array() as $row) :?>
		<div class="col-lg-4 mb-4 mb-lg-0">
			<h4><?php echo $row['galeri_judul']?></h4>
				<div class="embed-responsive embed-responsive-4by3 mb-0">
					<iframe frameborder="0" allowfullscreen="" src="<?php echo $row['galeri_deskripsi']?>"></iframe>
				</div>
		</div>
	   <?php endforeach; ?>	
		</div>
	</div>
</div>
