@extends('layouts.index_admin')
@section('title', 'Slider')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="/admin/slider/{{ $slider->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label fw-bold">Judul Slider</label>
                                <input type="text"
                                    class="form-control form-control-sm @error('title') is-invalid @enderror" id="title"
                                    name="title" value="{{ $slider->title }}">
                                @error('title')
                                    <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label fw-bold">Deskripsi</label>
                                <textarea class="form-control form-control-sm @error('description') is-invalid @enderror" name="description"
                                    rows="10" id="description">{{ $slider->description }}</textarea>
                                @error('description')
                                    <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save fa-fw"></i>
                                Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-flex py-0 mt-3">
                        <a href="/admin/slider/tambah" class="btn btn-success btn-sm h-100"><i class="fa fa-plus fa-fw"></i>
                            Tambah
                            Slider</a>
                        <form action="/admin/swap/slider" method="POST" class="btn-swap ml-3">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-sync fa-fw"></i> Tukar
                                Posisi</button>
                        </form>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="table" class="table table-bordered table-hover table-sm">
                            <thead>
                                <tr>
                                    <th class="text-center"></th>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Gambar</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliderImage as $sliderI)
                                    <tr class="align-middle">
                                        <td class="text-center align-middle">
                                            <input type="checkbox" class="duo-checkbox" value="{{ $sliderI->id }}">
                                        </td>
                                        <th class="text-center align-middle">{{ $loop->iteration }}</th>
                                        <td class="text-center align-middle"><img
                                                src="{{ asset('storage' . $sliderI->filename) }}"style="height: 100px">
                                        </td>
                                        <td class="text-center align-middle" style="white-space: nowrap">
                                            <a href="/admin/slider/{{ $sliderI->id }}" class="btn btn-success btn-sm"><i
                                                    class="fa fa-edit fa-fw"></i> Edit</a>
                                            <form action="/admin/slider/{{ $sliderI->id }}" method="POST"
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
