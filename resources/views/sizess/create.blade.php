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
            <form method="post" action="{{ route('sizes.store') }}" id="myForm">
            @csrf<!-- <input type="hidden " name="_token" value="{{csrf_token()}}"> -->
                <div class="form-group">
                    <label for="title">sizes</label>                    
                    <input type="text" name="nama_sizes" class="form-control" id="title" aria-describedby="title" placeholder="Masukkan Nama sizes">                
                </div>
                <div class="form-group">
                    <label for="writer">jenis laptop</label>                    
                    <input type="text" name="jenis_laptop" class="form-control" id="writer" aria-describedby="writer" placeholder="Masukkan Nama Penulis">                
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection