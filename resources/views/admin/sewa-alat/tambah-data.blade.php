@extends('layouts.main')

@section('main')
<main id="main" class="main">

  <div class="pagetitle">
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Tambah Data Sewa Alat</li>
      </ol>
    </nav>
  </div>

  <section class="section dashboard">
    <div class="row">

    
      <div class="col-lg-12">
        <div class="row">

        
          <div class="col-lg-12">
            <div class="card">

              <div class="card-body">
              
               <form action="/simpan-tambah-alat" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row p-3">
                     
                     <div class="col-lg-6 mb-3">
                        <label for="nama_alat">Nama</label>
                        <input type="text" name="nama_alat" class="form-control" required>
                     </div>

                     @if ($kategori == "satuan")
                     <div class="col-lg-6 mb-3">
                        <label for="biaya">Biaya</label>
                        <input type="number" name="biaya" class="form-control" required>
                        <span class="small">contoh: 20000</span>
                     </div>
                     @endif

                     <input type="hidden" name="kategori" value="{{ $kategori }}" class="form-control" required>
                    
                     <div class="col-lg-12 text-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
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

@endsection