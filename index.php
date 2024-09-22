<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="simcoeit" />
	<meta name="description" content="SBJR About Saudi Arabia, The Bank">
	<link rel="icon" type="image/png" href="images/fav.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Document title -->
	<title>SBJR | Saudi Banks Joint Reception</title>
	<!-- Stylesheets & Fonts -->
	<link href="css/plugins.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<style>
		@media (max-width:1299px) {
			#header[data-fullwidth="true"] .header-inner .container {
				padding: 0 24px;
			}

			img.img_logo {
				height: 80px;
			}

			.form-column {
				padding: 2px;
			}
		}

		@media (min-width: 992px) and (max-width:1060px) {
			#header[data-fullwidth="true"] .header-inner .container {
				padding: 0 10px;
			}

			#mainMenu nav>ul>li {
				margin-left: 12px;
			}
		}

		table {
			width: 100%;
			border-collapse: collapse;
		}

		th,
		td {
			border: 1px solid #ccc;
			padding: 8px;
			text-align: left;
		}

		th {
			background-color: #e0e0e0;
		}

		td input {
			width: 100%;
			padding: 6px;
			box-sizing: border-box;
		}

		.submit-container {
			text-align: center;
			margin-top: 20px;
		}

		.submit-container button {
			padding: 10px 20px;
			background-color: #ccc;
			border: none;
			cursor: pointer;
		}


		.fullscreen {
			justify-content: center;
		}

		.active,
		.list_item:hover {
			border-color: 1px solid #fff;
		}

		#contact-us input {
			color: #fff;
		}

		#contact-us textarea {
			color: #fff;
		}

		.img_logo {
			padding: 0px;
			height: 120px;
		}

		.slide {
			position: relative;
			/* Ensure the slide is the reference for absolute positioning */
		}

		.bottom-border {
			position: absolute;
			bottom: 3px;
			left: 0;
			width: 100%;
			height: 30px;
			background: url('images/borders/border-color.png') repeat-x;
			background-size: auto 30px;
			z-index: 10;
		}

		.top-border {
			position: absolute;
			top: 3px;
			left: 0;
			width: 100%;
			height: 30px;
			background: url('images/borders/border-color.png') repeat-x;
			background-size: auto 30px;
			z-index: 10;
		}

		.bank-border {
			position: absolute;
			bottom: 0px;
			left: 0;
			width: 100%;
			height: 40px;
			background: url('images/borders/border-bank.png') repeat-x;
			background-size: auto 45px;
			z-index: 10;
		}
	</style>
</head>

