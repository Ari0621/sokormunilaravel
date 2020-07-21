@extends('layout')
  
@section('content')
   
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Tambah Buku
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('laptops.store') }}" id="myForm">
            @csrf<!-- <input type="hidden " name="_token" value="{{csrf_token()}}"> -->
                <div class="form-group">
                    <label for="title">Nama Laptop</label>                    
                    <input type="text" name="nama_laptop" class="form-control" id="title" aria-describedby="title" placeholder="Masukkan Nama Laptop">                
                </div>
                <div class="form-group">
                    <label for="writer">jenis laptop</label>                    
                    <input type="text" name="jenis_laptop" class="form-control" id="writer" aria-describedby="writer" placeholder="Masukkan Nama Penulis">                
                </div>
                <div class="form-group">
                    <label for="publisher">harga laptop</label>                    
                    <input type="text" name="harga_laptop" class="form-control" id="publisher" aria-describedby="publisher" placeholder="Masukkan Nama Penerbit">
                </div>
                <div class="form-group">
                    <label for="title">cpu laptop</label>                   
                     <input type="text" name="cpu_laptop" class="form-control" id="title" aria-describedby="title" placeholder="Masukkan Judul Buku">                
                </div>
                <div class="form-group">
                    <label for="title">vga laptop</label>                   
                     <input type="text" name="vga_laptop" class="form-control" id="title" aria-describedby="title" placeholder="Masukkan Judul Buku">                
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection