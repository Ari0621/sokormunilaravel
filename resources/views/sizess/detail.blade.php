@extends('layout')
  
@section('content')

<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail sizes
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>sizes: </b>{{$sizes->nama_sizes}}</li>
                    <li class="list-group-item"><b>Jenis Laptop: </b>{{$laptop->jenis_laptop}}</li>
                </ul>
            </div>
            <a class="btn btn-success" href="{{ route('laptops.index') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection