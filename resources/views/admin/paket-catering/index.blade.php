@extends('layouts.main')

@section('main')
<main id="main" class="main">

  <div class="pagetitle">
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Paket Catering</li>
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
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

          @endif
        
          <div class="col-12">
            <div class="card recent-sales overflow-auto">

              <div class="card-body">

                <div class="card-title">
                  <a href="/tambah-paket-catering" class="btn btn-sm btn-primary">Tambah Data</a>
                </div>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Paket</th>
                      <th scope="col">Kategori</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Image</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                     $i = 1;   
                    @endphp
                    @foreach ($data as $item)
                    <tr>
                      <td scope="row">{{ $i++ }}</td>
                      <td>{{ $item->nama }}</td>
                      <td>Paket {{ $item->paket }}</td>
                      <td>{{ $item->kategori }}</td>
                      <td>{{ $item->harga }}</td>
                      <td><img src="/storage/{{ $item->image }}" width="70 px" alt="image"></td></td>
                      <td>
                        <a href="/update-menu-catering/{{ $item->uuid }}" class="btn btn-sm btn-success">Update</a>
                        <a onclick="return confirm('Are you sure you want to delete this item?');" href="/hapus-paket-menu/{{ $item->uuid }}" class="btn btn-sm btn-danger">Hapus</a>
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