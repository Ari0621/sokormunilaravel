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
                    <li class="list-group-item"><b>Nama Laptop: </b>{{$laptop->nama_laptop}}</li>
                    <li class="list-group-item"><b>Jenis Laptop: </b>{{$laptop->jenis_laptop}}</li>
                    <li class="list-group-item"><b>Harga Laptop: </b>{{$laptop->harga_laptop}}</li>
                    <li class="list-group-item"><b>Cpu Laptop: </b>{{$laptop->cpu_laptop}}</li>
                    <li class="list-group-item"><b>Vga Laptop: </b>{{$laptop->vga_laptop}}</li>
                </ul>
            </div>
            <a class="btn btn-success" href="{{ route('laptops.index') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection