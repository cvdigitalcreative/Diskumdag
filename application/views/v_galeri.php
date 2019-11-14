<div class="container py-2">
  <div class="row">
     <div class="col">
        <div class="blog-posts">
	   <div class="col-md-6 col-lg-8">
	      <h1 style="text-align: center;"> Foto Kegiatan</h1>
	   </div>
        <hr style="height: 1px; background-color: black;">
	   <div class="row">
	      <?php foreach($foto->result_array() as $row) :
	      $judul = $row['galeri_judul'];
	      $isi = $row['galeri_deskripsi'];
	      $gambar= $row['galeri_gambar'];
	      ?>
	  <div class="col-lg-4 col-md-6">
	<article class="post post-medium border-0 pb-0 mb-5">
          <div class="lightbox mb-4" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">	
	<div class="post-image">
		<a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1" href="<?php echo base_url()?>assets/images/<?php echo $gambar?>" title="<?php echo $gambar ?>" 
                 alt="<?= $row['tulisan_gambar']?>">
	<img class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" src="<?php echo base_url() ?>assets/images/<?php echo $gambar ?>" alt="<?php echo $gambar ?>" style="height:270px;">
		</a>
	</div>
	</div>
          <div class="post-content">
            <p class="text-center" style="color:black;font-size:18px;margin-top:2px;"><?php echo $judul ?></h2>
          </div>	
       </article>
          </div>
	         <?php endforeach; ?>
	  </div>
        </div> 
      </div>
</div>