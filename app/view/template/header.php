<?php $this->suspensionRedirect($view); ?>
<!DOCTYPE html>
<html lang="en" <?php $this->helpers->htmlClasses(); ?>>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />

	<?php $this->helpers->seo($view); ?>
	<link rel="icon" href="public/images/favicon.png" type="image/x-icon">

	<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	<link href="<?php echo URL; ?>public/styles/style.css" rel="stylesheet">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<link rel="stylesheet" href="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.css" media="screen" />
	<?php $this->helpers->analytics(); ?>

	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
		integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- GOOGLE FONT -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body <?php $this->helpers->bodyClasses($view); ?>>
	<?php $this->checkSuspensionHeader(); ?>
	<header>
		<div id="header" class="">
			<div class="row flex">
				<div class="left">
					<nav>
						<a href="#" id="pull"><strong>MENU</strong></a>
						<ul>
							<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a>
							</li>
							<li <?php $this->helpers->isActiveMenu("about"); ?>><a
									href="<?php echo URL ?>about#content">ABOUT</a></li>
							<li <?php $this->helpers->isActiveMenu("services"); ?>><a
									href="<?php echo URL ?>services#content">SERVICES</a></li>
							<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a
									href="<?php echo URL ?>gallery#content">GALLERY</a></li>
							<li <?php $this->helpers->isActiveMenu("reviews"); ?>><a
									href="<?php echo URL ?>reviews#content">TESTIMONIALS</a></li>
							<li <?php $this->helpers->isActiveMenu("contact"); ?>><a
									href="<?php echo URL ?>contact#content">CONTACT</a></li>
						</ul>
					</nav>
				</div>

				<div class="right flex">
					<div class="info">
						<div class="flex">
							<div class="phone flex">
								<img loading="lazy" src="public/images/content/h-phone.png" alt="">
								<a href="tel:<?php $this->info("phone"); ?>">
									<?php $this->info("phone"); ?>
								</a>
							</div>

							<div class="email flex">
								<img loading="lazy" src="public/images/content/h-email.png" alt="">
								<a href="mailto:<?php $this->info("email"); ?>">
									<?php $this->info("email"); ?>
								</a>
							</div>
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
	</header>

	<!-- <?php //if($view == "home"):?> -->
	<div id="banner">
		<div class="row">
			<div class="banner-con text-right">
				<div class="logo-holder text-left">
					<a href="home"><img loading="lazy" src="public/images/content/logo.png" alt="Logo"></a>
				</div>

				<div class="ban-title">STEEL DETAILING SOLUTIONS</div>
				<div class="to-sm">Contact us Today!</div>
				<div class="phone"><a href="tel:<?php $this->info("phone"); ?>">
						<?php $this->info("phone"); ?>
					</a></div>

				<div class="btn-holder flex">
					<div class="btn">
						<a href="<?php echo URL ?>#content">GET STARTED</a>
					</div>

					<div class="btn btn2">
						<a href="<?php echo URL ?>#content">FREE ESTIMATE</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <?php //endif; ?> -->