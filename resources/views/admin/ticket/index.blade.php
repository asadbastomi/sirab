@extends('layouts.app')
@section('title')
    Tiket
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                @forelse ($data as $item)
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                {{ $item->subCategory->name }}
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h4><a href="{{ route('admin.ticket.show', $item->id) }}">MYITSM-23798712389791</a></h4>
                            <div class="text-muted">{{ $item->description }}</div>
                            <div class="d-flex align-items-center pt-5 mt-auto">
                                <span class="avatar avatar-cyan mr-3">PDF</span>
                                <div>
                                    <a href="{{ asset('/storage/file/' . $item->file) }}" target="_blank" class=>Download
                                        Lampiran</a>
                                    <small class="d-block text-muted">
                                        {{ $item->created_at->diffForHumans() }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="card">
                        {{-- <div class="card-header">
                            <div class="card-title">
                                LAPORAN GANGGUAN ANDA
                            </div>
                        </div> --}}
                        <div class="card-body d-flex flex-column">
                            <h4><a href="#">Tidak ada data</a></h4>
                            {{-- <div class="text-muted">{{ $ticket->description }}</div>
                            <div class="d-flex align-items-center pt-5 mt-auto">
                                <span class="avatar avatar-cyan mr-3">PDF</span>
                                <div>
                                    <a href="{{ asset('/storage/file/' . $ticket->file) }}" target="_blank" class=>Download
                                        Lampiran</a>
                                    <small class="d-block text-muted">
                                        {{ $ticket->created_at->diffForHumans() }}</small>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
@endsection
