@extends('layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mt-3 mb-3">
            <div class="text-left">
                <h2>materials</h2>
            </div>
            <div class="text-right">
                <a class="btn btn-success" href="{{ route('materials.create') }}">Tambah Buku</a>
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
            <th>Nama materials</th>
            <th>description</th>>
            <th width="280px">Action</th>
        </tr>
        @foreach ($materials as $key => $item)
        <tr>
          
            <td>{{ $key+1 }}</td>
            <td>{{ $item->nama_laptop }}</td>
            <td>{{ $item->description }}</td>
            <td>
                 <form action="{{ route('materials.destroy',$item->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('materials.show',$item->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('materials.edit',$item->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> 
            </td>
        </tr>
        @endforeach
    </table>
      
@endsection