<!DOCTYPE html>
<html lang="en">

<head>
	<title>BookSaw - Free Book Store HTML CSS Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lora:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/normalize.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/icomoon/icomoon.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor.css') }}">

</head>

<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">

	<div id="header-wrap">
        <nav id="navbar" >
            <div class="main-menu stellarnav mx-auto">

                <ul class="menu-list">
                    <img src="{{ asset('assets/images/MOCO.png') }}" alt="logo" class="logo">
                <div class="menu">
                    <li class="menu-item active"><a href="{{ url('/') }}">Home</a></li>
                    <li class="menu-item"><a href="{{ url('/barang') }}" class="nav-link">Buku</a></li>
                    <li class="menu-item"><a href="{{ url('/peminjaman') }}" class="nav-link">Peminjaman</a></li>
                    <li class="menu-item"><a href="{{ url('/team') }}" class="nav-link">Team</a></li></div>
                </ul>

                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>

            </div>
        </nav>

	</div><!--header-wrap-->

	<section id="hero" >

        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="hero-content">
                        <h2 class="uk">Manajemen Buku Perpustakaan</h2>
                        <p>Aplikasi ini dirancang untuk mempermudah proses peminjaman buku di perpustakaan. Dengan fitur
                            pencatatan buku yang detail, pengguna dapat meminjam, mengembalikan, serta melihat ketersediaan
                            buku dengan mudah. Jelajahi berbagai koleksi buku yang tersedia dan nikmati pengalaman membaca yang
                            lebih efisien.</p>
                        <div class="btn-wrap">
                            <a href="#" class="btn btn-outline-accent btn-accent-arrow">Pelajari Lebih Lanjut<i
                                    class="icon icon-ns-arrow-right"></i></a>
                        </div>
                    </div><!-- hero-content -->
                </div>

            </div>
        </div>

    </section>


	<section id="popular-books" class="py-5 my-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="section-header align-center">
						<div class="title">
							<span>Koleksi terbaik kami</span>
						</div>
						<h2 class="section-title">Buku Populer</h2>
					</div>

					<div class="product-list" data-aos="fade-up">
						<div class="row">

							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="{{ asset('assets/images/product-item1.jpg') }}" alt="Books" class="product-item">

									</figure>
									<figcaption>
										<h3>Cara Sederhana Hidup Damai</h3>
										<span>Armor Ramsey</span>
									</figcaption>
								</div>
							</div>

							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="{{ asset('assets/images/product-item2.jpg') }}" alt="Books" class="product-item">

									</figure>
									<figcaption>
										<h3>Perjalanan Agung di Gurun</h3>
										<span>Sanchit Howdy</span>
									</figcaption>
								</div>
							</div>

							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="{{ asset('assets/images/product-item3.jpg') }}" alt="Books" class="product-item">

									</figure>
									<figcaption>
										<h3>Keanggunan Sang Scarlett</h3>
										<span>Arthur Doyle</span>
									</figcaption>
								</div>
							</div>

							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="{{ asset('assets/images/product-item4.jpg') }}" alt="Books" class="product-item">
									</figure>
									<figcaption>
										<h3>Suatu Waktu Dahulu</h3>
										<span>Klien Marry</span>
									</figcaption>
								</div>
							</div>

						</div><!--ft-books-slider-->
					</div><!--grid-->

				</div><!--inner-content-->
			</div>

			<div class="row">
				<div class="col-md-12">

				</div>
			</div>
		</div>
	</section>

    <section id="best-selling" class="leaf-pattern-overlay">
		<div class="corner-pattern-overlay"></div>
		<div class="container">
			<div class="row justify-content-center">

				<div class="col-md-8">

					<div class="row">

						<div class="col-md-6">
							<figure class="products-thumb">
								<img src="{{ asset('assets/images/single-image.jpg') }}" alt="book" class="single-image">
							</figure>
						</div>

						<div class="col-md-6">
							<div class="product-entry">
								<h2 class="section-title divider">Buku Terlaris</h2>

								<div class="products-content">
									<div class="author-name">Oleh Timbur Hood</div>
									<h3 class="item-title">Burung-Burung Bahagia</h3>
									<p>Petualangan penuh inspirasi yang mengajarkan kita bahwa kebahagiaan bisa datang dari hal-hal sederhana di sekitar kita.</p>
									<div class="btn-wrap">
										<a href="#" class="btn-accent-arrow">Pinjam<i class="icon icon-ns-arrow-right"></i></a>
									</div>
								</div>

							</div>
						</div>

					</div>
					<!-- / row -->

				</div>

			</div>
		</div>
	</section>

    <section class="fitur">

        <div class="container text-center">
            <div class="row align-items-center">
              <div class="col">
                <div class="card">
                    <div class="card-body">
                      <h2>Buku</h2>
                      <p>Berbaga buku tersedia di moco bisa kamu baca dan pinjam tetapi dikembalikan ya ><</p>
                    </div>
                  </div>
              </div>
              <div class="col">
                <div class="card">
                    <div class="card-body">
                      <h2>Peminjaman</h2>
                      <p>anda bisa meminjam banyak buku yang disediakan tetapi harus taat waktu saat peggembalian</p>
                    </div>
                  </div>
              </div>
            </div>
          </div>

    </section>



    <footer id="footer">
		<div class="container">

			<div class="row">
				<div class="col-md-4">


					<div class="footer-item">

						<div class="company-brand">
							<p>Perpustakaan ini berkomitmen untuk menyebarkan pengetahuan melalui buku-buku berkualitas, menjadikan dunia tempat yang lebih baik, satu buku pada satu waktu.</p>
						</div>
					</div>

				</div>

				<div class="col-md-2">
                    <div class="footer-menu">
                        <h5>Perpustakaan</h5>
						<ul>
							<li><a href="#">Tentang Kami</a></li>
							<li><a href="#popular-books">Buku Populer</a></li>
							<li><a href="#best-selling">Buku Terlaris</a></li>
							<li><a href="#quotation">Kutipan Hari Ini</a></li>
						</ul>
					</div>

				</div>

				<div class="col-md-2">


				</div>

				<div class="col-md-4">
					<div class="footer-item">
						<h3>Kontak Kami</h3>
						<address>
							123 Jalan Buku, Jakarta, Indonesia<br>
							Email: support@booksaw.com<br>
							Telp: +62 123-4567-890
						</address>
					</div>
				</div>

			</div>
		</div>
	</footer>


	<div id="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="copyright">
						<div class="row">

							<div class="col-md-6">
								<p>© 2024 All rights reserved.</p>
							</div>

							<div class="col-md-6">
								<div class="social-links align-right">
									<ul>
										<li>
											<a href="#"><i class="icon icon-facebook"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-twitter"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-youtube-play"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-behance-square"></i></a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div><!--grid-->

				</div><!--footer-bottom-content-->
			</div>
		</div>
	</div>

	<script src="{{ url('assets/js/jquery-1.11.0.min.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
		crossorigin="anonymous"></script>
	<script src="{{ url('assets/js/plugins.js') }}"></script>
	<script src="{{ url('assets/js/script.js') }}"></script>

</body>

</html>

