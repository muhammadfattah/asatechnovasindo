@extends('layouts.index_admin')
@section('title', 'Layanan')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="/admin/layanan" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label fw-bold">Nama Layanan</label>
                                <input type="text"
                                    class="form-control form-control-sm @error('title') is-invalid @enderror" id="title"
                                    name="title" value="{{ old('title') }}">
                                @error('title')
                                    <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label fw-bold">Deskripsi</label>
                                <textarea class="form-control form-control-sm @error('description') is-invalid @enderror" name="description"
                                    rows="10" id="description">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-plus fa-fw"></i>
                                Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
