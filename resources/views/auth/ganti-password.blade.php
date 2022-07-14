@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 text-primary">Ganti Password</h1>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-8">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="/ganti-password" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold">Password Baru</label>
                            <input type="text"
                                class="form-control form-control-sm  @error('password') is-invalid @enderror" id="password"
                                name="password">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label fw-bold">Konfirmasi Password</label>
                            <input type="text"
                                class="form-control form-control-sm  @error('password_confirmation') is-invalid @enderror"
                                id="password_confirmation" name="password_confirmation">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
