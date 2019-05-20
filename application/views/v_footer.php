<div class="container-fluid col-lg-6">

<div class="overflow-hidden mb-1">
	<h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="200" style="animation-delay: 200ms;"><strong class="font-weight-extra-bold">Hubungi</strong> Kami</h2>
</div>
<div class="overflow-hidden mb-4 pb-3">
	<p class="mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="400" style="animation-delay: 400ms;">Tanyakan pertanyaan apapun!</p>
</div>

<form id="contactForm" class="contact-form appear-animation animated fadeIn appear-animation-visible" action="php/contact-form.php" method="POST" data-appear-animation="fadeIn" data-appear-animation-delay="600" novalidate="novalidate" style="animation-delay: 600ms;">
	<div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
		<strong>Success!</strong> Your message has been sent to us.
	</div>

	<div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
		<strong>Error!</strong> There was an error sending your message.
		<span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
	</div>

	<div class="form-row">
		<div class="form-group col-lg-6">
			<label class="required font-weight-bold text-dark">Nama Lengkap</label>
			<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required="">
		</div>
		<div class="form-group col-lg-6">
			<label class="required font-weight-bold text-dark">Alamat email</label>
			<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required="">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col">
			<label class="font-weight-bold text-dark">Judul</label>
			<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required="">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col">
			<label class="required font-weight-bold text-dark">Pesan</label>
			<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" id="message" required=""></textarea>
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col">
			<input type="submit" value="Kirim Pesan" class="btn btn-primary btn-modern" data-loading-text="Loading...">
		</div>
	</div>
</form>
</div>

	
	
	
	<!-- Vendor -->
		<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?php echo base_url() ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?php echo base_url() ?>assets/vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="<?php echo base_url() ?>assets/vendor/popper/umd/popper.min.js"></script>
		<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url() ?>assets/vendor/common/common.min.js"></script>
		<script src="<?php echo base_url() ?>assets/vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="<?php echo base_url() ?>assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="<?php echo base_url() ?>assets/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="<?php echo base_url() ?>assets/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="<?php echo base_url() ?>assets/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="<?php echo base_url() ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?php echo base_url() ?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo base_url() ?>assets/vendor/vide/jquery.vide.min.js"></script>
		<script src="<?php echo base_url() ?>assets/vendor/vivus/vivus.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url() ?>assets/js/theme.js"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="<?php echo base_url() ?>assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="<?php echo base_url() ?>assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url() ?>assets/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url() ?>assets/js/theme.init.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->