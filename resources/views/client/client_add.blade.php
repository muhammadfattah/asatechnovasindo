@extends('layouts.index_admin')
@section('title', 'Client')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="/admin/client" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 @error('filename') mb-5 @enderror">
                                <label for="filename" class="form-label fw-bold">File Gambar</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('filename') is-invalid @enderror"
                                        id="filename" name="filename[]" multiple>
                                    <label class="custom-file-label form-control-sm" for="filename">Choose file</label>
                                    @error('filename')
                                        <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                    @enderror
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
