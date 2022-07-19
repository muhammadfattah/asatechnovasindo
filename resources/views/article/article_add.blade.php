@extends('layouts.index_admin')
@section('title', 'Artikel')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header py-2">
                        <h3 class="h6 font-weight-bold mt-2">Artikel</h3>
                    </div>
                    <div class="card-body">
                        <form action="/admin/artikel" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="title" class="form-label fw-bold">Judul Artikel</label>
                                        <input type="text"
                                            class="form-control form-control-sm @error('title') is-invalid @enderror"
                                            id="title" name="title" value="{{ old('title') }}">
                                        @error('title')
                                            <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 @error('thumbnail') mb-5 @enderror">
                                        <label for="thumbnail" class="form-label fw-bold">Thumbnail</label>
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input @error('thumbnail') is-invalid @enderror"
                                                id="thumbnail" name="thumbnail">
                                            <label class="custom-file-label form-control-sm" for="thumbnail">Choose
                                                file</label>
                                            @error('thumbnail')
                                                <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="quote" class="form-label fw-bold">Kutipan</label>
                                        <textarea class="form-control form-control-sm @error('quote') is-invalid @enderror" name="quote" style="height: 80%"
                                            id="quote">{{ old('quote') }}</textarea>
                                        @error('quote')
                                            <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="content" class="form-label fw-bold">Konten Artikel</label>
                                        <textarea class="form-control form-control-sm @error('content') is-invalid @enderror summernote" name="content"
                                            rows="10" id="content">{{ old('content') }}</textarea>
                                        @error('content')
                                            <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                        @enderror
                                    </div>
                                </div>
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
