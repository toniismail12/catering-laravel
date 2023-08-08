<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Catering Alesha</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>ALESHA<span>.</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#nasi_kotak">Nasi Kotak</a></li>
                    <li><a href="#prasmanan">Prasmanan</a></li>
                    <li><a href="#sewa_alat">Sewa Alat</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="/pembayaran">Pembayaran</a></li>
                    <li><a href="/status-pesanan">Status Pesanan</a></li>
                </ul>
            </nav><!-- .navbar -->
            @auth
            <a class="btn-book-a-table" href="/riwayat-pesan-catering">Dashboard</a>
            @else
            <a class="btn-book-a-table" href="/login">LOGIN</a>
            @endauth
           
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
            <div class="row justify-content-between gy-5">
                <div
                    class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up">SELAMAT DATANG DI<br>ALESHA CATERING</h2>

                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="#nasi_kotak" class="btn-book-a-table">PESAN</a>

                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                    <img src="assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out"
                        data-aos-delay="300">
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>About Us</h2>
                    <p>Learn More <span>About ALESHA</span></p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-7 position-relative about-img"
                        style="background-image: url(assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
                        <div class="call-us position-absolute">
                            <h4>Hubungi Kami</h4>
                            <p>081366544341 / 089620161976</p>
                        </div>
                    </div>
                    <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">

                                Usaha Alesha Catering merupakan usaha yang bergerak dibidang makanan.
                                Usaha Alesha Catering didirikan pada tanggal 10 november 2007 oleh Ibu Sofiah
                                (Sop) yang beralamat di Jl Kh Wahid Hasyim Lr Semendawai 1 Kelurahan 3-4 Ulu
                                Kecamatan Seberang Ulu 1 Palembang. Usaha ini dimulai dari sebuah usaha kecilkecilan dan
                                mengandalkan peralatan yang seadanya, dan tenaga kerja yang
                                membantu dalam kegiatan usaha ini adalah anggota keluarga dan 4 karyawan.
                                Awal mulanya berdirinya usaha ini dengan cara mempromosikan usahanya
                                dengan cara menawarkan jasanya kepada masyarakat sekitar yang ingin
                                mengadakan hajatan, lalu usaha ini mulai dikenal khalayak ramai dan sering
                                diperbincangkan dari mulut ke mulut dan mulai banyak pelanggan memakai jasa
                                catering tersebut. Karena terbukti hasilnya memuaskan pelanggan, sehingga usaha
                                ini pun terus berkembang, dan dengan modal tekad keberanian serta rasa percaya
                                diri yang kuat, akhirnya alesha catering membuka usahanya di rumah dengan
                                membuka usaha Alesha Catering.

                            </p>

                            <div class="position-relative mt-4">
                                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter">
            <div class="container" data-aos="zoom-out">

                <div class="row gy-4">

                    <div class="col-lg-6 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            
                            <p></p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-6 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            
                            <p></p>
                        </div>
                    </div><!-- End Stats Item -->


                </div>

            </div>
        </section>
        <!-- End Stats Counter Section -->


        <!-- ======= nasi kotak ======= -->
        <section id="nasi_kotak" class="menu">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <p><span>Nasi Kotak</span></p>
                </div>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                    <div class="tab-pane fade active show" id="menu-starters">

                        <div class="row gy-5">

                            @foreach ($data_nasi_kotak as $item)
                                <div class="col-lg-4 menu-item">
                                    <a href="storage/{{ $item->image }}" class="glightbox"><img
                                            src="storage/{{ $item->image }}" class="menu-img img-fluid"
                                            alt="">
                                    </a>
                                    
                                    <a href="/detail-paket?uuid={{ $item->uuid }}">
                                        <h4>Paket {{ $item->paket }}</h4>
                                        <p class="ingredients">
                                            Rp. {{ $item->harga }} / Porsi
                                        </p>
                                    
                                        <p class="price">
                                            {{ $item->nama }}
                                        </p>
                                    </a>
                                </div>
                            @endforeach


                        </div>
                    </div>

                    <div class="text-end mt-5"> 
                        @auth
                        <a href="/pesan-paket" class="btn btn-primary">Pesan Sekarang</a>
                        @else
                        <a href="/login" class="btn btn-primary">Pesan Sekarang</a>
                        @endauth
                    </div>

                </div>

            </div>
        </section>
        <!-- end nasi kotak -->

        <!-- ======= Prasmanan ======= -->
        <section id="prasmanan" class="menu">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <p><span>Prasmanan</span></p>
                </div>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                    <div class="tab-pane fade active show" id="menu-starters">

                        <div class="row gy-5">

                            @foreach ($data_prasmanan as $item)
                                <div class="col-lg-4 menu-item">
                                    <a href="storage/{{ $item->image }}" class="glightbox">
                                        <img
                                            src="storage/{{ $item->image }}" class="menu-img img-fluid"
                                            alt="" />
                                    </a>

                                    <a href="/detail-paket?uuid={{ $item->uuid }}">

                                        <h4>Paket {{ $item->paket }}</h4>
                                        <p class="ingredients">
                                            Rp. {{ $item->harga }} / Porsi
                                        </p>
                                    
                                        <p class="price">
                                            {{ $item->nama }}
                                        </p>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="text-end mt-5"> 
                        @auth
                        <a href="/pesan-paket" class="btn btn-primary">Pesan Sekarang</a>
                        @else
                        <a href="/login" class="btn btn-primary">Pesan Sekarang</a>
                        @endauth
                    </div>

                </div>

            </div>
        </section>
        <!-- end Prasmanan -->

        <!-- ======= sewa alat ======= -->
        <section id="sewa_alat" class="menu">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <p><span>Sewa Alat</span></p>
                </div>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                    <div class="tab-pane fade active show" id="menu-starters">


                        <div class="row gy-5">

                            <div class="col-lg-6 border">

                                <div class="text-center">
                                    <h4>Satuan</h4>
                                </div>

                                <table width="100%">
                                    <tr>
                                        <th>Alat</th>
                                        <th>Rp.</th>
                                    </tr>
                                    @foreach ($sewa_alat_satuan as $item)
                                        <tr>
                                            <td>{{ $item->nama_alat }}</td>
                                            <td>: {{ $item->biaya }}</td>
                                        </tr>
                                    @endforeach

                                </table>

                                <div class="text-center mt-5 mb-2"> 
                                    @auth
                                    <a href="/pesan-alat-satuan" class="btn btn-primary">Sewa Sekarang</a>
                                    @else
                                    <a href="/login" class="btn btn-primary">Sewa Sekarang</a>
                                    @endauth
                                </div>


                            </div>
                            <!-- Menu Item -->

                            <div class="col-lg-6 border">

                                <div class="text-center">
                                    <h4>Permeja</h4>
                                    <p class="ingredients">
                                        Rp. 450.000 (bersih) / Rp. 500.000 (Kotor)
                                    </p>
                                </div>
                                <div class="text-start">
                                    <table>
                                        @foreach ($sewa_alat_permeja as $item)
                                            <tr>
                                                <td>{{ $item->nama_alat }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                    
                                </div>
                                <div class="text-center mt-5"> 
                                    
                                    @auth
                                    <a href="/pesan-alat-permeja" class="btn btn-primary">Sewa Sekarang</a>
                                    @else
                                    <a href="/login" class="btn btn-primary">Sewa Sekarang</a>
                                    @endauth

                                </div>
                            </div>
                            <!-- Menu Item -->

                        </div>
                    </div>
                    <!-- End Starter Menu Content -->

                </div>

            </div>
        </section>
        <!-- end sewa alat -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Contact</h2>
                    <p>Need Help? <span>Contact Us</span></p>
                </div>

                <div class="row gy-4">

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-map flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>Jl. Kh Wahid Hasyim Lr. Semendawai 1, 3-4 Ulu <br> Palembang</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item d-flex align-items-center">
                            <i class="icon bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>alesh@gmail.com</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>081366544341 / 089620161976</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-share flex-shrink-0"></i>
                            <div>
                                <h3>Opening Hours</h3>
                                <div><strong>Senin-Sabtu:</strong> 07 AM - 23 PM;
                                    <strong>Minggu:</strong> Closed
                                </div>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-12">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-bank flex-shrink-0"></i>
                            <div>
                                <h3>Rekening</h3>
                                <div><strong>1130091026801</strong> Bank Mandiri a/n
                                    <strong>Sofiah</strong>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <!--End Contact Form -->

            </div>
        </section>
        <!-- End Contact Section -->

    </main><!-- End #main -->



    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
