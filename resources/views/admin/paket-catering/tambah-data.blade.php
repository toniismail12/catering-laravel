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

        
          <div class="col-lg-12">
            <div class="card">

              <div class="card-body">
              
               <form action="/simpan-menu-catering" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row p-3">
                     <div class="col-lg-6 mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                        <span class="small">contoh: Daging</span>
                     </div>
                     <div class="col-lg-6 mb-3">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" class="form-control" required>
                        <span class="small">contoh: 20000</span>
                     </div>
                     <div class="col-lg-6 mb-3">
                        <label for="paket">Paket</label>
                        <select name="paket" class="form-select" required>
                           <option value="A">Paket A</option>
                           <option value="B">Paket B</option>
                           <option value="C">Paket C</option>
                        </select>
                     </div>
                     <div class="col-lg-6 mb-3">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" class="form-select" required>
                           <option value="nasi-kotak">Nasi Kotak</option>
                           <option value="prasmanan">Prasmanan</option>
                        </select>
                     </div>
                     <div class="col-lg-6 mb-3">
                       <label for="image">Image</label>
                       <input type="file" name="image" class="form-control" required>
                     </div>
                     <div class="col-lg-12 mb-3">
                        <label for="descripsi">Descripsi</label>

                        <input id="descripsi" type="hidden" name="descripsi">
                        <trix-editor input="descripsi"></trix-editor>
    
                        <style>
                            trix-toolbar [data-trix-button-group="file-tools"]{
                                display: none;
                            }
                        </style>
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
   document.addEventListener('trix-file-accept', function(e)
   {
      e.preventDefault();
   });
</script>
@endsection