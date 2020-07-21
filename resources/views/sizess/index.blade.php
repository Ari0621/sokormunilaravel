@extends('layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mt-3 mb-3">
            <div class="text-left">
                <h2>Jenis-jenis Laptop Tahun 2020</h2>
            </div>
            <div class="text-right">
                <a class="btn btn-success" href="{{ route('laptops.create') }}">Tambah Buku</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><p>{{ $message }}</p></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
   
    <table class="table table-striped table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Laptop</th>
            <th>Jenis Laptop</th>
            <th>Harga Laptop</th>
            <th>Cpu Laptop</th>
            <th>Vga Laptop</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($laptop as $key => $item)
        <tr>
          
            <td>{{ $key+1 }}</td>
            <td>{{ $item->nama_laptop }}</td>
            <td>{{ $item->jenis_laptop }}</td>
            <td>{{ $item->harga_laptop }}</td>
            <td>{{ $item->cpu_laptop }}</td>
            <td>{{ $item->vga_laptop }}</td>
            <td>
                 <form action="{{ route('laptops.destroy',$item->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('laptops.show',$item->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('laptops.edit',$item->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> 
            </td>
        </tr>
        @endforeach
    </table>
      
@endsection