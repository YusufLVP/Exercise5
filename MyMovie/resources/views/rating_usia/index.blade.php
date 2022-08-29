@extends('layout')

@section('content')
<div class="container mt-3">
<div class="row">
    <div class="col-md-12">
        <div class="card border-1 shadow rounded">
            <div class="card-body">
                <div class="col-md-15">
                    <h1>Rating Usia</h1>
    
    <a href="{{ route('rating_usia-create') }}" class="btn btn-primary">+ Add Rating Usia</a><br>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Rating Usia</th>
            <th scope="col">Deskripsi</th>
        </tr>
        </thead>
        <tbody>
            @foreach($ratings as $no => $rating)
            <tr>
                <td>{{ $no + 1 }}.</td>
                <td>{{ $rating->simbol }}</td>
                <td>{{ $rating->deskripsi }}</td>
                <td>
                    <a href="{{ route('rating_usia-edit', $rating->id) }}" class="btn btn-warning">Ubah</a>
                </td>
                <td>
                    <form action="{{  route("rating_usia-destroy", $rating->id) }}" method="post">
                        @csrf
                        @method("Delete")
                        <button type="submit" class="btn btn-danger">Hapus</button>
                      </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{ $ratings->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection