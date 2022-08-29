@extends('layout')

@section('content')
<div class="container mt-3">
<div class="row">
    <div class="col-md-12">
        <div class="card border-1 shadow rounded">
            <div class="card-body">
                <div class="col-md-15">
                    <h1>Movie</h1>
    
    <a href="{{ route('movie-create') }}" class="btn btn-primary">+ Add My Movie</a><br>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Judul</th>
            <th scope="col">Genre</th>
            <th scope="col">Rating Usia</th>
            <th scope="col">Negara</th>
            <th scope="col">Sutradara</th>
            <th scope="col">Studio</th>
            <th scope="col">Durasi</th>
            <th scope="col">Rate</th>
            <th scope="col">Rilis</th>
            <th scope="col">Sinopsis</th>
        </tr>
        </thead>
        <tbody>
            @foreach($movies as $no => $movie)
            <tr>
                <td>{{ $no+1 }}.</td>
                <td>{{ $movie->judul }}</td>
                <td>{{ $movie->genre->genre }}</td>
                <td>{{ $movie->ratingusia->simbol }}</td>
                <td>{{ $movie->negara }}</td>
                <td>{{ $movie->sutradara }}</td>
                <td>{{ $movie->studio }}</td>
                <td>{{ $movie->durasi }} Min.</td>
                <td>{{ $movie->rate }}</td>
                <td>{{ $movie->rilis}}</td>
                <td>{{ $movie->sinopsis }}</td>
                <td>
                    <a href="{{ route('movie-edit', $movie->id) }}" class="btn btn-warning">Ubah</a>
                </td>
                <td>
                    <form action="{{  route("movie-destroy", $movie->id) }}" method="post">
                        @csrf
                        @method("Delete")
                        <button type="submit" class="btn btn-danger">Hapus</button>
                      </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $movies->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection