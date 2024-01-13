<footer>
	<div id="footer">
		<div id="maps">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2732.859827769298!2d-71.29135152324828!3d46.76765934553234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cb8913284746679%3A0x20d08406e5ef10f3!2sMorisset%20Construction!5e0!3m2!1sen!2sph!4v1705018007223!5m2!1sen!2sph"
				style="border:0;" allowfullscreen="" loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<div class="row">

			<div id="contact">
				<div class="row">
					<div class="contact-con">
						<h1>Contact Form</h1>
						<div class="to-sm">Please fill out the form below and we will get back to you as soon as we can
							with a
							reply. Thank you.</div>
						<form action="sendContactForm" method="post" class="sends-email ctc-form">
							<div class="flex">
								<label><span class="ctc-hide">Name</span>
									<input type="text" name="name" placeholder="Name:">
								</label>

								<label><span class="ctc-hide">Phone</span>
									<input type="text" name="phone" placeholder="Phone:">
								</label>

								<label><span class="ctc-hide">Email</span>
									<input type="text" name="email" placeholder="Email:">
								</label>
							</div>
							<label><span class="ctc-hide">Message</span>
								<textarea name="message" cols="30" rows="10"
									placeholder="Message / Questions:"></textarea>
							</label>

							<label for="g-recaptcha-response"><span class="ctc-hide">Recaptcha</span></label>

							<div class="flex">
								<!-- <div class="text-left ctcCheckbox">
									<label>
										<input type="checkbox" name="consent" class="consentBox">I hereby consent to
										having this
										website store my submitted information so that they can respond to my inquiry.
									</label><br>

									<label>
										<input type="checkbox" name="termsConditions" class="termsBox" /> I hereby
										confirm that
										I have read and understood this website’s <a
											href="<?php $this->info("policy_link"); ?>" target="_blank">Privacy
											Policy.</a>
									</label>
								</div> -->

								<!-- <div class="g-recaptcha"></div> -->
								<div class="btn-holder">
									<button type="submit" class="ctcBtn btn hvr-grow hvr-sweep-to-top" disabled>SUBMIT
										FORM</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="flex footer-con">

				<div class="info">
					<div class="email content">
						<img loading="lazy" src="public/images/content/f-email.png" alt="">
						<div class="text-left">
							<div class="label">Email</div>
							<a href="mailto:<?php $this->info("email"); ?>">
								<?php $this->info("email"); ?>
							</a>
						</div>
					</div>

					<div class="phone content">
						<img loading="lazy" src="public/images/content/f-phone.png" alt="">
						<div class="text-left">
							<div class="label">Phone</div>
							<a href="tel:<?php $this->info("phone"); ?>">
								<?php $this->info("phone"); ?>
							</a>
						</div>
					</div>
				</div>

				<div class="logo-holder">
					<a href="home"><img loading="lazy" src="public/images/content/logo.png" alt="Logo"></a>
				</div>

				<div class="info">
					<div class="address content">
						<img loading="lazy" src="public/images/content/f-address.png" alt="">
						<div class="text-left">
							<div class="label">Location</div>
							<a>
								<?php $this->info("address"); ?>
							</a>
						</div>
					</div>

					<div class="socials">
						<a href="<?php $this->info('fb_link') ?>" target="_blank"><img loading="lazy"
								src="public/images/content/fb.png" alt=""></a>
						<a href="<?php $this->info('ig_link') ?>" target="_blank"><img loading="lazy"
								src="public/images/content/ig.png" alt=""></a>
						<a href="<?php $this->info('tt_link') ?>" target="_blank"><img loading="lazy"
								src="public/images/content/tt.png" alt=""></a>
						<a href="<?php $this->info('li_link') ?>" target="_blank"><img loading="lazy"
								src="public/images/content/li.png" alt=""></a>
					</div>
				</div>
			</div>

		</div>
		<div class="bottom">
			<div class="row">
				<div class="flex">
					<div class="nav-holder">
						<div class="flex">
							<nav>
								<ul>
									<li <?php $this->helpers->isActiveMenu("home"); ?>><a
											href="<?php echo URL ?>">HOME</a>
									</li>
									<li <?php $this->helpers->isActiveMenu("about"); ?>><a
											href="<?php echo URL ?>about#content">ABOUT</a></li>
									<li <?php $this->helpers->isActiveMenu("services"); ?>><a
											href="<?php echo URL ?>services#content">SERVICES</a></li>
									<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a
											href="<?php echo URL ?>gallery#content">GALLERY</a></li>
									<li <?php $this->helpers->isActiveMenu("reviews"); ?>><a
											href="<?php echo URL ?>reviews#content">REVIEWS</a></li>
									<li <?php $this->helpers->isActiveMenu("contact"); ?>><a
											href="<?php echo URL ?>contact#content">CONTACT</a></li>
								</ul>
							</nav>
						</div>
					</div>


					<div class="copyrights text-right">
						<p class="copy">
							©
							<?php echo date("Y"); ?>.
							<span class="all-caps">
								<?php $this->info("company_name"); ?>.
							</span> All Rights Reserved.
							<?php if ($this->siteInfo['policy_link']): ?>
								<a href="<?php $this->info("policy_link"); ?>">Privacy Policy</a>.
							<?php endif ?>
						</p>
						<p class="techno">
							<a href="http://technodreamoutsourcing.com/">Web Design</a> Done by <img loading="lazy"
								src="public/images/hd-logo.png" alt="">
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/scripts/sendform.js" data-view="<?php echo $view; ?>" id="sendform"></script>
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  -->
<script src="<?php echo URL; ?>public/scripts/responsive-menu.js"></script>
<script src="https://unpkg.com/sweetalert2@7.20.10/dist/sweetalert2.all.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="public/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript" src="public/scripts/jquery.pajinate.js"></script>


