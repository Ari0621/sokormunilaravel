@extends('layout')
  
@section('content')
   
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit laptop
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
            <form method="post" action="{{ route('laptops.update',$laptop->id) }}" id="myForm">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="title">Nama Laptop</label>                    
                    <input type="text" name="nama_laptop" class="form-control" id="title" value="{{ $laptop->nama_laptop }}" aria-describedby="title" placeholder="Nama Laptop">                
                    </div>
                <div class="form-group">
                    <label for="writer">Jenis Laptop</label>                    
                    <input type="text" name="jenis_laptop" class="form-control" id="writer" value="{{ $laptop->jenis_laptop }}" aria-describedby="writer" placeholder="Masukkan Jenis Laptop">                
                    </div>
                <div class="form-group">
                    <label for="publisher">Harga Laptop</label>                    
                    <input type="text" name="harga_laptop" class="form-control" id="publisher" value="{{ $laptop->harga_laptop }}" aria-describedby="publisher" placeholder="Masukkan Harga Laptop">
                </div>
                <div class="form-group">
                    <label for="publisher">cpu laptop</label>                    
                    <input type="text" name="cpu_laptop" class="form-control" id="publisher" value="{{ $laptop->cpu_laptop }}" aria-describedby="publisher" placeholder="Masukkan Cpu Laptop">
                </div>
                <div class="form-group">
                    <label for="publisher">vga laptop</label>                    
                    <input type="text" name="vga_laptop" class="form-control" id="publisher" value="{{ $laptop->vga_laptop }}" aria-describedby="publisher" placeholder="Masukkan vga laptop">
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection