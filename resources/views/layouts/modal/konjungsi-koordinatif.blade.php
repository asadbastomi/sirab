<!-- Modal -->
<div class="modal fade" id="konjungsiModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Format Konjungsi Koordinatif</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formKonjungsi" action="" method="post">
                @csrf
                {{-- @method('put') --}}
                <div id="method-field"></div>
                <div class="modal-body">
                    <div class="border p-4 rounded">
                        {{-- {{ $data }} --}}
                        {{-- <label for="inputEnterYourName" class="col-form-label">Pengoreksi</label> --}}
                        {{-- <div class=" select2-sm"> --}}
                        <select class="form-select form-select-sm mb-3" name="format" required>
                            {{-- <select class="form-control form-control-sm"> --}}
                            <option value="">Pilih Format</option>
                            @if ($data->konjungsi_koordinatif)
                                <option value="dan"
                                    {{ $data->konjungsi_koordinatif->format === 'dan' ? 'selected' : '' }}>Dan</option>
                                <option value="atau"
                                    {{ $data->konjungsi_koordinatif->format === 'atau' ? 'selected' : '' }}>Atau
                                </option>
                                <option value="dan/atau"
                                    {{ $data->konjungsi_koordinatif->format === 'dan/atau' ? 'selected' : '' }}>
                                    Dan/Atau</option>
                            @else
                                <option value="dan">Dan</option>
                                <option value="atau">Atau</option>
                                <option value="dan/atau">Dan/Atau</option>
                            @endif
                        </select>
                        <input type="hidden" id="relasi-konjungsi" readonly required>
                        {{-- </div> --}}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@push('script')
    <script>
        $('.konjungsi').click(function() {
            const route = $(this).data('route')
            const type = $(this).data('type')
            const id = $(this).data('id')
            const name = $(this).data('name')

            $('#relasi-konjungsi').attr('value', id)
            $('#relasi-konjungsi').attr('name', name)
            $('#formKonjungsi').attr('action', route)
            if (type === 'put') {
                $('#method-field').html('@method('PUT')');
            } else {
                $('#method-field').html('');
            }
        })
    </script>
@endpush
