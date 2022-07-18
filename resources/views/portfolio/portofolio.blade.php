@extends('layouts.index_admin')
@section('title', 'Portfolio')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex py-0 mt-3">
                <a href="/admin/portfolio/tambah" class="btn btn-success btn-sm h-100"><i class="fa fa-plus fa-fw"></i> Tambah
                    Portfolio</a>
                <form action="/admin/swap/portfolio" method="POST" class="btn-swap ml-3">
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
                            <th></th>
                            <th class="text-center">#</th>
                            <th>Aplikasi</th>
                            <th class="text-center">Gambar</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($portfolio as $port)
                            <tr>
                                <td class="text-center align-middle">
                                    <input type="checkbox" class="duo-checkbox" value="{{ $port->id }}">
                                </td>
                                <th class="text-center align-middle">{{ $loop->iteration }}</th>
                                <td class="align-middle">{{ $port->application_name }}</td>
                                <td class="text-center align-middle"><img src="{{ asset('storage' . $port->filename) }}"
                                        style="height: 100px">
                                </td>
                                <td class="text-center align-middle" style="white-space:nowrap">
                                    <a href="/admin/portfolio/{{ $port->id }}" class="btn btn-success btn-sm"><i
                                            class="fa fa-edit"></i> Edit</a>
                                    <form action="/admin/portfolio/{{ $port->id }}" method="POST"
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
@endsection
