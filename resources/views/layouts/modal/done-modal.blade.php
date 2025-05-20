<!-- Modal -->
<div class="modal fade" id="doneModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Proses Aktivitas</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="doneForm" action="" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menyelesaikan proses aktivitas?</p>
                    <input type="hidden" name="status" id="status-aktivitas" readonly required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tidak</button>
                    <button type="submit" id="submitText" class="btn btn-sm btn-primary">Ya</button>
                </div>
            </form>
        </div>
    </div>
</div>
@push('script')
    <script>
        $('.done').click(function() {
            const route = $(this).data('route')
            const status = $(this).data('status')
            $('#status-aktivitas').val(status)
            $('#doneForm').attr('action', route)


            const submitText = $(this).data('submit')

            if (submitText !== '') {
                $('#submitText').html(submitText)
            }
        })
    </script>
@endpush
