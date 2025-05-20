@extends('layouts.app')
@section('title')
    Tiket Pengaduan
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            LAPORAN GANGGUAN
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h4><a href="#">MYITSM-23798712389791</a></h4>
                        <div class="text-muted">{{ $ticket->description }}</div>
                        <div class="d-flex align-items-center pt-5 mt-auto">
                            <span class="avatar avatar-cyan mr-3">PDF</span>
                            <div>
                                <a href="{{ asset('/storage/file/' . $ticket->file) }}" target="_blank" class=>Download
                                    Lampiran</a>
                                <small class="d-block text-muted">
                                    {{ $ticket->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="card"> --}}
                <div class="alert alert-icon alert-danger" role="alert">
                    <i class="fe fe-alert-triangle mr-2" aria-hidden="true"></i> Silakan kerjakan aktivitas berdasarkan
                    nomor urut aktivitas yang telah ditentukan. Pastikan Anda memulai dari nomor urut terendah dan
                    melanjutkan secara berurutan hingga semua aktivitas selesai dikerjakan. Nomor urut aktivitas telah
                    diatur untuk memastikan alur kerja yang efisien dan terstruktur.
                </div>
                {{-- </div> --}}
                @if (!$firstTicketDetail)
                    @if (!$ticket->responFile)
                        <div class="card text-white bg-danger">
                            <div class="card-header">
                                <div class="card-title">
                                    RESPON HASIL
                                </div>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h4>LAPORAN AKHIR BELUM DIUPLOAD</h4>
                                <div class="text-muted text-white">Untuk menyelesaikan tiket layanan ini silahkan upload
                                    laporan akhir pekerjaan!</div>
                                <div class="d-flex align-items-center pt-5 mt-auto">
                                    <span class="avatar avatar-cyan mr-3">PDF</span>
                                    <div>
                                        @if ($ticket->responFile)
                                            <a href="{{ asset('/storage/responFile/' . $ticket->responFile) }}"
                                                target="_blank" class="text-white">Download
                                                Lampiran</a>
                                            <small class="d-block text-muted text-white"><a href="#responModal"
                                                    data-submit="Simpan dan kirim respon" data-toggle="modal"
                                                    data-route="{{ route('admin.ticket.update', $ticket->id) }}"
                                                    class="text-white respon">Edit respon file</a></small>
                                        @else
                                            <a href="#responModal" data-submit="Simpan dan kirim respon" data-toggle="modal"
                                                data-route="{{ route('admin.ticket.update', $ticket->id) }}"
                                                class="text-white respon"><i class="fa fa-upload"></i> Upload Respon
                                                File</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="card text-white bg-success">
                            <div class="card-header">
                                <div class="card-title">
                                    RESPON HASIL
                                </div>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h4>LAYANAN INI TELAH SELESAI</h4>
                                {{-- <div class="text-muted text-white">{{ $ticket->description }}</div> --}}
                                <div class="d-flex align-items-center pt-5 mt-auto">
                                    <span class="avatar avatar-cyan mr-3">PDF</span>
                                    <div>
                                        @if ($ticket->responFile)
                                            <a href="{{ asset('/storage/responFile/' . $ticket->responFile) }}"
                                                target="_blank" class="text-white">Download
                                                Lampiran</a>
                                            <small class="d-block text-muted text-white"><a href="#responModal"
                                                    data-submit="Simpan dan kirim respon" data-toggle="modal"
                                                    data-route="{{ route('admin.ticket.update', $ticket->id) }}"
                                                    class="text-white respon">Edit respon file</a></small>
                                        @else
                                            <a href="#responModal" data-submit="Simpan dan kirim respon" data-toggle="modal"
                                                data-route="{{ route('admin.ticket.update', $ticket->id) }}"
                                                class="text-white respon"><i class="fa fa-upload"></i> Upload Respon
                                                File</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
                @foreach ($ticket->ticketDetails as $item)
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                Aktivitas
                                {{ $item->activity->serialNumber }}
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h4><a href="#">{{ $item->activity->description }}</a></h4>
                            <div class="text-muted">{{ $ticket->description }}</div>
                            @if ($item->status !== 'pending')
                                <div class="d-flex align-items-center pt-5 mt-auto">
                                    <span class="avatar avatar-cyan mr-3">IMG</span>
                                    <div>
                                        <a href="{{ asset('/storage/proses-tiket/' . $item->processPhoto) }}"
                                            target="_blank" π class=>Lihat Foto Proses</a>
                                        <small class="d-block text-muted">
                                            {{ useDiff('', $item->startProcess) }}</small>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="card-footer">
                            @isset($firstTicketDetail)
                                @if ($firstTicketDetail->id === $item->id)
                                    <a href="#verifModal" data-submit="Proses" data-toggle="modal"
                                        data-route="{{ route('admin.ticket-detail.update', $item->id) }}"
                                        data-path="{{ asset('storage/proses-tiket/' . $item->processPhoto) }}"
                                        data-process-description="{{ $item->processDescription }}"
                                        class="btn btn-primary btn-block verif">{{ $item->status === 'process' ? 'Ubah Proses' : 'Proses Aktivitas' }}</a>
                                @endif
                            @endisset
                            @if ($item->status == 'process')
                                <a href="#doneModal" data-submit="Selesaikan Aktivitas" data-toggle="modal"
                                    data-route="{{ route('admin.ticket-detail.update', $item->id) }}" data-status="done"
                                    class="btn btn-primary btn-block done">Selesaikan Aktivitas</a>
                            @endif
                            @if ($item->status === 'done')
                                <h5 class="text-center text-uppercase">Realisasi Pengerjaan :
                                    {{ useDiff('format', $item->startProcess, $item->endProcess) }}</h5>
                            @endif
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    @include('layouts.modal.verif-modal')
    @include('layouts.modal.done-modal')
    @include('layouts.modal.respon-modal')
@endsection
