@extends('layouts.index_admin')
@section('title', 'Artikel')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex">
                <a href="/admin/artikel/tambah" class="btn btn-success btn-sm h-100"><i class="fa fa-plus fa-fw"></i>
                    Tambah
                    Artikel</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table table-bordered table-hover table-sm">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                @can('superadmin')
                                    <th class="align-middle text-center">Penulis</th>
                                @endcan
                                <th class="align-middle text-center">Judul</th>
                                <th class="align-middle text-center">Kutipan</th>
                                <th class="align-middle text-center">Thumbnail</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <th class="text-center align-middle">{{ $loop->iteration }}</th>
                                    @can('superadmin')
                                        @if ($article->user->id == auth()->user()->id)
                                            <td class="align-middle text-center">Anda</td>
                                        @else
                                            <td class="align-middle text-center">{{ $article->user->fullname }}</td>
                                        @endif
                                    @endcan
                                    <td class="text-center align-middle">{{ $article->title }}</td>
                                    <td class="text-center align-middle">{{ $article->quote }}</td>
                                    <td class="text-center align-middle">
                                        <img src="{{ asset('storage' . $article->thumbnail) }}" style="width: 200px">
                                    </td>
                                    <td class="text-center align-middle pt-3" style="white-space: nowrap">
                                        <a href="/admin/artikel/{{ $article->id }}" class="btn btn-success btn-sm"><i
                                                class="fa fa-edit fa-fw"></i> Edit</a>
                                        <form action="/admin/artikel/{{ $article->id }}" method="POST"
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
