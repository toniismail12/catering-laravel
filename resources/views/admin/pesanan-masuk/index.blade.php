@extends('layouts.main')

@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Pesanan Masuk / Catering</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">


                <div class="col-lg-12">
                    <div class="row">

                        @if (session()->has('success'))
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session()->has('danger'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('danger') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="card-body p-3 small">

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr class="text-nowrap">
                                                <th scope="col">Kode Pesanan</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">No HP</th>
                                                <th scope="col">Paket</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Tgl Pesan</th>
                                                <th scope="col">Tgl Pengambilan</th>
                                                <th scope="col">Struk</th>
                                                <th scope="col">Bukti Bayar</th>
                                                <th scope="col">Konfirmasi</th>
                                                <th>Lainnya</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td>{{ $item->kode_pesanan }}</td>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->nohp }}</td>
                                                    <td>Paket {{ $item->paket }}</td>
                                                    <td>{{ $item->kategori }}</td>
                                                    <td>{{ $item->status }}</td>
                                                    <td>{{ $item->tanggal_pemesanan }}</td>
                                                    <td>{{ $item->tanggal_pengambilan }}</td>
                                                    <td>
                                                        <a href="/cetak-struk?uuid={{ $item->uuid }}"
                                                            class="btn btn-sm btn-primary">Struk</a>
                                                    </td>
                                                    <td>
                                                        @if ($item->bukti_bayar == '-')
                                                            <span>Belum Bayar</span>
                                                        @else
                                                            <a href="/bukti-bayar?uuid={{ $item->uuid }}"
                                                                class="btn btn-sm btn-warning">Lihat</a>
                                                        @endif

                                                    </td>
                                                    <td>
                                                        <div class="text-nowrap">
                                                            <a onclick="return confirm('Klik OK untuk melanjutkan terima pesanan.');"
                                                                href="/terima-pesanan?uuid={{ $item->uuid }}"
                                                                class="btn btn-sm btn-success">Terima</a>

                                                            <a onclick="return confirm('Klik OK untuk melanjutkan tolak pesanan.');"
                                                                href="/tolak-pesanan?uuid={{ $item->uuid }}"
                                                                class="btn btn-sm btn-danger">Tolak</a>
                                                        </div>

                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a class="btn btn-secondary dropdown-toggle btn-sm"
                                                                href="#" role="button" id="dropdownMenuLink"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                Action
                                                            </a>

                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="/sedang-diantar?uuid={{ $item->uuid }}">Tandai Sedang
                                                                        Diantar</a></li>
                                                                <li><a class="dropdown-item" href="/pesanan-selesai?uuid={{ $item->uuid }}">Tandai
                                                                        Selesai</a></li>

                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </section>

    </main>
@endsection
