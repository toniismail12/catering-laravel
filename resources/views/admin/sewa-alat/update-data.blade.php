@extends('layouts.main')

@section('main')
<main id="main" class="main">

  <div class="pagetitle">
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Update Data Sewa Alat</li>
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
              
              @foreach ($data as $item)
              <form action="/simpan-update-alat/{{ $item->uuid }}" method="POST" enctype="multipart/form-data">
               @csrf
               <div class="row p-3">
                  
                  <div class="col-lg-6 mb-3">
                     <label for="nama_alat">Nama</label>
                     <input type="text" name="nama_alat" class="form-control" required value="{{ $item->nama_alat }}">
                  </div>

                  @if ($kategori == "satuan")
                  <div class="col-lg-6 mb-3">
                     <label for="biaya">Biaya</label>
                     <input type="number" name="biaya" class="form-control" required value="{{ $item->biaya }}">
                     <span class="small">contoh: 20000</span>
                  </div>
                  @endif

                  <input type="hidden" name="kategori" value="{{ $item->kategory }}" class="form-control" required>
                 
                  <div class="col-lg-12 text-end">
                     <button type="submit" class="btn btn-success">Simpan Update</button>
                  </div>

               </div>
            </form>
              @endforeach

              </div>

            </div>
          </div>
         

        </div>
      </div>

    </div>
  </section>

</main>

@endsection