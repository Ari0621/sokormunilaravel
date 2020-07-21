@extends('layout')
  
@section('content')

<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Laptop
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nama Laptop: </b>{{$colors->name}}</li>
                </ul>
            </div>
            <a class="btn btn-success" href="{{ route('laptops.index') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection