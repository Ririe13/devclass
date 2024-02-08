@extends('admin.admin_master')
@section('admin')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800"> Produk</h1>
               
            </div>
            <a href="{{ route ('product.add') }}">
              <button type="button" class="btn btn-primary">Tambah Data</button> 
            </a>

            
        </div>
        <br> 
        

        {{-- awalkalender --}}
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Foto Produk</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $item)
                      <tr>
                        <th scope="row">1</th>
                        <td>{{ ($item->nama) }}</td>
                        <td>{{ ($item->deskripsi) }}</td>
                        <td>{{ ($item->harga) }}</td>
                        <td> <img src="{{ asset('storage/'.$item->image) }}" alt=""width="50px" height ="50px"></td>
                        <td colspan="2">
                          <a href="{{route('product.edit', $item->id)}}" class="btn btn-info"> Edit </a>
                          <a href="{{route('product.delete', $item->id)}}" class="btn btn-danger">Hapus</a>
                      </td>
                      </tr> 
                      @endforeach
                      
                    </tbody>
                  </table>
                  
            </div>
        </div>
        {{-- Masukkan Produk --}}
    </div>
@endsection