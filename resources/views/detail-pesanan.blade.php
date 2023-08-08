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
                    <li><a href="/pembayaran">Pembayaran</a></li>
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
                    <p> <span class="text-black">Detail Pemesanan</span> </p>
                </div>


                <div class="row g-0 d-flex align-items-center reservation-form-bg p-3">

                    <p class="text-danger">
                        Note: Mohon untuk menyimpan struk pesanan anda, <br> serta jangan lupa untuk melakukan Pembayaran di menu pembayaran.
                    </p>  

                    <p>
                        <a href="/cetak-struk?uuid={{ $uuid }}" class="text-primary"> - Cetak Struk - </a>
                    </p>  

                    <div class="col-lg-12 reservation-img" data-aos="zoom-out" data-aos-delay="200">
                        <div class="card p-3">

                            <table class="table">
                                @foreach ($data as $item)
                                    <tr>
                                        <td><label for="">Kode Pesanan</label></td>
                                        <td><input name="nama" type="text" class="form-control" disabled
                                                value="{{ $item->kode_pesanan }}" /></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Status Pesanan</label></td>
                                        <td><input name="nama" type="text" class="form-control" disabled
                                                value="{{ $item->status }}" /></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Nama</label></td>
                                        <td><input name="nama" type="text" class="form-control" disabled
                                                value="{{ $item->nama }}" /></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Email</label></td>
                                        <td><input name="email" type="text" class="form-control" disabled
                                                value="{{ $item->email }}" /></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">No HP</label></td>
                                        <td><input name="nohp" type="text" class="form-control" disabled
                                                value="{{ $item->nohp }}" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Alamat</label></td>
                                        <td>
                                            {{ $item->alamat }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Jenis Paket</label></td>
                                        <td>
                                            <input name="jenis_paket" type="text" class="form-control" disabled
                                                value="Paket {{ $item->paket }}" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Jumlah Porsi</label></td>
                                        <td>
                                            <input name="jumlah_porsi" type="text" class="form-control" disabled
                                                value="{{ $item->porsi }}" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Kategori</label></td>
                                        <td>
                                            <input name="kategori" type="text" class="form-control" disabled
                                                value="{{ $item->kategori }}" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Tanggal Pengambilan</label></td>
                                        <td>
                                            <input name="tanggal_pengambilan" type="text" class="form-control"
                                                disabled value="{{ $item->tanggal_pengambilan }}" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Tanggal Pemesanan</label></td>
                                        <td>
                                            <input name="tanggal_pemesanan" type="text" class="form-control" disabled
                                                value="{{ $item->tanggal_pemesanan }}" />
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td><label for="">Metode Pickup</label></td>
                                        <td>
                                            <input name="metode_pickup" type="text" class="form-control" disabled
                                                value="{{ $item->metode_pickup }}" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Total Pembayaran</label></td>
                                        <td>
                                            <input name="total_pembayaran" type="text" class="form-control" disabled
                                                value="Rp. {{ $total_bayar }}" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Catatan</label></td>
                                        <td>
                                            {{ $item->catatan }}
                                        </td>
                                    </tr>
                                @endforeach

                            </table>

                        </div>
                    </div>


                </div>


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

</body>

</html>