<script>
	// EFFECTS / ANIMATION
	function reveal() {
		var reveals = document.querySelectorAll(".reveal");

		for (var i = 0; i < reveals.length; i++) {
			var windowHeight = window.innerHeight;
			var elementTop = reveals[i].getBoundingClientRect().top;
			var elementVisible = 150;

			if (elementTop < windowHeight - elementVisible) {
				reveals[i].classList.add("active");
			} else {
				reveals[i].classList.remove("active");
			}
		}
	}

	window.addEventListener("scroll", reveal);

	// HEADER FIXED
	document.addEventListener("DOMContentLoaded", function () {
		var header = document.getElementById("header");
		var rightElement = document.querySelector("#header .right");

		function updateHeader() {
			if (window.scrollY > 0) {
				header.classList.add("fixed");
				rightElement.classList.add("hide-on-scroll");
			} else {
				header.classList.remove("fixed");
				rightElement.classList.remove("hide-on-scroll");
			}
		}

		updateHeader();

		window.addEventListener("scroll", function () {
			updateHeader();
		});
	});


	// GALLERY
	$(document).ready(function () {
		$('.fancy').fancybox({
			helpers: {
				title: {
					type: 'over'
				}
			}
		});
	})


</script>

<?php if ($this->siteInfo['cookie']): ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
	<script src="<?php echo URL; ?>public/scripts/cookie-script.js"></script>
<?php endif ?>

<?php if (in_array($view, ["home", "contact"])): ?>
	<textarea id="g-recaptcha-response" class="destroy-on-load"></textarea>
	<script src='//www.google.com/recaptcha/api.js?onload=captchaCallBack&render=explicit' async defer></script>
	<script>
		var captchaCallBack = function () {
			$('.g-recaptcha').each(function (index, el) {
				var recaptcha = grecaptcha.render(el, { 'sitekey': '<?php $this->info("site_key"); ?>' });
				$('.destroy-on-load').remove();
			})
		};


		$('.consentBox').click(function () {
			if ($(this).is(':checked')) {
				if ($('.termsBox').length) {
					if ($('.termsBox').is(':checked')) {
						$('.ctcBtn').removeAttr('disabled');
					}
				} else {
					$('.ctcBtn').removeAttr('disabled');
				}
			} else {
				$('.ctcBtn').attr('disabled', true);
			}
		});

		$('.termsBox').click(function () {
			if ($(this).is(':checked')) {
				if ($('.consentBox').is(':checked')) {
					$('.ctcBtn').removeAttr('disabled');
				}
			} else {
				$('.ctcBtn').attr('disabled', true);
			}
		});

	</script>

<?php endif; ?>


<?php if ($view == "gallery"): ?>
	<script>
		$(document).ready(function () {
			$('#gall1').pajinate({
				num_page_links_to_display: 3,
				items_per_page: 10
			});
			$('.fancy').fancybox({
				helpers: {
					title: {
						type: 'over'
					}
				}
			});
		})
	</script>
<?php endif; ?>


<?php $this->checkSuspensionFooter(); ?>
</body>

</html>