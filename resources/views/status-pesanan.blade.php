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
                    <p> <span class="text-black">Cek Status Pesanan Anda</span> </p>
                </div>

                <form action="/status-pesanan" method="get">
                    
                    <div class="row g-0 d-flex align-items-center">

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
                                        <td><label for="">Kode Pesanan</label></td>
                                        <td>
                                            <input name="kode_pesanan" type="text" class="form-control" required />
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Kategori Pesanan</label></td>
                                        <td>
                                            <select name="pembayaran" class="form-control" required>
                                                <option value="catering">Catering</option>
                                                <option value="sewa-alat">Sewa Alat</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="card p-3">
                                                <button type="submit" class="btn btn-success">Cek</button>
                                            </div>
                                        </td>
                                    </tr>
                                   
                                </table>

                            </div>

                            <div class="p-3">

                                @if($uuid !== '0')
                                <p class="text-danger">
                                    Note: Mohon untuk menyimpan struk pesanan anda, <br> Berikut ini detail dan status pesanan anda.
                                </p>  
            
                                <p>
                                    @if ($pembayaran == 'catering')
                                        <a href="/cetak-struk?uuid={{ $uuid }}" class="text-primary"> - Cetak Struk - </a>
                                    @else
                                        <a href="/cetak-struk-alat-satuan?uuid={{ $uuid }}" class="text-primary"> - Cetak Struk - </a>
                                    @endif
                                    
                                </p>  
                                @endif
    
                                <table class="table">
                                    @foreach ($data as $item)
                                        <tr>
                                            <td><label for="">Kode Pesanan</label></td>
                                            <td><input name="nama" type="text" class="form-control" disabled
                                                    value="{{ $item->kode_pesanan }}" /></td>
                                        </tr>
                                        <tr>
                                            <td><label for="">Status Pesanan</label></td>
                                            <td>{{ $item->status }}</td>
                                        </tr>
                                        <tr>
                                            <td><label for="">Bukti Transfer</label></td>
                                            <td>
                                                @if ($item->status == 'menunggu-pembayaran')
                                                    <span>Belum Mengirim Bukti Transfer.</span>
                                                @else
                                                    <a href="/bukti-transfer?uuid={{ $item->uuid }}&pembayaran=catering">- Lihat -</a>
                                                @endif
                                                 
                                            </td>
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
                                                <input name="alamat" type="text" class="form-control" disabled
                                                    value="{{ $item->alamat }}" />
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

                                <table class="table">

                                    
                                    @foreach ($data2 as $items)
                                        <tr>
                                            <td><label for="">Kode Pesanan</label></td>
                                            <td><input name="nama" type="text" class="form-control" disabled
                                                    value="{{ $items->kode_pesanan }}" /></td>
                                        </tr>
                                        <tr>
                                            <td><label for="">Status Pesanan</label></td>
                                            <td>{{ $items->status }}</td>
                                        </tr>
                                        <tr>
                                            <td><label for="">Bukti Transfer</label></td>
                                            <td>
                                                @if ($items->status == 'menunggu-pembayaran')
                                                    <span>Belum Mengirim Bukti Transfer.</span>
                                                @else
                                                    <a href="/bukti-transfer?uuid={{ $items->uuid }}&pembayaran=sewa-alat">- Lihat -</a>
                                                @endif
                                                 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="">Nama</label></td>
                                            <td><input name="nama" type="text" class="form-control" disabled
                                                    value="{{ $items->nama }}" /></td>
                                        </tr>
                                        <tr>
                                            <td><label for="">Email</label></td>
                                            <td><input name="email" type="text" class="form-control" disabled
                                                    value="{{ $items->email }}" /></td>
                                        </tr>
                                        <tr>
                                            <td><label for="">No HP</label></td>
                                            <td><input name="nohp" type="text" class="form-control" disabled
                                                    value="{{ $items->nohp }}" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="">Alamat</label></td>
                                            <td>
                                                {{ $items->alamat }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="">Kategori</label></td>
                                            <td>
                                                <input name="kategori" type="text" class="form-control" disabled
                                                    value="{{ $items->kategori }}" />
                                            </td>
                                        </tr>
                                        @if ($items->kategori == 'satuan')
                                        <tr>
                                            <td><label for="">Jenis Alat Disewa</label></td>
                                            <td>
                                                <ul style="list-style-type: none; margin: 0; padding: 0;">
                                                    @foreach ($alat as $item2)
                                                        <li>
                                                            <input name="alat[]" type="checkbox" value="{{ $item2->id }}" checked disabled /> {{ $item2->nama }} Rp. {{ $item2->harga }} x {{ $item2->jumlah }} = {{ $item2->harga*$item2->jumlah }}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                        </tr>
                                        
                                        {{-- <tr>
                                            <td><label for="">Jumlah Bayar</label></td>
                                            <td>
                                                <ul style="list-style-type: none; margin: 0; padding: 0;">
                                                    @foreach ($alat as $item2)
                                                        <li>
                                                            {{ $item2->nama }} Rp. {{ $item2->harga*$item2->jumlah }}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                        </tr>
                                        --}}
                                        @endif
                                        
                                        <tr>
                                            <td><label for="">Tanggal Pengambilan</label></td>
                                            <td>
                                                <input name="tanggal_pengambilan" type="text" class="form-control"
                                                    disabled value="{{ $items->tanggal_pengambilan }}" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="">Tanggal Pemesanan</label></td>
                                            <td>
                                                <input name="tanggal_pemesanan" type="text" class="form-control" disabled
                                                    value="{{ $items->tanggal_pemesanan }}" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="">Metode Pickup</label></td>
                                            <td>
                                                <input name="metode_pickup" type="text" class="form-control" disabled
                                                    value="{{ $items->metode_pickup }}" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="">Total Pembayaran</label></td>
                                            <td>
                                                Rp. {{ $items->kategori == 'satuan' ? $total_bayar : '500000' }}
                                            </td>
                                        </tr>
                                    @endforeach
    
                                </table>
    
    
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

</body>

</html>
