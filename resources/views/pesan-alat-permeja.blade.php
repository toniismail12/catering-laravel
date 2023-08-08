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

            <a href="#login" class="logo d-flex align-items-center me-auto me-lg-0">
                <h1>ALESHA<span>.</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="/">Home</a></li>
                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Book A Table Section ======= -->
        <section id="form-pemesanan" class="book-a-table">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <p> <span class="text-black">Sewa Alat Permeja</span> </p>
                </div>

                <form action="/simpan-pesan-alat-permeja" method="POST">
                    @csrf
                    <div class="row g-0 d-flex align-items-center reservation-form-bg p-3">

                        @if (session()->has('success'))

                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                
                        @endif  

                        @if (session()->has('danger'))

                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('danger') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                
                        @endif  

                        <div class="col-lg-12" data-aos="zoom-out" data-aos-delay="200">
                            <div class="card p-3">

                                <table class="table">
                                    <tr>
                                        <td><label for="">Nama</label></td>
                                        <td><input name="nama" type="text" class="form-control" required /></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Email</label></td>
                                        <td><input name="email" type="email" class="form-control" required /></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">No HP</label></td>
                                        <td>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1">08</span>
                                                <input name="nohp" type="number" class="form-control" placeholder="" required>
                                            </div>
                                            <small>contoh: 228982 ...</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Alamat</label></td>
                                        <td>
                                            <textarea class="form-control" name="alamat" required></textarea>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td><label for="">Tanggal Pengambilan</label></td>
                                        <td>
                                            <input type="date" class="form-control" name="tanggal_pengambilan"
                                                required>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td><label for="">Metode Pickup</label></td>
                                        <td>
                                            <select class="form-control" name="metode_pickup" required>
                                                <option value="ambil-sendiri">Ambil Sendiri</option>
                                                <option value="diantar">Diantar</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>

                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card p-3">
                                <button onclick="return confirm('Apakah yakin ingin melanjutkan pemesanan?')"
                                    type="submit" class="btn btn-success">Pesan Sekarang</button>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </section>

    </main>
    <!-- End #main -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i></a>
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
    <script>
        var currentDate = new Date();
        currentDate.setDate(currentDate.getDate() + 3);
      
        var inputField = document.querySelector('input[name="tanggal_pengambilan"]');
        inputField.min = currentDate.toISOString().split('T')[0];
    </script>

</body>

</html>
