<!-- Modal -->
<div class="modal fade" id="disposisiModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Disposisi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formDisposisi" action="" method="post">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="border p-4 rounded">
                        {{-- {{ $data }} --}}
                        <label for="inputEnterYourName" class="col-form-label">Pengoreksi</label>
                        {{-- <div class=" select2-sm"> --}}
                        <select class="form-select form-select-sm mb-3" name="user_id" required>
                            {{-- <select class="form-control form-control-sm"> --}}
                            <option value="">Pilih Pengoreksi</option>
                            @foreach ($pengoreksi as $d)
                                <option value="{{ $d->id }}">
                                    {{ $d->name }}</option>
                            @endforeach
                        </select>
                        {{-- </div> --}}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-sm btn-primary">Disposisi</button>
                </div>
            </form>
        </div>
    </div>
</div>
@push('script')
    <script>
        $('.disposisi').click(function() {
            const route = $(this).data('route')

            $('#formDisposisi').attr('action', route)
        })
    </script>
@endpush
