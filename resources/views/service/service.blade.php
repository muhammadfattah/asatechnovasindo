@extends('layouts.index_admin')
@section('title', 'Layanan')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex py-0 mt-3">
                <a href="/admin/layanan/tambah" class="btn btn-success btn-sm h-100"><i class="fa fa-plus fa-fw"></i> Tambah
                    Layanan</a>
                <form action="/admin/swap/layanan" method="POST" class="btn-swap ml-3">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-sync fa-fw"></i> Tukar
                        Posisi</button>
                </form>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table table-bordered table-hover table-sm">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="text-center">#</th>
                                <th>Nama Layanan</th>
                                <th>Deskripsi</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <td class="text-center align-middle">
                                        <input type="checkbox" class="duo-checkbox" value="{{ $service->id }}">
                                    </td>
                                    <th class="text-center align-middle">{{ $loop->iteration }}</th>
                                    <td class="align-middle">{{ $service->title }}</td>
                                    <td class="align-middle">{{ $service->description }}</td>
                                    <td class="text-center align-middle" style="white-space: nowrap">
                                        <a href="/admin/layanan/{{ $service->id }}" class="btn btn-success btn-sm"><i
                                                class="fa fa-edit fa-fw"></i> Edit</a>
                                        <form action="/admin/layanan/{{ $service->id }}" method="POST"
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
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
