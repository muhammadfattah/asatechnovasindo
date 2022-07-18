@extends('layouts.index_admin')
@section('title', 'Tentang Perusahaan')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="/admin/tentang-perusahaan/misi/{{ $vision->id }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="mission" class="form-label fw-bold">Visi</label>
                                <textarea class="form-control form-control-sm @error('mission') is-invalid @enderror" name="mission" rows="5"
                                    id="mission">{{ $mission->mission }}</textarea>
                                @error('mission')
                                    <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                @enderror
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
