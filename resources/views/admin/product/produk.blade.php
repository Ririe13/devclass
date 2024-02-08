@extends('admin.admin_master')
@section('admin')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Masukkan Produk</h1>
            </div>
        </div>
        {{-- awalkalender --}}
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                      <label for="exampleInputProduk" class="form-label">Nama Produk</label>
                      <input type="text" class="form-control" id="exampleInputProduk" aria-describedby="InputProduk" placeholder="Ini untuk text nama produk">
                    </div> 
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                      <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gambar</label>
                        <input type="file" class="form-control" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                  
            </div>
        </div>
        {{-- kalender --}}
    </div>
@endsection