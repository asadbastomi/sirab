@extends('layouts.app')
@section('title')
    Pengaduan Layanan
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Tiket Pengaduan</h3>
            </div>
            @isset($data)
                <form action="{{ route('skpd.ticket.update', $data->id) }}" enctype="multipart/form-data" method="post">
                    @method('put')
                @else
                    <form action="{{ route('skpd.ticket.store') }}" enctype="multipart/form-data" method="post">
                    @endisset
                    @csrf
                    <div class="card-body">

                        <div class="form-group ">
                            <label class="form-label">Kategori</label>
                            <select id="category" name="category_id" class="form-control" required>
                                <option value="">Pilih Kategori</option>
                                @forelse ($categories as $d)
                                    <option value="{{ $d->id }}">{{ $d->name }}
                                    </option>
                                @empty
                                    <option value="">Tidak ada data</option>
                                @endforelse
                            </select>
                        </div>
                        <div class="form-group ">
                            <label class="form-label">Sub Kategori</label>
                            <select id="dynamic_sub_category" name="sub_category_id" class="form-control" required>

                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Keterangan</label>
                            <textarea class="form-control" name="description" rows="6" placeholder="Keterangan..">{{ isset($data) ? $data->description : old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Lampiran</label>
                            <input type="file" class="form-control dropify" data-allowed-file-extensions="doc docx pdf"
                                name="file" data-max-file-size="3M" required>
                            @error('file')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-footer">
                            <button type="submit"
                                class="btn btn-primary btn-block">{{ isset($data) ? 'Ubah' : 'Kirim' }}</button>
                            <a href="{{ route('dashboard') }}" class="btn btn-danger btn-block">Batal</a>
                        </div>
                    </div>
                </form>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $("#category").change(function() {
            // const id = $(this).data('id');
            const id = $('#category').val();

            if (!id) $('#dynamic_sub_category').empty();

            function fetchDataAndPopulateDropdown(id) {
                $.ajax({
                    url: '/skpd/sub-category/' + id + '/get-by-category-id',
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        // Clear existing options
                        $('#dynamic_sub_category').empty();
                        $('#dynamic_sub_category').append(
                            '<option value="">Pilih Sub Kategori </option>');

                        // Populate the dropdown with data
                        $.each(data, function(index, item) {

                            $('#dynamic_sub_category').append('<option value="' + item.id +
                                '">' +
                                item.name +
                                '</option>');

                        });
                    }
                });

            }
            fetchDataAndPopulateDropdown(id);

        });
    </script>
@endpush
