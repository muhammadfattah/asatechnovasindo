@extends('layouts.index_admin')
@section('title', 'Kontak')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="/admin/kontak/{{ $contact->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="phone" class="form-label fw-bold">Nomor HP/WA</label>
                                <input type="text"
                                    class="form-control form-control-sm @error('phone') is-invalid @enderror" id="phone"
                                    name="phone" value="{{ $contact->phone }}">
                                @error('phone')
                                    <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label fw-bold">Alamat</label>
                                <textarea class="form-control form-control-sm @error('address') is-invalid @enderror" name="address" rows="5"
                                    id="address">{{ $contact->address }}</textarea>
                                @error('address')
                                    <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold">Email</label>
                                <input type="text"
                                    class="form-control form-control-sm @error('email') is-invalid @enderror" id="email"
                                    name="email" value="{{ $contact->email }}">
                                @error('email')
                                    <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="website" class="form-label fw-bold">Website</label>
                                <input type="text"
                                    class="form-control form-control-sm @error('website') is-invalid @enderror"
                                    id="website" name="website" value="{{ $contact->website }}">
                                @error('website')
                                    <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="maps" class="form-label fw-bold">Link Maps</label>
                                <textarea class="form-control form-control-sm @error('maps') is-invalid @enderror" name="maps" rows="5"
                                    id="maps">{{ $contact->maps }}</textarea>
                                @error('maps')
                                    <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="street_maps" class="form-label fw-bold">Link Maps (Street)</label>
                                <textarea class="form-control form-control-sm @error('street_maps') is-invalid @enderror" name="street_maps"
                                    rows="5" id="street_maps">{{ $contact->street_maps }}</textarea>
                                @error('street_maps')
                                    <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save fa-fw"></i>
                                Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-header py-1">
                        <div class="d-flex align-items-center">
                            <h3 class="h6 font-weight-bold mt-2">Kontak Tim</h3>
                            <a href="/admin/kontak/tambah" class="btn btn-success btn-sm ml-3"><i
                                    class="fa fa-plus fa-fw"></i>
                                Tambah
                                Kontak</a>
                            <form action="/admin/swap/kontak" method="POST" class="btn-swap ml-3 mt-3">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-sync fa-fw"></i> Tukar
                                    Posisi</button>
                            </form>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="table" class="table table-bordered table-hover table-sm">
                            <thead>
                                <tr>
                                    <th class="text-center"></th>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Nomor HP</th>
                                    <th class="text-center">Jabatan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teamContact as $tc)
                                    <tr class="align-middle">
                                        <td class="text-center align-middle">
                                            <input type="checkbox" class="duo-checkbox" value="{{ $tc->id }}">
                                        </td>
                                        <th class="text-center align-middle">{{ $loop->iteration }}</th>
                                        <td class="text-center align-middle">
                                            {{ $tc->name }}
                                        </td>
                                        <td class="text-center align-middle">
                                            {{ $tc->phone }}
                                        </td>
                                        <td class="text-center align-middle">
                                            {{ $tc->position }}
                                        </td>
                                        <td class="text-center align-middle pt-3" style="white-space: nowrap">
                                            <a href="/admin/kontak/{{ $tc->id }}" class="btn btn-success btn-sm"><i
                                                    class="fa fa-edit fa-fw"></i> Edit</a>
                                            <form action="/admin/kontak/{{ $tc->id }}" method="POST"
                                                class="d-inline-block tombol-hapus">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="fa fa-trash fa-fw"></i> Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
