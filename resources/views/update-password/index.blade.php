@extends('layouts.main')

@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Tambah Menu Paket Catering</li>
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

                        <div class="col-lg-12">
                            <div class="card">

                                <div class="card-body">

                                    <form action="/update-password" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row p-3">

                                            <div class="col-lg-6 mb-3">
                                                <label for="nama">Password Baru</label>
                                                <input type="password" name="password" class="form-control" required>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label for="nama">Retype Password Baru</label>
                                                <input type="password" name="password_retype" class="form-control" required>
                                            </div>

                                            <div class="col-lg-12 text-end">
                                                <button class="btn btn-primary">Simpan</button>
                                            </div>

                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </section>

    </main>

    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });
    </script>
@endsection
