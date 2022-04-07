<!--Newsletter Start-->
<section class="newsletter">
	<div class="container">
		<div class="newsletter__inner wow fadeInUp" data-wow-delay="100ms">
			<div class="newsletter-shape-1"
				 style="background-image: url(<?= base_url("assets") ?>/images/shapes/newsletter-shape-1.png);"></div>
			<div class="newsletter__left">
				<h3 class="newsletter__title">Don't Miss the Opportunities</h3>
				<p class="newsletter__text">Be the first to know about all our campaigns and opportunities!</p>
			</div>
			<div class="newsletter__right">
				<form class="newsletter__form">
					<div class="newsletter__input-box">
						<input type="email" placeholder="Enter Your Email Address..." name="email">
						<button type="submit" class="thm-btn newsletter__btn">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!--Newsletter End-->

<!--Site Footer Start-->
<footer class="site-footer">
	<div class="site-footer-bg" style="background-image: url(<?= base_url("assets") ?>/images/backgrounds/site-footer-bg.jpg);">
	</div>
	<div class="site-footer__top">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
					<div class="footer-widget__column footer-widget__about">
						<div class="footer-widget__logo">
							<a href="/en"><img src="<?= base_url("assets") ?>/images/resources/maxi-beyaz.png" alt=""></a>
						</div>

						<div class="site-footer__social">
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-facebook"></i></a>
							<a href="#"><i class="fab fa-pinterest-p"></i></a>
							<a href="#"><i class="fab fa-instagram"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
					<div class="footer-widget__column footer-widget__explore clearfix">
						<h3 class="footer-widget__title">Important informations</h3>
						<ul class="footer-widget__explore-list list-unstyled clearfix">
							<li><a href="/">Home</a></li>
							<li><a href="about-us">About Us</a></li>
							<li><a href="contact">Contact</a></li>
							<li><a href="references">References</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
					<div class="footer-widget__column footer-widget__contact clearfix">
						<h3 class="footer-widget__title">Contact Us</h3>
						<ul class="footer-widget__contact-list list-unstyled clearfix">
							<li>
								<div class="icon">
									<span class="icon-phone-call"></span>
								</div>
								<div class="text">
									<h5>Call Us</h5>
									<p><a href="tel:+908905338903264">+ 90 (533) 890 3264</a></p>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="icon-message"></span>
								</div>
								<div class="text">
									<h5>To Order</h5>
									<p><a href="mailto:ambed@company.com">order@maximodel.com.tr</a></p>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="icon-location"></span>
								</div>
								<div class="text">
									<h5>Şahinbey</h5>
									<p>Gazinatep, Türkiye</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="site-footer__bottom">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="site-footer__bottom-inner">
						<p class="site-footer__bottom-text">© Copyright 2022 by <a target="_blank" href="http://akmanhancerli.com">Akman Hançerli</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!--Site Footer End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
	<div class="mobile-nav__overlay mobile-nav__toggler"></div>
	<!-- /.mobile-nav__overlay -->
	<div class="mobile-nav__content">
		<span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

		<div class="logo-box">
			<a href="/en" aria-label="logo image"><img src="<?= base_url("assets") ?>/images/resources/maxi-beyaz.png"
															  width="155" alt="" /></a>
		</div>
		<!-- /.logo-box -->
		<div class="mobile-nav__container"></div>
		<!-- /.mobile-nav__container -->

		<ul class="mobile-nav__contact list-unstyled">
			<li>
				<i class="fa fa-envelope"></i>
				<a href="mailto:needhelp@packageName__.com">order@maximodel.com.tr</a>
			</li>
			<li>
				<i class="fa fa-phone-alt"></i>
				<a href="tel:+905338903264">+90 (533) 890 3264</a>
			</li>
		</ul><!-- /.mobile-nav__contact -->
		<div class="mobile-nav__top">
			<div class="mobile-nav__social">
				<a href="#" class="fab fa-twitter"></a>
				<a href="#" class="fab fa-facebook-square"></a>
				<a href="#" class="fab fa-pinterest-p"></a>
				<a href="#" class="fab fa-instagram"></a>
			</div><!-- /.mobile-nav__social -->
		</div><!-- /.mobile-nav__top -->



	</div>
	<!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="search-popup">
	<div class="search-popup__overlay search-toggler"></div>
	<!-- /.search-popup__overlay -->
	<div class="search-popup__content">
		<form action="#">
			<label for="search" class="sr-only">Search</label><!-- /.sr-only -->
			<input type="text" id="search" placeholder="Search..." />
			<button type="submit" aria-label="search submit" class="thm-btn">
				<i class="icon-magnifying-glass"></i>
			</button>
		</form>
	</div>
	<!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<script src="<?= base_url("assets") ?>/vendors/jquery/jquery-3.6.0.min.js"></script>
<script src="<?= base_url("assets") ?>/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url("assets") ?>/vendors/jarallax/jarallax.min.js"></script>
<script src="<?= base_url("assets") ?>/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url("assets") ?>/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="<?= base_url("assets") ?>/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="<?= base_url("assets") ?>/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url("assets") ?>/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="<?= base_url("assets") ?>/vendors/nouislider/nouislider.min.js"></script>
<script src="<?= base_url("assets") ?>/vendors/odometer/odometer.min.js"></script>
<script src="<?= base_url("assets") ?>/vendors/swiper/swiper.min.js"></script>
<script src="<?= base_url("assets") ?>/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="<?= base_url("assets") ?>/vendors/wnumb/wNumb.min.js"></script>
<script src="<?= base_url("assets") ?>/vendors/wow/wow.js"></script>
<script src="<?= base_url("assets") ?>/vendors/isotope/isotope.js"></script>
<script src="<?= base_url("assets") ?>/vendors/countdown/countdown.min.js"></script>
<script src="<?= base_url("assets") ?>/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?= base_url("assets") ?>/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="<?= base_url("assets") ?>/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="<?= base_url("assets") ?>/vendors/vegas/vegas.min.js"></script>
<script src="<?= base_url("assets") ?>/vendors/jquery-ui/jquery-ui.js"></script>
<script src="<?= base_url("assets") ?>/vendors/timepicker/timePicker.js"></script>
<script src="<?= base_url("assets") ?>/vendors/circleType/jquery.circleType.js"></script>
<script src="<?= base_url("assets") ?>/vendors/circleType/jquery.lettering.min.js"></script>




<!-- template js -->
<script src="<?= base_url("assets") ?>/js/ambed.js"></script>


<!-- toolbar js -->
<script src="<?= base_url("assets") ?>/vendors/toolbar/js/js.cookie.min.js"></script>
<script src="<?= base_url("assets") ?>/vendors/toolbar/js/jQuery.style.switcher.min.js"></script>
<script src="<?= base_url("assets") ?>/vendors/toolbar/js/toolbar.js"></script>
