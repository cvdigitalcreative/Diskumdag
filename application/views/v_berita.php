        <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-dark font-weight-bold text-8"><?= $title ?></h1>
                        <span class="sub-title text-dark">Baca berita terbaru!</span>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="#">Berita</a></li>
                            <li class="active"><?= $title ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
   <div class="container">
	<div class="row mt-4 mb-6">
		<div class="col">
                  <div class="blog-posts">
                     <div class="row">
                      <?php
                      foreach ($info->result_array() as $i) {
                      $gambar = $i['tulisan_gambar'];
                      $judul = $i['tulisan_judul'];
                      $deskripsi = $i['tulisan_isi'];
                      $slug=$i['tulisan_slug'];     
                      ?>
			<div class="col-lg-4 col-md-4">
                          <article class="post post-medium border-0 pb-0 mb-5">
	                    <div class="post-image">
                            <a href="">
                              <img src="<?= base_url() ?>\assets\images\<?= $gambar ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" 
                              style="height:270px;"/>
                            </a>
                            </div>
                           <div class="post-content">
                              <p class="mt-3 mb-2" style="font-size:17px;">
                                <a href="<?php echo base_url()?>Berita/detail/<?=$slug?>"><?= limit_words($judul,10) ?> </a>
                              </h2>
                                <p style="margin-left: -61px;"><?= limit_words($deskripsi, 40) . '...'; ?></p>
                                   <div class="post-meta" >
                                       <p style=""><?= $tanggal ?></p>
                                   </div>
                                   <a href="<?php echo base_url()?>Berita/detail/<?=$slug?>">
                                   <div>Read More</div>
                                    </a>
                           </div>
                         </article>
                      </div>
            <?php
        }
        ?>
       </div>
</div>