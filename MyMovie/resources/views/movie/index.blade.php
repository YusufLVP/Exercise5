@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-16">
                <div class="card border-1 shadow rounded">
                    <div class="card-body">
                        <h1>Movie</h1>

                        <a href="{{ route('movie-create') }}" class="btn btn-primary">+ Add My Movie</a>
                        <div class="mt-3">
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
                                    @foreach ($movies as $movie)
                                        <tr>
                                            <td>{{ $loop->iteration }}.</td>
                                            <td>{{ $movie->judul }}</td>
                                            <td>{{ $movie->genres=>genre }}
                                                {{-- @foreach ($movie->Genre as $genre) --}}
                                                    {{-- {{ $genre->genre }}, --}}
                                                {{-- @endforeach --}}
                                            </td>
                                            <td>{{ $movie->ratingusia->simbol }}</td>
                                            <td>{{ $movie->negara }}</td>
                                            <td>{{ $movie->sutradara }}</td>
                                            <td>{{ $movie->studio }}</td>
                                            <td>{{ ($movie->durasi-($movie->durasi%60))/60 }} Hr.{{ $movie->durasi %60 }} Min.</td>
                                            <td>{{ $movie->rate }}</td>
                                            <td>{{ $movie->rilis }}</td>
                                            <td>{{ $movie->sinopsis }}</td>
                                            <td>
                                                <a href="{{ route('movie-edit', $movie->id) }}"
                                                    class="btn btn-warning">Ubah</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('movie-destroy', $movie->id) }}" method="post">
                                                    @csrf
                                                    @method('Delete')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $movies->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
