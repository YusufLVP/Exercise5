@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8">
                <div class="card border-1 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('genre-store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <label for="genre" class="form-label">Genre</label>
                            <div class="input-group mb-3">
                                <input name="genre" type="text" class="form-control" id="genre">
                            </div>
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <div class="input-group mb-3">
                                <textarea name="deskripsi" type="text" class="form-control" id="deskripsi"></textarea>
                            </div>
                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
