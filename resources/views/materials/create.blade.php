@extends('layout')
  
@section('content')
   
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Tambah materials
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
            <form method="post" action="{{ route('materials.store') }}" id="myForm">
            @csrf<!-- <input type="hidden " name="_token" value="{{csrf_token()}}"> -->
                <div class="form-group">
                    <label for="title">Nama materials</label>                    
                    <input type="text" name="nama_materials" class="form-control" id="title" aria-describedby="title" placeholder="Masukkan Nama materials">                
                </div>
                <div class="form-group">
                    <label for="writer">description</label>                    
                    <input type="text" name="description" class="form-control" id="writer" aria-describedby="writer" placeholder="Masukkan  description">                
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection