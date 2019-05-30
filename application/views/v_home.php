<div class="container">
	<div class="row mt-4">
		<div class="col-md-6 col-lg-8 mt-5 mb-1"><h1 style="text-align: center;"> Beranda </h1>
		</div>
	</div>
</div>

<div role="main" class="main">

				<div class="slider-container rev_slider_wrapper" style="height: 400px;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 350, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': false }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
						<ul>
							<?php foreach($slider->result_array() as $row) : ?>
							<li class="" data-transition="fade">
								<img src="<?php echo base_url()?>assets/images/<?php echo $row['tulisan_gambar'] ?>"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">
							</li>		
							<?php endforeach; ?>						
						</ul>
					</div>
				</div>		
</div>		


<div role="main" class="main">
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
													<!-- <h2 class="font-weight-semibold text-5 line-height-6 mt-1"><a href="blog-post.html">Amazing Mountain</a></h2> -->
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
</div>	
</div>


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
									 ?>
									<div class="col-md-4 col-lg-3">
										<article class="post post-medium border-0 pb-0 mb-5">
											<div class="post-image">
												<a href="<?php echo base_url() ?>Berita/detail/<?php echo $row['tulisan_slug'] ?>">
													<img src="<?php echo base_url()?>assets/images/<?php echo $gambar ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
												
											</div>

											<div class="post-content">

												<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><?php echo $judul ?></a></h2>
												<p><?php echo limit_words($isi,20).'...'; ?></p>

												<div class="post-meta">
													<span><i class="far fa-user"></i> By <a href="#">Admin</a> </span>
													<span><i class="far fa-folder"></i> <a href="<?php echo base_url() ?>Berita/detail/<?php echo $row['tulisan_slug'] ?>">Berita</a>, <a href="#">Design</a> </span>
													<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
													<span class="d-block mt-2"><a href="<?php echo base_url() ?>Berita/detail/<?php echo $row['tulisan_slug'] ?>" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
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
						<a href="<?php base_url() ?>Berita"><button type="button" class="btn btn-rounded btn-primary mb-2" style="width: 160px;height: 60px;"><p style="color: white;font-size:19px">Semua Berita</p></button></a></div>
					</div>
				</div>
			</div>
			

