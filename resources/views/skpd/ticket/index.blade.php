@extends('layouts.app')
@section('title')
    Tiket
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <a class="btn btn-primary mb-15" href="{{ route('admin.user.create') }}">
                            <i class="icon wb-plus" aria-hidden="true"></i> Tambah Data
                        </a>
                        <div class="table-responsive">
                            <table class="table table-hover table-vcenter table-striped" cellspacing="0" id="addrowExample">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Sub Kategori</th>
                                        <th>Email</th>
                                        <th>Nomor Telepon</th>
                                        <th>Role</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $d)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $d->name }}</td>
                                            <td>{{ $d->email }}</td>
                                            <td>{{ $d->phoneNumber }}</td>
                                            <td>{{ $d->role }}</td>
                                            <td class="actions">
                                                <a href="{{ route('admin.user.edit', $d->id) }}"
                                                    class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                                    data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                                        aria-hidden="true"></i></a>
                                                <span data-toggle="tooltip" data-original-title="Hapus">
                                                    <a class="btn btn-sm btn-icon on-default button-remove destroy"
                                                        href="#destroyModal" data-toggle="modal"
                                                        data-route="{{ route('admin.user.destroy', $d->id) }}"><i
                                                            class="icon-trash" aria-hidden="true"></i></a>
                                                </span>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center" colspan="6">Tidak ada data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
