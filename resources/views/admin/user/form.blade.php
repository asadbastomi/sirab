@extends('layouts.app')
@section('title')
    User
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Data User</h3>
            </div>
            @isset($data)
                <form action="{{ route('admin.user.update', $data->id) }}" enctype="multipart/form-data" method="post">
                    @method('put')
                @else
                    <form action="{{ route('admin.user.store', $param) }}" enctype="multipart/form-data" method="post">
                    @endisset
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                placeholder="Nama.." value="{{ isset($data) ? $data->name : old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                placeholder="Email.." value="{{ isset($data) ? $data->email : old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" placeholder="Password.." {{ isset($data) ? '' : 'required' }}>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Foto</label>
                            <input type="file" class="form-control dropify" data-allowed-file-extensions="jpg jpeg png"
                                name="photo" data-max-file-size="3M">
                            @error('photo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-footer">
                            <button type="submit"
                                class="btn btn-primary btn-block">{{ isset($data) ? 'Ubah' : 'Simpan' }}</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
@endsection
