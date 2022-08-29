@extends('layout')

@section('content')
<div class="container mt-3">
<div class="row">
    <div class="col-md-12">
        <div class="card border-1 shadow rounded">
            <div class="card-body">
                <div class="col-md-15">
                    <h1>Genre</h1>
    
    <a href="{{ route('genre-create') }}" class="btn btn-primary">+ Add My Genre</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Genre</th>
            <th scope="col">Deskripsi</th>
        </tr>
        </thead>
        <tbody>
            @foreach($genres as $no => $gen)
            <tr>
                <td>{{ $no + 1 }}.</td>
                <td>{{ $gen->genre }}</td>
                <td>{{ $gen->deskripsi }}</td>
                <td>
                    <a href="{{ route('genre-edit', $gen->id) }}" class="btn btn-warning">Ubah</a>
                </td>
                <td>
                    <form action="{{  route("genre-destroy", $gen->id) }}" method="post">
                        @csrf
                        @method("Delete")
                        <button type="submit" class="btn btn-danger">Hapus</button>
                      </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{ $genres->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection