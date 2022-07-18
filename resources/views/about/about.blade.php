@extends('layouts.index_admin')
@section('title', 'Tentang Perusahaan')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header py-2">
                        <h3 class="h6 font-weight-bold mt-2">Profil</h3>
                    </div>
                    <div class="card-body">
                        <form action="/admin/tentang-perusahaan/{{ $profile->id }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="section_1" class="form-label fw-bold">Section 1</label>
                                        <textarea class="form-control form-control-sm @error('section_1') is-invalid @enderror" name="section_1" rows="10"
                                            id="section_1">{{ $profile->section_1 }}</textarea>
                                        @error('section_1')
                                            <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                        @enderror
                                    </div>
                                    <div class="overflow-hidden box-profile-admin d-flex align-items-end mb-3 p-3">
                                        <img src="{{ asset('storage' . $profile->section_1_image) }}"
                                            class="w-75 rounded p-3 shadow ">
                                    </div>
                                    <div class="mb-3 @error('section_1_image') mb-5 @enderror">
                                        <label for="section_1_image" class="form-label fw-bold">Gambar Section 1</label>
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input @error('section_1_image') is-invalid @enderror"
                                                id="section_1_image" name="section_1_image">
                                            <label class="custom-file-label form-control-sm" for="section_1_image">Choose
                                                file</label>
                                            @error('section_1_image')
                                                <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="section_2" class="form-label fw-bold">Section 2</label>
                                        <textarea class="form-control form-control-sm @error('section_2') is-invalid @enderror" name="section_2" rows="10"
                                            id="section_2">{{ $profile->section_2 }}</textarea>
                                        @error('section_2')
                                            <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                        @enderror
                                    </div>
                                    <div class="overflow-hidden box-profile-admin d-flex align-items-end mb-3 p-3">
                                        <img src="{{ asset('storage' . $profile->section_2_image) }}"
                                            class="w-75 rounded p-3 shadow ">
                                    </div>
                                    <div class="mb-3 @error('section_2_image') mb-5 @enderror">
                                        <label for="section_2_image" class="form-label fw-bold">Gambar Section 2</label>
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input @error('section_2_image') is-invalid @enderror"
                                                id="section_2_image" name="section_2_image">
                                            <label class="custom-file-label form-control-sm" for="section_2_image">Choose
                                                file</label>
                                            @error('section_2_image')
                                                <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save fa-fw"></i>
                                Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header py-1">
                        <div class="d-flex align-items-center">
                            <h3 class="h6 font-weight-bold mt-2">Visi</h3>
                            <a href="/admin/tentang-perusahaan/visi" class="btn btn-success btn-sm ml-3"><i
                                    class="fa fa-plus fa-fw"></i>
                                Tambah
                                Visi</a>
                            <form action="/admin/swap/visi" method="POST" class="btn-swap ml-3 mt-3">
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
                                    <th class="text-center"></th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($visions as $vision)
                                    <tr class="align-middle">
                                        <td class="text-center align-middle">
                                            <input type="checkbox" class="duo-checkbox" value="{{ $vision->id }}">
                                        </td>
                                        <th class="text-center align-middle">{{ $loop->iteration }}</th>
                                        <td class="align-middle">
                                            {{ $vision->vision }}
                                        </td>
                                        <td class="text-center align-middle" style="white-space: nowrap">
                                            <a href="/admin/tentang-perusahaan/visi/{{ $vision->id }}"
                                                class="btn btn-success btn-sm"><i class="fa fa-edit fa-fw"></i> Edit</a>
                                            <form action="/admin/tentang-perusahaan/visi/{{ $vision->id }}"
                                                method="POST" class="d-inline-block tombol-hapus">
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header py-1">
                        <div class="d-flex align-items-center">
                            <h3 class="h6 font-weight-bold mt-2">Misi</h3>
                            <a href="/admin/tentang-perusahaan/misi" class="btn btn-success btn-sm ml-3"><i
                                    class="fa fa-plus fa-fw"></i>
                                Tambah
                                Misi</a>
                            <form action="/admin/swap/misi" method="POST" class="btn-swap2 ml-3 mt-3">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-sync fa-fw"></i>
                                    Tukar
                                    Posisi</button>
                            </form>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="table2" class="table table-bordered table-hover table-sm">
                            <thead>
                                <tr>
                                    <th class="text-center"></th>
                                    <th class="text-center">#</th>
                                    <th class="text-center"></th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($missions as $mission)
                                    <tr class="align-middle">
                                        <td class="text-center align-middle">
                                            <input type="checkbox" class="duo-checkbox2" value="{{ $mission->id }}">
                                        </td>
                                        <th class="text-center align-middle">{{ $loop->iteration }}</th>
                                        <td class="align-middle">
                                            {{ $mission->mission }}
                                        </td>
                                        <td class="text-center align-middle" style="white-space: nowrap">
                                            <a href="/admin/tentang-perusahaan/misi/{{ $mission->id }}"
                                                class="btn btn-success btn-sm"><i class="fa fa-edit fa-fw"></i> Edit</a>
                                            <form action="/admin/tentang-perusahaan/misi/{{ $mission->id }}"
                                                method="POST" class="d-inline-block tombol-hapus">
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
