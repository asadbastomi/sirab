<div class="modal fade" id="destroyModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data</h5>
                {{-- <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
            <div class="modal-footer">
                <form id="destroyForm" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-primary">Ya</button>
                </form>
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        $(".destroy").click(function() {

            const route = $(this).data('route');
            // console.log(route);

            $('#destroyForm').attr('action', route);
        });
    </script>
@endpush