<body>

	<!-- Body Inner -->
	<div class="body-inner">


		<header id="header" data-transparent="true" data-fullwidth="true" class="dark">
			<div class="header-inner">
				<div class="container">
					<!--Logo-->
					<div id="logo"> <a href=""><span class="logo-default"><img class="img_logo" src="images/logo/logo-w.png"></span><span class="logo-dark"><img class="img_logo" src="images/logo/logo-w.png"></span></a> </div>
					<!--End: Logo-->
					<!--Header Extras-->
					<!--<div class="header-extras">-->

					<!--</div>-->
					<!--end: Header Extras-->
					<!--Navigation Resposnive Trigger-->
					<div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>
					<!--end: Navigation Resposnive Trigger-->
					<!--Navigation-->
					<div id="mainMenu" class="menu-center">
						<div class="container">
							<nav id="navbar" class="navbar">
								<ul id="menu_item">
									<li><a class="list_item scrollto" href="#">Home</a></li>
									<li><a class="list_item scrollto" href="#about-event">About the Event</a></li>
									<li><a class="list_item scrollto" href="#about-saudi-arabia">About Saudi Arabia</a></li>
									<li><a class="list_item scrollto" href="#participating-banks">The Banks</a></li>
									<li><a class="list_item scrollto" href="#media">Media</a></li>
									<li><a class="list_item scrollto" href="#invitation">Secure Invitation</a></li>
									<li><a class="list_item scrollto" href="#news">News</a></li>
									<li><a class="list_item scrollto" href="#contact-us">Contact Us</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<!--end: Navigation-->
				</div>
			</div>
		</header>
		<!-- end: Header -->

		<!-- Inspiro Slider -->
		<div id="slider" class="inspiro-slider slider-fullscreen dots" data-height-xs="360">
			<!-- Slide 1 -->
			<div class="slide" data-bg-image="images/sliders/slider1.png">
				<div class="bg-overlay"></div>
				<div class="container-wide">
					<div class="row" style="padding-top:5%;">
						<div class="col-sm-12 col-md-8 col-lg-6 ">
							<p style="font-family: 'Freestyle Script', sans-serif; font-size: 28px; color: #ffd700;  text-align:center;">&nbsp;</p>
						</div>
					</div>
					<div class="slide-captions text-white" style="padding-top:10%;">
						<div class="silelogo col-sm-12 col-md-6 col-lg-4">
							<div>
								<img src="images/logo/logo-w.png" class="img_logo" alt="logo">
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4">
							<p style="font-family: lintel-bold; font-size: 15px; font-weight: bold; margin: 0;">October 23, 2024<br><span style="display: inline-block; border-bottom: 2px solid white; padding-bottom: 1px;">Fairmont 2401 M St NW, Washington, D.C</span></p>
							<p style="font-family: lintel-bold; font-size: 15px; font-weight: bold; border-bottom: 2px solid white; padding-bottom: 1px; display: inline-block;">7:00PM to 9:00PM</p>
						</div>
					</div>
				</div>
				<div class="bottom-border"></div>
			</div>
			<!-- end: Slide 1 -->
			<!-- Slide 2 -->
			<div class="slide" data-bg-image="images/sliders/slider2.png">
				<div class="bg-overlay"></div>
				<div class="container-wide">
					<div class="slide-captions text-white" style="padding-top:27%;">
						<!-- Captions -->
						<div class="silelogo col-sm-12 col-md-6 col-lg-4">
							<div>
								<img src="images/logo/logo-w.png" class="img_logo" alt="logo">
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4">
							<p style="font-family: lintel-bold; font-size: 15px; font-weight: bold; margin: 0;">October 23, 2024<br><span style="display: inline-block; border-bottom: 2px solid white; padding-bottom: 1px;">Fairmont 2401 M St NW, Washington, D.C</span></p>
							<p style="font-family: lintel-bold; font-size: 15px; font-weight: bold; border-bottom: 2px solid white; padding-bottom: 1px; display: inline-block;">7:00PM to 9:00PM</p>
						</div>
					</div>
				</div>
				<div class="bottom-border"></div>
			</div>
			<!-- end: Slide 2 -->
			<!-- Slide 3 -->
			<div class="slide" data-bg-image="images/sliders/slider3.png">
				<div class="bg-overlay"></div>
				<div class="container-wide">
					<div class="slide-captions text-white" style="padding-top:27%;">
						<!-- Captions -->
						<div class="silelogo col-sm-12 col-md-6 col-lg-4">
							<div>
								<img src="images/logo/logo-w.png" class="img_logo" alt="logo">
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4">
							<p style="font-family: lintel-bold; font-size: 15px; font-weight: bold; margin: 0;">October 23, 2024<br><span style="display: inline-block; border-bottom: 2px solid white; padding-bottom: 1px;">Fairmont 2401 M St NW, Washington, D.C</span></p>
							<p style="font-family: lintel-bold; font-size: 15px; font-weight: bold; border-bottom: 2px solid white; padding-bottom: 1px; display: inline-block;">7:00PM to 9:00PM</p>
						</div>
					</div>
				</div>
				<div class="bottom-border"></div>
			</div>
			<!-- end: Slide 3 -->
			<!-- Slide 4 -->
			<div class="slide" data-bg-image="images/sliders/slider4.png">
				<div class="bg-overlay"></div>
				<div class="container-wide">
					<div class="slide-captions text-white" style="padding-top:17%;">
						<!-- Captions -->
						<div class="silelogo col-sm-12 col-md-6 col-lg-4">
							<div>
								<img src="images/logo/logo-w.png" class="img_logo" alt="logo">
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4">
							<p style="font-family: lintel-bold; font-size: 15px; font-weight: bold; margin: 0;">October 23, 2024<br><span style="display: inline-block; border-bottom: 2px solid white; padding-bottom: 1px;">Fairmont 2401 M St NW, Washington, D.C</span></p>
							<p style="font-family: lintel-bold; font-size: 15px; font-weight: bold; border-bottom: 2px solid white; padding-bottom: 1px; display: inline-block;">7:00PM to 9:00PM</p>
						</div>
					</div>
				</div>
				<div class="bottom-border"></div>
			</div>
			<!-- end: Slide 4 -->

		</div>
		<!-- Inspiro Slider -->



		<!-- About Event -->
		<section id="about-event" class="fullscreen text-light" style="background: transparent url(images/bg-2.jpg); background-repeat: no-repeat; background-size: cover; background-position: bottom;">
			<div class="top-border"></div>
			<div class="container-wide">
				<h2 class="sec-hed text-left">ABOUT THE EVENT</h2>
				<!-- <div class="seperator seperator-small"></div> -->
				<hr class="space">

				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-5 text-light sec-para ">
						<p>“SAUDI BANKS JOINT RECEPTION” (SBJR) is a reception event that aims to create a platform of dialogue in which decision makers from the financial institutions get to share ideas and connect to develop potential for future change and growth.
							<br /> <br />
							The reception is hosted collaboratively by the banks of Saudi Arabia represented by its Chairman and Senior Management.
							<br /> <br />
							SBJR 2024 reception is implemented every year to promote the Kingdom of Saudi Arabia and its robust financial sector whilst building long-term relationships with industry leaders from around the world who come to attend the IMF/WBG annual meetings. It also provides an opportunity for multilateral economic discussions and the exchange of ideas between officials representing Saudi Arabia’s financial sector, GCC, International banks and policymakers from around the world.
							<br /> <br />
						</p>

					</div>
					<div class="col-sm-12 col-md-12 col-lg-6 text-light sec-para ">
						<p>&nbsp;</p>
					</div>
					<div class="slide-captions animate__fadeInUp" style="opacity: 1; animation-duration: 600ms;">
						<div class="silelogo col-sm-12 col-md-6 col-lg-4">
							<div>
								<img src="images/logo/logo-c.png" class="img_logo" alt="logo">
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4">
							<p style="font-family: lintel-bold; font-size: 15px; font-weight: bold; margin: 0;">October 23, 2024<br><span style="display: inline-block; border-bottom: 2px solid #E9Af85; padding-bottom: 1px;">Fairmont 2401 M St NW, Washington, D.C</span></p>
							<p style="font-family: lintel-bold; font-size: 15px; font-weight: bold; border-bottom: 2px solid #E9Af85; padding-bottom: 1px; display: inline-block;">7:00PM to 9:00PM</p>
						</div>
					</div>
				</div>
				<hr class="space">
			</div>
			<div class="bottom-border"></div>
		</section>
		<!-- end: About Event -->
		<!-- About KSA -->
		<section id="about-saudi-arabia" class="fullscreen text-light" style="background: transparent url(images/bg-1.jpg); background-repeat: no-repeat; background-size: cover; background-position: bottom;">
			<div class="top-border"></div>
			<div class="container-wide">
				<h2 class=" text-left sec-hed">ABOUT SAUDI ARABIA</h2>
				<hr class="space">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-5 text-light sec-para">

						<p class="text-light ">Saudi Arabia is the birthplace of Islam and hometown of the two holiest shrines in Mecca and Medina. The king’s official title is the Custodian of the Two Holy Mosques. The modern Saudi state was founded in 1932 by ABD AL-AZIZ Bin Abd Al-Rahman Al SAUD after a 30 years campaign to unify most of the Arabian Peninsula.</p>

						<p class="">The Kingdom of Saudi Arabia is the largest country in the Arabian Peninsula. Saudi Arabia’s population is 27 million, including 8.4 million foreign residents,  and its capital city is Riyadh.</p>

						<p class="">Saudi Arabia’s geography is diverse, with forests, grasslands, mountain ranges and deserts. The climate varies from region to region.</p>

						<p class="">The Kingdom of Saudi Arabia is located in the far southwest of the Asian continent; in the west, it is bordered by the Red sea; in the east by the Arab gulf, United Arab of Emirates, and Qatar; and in the north by Kuwait, Iraq, and Jordan; and in the south by Yemen and Sultanate of Oman. The Kingdom of Saudi Arabia occupies four-fifth of the area of the Peninsula of Arab Island, at an area of more than 2,250,000 square meters.</p>

						<p class="">This geographical location is remarkable, and it is a key linking point between the east and the west. It overlooks the Arab gulf and the Red sea as an important, key bridge for the world trade, and a meeting point between the east and the west.</p>
					</div>
				</div>
			</div>
			<div class="bottom-border"></div>
		</section>
		<!-- end: about KSA -->

		<!-- participating banks -->
		<section id="participating-banks" class="background-white bank_logo_area fullscreen" style="position: relative; ">
			<div class="top-border"></div>
			<div class="container">
				<h2 style="font-family: lintel-bold; font-size: 16px; margin: 0; text-align: center;">CONNECTING PARTNERS TO POWERFUL GROWTH</h2>
				<hr class="space">
				<p style="font-family: lintel; font-size: 16px; margin: 0; text-align: left;">It has always been part of the Saudi Arabia’s government vision to boost the potential of the Saudi economy, which stands as the largest in the Middle East and is a member of the G20. Maintaining its growth momentum, the Kingdom continues to offer a wide range of investment opportunities. This is mainly attributed to the strategic foresight and planning showcased through a series of development plans, thus building its social and physical infrastructure capacity and enhancing the business environment to sustain economic development and future growth.</p><br>
				<p style="font-family: lintel; font-size: 16px; margin: 0; text-align: left;">Saudi banks always make remarkable contributions in this regard through their superior financing solutions, as they do play an integral role in expanding the Saudi private sector. Saudi Banks offer business enterprises with a powerful connection into this lucrative market, reaching to the remote corners of the country and being part of this boom of the mega projects across the different economic sectors.</p><br>
				<p style="font-family: lintel; font-size: 16px; margin: 0; text-align: center;">Welcome to the Joint Reception of Saudi Banks, where your ambitions find an empowering platform and the right connection to success.<br /><br /></p>
				<div class="all_logos_bx hide-mobile" style="direction:rtl;">
					<div class="grid-item">
						<div class="grid-item-wrap">
							<div class="grid-image">
								<img alt="About Bank" src="images/banks/logo-snb.png" />
							</div>
							<div class="grid-description">
								<a href="bank-snb.html" data-lightbox="ajax"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="grid-item">
						<div class="grid-item-wrap">
							<div class="grid-image">
								<img alt="About Bank" src="images/banks/logo-riyad.png">
							</div>
							<div class="grid-description">
								<a href="bank-riyad.html" data-lightbox="ajax"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="grid-item">
						<div class="grid-item-wrap">
							<div class="grid-image">
								<img alt="About Bank" src="images/banks/logo-baj.jpg">
							</div>
							<div class="grid-description">
								<a href="bank-baj.html" data-lightbox="ajax"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="grid-item">
						<div class="grid-item-wrap">
							<div class="grid-image">
								<img alt="About Bank" src="images/banks/logo-saib.png">
							</div>
							<div class="grid-description">
								<a href="bank-saib.html" data-lightbox="ajax"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="grid-item">
						<div class="grid-item-wrap">
							<div class="grid-image">
								<img alt="SABB Bank" src="images/banks/logo-sabb.png">
							</div>
							<div class="grid-description">
								<a href="bank-sabb.html" data-lightbox="ajax"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="grid-item">
						<div class="grid-item-wrap">
							<div class="grid-image">
								<img alt="SABB Bank" src="images/banks/logo-bsf.png">
							</div>
							<div class="grid-description">
								<a href="bank-bsf.html" data-lightbox="ajax"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
					<!--row 2-->
					<div class="grid-item all_logos_2ndbx">
						<div class="grid-item-wrap">
							<div class="grid-image">
								<img alt="About Bank" src="images/banks/logo-anb.png">
							</div>
							<div class="grid-description">
								<a href="bank-anb.html" data-lightbox="ajax"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="grid-item all_logos_2ndbx">
						<div class="grid-item-wrap">
							<div class="grid-image">
								<img alt="About Bank" src="images/banks/logo-arb.png">
							</div>
							<div class="grid-description">
								<a href="bank-arb.html" data-lightbox="ajax"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="grid-item all_logos_2ndbx">
						<div class="grid-item-wrap">
							<div class="grid-image">
								<img alt="About Bank" src="images/banks/logo-bab.png">
							</div>
							<div class="grid-description">
								<a href="bank-albilad.html" data-lightbox="ajax"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="grid-item all_logos_2ndbx">
						<div class="grid-item-wrap">
							<div class="grid-image">
								<img class="" alt="About Bank" src="images/banks/logo-alinma.png" />
							</div>
							<div class="grid-description">
								<a href="bank-alinma.html" data-lightbox="ajax"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="grid-item all_logos_2ndbx">
						<div class="grid-item-wrap">
							<div class="grid-image">
								<img class="mxh_img" alt="SABB Bank" src="images/banks/logo-gib.jpg">
							</div>
							<div class="grid-description">
								<a href="bank-gib.html" data-lightbox="ajax"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="logo_cut_img">
					<img alt="" class="" src="images/sliders/welcome_200.png" />
				</div>

			</div>
			<div class="bottom-border"></div>
			<div class="logo_cut_img">
				<img alt="" class="vision_logo" src="images/vision-2030-cs.png" />
			</div>

		</section>

		<!--Coming Soon-->
		<!--<section id="coming-soon" class="page-content fullscreen background-colored">-->
		<!--    <div class="container grid-special justify-content-between">-->
		<!--        <hr class="space">-->
		<!--        <h2 class=" text-center" style="color: white;">Coming Soon!</h2>-->
		<!--    </div>-->
		<!--</section>-->

		<!-- media sectin -->
		<section id="media" class="fullscreen text-light" style="background: transparent url(images/bg-3.jpg); background-repeat: no-repeat; background-size: cover; background-position: bottom;">
			<div class="top-border"></div>
			<div class="container grid-special justify-content-between">
				<hr class="space">
				<h2 class="text-left sec-hed">MEDIA</h2>
				<hr class="space">
				<!-- Portfolio -->
				<div id="portfolio" class="grid-layout portfolio-3-columns" data-margin="10">

					<div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media col-sm-12 col-md-6 col-lg-4">
						<div class="portfolio-item-wrap">
							<div class="portfolio-image">
								<a href="group-photos-minister-vip.php"><img src="images/media/group-photo-minister-vips/IMG_9541.jpg" alt=""></a>
							</div>
							<!--<div class="portfolio-description">-->
							<!--    <a href="group-photos-minister-vip.php">-->
							<!--        <h4>Group Photo Minister & Vips</h4>-->
							<!--    </a>-->
							<!--</div>-->
						</div>
					</div>

					<div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media col-sm-12 col-md-6 col-lg-4">
						<div class="portfolio-item-wrap">
							<div class="portfolio-image">
								<a href="host-welcome.php"><img src="images/media/host-welcome/_CHF3435.jpg" alt=""></a>
							</div>
							<!--<div class="portfolio-description">-->
							<!--    <a href="host-welcome.php">-->
							<!--        <h4>Host Welcome</h4>-->
							<!--    </a>-->
							<!--</div>-->
						</div>
					</div>

					<div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media col-sm-12 col-md-6 col-lg-4">
						<div class="portfolio-item-wrap">
							<div class="portfolio-image">
								<a href="bank-specific.php"><img src="images/media/bank-specific/SNB4.jpg" alt=""></a>
							</div>
							<!--<div class="portfolio-description">-->
							<!--    <a href="bank-specific.php">-->
							<!--        <h4>Bank Specific</h4>-->
							<!--    </a>-->
							<!--</div>-->
						</div>
					</div>

					<div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media col-sm-12 col-md-6 col-lg-4">
						<div class="portfolio-item-wrap">
							<div class="portfolio-image">
								<a href="formal.php"><img src="images/media/formal/Formals 28.jpg" alt=""></a>
							</div>
							<!--<div class="portfolio-description">-->
							<!--    <a href="formal.php">-->
							<!--        <h4>Formal</h4>-->
							<!--    </a>-->
							<!--</div>-->
						</div>
					</div>

					<div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media col-sm-12 col-md-6 col-lg-4">
						<div class="portfolio-item-wrap">
							<div class="portfolio-image">
								<a href="networking.php"><img src="images/media/networking/_MUS3920.jpg" alt=""></a>
							</div>
							<!--<div class="portfolio-description">-->
							<!--    <a href="networking.php">-->
							<!--        <h4>Networking</h4>-->
							<!--    </a>-->
							<!--</div>-->
						</div>
					</div>

					<div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media col-sm-12 col-md-6 col-lg-4">
						<div class="portfolio-item-wrap">
							<div class="portfolio-image">
								<a href="saudi-culture.php"><img src="images/media/saudi-culture/Saudi Culture SBJR 23.jpg" alt=""></a>
							</div>
							<!--<div class="portfolio-description">-->
							<!--    <a href="saudi-culture.php">-->
							<!--        <h4>Saudi Culture</h4>-->
							<!--    </a>-->
							<!--</div>-->
						</div>
					</div>

					<div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media col-sm-12 col-md-6 col-lg-4">
						<div class="portfolio-item-wrap">
							<div class="portfolio-image">
								<a href="detail-shot.php"><img src="images/media/detail-shots/Ballroom SBJR Detail 30.jpg" alt=""></a>
							</div>
							<!--<div class="portfolio-description">-->
							<!--    <a href="detail-shot.php">-->
							<!--        <h4>Detail Shot</h4>-->
							<!--    </a>-->
							<!--</div>-->
						</div>
					</div>

				</div>
				<!-- end: Portfolio desktop -->
				<!-- portfolio mobile view-->

				<!--end: portfolio mobile-->
			</div>
			<div class="bottom-border"></div>
		</section>


		<!-- secure invitation -->
		<section id="invitation" class="fullscreen background-white" style="background: transparent url(images/bg-3.jpg); background-repeat: no-repeat; background-size: cover; background-position: bottom;">
			<div class="container-wide secure-invitation row justify-content-left">
				<div class="col-sm-12 col-md-12 col-lg-6">
					<!-- <p class="sec-hed pb-3">Secure Digital Invitation</p> -->
					<div class="d-flex align-items-center mb-2">
						<div>
							<p class="sec-hed mb-1">Secure Invitation</p>
							<select class="me-3" name="invitation" id="invitation-select" onchange="updateSecondSelect()">
								<option value="">Select an invitation type</option>
								<option value="self">Invitation for self</option>
								<option value="group">Invitation for group</option>
								<option value="self-and-group">Invitation for group and self</option>
							</select>
						</div>

						<!-- Second select dropdown (starts hidden) -->
						<div>
							<p class="sec-hed mb-1">No. of Invitations</p>
							<select name="invitation-options" id="invitation-options" onchange="generateTableRows()">
								<option value="">Select an option</option>
							</select>
						</div>
					</div>
					<form id="invitation-form" class="widget-contact-form" data-success-message-delay="40000">

						<div style="max-width: 100%; overflow-x: scroll;">
							<table>
								<thead>
									<tr>
										<th>No.</th>
										<th>Suffix</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Company / Institution</th>
										<th>Position</th>
										<th>Email</th>
										<th>Country Code</th>
										<th>Cellular No.</th>
									</tr>
								</thead>
								<tbody id="table-body">

								</tbody>
							</table>
						</div>

						<!-- Submit Button -->
						<div class="d-md-flex" style="margin-top: 8px;">
							<div class="form-bg d-flex align-items-center" style="min-width:120px;margin-right:10px;">
								<label for="message" class="form-lbl form-label mb-0">Your Message</label>
							</div>

							<div class="input-group">
								<textarea class="form-control" style="padding:0.7rem 1rem; background-color: #D9D9D9; font-family: 'lintel'; font-size: 14px;" name="msg_body" placeholder="Your message" id="exampleFormControlTextarea1" rows="1" required></textarea>
							</div>
						</div>
						<div class="submit-container" style="margin-top:8px">
							<button type="submit" style="width:100%;">Submit</button>
						</div>
					</form>
				</div>
				<div class="col-md-1 col-lg-1"></div>
				<div class="col-lg-4">
					<div class="contact_img">
						<img class="img-fluid" src="images/invitation.png" alt="invitation picture">
					</div>
				</div>
			</div>
		</section>
		<!-- secure invitation section end -->

		<!-- News -->
		<section id="news" class="fullscreen background-white" style="background: transparent url(images/bg-3.jpg); background-repeat: no-repeat; position: relative; background-size: cover; background-position: bottom; ">
			<div class="top-border"></div>
			<div class="container-wide ">
				<div class="row justify-content-end align-items-center">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<div class="audi_image">
							<img alt="" src="images/Picture1.png" style="">
						</div>
					</div>
				</div>
				<div class="row sm_news">
					<div class="news_post col-sm-12 col-md-6 col-lg-4">
						<div class="post-item-wrap">
							<div class="post-image">
								<a target="_blank" href="https://meetings.imf.org/"><img alt="" src="images/news1d.png"></a>
							</div>
							<div class="post-item-description">
								<p style="font-size: 20px;">The 2024 Annual Meetings of the International Monetary Fund (IMF) and the World Bank Group (WBG) will take place from Monday, October 21 to Saturday, October 26.</p>
								<a style="font-family: lintel-bold; font-weight:bold; font-size: 20px; color: black; text-decoration: underline;" target="_blank" href="https://meetings.imf.org/">https://meetings.imf.org/</a>
							</div>
						</div>
					</div>
					<div class="news_post col-sm-12 col-md-6 col-lg-4">
						<div class="post-item-wrap">
							<div class="post-image">
								<a target="_blank" href="https://www.vision2030.gov.sa/en"><img alt="" src="images/news2d.png"></a>
							</div>
							<div class="post-item-description">
								<p style="font-size: 20px;">Vision 2030 is built around three primary themes: a vibrant society, a thriving economy and an ambitious nation. The historic vision was developed by the Council of Economic and Development Affairs, which is chaired by Deputy Crown Prince Mohammed bin Salman.</p>
								<p><a style="font-family: lintel-bold; font-weight:bold; font-size: 20px; color: black; text-decoration: underline;" target="_blank" href="https://www.vision2030.gov.sa/en">https://www.vision2030.gov.sa/en</a> </p>
								<p><a style="font-family: lintel-bold; font-weight:bold; font-size: 14px; color: black; text-decoration: underline;" target="_blank" href="https://www.vision2030.gov.sa/en">Discover more</a> </p>
							</div>
						</div>
					</div>
					<div class="news_post col-sm-12 col-md-6 col-lg-4">
						<div class="post-item-wrap">
							<div class="post-image">
								<a target="_blank" href="https://www.visitsaudi.com/en"><img alt="" src="images/news3d.png"></a>
							</div>
							<div class="post-item-description">
								<p style="font-size: 20px;">Saudi Arabia’s rich heritage and traditions have been shaped by its position as a historic trade hub and the birthplace of Islam. In recent years, the Kingdom has undergone a significant cultural transformation, evolving century-old customs to fit the contemporary world we live in today.</p>
								<a style="font-family: lintel-bold; font-weight:bold; font-size: 20px; color: black; text-decoration: underline;" target="_blank" href="https://www.visitsaudi.com/en">https://www.visitsaudi.com/en</a>
							</div>
						</div>
					</div>
				</div>

				<!--desktop news start-->
				<div class="grid-layout post-3-columns m-b-10" data-item="post-item">
					<hr class="space">
					<div class="post-item news_post col-sm-12 col-md-6 col-lg-4">
						<div class="post-item-wrap">
							<div class="post-image">
								<a target="_blank" href="https://meetings.imf.org/"><img alt="" style="width: 70%;" src="images/news1d.png"></a>
							</div>
							<div class="post-item-description">
								<p style="font-size: 20px;">The 2024 Annual Meetings of the International Monetary Fund (IMF) and the World Bank Group (WBG) will take place from Monday, October 21 to Saturday, October 26.</p>
								<a style="font-family: lintel-bold; font-weight:bold; font-size: 20px; color: black; text-decoration: underline;" target="_blank" href="https://meetings.imf.org/">https://meetings.imf.org/</a>
							</div>
						</div>
					</div>

					<div class="post-item news_post col-sm-12 col-md-6 col-lg-4">
						<div class="post-item-wrap">
							<div class="post-image">
								<a target="_blank" href="https://www.vision2030.gov.sa/en"><img alt="" src="images/news2d.png"></a>
							</div>
							<div class="post-item-description">
								<p style="font-size: 20px;">Vision 2030 is built around three primary themes: a vibrant society, a thriving economy and an ambitious nation. The historic vision was developed by the Council of Economic and Development Affairs, which is chaired by Deputy Crown Prince Mohammed bin Salman.</p>
								<p><a style="font-family: lintel-bold; font-weight:bold; font-size: 20px; color: black; text-decoration: underline;" target="_blank" href="https://www.vision2030.gov.sa/en">https://www.vision2030.gov.sa/en</a> </p>
								<p> <a style="font-family: lintel-bold; font-weight:bold; font-size: 14px; color: black; text-decoration: underline;" target="_blank" href="https://www.vision2030.gov.sa/en">Discover more</a> </p>
							</div>
						</div>
					</div>

					<div class="post-item news_post col-sm-12 col-md-6 col-lg-4">
						<div class="post-item-wrap">
							<div class="post-image">
								<a target="_blank" href="https://www.visitsaudi.com/en"><img alt="" src="images/news3d.png"></a>
							</div>
							<div class="post-item-description">
								<p style="font-size: 20px;">Saudi Arabia’s rich heritage and traditions have been shaped by its position as a historic trade hub and the birthplace of Islam. In recent years, the Kingdom has undergone a significant cultural transformation, evolving century-old customs to fit the contemporary world we live in today.</p>
								<a style="font-family: lintel-bold; font-weight:bold; font-size: 20px; color: black; text-decoration: underline;" target="_blank" href="https://www.visitsaudi.com/en">https://www.visitsaudi.com/en</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom-border"></div>
		</section>

		<!-- contact us section -->
		<section id="contact-us" class="fullscreen text-light" style="background: transparent url(images/bg-3.jpg); background-repeat: no-repeat; background-size: cover; background-position: bottom; min-height: 87vh;">
			<div class="top-border"> </div>
			<div class="container-wide bbdr d-md-flex justify-content-between">
				<div class="col-md-6">
					<div>

						<p style="font-family: lintel-bold; font-weight:bold; font-size: 15px; margin: 0; text-align: left;">Saudi Banks Joint Reception 2024</p>

						<p style="font-family: lintel-bold; font-weight:bold; font-size: 15px; margin: 0; text-align: left;">Fairmont 2401 M St NW, Washington, D.C.</p>
					</div>
					<div class="d-md-flex">
						<div class="contact text-sm-center col-md-4 d-flex align-items-center justify-content-center my-2"
							style="background-color:#D9D9D9; height: 40px;">
							<ap style=" font-family: lintel; font-size: 14px; font-weight: bold; color: #2e2e2e;">Event Date</ap>
						</div>
						<div class="col-md-1"></div>
						<div class="contact text-sm-center col-md-4 d-flex align-items-center justify-content-center my-2" style="background-color:#D9D9D9; height: 40px;">
							<ap style="font-family: lintel; font-size: 14px; font-weight: bold; color: #2e2e2e;">October 23, 2024</ap>
						</div>
					</div>
					<div class="contact text-sm-center col-md-9 d-flex align-items-center justify-content-center my-2" style="background-color:#D9D9D9; height: 40px;">
						<ap style="font-family: lintel; font-size: 14px; font-weight: bold; color: #2e2e2e;">7:00PM to 9:00PM</ap>
					</div>
					<div class="bdr py-3">
						<h3 class="sec-hed">Contact Us</h3>
						<div class="d-md-flex align-items-center">
							<div class="col-md-3">
								<div class="my-1 contact text-white text-sm-center"
									style="background-color:#2F8C95">
									<ap style="color: white;">Email</ap>
								</div>
							</div>
							<div>
								<div class="mx-md-5">
									<ap style="font-family: lintel-medium; font-size: 16px; margin: 0; text-align: left;">invitation@saudibanksjointreception.com</ap>
								</div>
							</div>
						</div>
						<div class="d-md-flex align-items-center">
							<div class="col-md-3">
								<div class="my-1 contact text-white text-sm-center"
									style="background-color:#2F8C95">
									<ap style="color: white;">Address</ap>
								</div>
							</div>
							<div>
								<div class="mx-md-5">
									<ap style="font-family: lintel-medium; font-size: 16px; margin: 0; text-align: left;">Kingdom of Saudi Arabia</ap>
								</div>
							</div>

						</div>
					</div>
					<div>
						<h2 class="sec-hed pt-5">Get In Touch with us</h2>
						<form class="widget-contact-form" data-success-message-delay="40000" novalidate action="include/contact-form.php" method="POST" style="font-family: lintel;">
							<p><?php if ($_SESSION["form_submit"] == 'success') {
									echo "Email Successfully Sent!";
									session_destroy();
								} elseif ($_SESSION["form_submit"] == 'error') {
									echo "Some Server Error Occurs";
									session_destroy();
								} ?></p>
							<input type="hidden" name="form_type" class="form-control input-field" value="contact">
							<div class="d-md-flex justify-content-between ">
								<div class="col-md-3">
									<label for="your-name" class="text-light form-label2  p-2" style="background-color:#2F8C95; color: white !important;"> Your Name </label>
								</div>
								<div class="col-md-8">
									<input type="text" style="background-color:#2F8C95" name="full_name" class="form-control input-field2 " placeholder="Enter Full name" required>
								</div>
							</div>
							<div class="d-md-flex justify-content-between ">
								<div class="col-md-3">
									<label for="your-email" class="text-light form-label2 p-2" style="background-color:#2F8C95; color: white !important;"> Your Email </label>
								</div>
								<div class="col-md-8">
									<input type="text" style="background-color:#2F8C95" name="email" class="form-control input-field2" placeholder="Enter Email Address" required>
								</div>
							</div>
							<div class="d-md-flex justify-content-between">
								<div class="col-md-3">
									<label for="message" class="text-light form-label2 p-2" style="background-color:#2F8C95; color: white !important;">Your Message</label>
								</div>
								<div class="col-md-8">
									<textarea class="form-control input-field2" style="background-color:#2F8C95" name="msg_body" placeholder="Your Message" id="exampleFormControlTextarea1" rows="2" required></textarea>
								</div>
							</div>
							<div style="margin-top:10px;">
								<div class="input-group mb-5">
									<input type="submit" name="submit_form" class="form-control submit_btn" value="Submit">
								</div>
							</div>
						</form>

					</div>
				</div>
				<div class="col-md-5">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12419.176795703885!2d-77.0517041!3d38.9058213!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b7b5cdb53203%3A0xa0d0181f9f73ae80!2sFairmont%20Washington%20D.C.%20Georgetown!5e0!3m2!1sen!2s!4v1725467056060!5m2!1sen!2s" width="100%" height="100%" style="border:3px solid #2F8C95; align-self: right;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
			<div class="bottom-border"> </div>
		</section>
		<!-- contact us section end-->
		<!-- Media -->
		<section id="media2" class="fullscreen text-light" style="display: none; background: transparent url(images/3.jpg);">

			<div class="container">
				<h2 class="text-medium text-center">Media</h2>
				<div class="seperator seperator-small"></div>
				<hr class="space">

				<div id="blog" class="grid-layout post-items-transparent post-3-columns m-b-30" data-item="post-item">

					<!-- Bank Unit-->
					<div class="post-item border">
						<div class="post-item-wrap">
							<div class="post-image">
								<a href="#">
									<img alt="" src="images/gallery/1.jpg">
								</a>
							</div>
							<div class="post-item-description">
								<h2><a href="#">SBJR 2014
									</a></h2>
							</div>
						</div>
					</div>
					<!-- end: Bank Unit-->

					<!-- Bank Unit-->
					<div class="post-item border">
						<div class="post-item-wrap">
							<div class="post-image">
								<a href="#">
									<img alt="" src="images/gallery/2.jpg">
								</a>
							</div>
							<div class="post-item-description">
								<h2><a href="#">SBJR 2013
									</a></h2>
							</div>
						</div>
					</div>
					<!-- end: Bank Unit-->


					<!-- Bank Unit-->
					<div class="post-item border">
						<div class="post-item-wrap">
							<div class="post-image">
								<a href="#">
									<img alt="" src="images/gallery/3.jpg">
								</a>
							</div>
							<div class="post-item-description">
								<h2><a href="#">SBJR 2016
									</a></h2>
							</div>
						</div>
					</div>
					<div class="post-item border">
						<div class="post-item-wrap">
							<div class="post-image">
								<a href="#">
									<img alt="" src="images/gallery/3.jpg">
								</a>
							</div>
							<div class="post-item-description">
								<h2><a href="#">SBJR 2017
									</a></h2>
							</div>
						</div>
					</div>
					<div class="post-item border">
						<div class="post-item-wrap">
							<div class="post-image">
								<a href="#">
									<img alt="" src="images/gallery/3.jpg">
								</a>
							</div>
							<div class="post-item-description">
								<h2><a href="#">SBJR 2018
									</a></h2>
							</div>
						</div>
					</div>
					<div class="post-item border">
						<div class="post-item-wrap">
							<div class="post-image">
								<a href="#">
									<img alt="" src="images/gallery/3.jpg">
								</a>
							</div>
							<div class="post-item-description">
								<h2><a href="#">SBJR 2019
									</a></h2>
							</div>
						</div>
					</div>
					<div class="post-item border">
						<div class="post-item-wrap">
							<div class="post-image">
								<a href="#">
									SBJR 2022
								</a>
							</div>
							<div class="post-item-description">
								<h2><a href="#">SBJR 2022 WASHINGTON, D.C
									</a></h2>
							</div>
						</div>
					</div>
					<div class="post-item border">
						<div class="post-item-wrap">
							<div class="post-image">
								<a href="#">
									Coming soon 20 october 2023
								</a>
							</div>
							<div class="post-item-description">
								<h2><a href="#">SBJR 2023 MARrAKEch
									</a></h2>
							</div>
						</div>
					</div>
					<!-- end: Bank Unit-->
				</div>
				<div class="bank-border"></div>
			</div>

		</section>
		<!-- end: Media -->


		<!-- FOOTER -->
		<footer class="inverted" id="footer" style="background-color:#2F8C95;">

			<div class="copyright-content" style="background-color:#2F8C95;">
				<div class="container">
					<div class="row">
						<div class="copyright-text text-center" style="color:#fff;font-family:'lintel bold'"> &copy; 2024 Saudi Banks Joint Reception. All Rights Reserved.
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- end: FOOTER -->


	</div>
	<!-- end: Body Inner -->

	<!-- Scroll top -->
	<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

	<!--Plugins-->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/custom.js"></script>
	<script>
		let secondSelect;

		function updateSecondSelect() {
			const firstSelectValue = document.getElementById('invitation-select').value;
			secondSelect = document.getElementById('invitation-options');
			console.log(firstSelectValue, "first")
			secondSelect.innerHTML = '<option value="">Select an option</option>';

			if (firstSelectValue === 'self') {
				secondSelect.style.display = 'block';
				secondSelect.innerHTML += `<option value="1">1</option>`;
			} else if (firstSelectValue === 'group' || firstSelectValue === 'self-and-group') {
				secondSelect.style.display = 'block';
				secondSelect.innerHTML += `
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>`;
			} else {
				secondSelect.style.display = 'none';
			}
		}

		function generateTableRows() {
			const selectedValue = document.getElementById('invitation-options').value;
			const tableBody = document.getElementById('table-body');

			// Clear the current rows in the table
			tableBody.innerHTML = '';

			// Generate the number of rows based on the selected value
			for (let i = 1; i <= selectedValue; i++) {
				const row = document.createElement('tr');

				row.innerHTML = `
            <td class="form-column"><input type="hidden" name="form_type" class="form-control input-field" value="invitations">${i}</td>
            <td class="form-column"><input type="text" name="suffix[]" required></td>
            <td class="form-column"><input type="text" name="first_name[]" required></td>
            <td class="form-column"><input type="text" name="last_name[]" required></td>
            <td class="form-column"><input type="text" name="company[]" required></td>
            <td class="form-column"><input type="text" name="position[]" required></td>
            <td class="form-column"><input type="email" name="email" required></td>
            <td class="form-column"><input type="text" name="countrycode[]" required></td>
            <td class="form-column"><input type="number" name="phone_number[]" required></td>
        `;

				tableBody.appendChild(row);
			}
		}

		document.getElementById('invitation-form').addEventListener('submit', async function(event) {
			event.preventDefault(); // Prevent any default form submit action
			event.stopImmediatePropagation(); // Stops other event handlers from being triggered
			event.stopPropagation();

			const formData = new FormData(this); // Collect all form data
			const rowCount = formData.getAll('suffix[]').length; // Get number of rows

			// Initialize an empty array for the rows
			let payload = [];

			// Loop over each row's data and create an object
			for (let i = 0; i < rowCount; i++) {
				payload.push({
					suffix: formData.getAll('suffix[]')[i],
					first_name: formData.getAll('first_name[]')[i],
					last_name: formData.getAll('last_name[]')[i],
					company: formData.getAll('company[]')[i],
					position: formData.getAll('position[]')[i],
					email: formData.getAll('email')[i],
					country_code: formData.getAll('countrycode[]')[i],
					phone_number: formData.getAll('phone_number[]')[i],
					message: formData.get('msg_body') // Assuming the message is the same for all rows
				});
			}

			try {
				if (secondSelect) {
					const response = await fetch('https://6ba3d4313563.ngrok.app/invitations/create', {
						method: 'POST',
						headers: {
							'Content-Type': 'application/json',
						},
						body: JSON.stringify(payload),
					});

					const data = await response.json();
					if (response.ok) {
						console.log(data);
						document.getElementById('invitation-form').reset();
						Toastify({
							text: "Form submitted successfully!",
							duration: 3000, // Duration of the toast in milliseconds
							gravity: "top", // Position of the toast
							position: "right", // Alignment of the toast
							backgroundColor: "#4CAF50", // Success color
							stopOnFocus: true, // Prevents dismissing when clicked
						}).showToast();
					} else {
						console.error('Error:', data);
						Toastify({
							text: "Error submitting the form. Please try again.",
							duration: 3000,
							gravity: "top",
							position: "right",
							backgroundColor: "#FF0000", // Error color
							stopOnFocus: true,
						}).showToast();
					}
				}
			} catch (error) {
				console.error('Error:', error);
			}
		});
	</script>
	<!--Template functions-->
	<script src="js/functions.js"></script>
	<!-- Partical js base file  -->
	<script src="plugins/particles/particles.js" type="text/javascript"></script>
	<!--Particles-->
	<script src="plugins/particles/particles-dots.js" type="text/javascript"></script>
	<!-- Toastify CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

	<!-- Toastify JS -->
	<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
	<script>
		var header = document.getElementById("menu_item");
		var btns = header.getElementsByClassName("list_item");
		for (var i = 0; i < btns.length; i++) {
			btns[i].addEventListener("click", function() {
				var current = document.getElementsByClassName("active");
				current[0].className = current[0].className.replace("active", "");
				this.className += " active";
			});
		}
	</script>
	<script>
		const phoneInputField = document.querySelector("#phone");
		const phoneInput = window.intlTelInput(phoneInputField, {
			utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
		});

		$(window).scroll(function() {
			var sticky = $('#header'),
				scroll = $(window).scrollTop();

			if (scroll >= 100) sticky.addClass('header-scrolled header-sticky sticky-active');
			else sticky.removeClass('header-scrolled header-sticky sticky-active');
		});
		$(".list_item").click(function() {
			$("#mainMenu").removeClass("menu-animate");
			$(".iti-mobile").removeClass("mainMenu-open");
			$(".lines-button").removeClass("toggle-active");
			$("#mainMenu").css("min-height", "0px");
			$(".lines-button").removeClass("toggle-active");
		});
	</script>
	<!--  -->

</body>

</html>