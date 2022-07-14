@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 text-primary">Produk</h1>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-8">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="/admin/produk/{{ $product->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="application_name" class="form-label fw-bold">Nama Aplikasi</label>
                            <input type="text"
                                class="form-control form-control-sm @error('application_name') is-invalid @enderror"
                                id="application_name" name="application_name" value="{{ $product->application_name }}">
                        </div>
                        <div class="mb-3">
                            <label for="application_name" class="form-label fw-bold">Deskripsi Aplikasi</label>
                            <textarea class="form-control form-control-sm @error('description') is-invalid @enderror" name="description"
                                rows="10" id="description">{{ $product->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="filename" class="form-label fw-bold">File Gambar</label>
                            <input type="file"
                                class="form-control form-control-sm @error('filename') is-invalid @enderror" id="filename"
                                name="filename">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
