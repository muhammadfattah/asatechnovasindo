@extends('layouts.index_admin')
@section('title', 'Catalog')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <a href="{{ asset('storage' . $catalog->filename) }}" class="btn btn-success btn-sm mb-4"
                            target="_blank"><i class="fa fa-file-import fa-fw"></i> Lihat
                            Catalog</a>
                        <form action="/admin/catalog/{{ $catalog->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 @error('filename') mb-5 @enderror">
                                <label for="filename" class="form-label fw-bold">File Catalog</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('filename') is-invalid @enderror"
                                        id="filename" name="filename">
                                    <label class="custom-file-label form-control-sm" for="filename">Choose file</label>
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
