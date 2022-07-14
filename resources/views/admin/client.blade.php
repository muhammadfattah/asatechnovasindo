@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 text-primary">Client</h1>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-8">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="/admin/client" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="filename" class="form-label fw-bold">File Gambar</label>
                            <input type="file"
                                class="form-control form-control-sm @error('filename') is-invalid @enderror" id="filename"
                                name="filename[]" multiple>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-5">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered pt-4" id="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Gambar</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $client)
                            <tr>
                                <th class="text-center">{{ $loop->iteration }}</th>
                                <td class="text-center"><img
                                        src="{{ asset('storage' . $client->filename) }}"style="height: 100px">
                                </td>
                                <td class="text-center white-space: nowrap">
                                    <a href="/admin/client/{{ $client->id }}" class="btn btn-success btn-sm">Edit</a>
                                    <form action="/admin/client/{{ $client->id }}" method="POST"
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
