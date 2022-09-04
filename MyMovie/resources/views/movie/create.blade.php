@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">

    <style>
        /* Check out later: https://bbbootstrap.com/snippets/accordion-hover-effect-26103860 */

        .mt-100 {
            margin-top: 50px;
        }

        body {
            background: grey;
            color: #514B64;
            min-height: 100vh
        }

        h2 {
            color: darkgreen;
        }

        #css-dropdown {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            width: 300px;
            height: 42px;
            margin: 100px auto 0 auto;
        }
    </style>
@endsection

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8">
                <div class="card border-1 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('movie-store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <label for="judul" class="form-label">Judul</label>
                            <div class="input-group mb-3">
                                <input name="judul" type="text" class="form-control" id="judul">
                            </div>
                                <div class="col-md-13"> 
                                    <select id="choices-multiple-remove-button" name="genre_id[]"
                                        placeholder="Pilih Genre" multiple>
                                        @foreach($genres as $genre)
                                        <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            <label for="ratings" class="form-label">Rating Usia</label>
                            <select class="custom-select d-block w-100 form-control mb-3" id="ratings"
                                name="rating_usia_id">
                                <option selected>Pilih Rating Usia</option>
                                @foreach ($ratings as $rating)
                                    <option value="{{ $rating->id }}">{{ $rating->simbol }}</option>
                                @endforeach
                            </select>
                            <label for="negara" class="form-label">Negara</label>
                            <div class="input-group mb-3">
                                <input name="negara" type="text" class="form-control" id="negara">
                            </div>
                            <label for="sutradara" class="form-label">Sutradara</label>
                            <div class="input-group mb-3">
                                <input name="sutradara" type="text" class="form-control" id="sutradara">
                            </div>
                            <label for="studio" class="form-label">Studio</label>
                            <div class="input-group mb-3">
                                <input name="studio" type="text" class="form-control" id="studio">
                            </div>
                            <label for="durasi" class="form-label">Durasi</label>
                            <div class="input-group mb-3">
                                <input name="durasi" type="number" class="form-control" id="durasi">
                            </div>
                            <label for="rate" class="form-label">Rate</label>
                            <div class="input-group mb-3">
                                <input name="rate" type="number" class="form-control" id="rate">
                            </div>
                            <label for="rilis" class="form-label">Rilis</label>
                            <div class="input-group mb-3">
                                <input name="rilis" type="date" class="form-control" id="rilis">
                            </div>
                            <label for="sinopsis" class="form-label">Sinopsis</label>
                            <div class="input-group mb-3">
                                <textarea name="sinopsis" type="text" class="form-control" id="sinopsis"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="poster" class="form=label">Upload Poster Film</label>
                                <input class="form-control @error('poster') is-invalid @enderror" id="poster" name="poster" type="file">
                                @error('poster')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"
        integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {

            var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
                removeItemButton: true,
                maxItemCount: 10,
                searchResultLimit: 5,
                renderChoiceLimit: 5
            });


        });
    </script>
@endsection
