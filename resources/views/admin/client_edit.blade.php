@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 text-primary">Client</h1>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-8">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="/admin/client/{{ $client->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="filename" class="form-label fw-bold">File Gambar</label>
                            <input type="file"
                                class="form-control form-control-sm  @error('filename') is-invalid @enderror" id="filename"
                                name="filename">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
