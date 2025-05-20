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
                            LAPORAN GANGGUAN ANDA
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
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">PROSES LAPORAN GANGGUAN</h3>
                        <div class="card-options">
                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                    class="fe fe-chevron-up"></i></a>
                            <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i
                                    class="fe fe-maximize"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="new_timeline mt-3">
                            <li>
                                <div class="bullet pink"></div>
                                <div class="time">{{ getIsoFormat($ticket->created_at, 'h:mm') }}</div>
                                <div class="desc">
                                    <h3>Tiket Gangguan Telah Terdaftar</h3>
                                    <h4>Tiket pengaduan berhasil didaftarkan pada sistem. Tim kami sedang memproses
                                        permintaan Anda.</h4>
                                </div>
                            </li>
                            @if ($ticket->status == 'process' || $ticket->status == 'done')
                                <li>
                                    <div class="bullet pink"></div>
                                    {{-- {{ dd($ticket->ticketDetails->first()->startProcess) }} --}}
                                    <div class="time">
                                        {{ getIsoFormat($ticket->ticketDetails->first()->startProcess, 'h:mm') }}
                                    </div>
                                    <div class="desc">
                                        <h3>Dalam Proses Perbaikan</h3>
                                        <h4>Tiket pengaduan Anda sedang dalam proses perbaikan oleh tim kami.</h4>
                                    </div>
                                </li>
                            @endif
                            @if ($ticket->status == 'done')
                                <li>
                                    <div class="bullet green"></div>
                                    <div class="time">
                                        {{ getIsoFormat($ticket->ticketDetails->first()->startProcess, 'h:mm') }}
                                    </div>
                                    <div class="desc">
                                        <h3>Perbaikan Selesai</h3>
                                        <h4>Tim kami telah selesai melakukan perbaikan!</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="bullet green"></div>
                                    <div class="time">
                                        {{ getIsoFormat($ticket->updated_at, 'h:mm') }}
                                    </div>
                                    <div class="desc">
                                        <h3>Perbaikan Selesai</h3>
                                        <h4>Tim kami telah selesai melakukan perbaikan!</h4>
                                    </div>
                                </li>
                            @endif

                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('dashboard') }}" class="btn btn-info btn-block">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
