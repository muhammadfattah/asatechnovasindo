@extends('layouts.index_admin')
@section('title', 'Portfolio')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="/admin/portfolio/{{ $portfolio->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="application_name" class="form-label fw-bold">Nama Aplikasi</label>
                                <input type="text"
                                    class="form-control form-control-sm @error('application_name') is-invalid @enderror"
                                    id="application_name" name="application_name"
                                    value="{{ $portfolio->application_name }}">
                                @error('application_name')
                                    <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                @enderror
                            </div>
                            <img src="{{ asset('storage' . $portfolio->filename) }}" class="w-75 mb-3 rounded shadow p-3">
                            <div class="mb-3 @error('filename') mb-5 @enderror">
                                <label for="filename" class="form-label fw-bold">File Gambar</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('filename') is-invalid @enderror"
                                        id="filename" name="filename">
                                    <label class="custom-file-label  form-control-sm" for="filename">Choose file</label>
                                    @error('filename')
                                        <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save fa-fw"></i>
                                Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
