<div role="main" class="main">
	<div class="container py-2">
					<div class="row">
						<div class="col">
							<div class="blog-posts">
								<div class="col-md-6 col-lg-8">
								<h1 style="text-align: center;"> Berita </h1>
								</div>
								<hr style="height: 1px; background-color: black;">
								<div class="row">
									<?php foreach($berita->result_array() as $row) :
										$judul = $row['tulisan_judul'];
										$isi = $row['tulisan_isi'];
										$gambar= $row['tulisan_gambar'];
                                                                                $slug = $row['tulisan_slug'];
                                                                                $deskripsi = $row['tulisan_deskripsi'];
									 ?>
									<div class="col-md-4 col-lg-4">
										<article class="post post-medium border-0 pb-0 mb-5">
											<div class="post-image">
										           <img src="<?php echo base_url()?>assets/images/<?php echo $gambar ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" style="height:270px;"/>
                                                                                           <p> <?= $deskripsi ?>
                                                                                           </div>

											<div class="post-content">

												<a href="<?php echo base_url()?>Berita/detail/<?=$slug?>">
                                                                                                <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><?php echo limit_words($judul,10) ?></a></h2>
												<p><?php echo limit_words($isi,40).'...'; ?></p>

												<div class="post-meta">
													<span><i class="far fa-user"></i> By <a href="#">Admin</a> </span>
													<span class="d-block mt-2"><a href="<?php echo base_url() ?>Berita/detail/<?= $slug ?>" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
												</div>

											</div>
										</article>
									</div>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
					<div class="col-md-3">
						<!-- <a href="<?php base_url() ?>Berita"><button type="button" class="btn btn-rounded btn-primary mb-2" style="width: 160px;height: 60px;"><p style="color: white;font-size:19px">Semua Berita</p></button></a></div> -->
					</div>
				</div>
			</div>
			
	<div class="container">
			<div class="row">
						<div class="col mt-5 mb-4">
							<div class="col-md-6 col-lg-8">
							<h1 style="text-align: center;font-style: bold;">Pengumuman</h1>
							</div>
							<div class="blog-posts">					
								<div class="masonry-loader masonry-loader-showing">
									<div class="masonry row" data-plugin-masonry data-plugin-options="{'itemSelector': '.masonry-item'}">
									<?php foreach($pengumuman->result_array() as $row) : ?>
										<div class="masonry-item no-default-style col-md-3">
											<article class="post post-medium border-0 pb-0 mb-3">
												<div class="post-content"> 
													<a href="<?php echo base_url() ?>Pengumuman/detail/<?php echo $row['tulisan_slug']?>/<?php echo $row['tulisan_id']; ?>" target="_blank">
													
													<p style="font-size: 17px;color: black;"><?php echo $row['tulisan_judul'].'...'; ?>.</p>
													</a>
												</div>
											</article>
										</div>
									<?php  endforeach; ?>
									</div>
								</div>
							</div>
						</div>
                                        <br/><br/>                                 
                                         <div class="col-lg-3 col-md-4 mt-5">
					      <div class="col mt-3">
					  	 <p class="text-5" style="text-align: left;color:black;margin-bottom: 0px;">Tautan</p>
					  	 <hr class="solid" style="margin-top: 6px; margin-bottom: 2px; ;">
					  	 	<blockquote class="blockquote-primary">
                                                          <?php foreach($tautan->result_array() as $row) : 
                                                            $judul = $row['tulisan_judul'];
                                                            $isi = $row['tulisan_isi'];
                                                            $gambar = $row['tulisan_gambar'];
                                                          ?>  
					  	 		<a href="https://<?= strip_tags($isi)?>" target="blank">
							     <img src="<?php echo base_url() ?>assets/images/<?php echo $gambar ?>" width="60px" height="50px" style="margin-right:6px;"><?php echo limit_words($judul,2).'...'?>
							        </a>
                                                             <br/>    
                                                          <?php endforeach; ?>
						        </blockquote>
					        </div>
					  </div>
                                      
</div>	
</div>




