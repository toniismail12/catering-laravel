@extends('layouts.main')

@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Bukti Bayar</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">

                <div class="col-lg-12">
                    <div class="row">

                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="card-body p-3 small">

                                    <img 
                                        src="storage/{{ $bukti_bayar }}" 
                                        class="menu-img img-fluid" 
                                        alt="bukti bayar" 
                                    />
                                 
                                </div>

                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </section>

    </main>
@endsection
