@extends('layouts.main')

@section('main')
<main id="main" class="main">

  <div class="pagetitle">
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Update Menu Paket Catering</li>
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
               <form action="/simpan-update-menu-catering/{{ $item->uuid }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row p-3">
                     <div class="col-lg-6 mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" required value="{{ $item->nama }}">
                        <span class="small">contoh: Daging</span>
                     </div>
                     <div class="col-lg-6 mb-3">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" class="form-control" required value="{{ $item->harga }}">
                        <span class="small">contoh: 20000</span>
                     </div>
                     <div class="col-lg-6 mb-3">
                        <label for="paket">Paket</label>
                        <select name="paket" class="form-select" required>
                           @if ($item->paket == 'A')
                           <option value="A" selected>Paket A</option>
                           <option value="B">Paket B</option>
                           <option value="C">Paket C</option>
                           @endif
                           @if ($item->paket == 'B')
                           <option value="A">Paket A</option>
                           <option value="B" selected>Paket B</option>
                           <option value="C">Paket C</option>
                           @endif
                           @if ($item->paket == 'C')
                           <option value="A">Paket A</option>
                           <option value="B">Paket B</option>
                           <option value="C" selected>Paket C</option>
                           @endif
                        </select>
                     </div>
                     <div class="col-lg-6 mb-3">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" class="form-select" required>
                           @if ($item->kategori == 'nasi-kotak')
                           <option value="nasi-kotak" selected>Nasi Kotak</option>
                           <option value="prasmanan">Prasmanan</option>
                           @endif
                           @if ($item->kategori == 'prasmanan')
                           <option value="nasi-kotak">Nasi Kotak</option>
                           <option value="prasmanan" selected>Prasmanan</option>
                           @endif
                        </select>
                     </div>
                     <div class="col-lg-6 mb-3">
                       <label for="image">Image</label>
                       <input type="file" name="image" class="form-control">
                       <input type="hidden" name="old_image" value="{{ $item->image }}">
                       <span> kosongkan bila tidak ingin mengganti gambar.</span>
                     </div>
                     <div class="col-lg-12 mb-3">
                        <label for="descripsi">Descripsi</label>

                        <input id="descripsi" type="hidden" name="descripsi" value="{{ $item->descripsi }}">
                        <trix-editor input="descripsi"></trix-editor>
    
                        <style>
                            trix-toolbar [data-trix-button-group="file-tools"]{
                                display: none;
                            }
                        </style>
                     </div>

                     <div class="col-lg-12 text-end">
                        <button class="btn btn-success">Simpan Update</button>
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

<script>
   document.addEventListener('trix-file-accept', function(e)
   {
      e.preventDefault();
   });
</script>
@endsection