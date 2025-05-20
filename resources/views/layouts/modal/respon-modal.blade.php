<!-- Modal -->
<div class="modal fade" id="responModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Respon</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="responForm" action="" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label">Upload Dokumen Respon</label>
                                <input type="file" class="form-control dropify" data-allowed-file-extensions="pdf"
                                    name="responFile" data-max-file-size="3M">
                            </div>
                            {{-- <div class="form-group">
                                <label class="form-label">Keterangan </label>
                                <input type="text" id="processDescription" class="form-control"
                                    name="processDescription" placeholder="Keterangan .." value="" required>
                            </div> --}}
                            <input type="hidden" name="status" value="done" readonly required>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-secondary"
                                    data-dismiss="modal">Batal</button>
                                <button type="submit" id="submitText" class="btn btn-sm btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@push('script')
    <script>
        $('.respon').click(function() {
            const route = $(this).data('route')
            // const status = $(this).data('status')
            // const path = $(this).data('path')
            // const processDescription = $(this).data('process-description')
            // // console.log(path);
            // if (processDescription) {

            //     $('#formProcessPhoto').css('display', 'block')
            //     $('#processPhoto').attr('src', path)
            // } else {
            //     $('#formProcessPhoto').css('display', 'none')

            // }
            // $('#processDescription').val(processDescription)
            $('#responForm').attr('action', route)


            const submitText = $(this).data('submit')

            if (submitText !== '') {
                $('#submitText').html(submitText)
            }
        })
    </script>
@endpush
