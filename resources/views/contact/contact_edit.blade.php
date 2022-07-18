@extends('layouts.index_admin')
@section('title', 'Kontack')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="/admin/kontak/{{ $contact->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Nama</label>
                                <input type="text"
                                    class="form-control form-control-sm @error('name') is-invalid @enderror" id="name"
                                    name="name" value="{{ $contact->name }}">
                                @error('name')
                                    <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label fw-bold">Nomor HP</label>
                                <input type="text"
                                    class="form-control form-control-sm @error('phone') is-invalid @enderror" id="phone"
                                    name="phone" value="{{ $contact->phone }}">
                                @error('phone')
                                    <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="position" class="form-label fw-bold">Jabatan</label>
                                <input type="text"
                                    class="form-control form-control-sm @error('position') is-invalid @enderror"
                                    id="position" name="position" value="{{ $contact->position }}">
                                @error('position')
                                    <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
