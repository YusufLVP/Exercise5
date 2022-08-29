@extends('layout')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-1 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('movie-update', $movies->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <label for="judul" class="form-label">Judul</label>
                            <div class="input-group mb-3">
                                <input name="judul" type="text" class="form-control" id="judul" value="{{ $movies->judul }}">
                            </div>
                            <label for="genre" class="form-label">Genre</label>
                            <select class="custom-select d-block w-100 form-control" id="genre" name="genre_id">
                                <option selected>Pilih Genre</option>
                                @foreach ($genres as $genre)
                                    <option value="{{ $genre->id }}"  {{ $genre->id === $movies->genre_id ? 'selected' : '' }}>{{ $genre->genre }}</option>
                                @endforeach
                            </select>
                            <label for="ratings" class="form-label">Rating Usia</label>
                            <select class="custom-select d-block w-100 form-control" id="ratings" name="rating_usia_id">
                                <option selected>Pilih Rating Usia</option>
                                @foreach ($ratings as $rating)
                                    <option value="{{ $rating->id }}"  {{ $rating->id === $movies->rating_usia_id ? 'selected' : '' }}>{{ $rating->simbol }}</option>
                                @endforeach
                            </select>
                            <label for="negara" class="form-label">Negara</label>
                            <div class="input-group mb-3">
                                <input name="negara" type="text" class="form-control" id="negara" value="{{ $movies->negara }}">
                            </div>
                            <label for="sutradara" class="form-label">Sutradara</label>
                            <div class="input-group mb-3">
                                <input name="sutradara" type="text" class="form-control" id="sutradara" value="{{ $movies->sutradara }}">
                            </div>
                            <label for="studio" class="form-label">Studio</label>
                            <div class="input-group mb-3">
                                <input name="studio" type="text" class="form-control" id="studio" value="{{ $movies->studio }}">
                            </div>
                            <label for="durasi" class="form-label">Durasi</label>
                            <div class="input-group mb-3">
                                <input name="durasi" type="number" class="form-control" id="durasi" value="{{ $movies->durasi }}">
                            </div>
                            <label for="rate" class="form-label">Rate</label>
                            <div class="input-group mb-3">
                                <input name="rate" type="number" class="form-control" id="rate" value="{{ $movies->rate }}">
                            </div>
                            <label for="rilis" class="form-label">Rilis</label>
                            <div class="input-group mb-3">
                                <input name="rilis" type="date" class="form-control" id="rilis" value="{{ $movies->rilis }}">
                            </div>
                            <label for="sinopsis" class="form-label">Sinopsis</label>
                            <div class="input-group mb-3">
                                <textarea name="sinopsis" type="number" class="form-control" id="sinopsis" >{{ $movies->sinopsis }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
