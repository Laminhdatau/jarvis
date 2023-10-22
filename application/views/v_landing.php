<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>LAMEENCHELL Bootstrap Template - Index</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?= base_url('TemLanding/'); ?>assets/img/favicon.png" rel="icon">
	<link href="<?= base_url('TemLanding/'); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url('TemLanding/'); ?>assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?= base_url('TemLanding/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url('TemLanding/'); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?= base_url('TemLanding/'); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?= base_url('TemLanding/'); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?= base_url('TemLanding/'); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?= base_url('TemLanding/'); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?= base_url('TemLanding/'); ?>assets/css/style.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: LAMEENCHELL
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/LAMEENCHELL-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top ">
		<div class="container d-flex align-items-center">

			<h1 class="logo me-auto"><a href="index.html">LAMEENCHELL</a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.html" class="logo me-auto"><img src="<?= base_url('TemLanding/'); ?>assets/img/logo.png" alt="" class="img-fluid"></a>-->

			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto active" href="#hero">Home</a></li>
					<li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
					<li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li>
					<li><a class="nav-link scrollto" href="#team">Team</a></li>
					<li><a class="nav-link scrollto" href="#contact">Contact</a></li>
					<li><a class="getstarted scrollto" href="<?= base_url('auth/login'); ?>">Sewa</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center">

		<div class="container">
			<div class="row">
				<div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
					<h1>Handphone Anda mengalami Kerusakan?</h1>
					<h2>Kami siap membantu anda dalam menangani kasus kerusakan handphone anda</h2>
					<div class="d-flex justify-content-center justify-content-lg-start">
						<a href="<?= base_url('admin'); ?>" class="btn-get-started scrollto">Sewa</a>
						<a href="#" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Tonton Video</span></a>
					</div>
				</div>
				<div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
					<img src="<?= base_url('TemLanding/'); ?>assets/img/hero-img.png" class="img-fluid animated" alt="">
				</div>
			</div>
		</div>

	</section><!-- End Hero -->

	<main id="main">

		<!-- ======= Clients Section ======= -->
		<section id="clients" class="clients section-bg">
			<div class="container">

				<!-- <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?= base_url('TemLanding/'); ?>assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?= base_url('TemLanding/'); ?>assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?= base_url('TemLanding/'); ?>assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?= base_url('TemLanding/'); ?>assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?= base_url('TemLanding/'); ?>assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?= base_url('TemLanding/'); ?>assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div> -->

			</div>
		</section>
		<!-- End Cliens Section -->

		<!-- ======= About Us Section ======= -->
		<section id="about" class="about">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Tentang Kami</h2>
				</div>

				<div class="row content">
					<div class="col-lg-6">
						<p>
							Kami adalah usaha kecil yang bergerak sebagai penyedia jasa service handphone.
						</p>
						<ul>
							<li><i class="ri-check-double-line"></i> Kerusakan Software</li>
							<li><i class="ri-check-double-line"></i> Kerusakan Hardware</li>
						</ul>
					</div>
					<div class="col-lg-6 pt-4 pt-lg-0">
						<p>
							"Kami adalah cerminan dari dedikasi kami pada teknologi dan pelayanan yang berkualitas. Sebagai usaha kecil yang bergerak dalam dunia jasa service handphone, kami telah berkomitmen untuk memberikan solusi perbaikan handphone yang dapat diandalkan dan terjangkau kepada setiap pelanggan kami.
						</p>
						<a href="#" class="btn-learn-more">Lainnya</a>
					</div>
				</div>

			</div>
		</section><!-- End About Us Section -->



		<!-- ======= Portfolio Section ======= -->
		<section id="portfolio" class="portfolio">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Portfolio</h2>
					<p>Kualitas dalam Setiap Perbaikan.</p>
				</div>

				<ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
					<li data-filter="*" class="filter-active">All</li>
					<li data-filter=".filter-app">Handphone</li>
					<li data-filter=".filter-card">Laptop</li>
					<li data-filter=".filter-web">Web</li>
				</ul>

				<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

					<div class="col-lg-4 col-md-6 portfolio-item filter-app">
						<div class="portfolio-img"><img src="<?= base_url('TemLanding/'); ?>assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
						<div class="portfolio-info">
							<h4>App 1</h4>
							<p>App</p>
							<a href="<?= base_url('TemLanding/'); ?>assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<div class="portfolio-img"><img src="<?= base_url('TemLanding/'); ?>assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
						<div class="portfolio-info">
							<h4>Web 3</h4>
							<p>Web</p>
							<a href="<?= base_url('TemLanding/'); ?>assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-app">
						<div class="portfolio-img"><img src="<?= base_url('TemLanding/'); ?>assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
						<div class="portfolio-info">
							<h4>App 2</h4>
							<p>App</p>
							<a href="<?= base_url('TemLanding/'); ?>assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<div class="portfolio-img"><img src="<?= base_url('TemLanding/'); ?>assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
						<div class="portfolio-info">
							<h4>Card 2</h4>
							<p>Card</p>
							<a href="<?= base_url('TemLanding/'); ?>assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<div class="portfolio-img"><img src="<?= base_url('TemLanding/'); ?>assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
						<div class="portfolio-info">
							<h4>Web 2</h4>
							<p>Web</p>
							<a href="<?= base_url('TemLanding/'); ?>assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-app">
						<div class="portfolio-img"><img src="<?= base_url('TemLanding/'); ?>assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
						<div class="portfolio-info">
							<h4>App 3</h4>
							<p>App</p>
							<a href="<?= base_url('TemLanding/'); ?>assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<div class="portfolio-img"><img src="<?= base_url('TemLanding/'); ?>assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
						<div class="portfolio-info">
							<h4>Card 1</h4>
							<p>Card</p>
							<a href="<?= base_url('TemLanding/'); ?>assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<div class="portfolio-img"><img src="<?= base_url('TemLanding/'); ?>assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
						<div class="portfolio-info">
							<h4>Card 3</h4>
							<p>Card</p>
							<a href="<?= base_url('TemLanding/'); ?>assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<div class="portfolio-img"><img src="<?= base_url('TemLanding/'); ?>assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
						<div class="portfolio-info">
							<h4>Web 3</h4>
							<p>Web</p>
							<a href="<?= base_url('TemLanding/'); ?>assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Portfolio Section -->

		<!-- ======= Team Section ======= -->
		<section id="team" class="team section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Team</h2>
					<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
				</div>

				<div class="row">

					<div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
						<div class="member d-flex align-items-start">
							<div class="pic"><img src="<?= base_url('TemLanding/'); ?>assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
							<div class="member-info">
								<h4>Walter White</h4>
								<span>Chief Executive Officer</span>
								<p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
								<div class="social">
									<a href=""><i class="ri-twitter-fill"></i></a>
									<a href=""><i class="ri-facebook-fill"></i></a>
									<a href=""><i class="ri-instagram-fill"></i></a>
									<a href=""> <i class="ri-linkedin-box-fill"></i> </a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
						<div class="member d-flex align-items-start">
							<div class="pic"><img src="<?= base_url('TemLanding/'); ?>assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
							<div class="member-info">
								<h4>Sarah Jhonson</h4>
								<span>Product Manager</span>
								<p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
								<div class="social">
									<a href=""><i class="ri-twitter-fill"></i></a>
									<a href=""><i class="ri-facebook-fill"></i></a>
									<a href=""><i class="ri-instagram-fill"></i></a>
									<a href=""> <i class="ri-linkedin-box-fill"></i> </a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
						<div class="member d-flex align-items-start">
							<div class="pic"><img src="<?= base_url('TemLanding/'); ?>assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
							<div class="member-info">
								<h4>William Anderson</h4>
								<span>CTO</span>
								<p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
								<div class="social">
									<a href=""><i class="ri-twitter-fill"></i></a>
									<a href=""><i class="ri-facebook-fill"></i></a>
									<a href=""><i class="ri-instagram-fill"></i></a>
									<a href=""> <i class="ri-linkedin-box-fill"></i> </a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
						<div class="member d-flex align-items-start">
							<div class="pic"><img src="<?= base_url('TemLanding/'); ?>assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
							<div class="member-info">
								<h4>Amanda Jepson</h4>
								<span>Accountant</span>
								<p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
								<div class="social">
									<a href=""><i class="ri-twitter-fill"></i></a>
									<a href=""><i class="ri-facebook-fill"></i></a>
									<a href=""><i class="ri-instagram-fill"></i></a>
									<a href=""> <i class="ri-linkedin-box-fill"></i> </a>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Team Section -->



		<!-- ======= Contact Section ======= -->
		<section id="contact" class="contact">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Contact</h2>
					<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
				</div>

				<div class="row">

					<div class="col-lg-5 d-flex align-items-stretch">
						<div class="info">
							<div class="address">
								<i class="bi bi-geo-alt"></i>
								<h4>Location:</h4>
								<p>A108 Adam Street, New York, NY 535022</p>
							</div>

							<div class="email">
								<i class="bi bi-envelope"></i>
								<h4>Email:</h4>
								<p>info@example.com</p>
							</div>

							<div class="phone">
								<i class="bi bi-phone"></i>
								<h4>Call:</h4>
								<p>+1 5589 55488 55s</p>
							</div>

							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
						</div>

					</div>

					<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
						<form action="forms/contact.php" method="post" role="form" class="php-email-form">
							<div class="row">
								<div class="form-group col-md-6">
									<label for="name">Your Name</label>
									<input type="text" name="name" class="form-control" id="name" required>
								</div>
								<div class="form-group col-md-6">
									<label for="name">Your Email</label>
									<input type="email" class="form-control" name="email" id="email" required>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Subject</label>
								<input type="text" class="form-control" name="subject" id="subject" required>
							</div>
							<div class="form-group">
								<label for="name">Message</label>
								<textarea class="form-control" name="message" rows="10" required></textarea>
							</div>
							<div class="my-3">
								<div class="loading">Loading</div>
								<div class="error-message"></div>
								<div class="sent-message">Your message has been sent. Thank you!</div>
							</div>
							<div class="text-center"><button type="submit">Send Message</button></div>
						</form>
					</div>

				</div>

			</div>
		</section><!-- End Contact Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer">

		<div class="footer-newsletter">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<h4>Join Our Newsletter</h4>
						<p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
						<form action="" method="post">
							<input type="email" name="email"><input type="submit" value="Subscribe">
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-top">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 col-md-6 footer-contact">
						<h3>LAMEENCHELL</h3>
						<p>
							A108 Adam Street <br>
							New York, NY 535022<br>
							United States <br><br>
							<strong>Phone:</strong> +1 5589 55488 55<br>
							<strong>Email:</strong> info@example.com<br>
						</p>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Useful Links</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Our Services</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Our Social Networks</h4>
						<p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
						<div class="social-links mt-3">
							<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
							<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
							<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
							<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
							<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="container footer-bottom clearfix">
			<div class="copyright">
				&copy; Copyright <strong><span>Lamin H Datau</span></strong>. All Rights Reserved
			</div>
			<div class="credits">
				<!-- All the links in the footer should remain intact. -->
				<!-- You can delete the links only if you purchased the pro version. -->
				<!-- Licensing information: https://bootstrapmade.com/license/ -->
				<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/LAMEENCHELL-free-bootstrap-html-template-corporate/ -->
				Designed by <a href="<?= base_url(); ?>">Lamin H. Datau</a>
			</div>
		</div>
	</footer><!-- End Footer -->

	<div id="preloader"></div>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="<?= base_url('TemLanding/'); ?>assets/vendor/aos/aos.js"></script>
	<script src="<?= base_url('TemLanding/'); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('TemLanding/'); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="<?= base_url('TemLanding/'); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="<?= base_url('TemLanding/'); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="<?= base_url('TemLanding/'); ?>assets/vendor/waypoints/noframework.waypoints.js"></script>
	<script src="<?= base_url('TemLanding/'); ?>assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="<?= base_url('TemLanding/'); ?>assets/js/main.js"></script>

</body>

</html>