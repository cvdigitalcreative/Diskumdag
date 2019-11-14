<?php
            error_reporting(0);
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
?>



<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title><?php echo $title ?></title>	

		<meta name="keywords" content="Dinas Koperasi dan UKM provinsi Sumatera Selatan " />
		<meta name="description" content="Dinas Koperasi dan UKM provinsi Sumatera Selatan ">
		<meta name="author" content="Dinas Koperasi dan UKM provinsi Sumatera Selatan ">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/logo_provinsi_sumsel_copy.png" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php echo base_url() ?>assets/images/logo_provinsi_sumsel_copy.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme-elements.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme-blog.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/rs-plugin/css/navigation.css">
		
		<!-- Demo CSS -->


		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/skins/default.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url() ?>assets/vendor/modernizr/modernizr.min.js"></script>
		

	</head>
	<body bgcolor="#E6E6FA">

		<div class="body">
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="<?php echo base_url() ?>">
											<img alt="Logo Provinsi sumsel" width="45" height="48" data-sticky-width="57" data-sticky-height="48" src="<?php echo base_url() ?>assets/images/logo_provinsi_sumsel_copy.png" title="logo_provinsi_sumsel">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a class=" <?php echo activate_menu('Home'); ?>" href="<?php echo base_url().'Home' ?>">
															Home
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle <?php echo activate_menu('Visi')?>" href="#">
															Profil
														</a>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="<?php echo base_url() ?>Visi">
																	Visi Misi
																</a>
															</li>
															<li>
																<a class="dropdown-item" href="<?php echo base_url() ?>Visi/struktur">
																	Struktur Organisasi
																</a>
															</li>
															<li>
																<a class="dropdown-item" href="<?php echo base_url() ?>Visi/tugas">
																	Tugas Pokok
																</a>
															</li>
															<li>
																<a class="dropdown-item" href="<?php echo base_url() ?>Visi/pejabat">
																	Pejabat Dinas Koperasi dan UKM
																</a>
															</li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle <?php echo activate_menu('Pelayanan')?>" href="#">
															Pelayanan
														</a>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="<?php echo base_url() ?>Pelayanan">
																	Pelayanan Koperasi
																</a>
															</li>
															<li>
																<a class="dropdown-item" href="<?php echo base_url() ?>Pelayanan">
																	Pelayanan UKM
																</a>
															</li>
															
														</ul>
													</li>
													<li class="menu">
														<a class=" <?php echo activate_menu('Pengumuman')?>" href="<?php echo base_url() ?>Pengumuman">
															Pengumuman
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle <?php echo activate_menu('Berita')?>" href="#">
															Berita
														</a>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="<?=base_url()?>Berita/ukm">
																	Berita UKM
																</a>
															</li>
															<li>
																<a class="dropdown-item" href="<?=base_url()?>Berita/koperasi">
																	Berita Koperasi
																</a>
															</li>
															
														</ul>
															<li class="dropdown">
																<a class=" <?php echo activate_menu('Info')?>" href="<?=base_url()?>Info">
																	Info Grafis
																</a>
															</li>
															<li class="dropdown">
																<a class=" <?php echo activate_menu('Download')?>" href="<?=base_url()?>Download">
																	Download
																</a>
															</li>
															<li class="dropdown">
																<a class=" <?php echo activate_menu('Kontak')?>" href="<?=base_url()?>Kontak">
																	Kontak
																</a>
															</li>
												         <li class="dropdown">
														<a class="dropdown-item dropdown-toggle <?php echo activate_menu('Galeri')?>" href="#">
															Galeri
														</a>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="<?php echo base_url() ?>Galeri">
																	Foto
																</a>
															</li>
															<li>
																<a class="dropdown-item" href="<?php echo base_url() ?>Galeri/vidio">
																	Video
																</a>
															</li>

														</ul>
                                                                                                                         <li class="dropdown">
																<a class="dropdown-item dropdown-toggle <?php echo activate_menu('FAQ')?>" href="<?=base_url()?>FAQ">
																	FAQ
																</a>
															</li>
													</li>

													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
									<div class="header-nav-features order-1 order-lg-2">
										<div class="header-nav-feature header-nav-features-social-icons d-inline-flex">
											<ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean ml-0">
												<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
												<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
												<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
		</div>


	<div role="main" class="main">
                    <?php $row=$header->row_array()?>         
				<div class="slider-container rev_slider_wrapper" style="height: 670px;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1866, 'gridheight': 550, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': false }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
						<ul>
							<li class="" data-transition="fade">
                                                            <?php $gambar=$row['tulisan_gambar']?>
								<img src="<?php echo base_url()?>assets/images/<?php echo $gambar?>"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">
							</li>								
						</ul>
					</div>
				</div>
                      		
</div>
<div class="row">
<?php $data = $running_text->row_array() ?>
  <div class="col-lg-12 col-md-12">
    <marquee bgcolor="#eaedef" width="100%" scrollamount="5" margin-bottom="0%" style="margin-bottom:0px;"> <p style="color:#1680f2;font-size:18px;margin-top:9px;"> <?php echo $data['tulisan_judul']?> </h3> </marquee>
  </div>
</div>
	

