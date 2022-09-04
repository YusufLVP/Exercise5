@extends('layouts.app')

@push('style')
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="col-md-8">
            <div class="card shadow mb-5">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Rating Usia</h6>
                </div>
                <div class="card-body">
                    <a href="{{ route('rating_usia-create') }}" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            +
                        </span>
                        <span class="text">Add Rating Usia</span>
                    </a><br>
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Rating Usia</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($ratings as $rating)
                                    <tr>
                                        <td>{{ $loop->iteration }}.</td>
                                        <td>{{ $rating->simbol }}</td>
                                        <td>{{ $rating->deskripsi }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('rating_usia-edit', $rating->id) }}"
                                                class="btn btn-warning btn-circle mr-1"><i class="fas fa-edit"></i></a>

                                            <form action="{{ route('rating_usia-destroy', $rating->id) }}" method="post">
                                                @csrf
                                                @method('Delete')

                                                <button type="submit" class="btn btn-danger btn-circle">
                                                    <i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection


@push('script')
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/datatables-demo.js') }}"></script>
@endpush

{{-- @extends('layout')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8">
                <div class="card border-1 shadow rounded">
                    <div class="card-body">
                        <div class="col-md-15">
                            <h1>Rating Usia</h1>

                            <a href="{{ route('rating_usia-create') }}" class="btn btn-primary">+ Add Rating Usia</a><br>
                            <div class="mt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Rating Usia</th>
                                            <th scope="col">Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ratings as $rating)
                                            <tr>
                                                <td>{{ $loop->iteration}}.</td>
                                                <td>{{ $rating->simbol }}</td>
                                                <td>{{ $rating->deskripsi }}</td>
                                                <td>
                                                    <a href="{{ route('rating_usia-edit', $rating->id) }}"
                                                        class="btn btn-warning">Ubah</a>
                                                </td>
                                                <td>
                                                    <form action="{{ route('rating_usia-destroy', $rating->id) }}"
                                                        method="post">
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
                            {{-- {{ $ratings->links() }} --}}
