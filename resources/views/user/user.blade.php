@extends('layouts.index_admin')
@section('title', 'Pengguna')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex">
                <a href="pengguna/tambah" class="btn btn-success btn-sm h-100"><i class="fa fa-user-plus fa-fw"></i> Tambah
                    Pengguna</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table table-bordered table-hover table-sm">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="align-middle text-center">Nama</th>
                                <th class="align-middle text-center">Username</th>
                                <th class="align-middle text-center">Role</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                @php $i = 1; @endphp
                                @if ($user->id != auth()->user()->id)
                                    <tr>
                                        <th class="text-center align-middle">{{ $i++ }}</th>
                                        <td class="text-center align-middle">{{ $user->fullname }}</td>
                                        <td class="text-center align-middle">{{ $user->username }}</td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="btn btn-sm @if ($user->role == 'super admin') btn-dark @else btn-primary @endif">
                                                <i
                                                    class="fa fa-fw @if ($user->role == 'super admin') fa-user-secret @else fa-user @endif"></i>
                                                {{ ucwords($user->role) }}
                                            </span>
                                        </td>
                                        <td class="text-center align-middle pt-3" style="white-space: nowrap">
                                            <a href="/pengguna/{{ $user->id }}" class="btn btn-success btn-sm"><i
                                                    class="fa fa-edit fa-fw"></i> Edit</a>
                                            <form action="/pengguna/{{ $user->id }}" method="POST"
                                                class="d-inline-block tombol-hapus">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="fa fa-trash fa-fw"></i> Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
