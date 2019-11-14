<div class="container py-2">
  <div class="row">
    <div class="col">
      <div class="blog-posts">
	<div class="col-md-6 col-lg-8">
	   <h1 style="text-align: center;"> Pejabat Dinas</h1>
	</div>
            <hr style="height: 1px; background-color: black;">
            <div class="row">
               <div class="col-lg-4 col-md-4 col-xs-4"></div>
              <?php foreach($kepala_dinas->result_array() as $foto) :?>
              <div class="col-lg-4 col-md-4 col-xs-4">
                 <div class="post-image mb-3">
                      <img src="<?php echo base_url()?>assets/images/<?php echo $foto['tulisan_gambar']?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt=""/>
		 </div>
                 <div class="post-content">
                     <p class="text-center" style="text-size:15px;color:black;text-decoration:underline;margin-bottom:0px;"><?php echo $foto['tulisan_judul']?></p>
                     <p class="text-center" style="text-size:15px;color:black;"><?php echo strip_tags($foto['tulisan_isi'])?> </p>
                 </div>
               </div>
              <?php endforeach; ?>
             </div>

	      <div class="row">
		<?php foreach($pejabat->result_array() as $row) : ?>
		  <div class="col-lg-3 col-md-3 col-xs-3">
		    <article class="post post-medium border-0 pb-0 mb-5">
		      <div class="post-image">
			   <img src="<?php echo base_url()?>assets/images/<?php echo $row['tulisan_gambar']?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt=""/>
		      </div>
                          <div class="post-content">
                            <p class="text-center" style="text-size:15px;color:black;text-decoration:underline;margin-bottom:0px;"><?php echo $row['tulisan_judul']?></p>
                            <p class="text-center" style="text-size:15px;color:black;"> <?php echo strip_tags($row['tulisan_isi'])?> </p>
                          </div>
                      </articel>
                    </div>
	          <?php endforeach;?>
		</div>
        </div>
     </div>
</div>
