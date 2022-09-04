@extends('layouts.app')

@section('content')
    <div class="row">

        @foreach ($movies as $movie)
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">

                            <img src="{{ 'https://picsum.photos/id/'.$movie->id.'/200/300' }}">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase text-center">

                                    <h5>{{ $movie->judul }}</h5></div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        @endforeach
    </div>
@endsection
