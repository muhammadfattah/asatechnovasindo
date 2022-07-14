@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 text-primary">Portfolio</h1>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-8">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="/admin/portfolio" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="application_name" class="form-label fw-bold">Nama Aplikasi</label>
                            <input type="text"
                                class="form-control form-control-sm @error('application_name') is-invalid @enderror"
                                id="application_name" name="application_name" value="{{ old('application_name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="filename" class="form-label fw-bold">File Gambar</label>
                            <input type="file"
                                class="form-control form-control-sm @error('filename') is-invalid @enderror" id="filename"
                                name="filename">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-5">
        <div class="card-body">
            <form action="/admin/swap/portfolio" method="POST" class="btn-swap">
                @csrf
                <button type="submit" class="btn btn-primary btn-sm mb-4">Tukar Posisi</button>
            </form>
            <div class="table-responsive">
                <table class="table table-hover table-bordered pt-4" id="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="text-center">#</th>
                            <th>Aplikasi</th>
                            <th class="text-center">Gambar</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($portfolio as $port)
                            <tr class="align-middle">
                                <td class="text-center">
                                    <input type="checkbox" class="duo-checkbox" value="{{ $port->id }}">
                                </td>
                                <th class="text-center">{{ $loop->iteration }}</th>
                                <td>{{ $port->application_name }}</td>
                                <td class="text-center"><img src="{{ asset('storage' . $port->filename) }}"
                                        style="height: 100px">
                                </td>
                                <td class="text-center white-space: nowrap">
                                    <a href="/admin/portfolio/{{ $port->id }}" class="btn btn-success btn-sm">Edit</a>
                                    <form action="/admin/portfolio/{{ $port->id }}" method="POST"
                                        class="d-inline-block tombol-hapus">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
