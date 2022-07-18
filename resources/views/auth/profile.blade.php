@extends('layouts.index_admin')
@section('title', 'Profil')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="/profile" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="fullname" class="form-label fw-bold">Nama</label>
                                <input type="text"
                                    class="form-control form-control-sm  @error('fullname') is-invalid @enderror"
                                    id="fullname" name="fullname" value="{{ auth()->user()->fullname }}">
                                @error('fullname')
                                    <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label fw-bold">Username</label>
                                <input type="text"
                                    class="form-control form-control-sm  @error('username') is-invalid @enderror"
                                    id="username" name="username" value="{{ auth()->user()->username }}">
                                @error('username')
                                    <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label fw-bold">Password Baru</label>
                                <input type="password"
                                    class="form-control form-control-sm  @error('password') is-invalid @enderror"
                                    id="password" name="password">
                                @error('password')
                                    <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label fw-bold">Konfirmasi Password</label>
                                <input type="password"
                                    class="form-control form-control-sm  @error('password_confirmation') is-invalid @enderror"
                                    id="password_confirmation" name="password_confirmation">
                                @error('password_confirmation')
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
