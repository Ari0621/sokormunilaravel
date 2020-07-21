@extends('layout')
  
@section('content')

<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail materials
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nama materials: </b>{{$materials->nama_materials}}</li>
                    <li class="list-group-item"><b>description: </b>{{$materials->description}}</li>
                </ul>
            </div>
            <a class="btn btn-success" href="{{ route('materials.index') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection