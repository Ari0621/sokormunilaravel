@extends('layout')
  
@section('content')
   
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit sizes
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
            <form method="post" action="{{ route('sizes.update',$sizes->id) }}" id="myForm">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="title">sizes</label>                    
                    <input type="text" name="nama_sizes" class="form-control" id="title" value="{{ $sizes->nama_sizes }}" aria-describedby="title" placeholder="Nama sizes">                
                    </div>
                <div class="form-group">
                    <label for="writer">Jenis Laptop</label>                    
                    <input type="text" name="jenis_laptop" class="form-control" id="writer" value="{{ $laptop->jenis_laptop }}" aria-describedby="writer" placeholder="Masukkan Jenis Laptop">                
                    </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection