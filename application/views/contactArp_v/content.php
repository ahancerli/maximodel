<!--Page Header Start-->
<section class="page-header">
	<div class="page-header-bg" style="background-image: url(<?= base_url("assets") ?>/images/backgrounds/page-header-bg.jpg)">
	</div>
	<div class="container">
		<div class="page-header__inner">
			<ul class="thm-breadcrumb list-unstyled">
				<li><a href="/">الصفحة الرئيسية</a></li>
				<li><span>/</span></li>
				<li>اتصل</li>
			</ul>
			<h2>اتصل</h2>
		</div>
	</div>
</section>
<!--Page Header End-->

<!--Contact Page Start-->
<section class="contact-page">
	<div class="contact-page-shape-1 float-bob-x">
		<img src="<?= base_url("assets") ?>/images/shapes/contact-page-shape-1.png" alt="">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xl-8 col-lg-7">
				<div class="contact-page__left">
					<div class="section-title text-left">
						<span class="section-title__tagline">اتصل بنا</span>
						<h2 class="section-title__title"> اتصل بنا</h2>
						<div class="section-title__line"></div>
					</div>
					<?php
					$alert = $this->session->userdata("return");
					if ($alert) {
						?><div class="alert alert-<?= $alert['type'] ?>"><?= $alert['text'] ?></div>
						<?php
					}
					?>
					<div class="contact-page__form">
						<form method="post" action="<?= base_url("send-mailArp") ?>" class="comment-one__form" novalidate="novalidate">
							<div class="row">
								<div class="col-xl-6">
									<div class="comment-form__input-box">
										<input type="text" placeholder="اسمكم ولقبكم" name="name">
									</div>
								</div>
								<div class="col-xl-6">
									<div class="comment-form__input-box">
										<input type="email" placeholder="عنوان البريد الإلكتروني الخاص بك" name="email">
									</div>
								</div>
								<div class="col-xl-6">
									<div class="comment-form__input-box">
										<input type="text" placeholder="رقم تليفونك" name="phone">
									</div>
								</div>
								<div class="col-xl-6">
									<div class="comment-form__input-box">
										<input type="text" placeholder="موضوعات" name="pubject">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-12">
									<div class="comment-form__input-box text-message-box">
										<textarea name="message" placeholder="اكتب رسالة"></textarea>
									</div>
									<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">

									<div class="comment-form__btn-box">
										<button type="submit" class="thm-btn comment-form__btn">ارسل رسالة</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-5">
				<div class="contact-page__right">
					<div class="contact-page__details">
						<ul class="list-unstyled contact-page__details-list">
							<li>
								<span>اتصل بنا</span>
								<p><a href="tel:+905338903264">+90 (533) 890 3264</a></p>
							</li>
							<li>
								<span>للطلب</span>
								<p><a href="mailto:siparis@maximodel.com.tr">order@maximodel.com.tr</a></p>
							</li>
							<li>
								<span>عنوان</span>
								<p>Şahinbey, Gazinatep/Türkiye</p>
							</li>
						</ul>
						<div class="contact-page__social">
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-facebook"></i></a>
							<a href="#"><i class="fab fa-pinterest-p"></i></a>
							<a href="#"><i class="fab fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Contact Page End-->

<!--Google Map Start-->
<section class="google-map-two">
	<iframe
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
			class="google-map__two-box" allowfullscreen></iframe>

</section>
<!--Google Map End-->
