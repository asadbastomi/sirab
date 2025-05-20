@extends('layouts.app')
@section('title')
    Dashboard
@endsection
@push('css')
    <style>
        #tes:hover a {
            color: black;
        }

        .card-primary:hover {
            background: salmon;
        }
    </style>
@endpush
@section('content')
    <div class="section-body">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="mb-4">
                        <h2>Welcome {{ Auth::user()->name }} </h2>
                        <small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn
                                More</a></small>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="alert alert-icon alert-danger" role="alert">
                        <i class="fe fe-alert-triangle mr-2" aria-hidden="true"></i>
                        Harap segera lengkapi data pemohon, anggota keluarga, dokumen, dan data penjamin untuk kebutuhan
                        administrasi.
                    </div>
                </div>

            </div>
            {{-- @if (useGetAuth()->role === 'skpd')
                @if ($tickets->count() > 0)
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-primary google w_social">
                                <div id="w_social1" class="carousel vert slide" data-ride="carousel" data-interval="5000">
                                    <div class="carousel-inner">
                                        @foreach ($tickets as $item)
                                            <a href="{{ route('skpd.ticket.show', $item->id) }}" id="tes"
                                                class="carousel-item text-white {{ $loop->iteration == 1 ? 'active' : '' }}">
                                                <i class="fe fe-info fa-2x"></i>
                                                <p>Nomor Tiket MYITSM-23798712389791</p>
                                                <h4>Tiket Gangguan Telah Terdaftar</h4>
                                                <div class="mt-20">{{ $item->description ? $item->description : '-' }}
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endif
                <div class="row clearfix">
                    <div class="col-12 col-md-4 col-xl-12">
                        <div class="card">
                            <div class="card-body ribbon">
                                <a href="{{ route('skpd.ticket.create') }}" class="my_sort_cut text-muted">
                                    <i class="icon-info"></i>
                                    <span>
                                        <h3>Layanan Diskominfotik</h3>
                                    </span>
                                    <div class="text-center">
                                        <p class="card-text">Anda mempunyai gangguan dan keluhan? Lakukan pengaduan layanan!
                                            Tim
                                            Kami siap membantu Anda.</p>
                                    </div>
                                </a>


                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-xl-12">
                        <div class="card">
                            <div class="card-body ribbon">
                                <a href="app-chat.html" class="my_sort_cut text-muted">
                                    <i class="icon-question"></i>
                                    <span>
                                        <h3>
                                            FAQ
                                        </h3>
                                    </span>
                                    <div class="text-center">
                                        <p class="card-text">Cek daftar pertanyaan terkait masalah yang sering terjadi.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-xl-12">
                        <div class="card">
                            <div class="card-body ribbon">
            <a href="app-calendar.html" class="my_sort_cut text-muted">
                <i class="icon-clock"></i>
                <span>
                    <h3>
                        Riwayat Pengaduan
                    </h3>
                </span>
                <div class="text-center">
                    <p class="card-text">Cek daftar riwayat pengaduan layanan yang sudah kami
                        selesaikan.
                    </p>
                </div>
            </a>
        </div>
    </div>
    </div>
    <div class="col-12 col-md-4 col-xl-12">
        <div class="card">
            <div class="card-body">
                <a href="app-setting.html" class="my_sort_cut text-muted">
                    <i class="icon-settings"></i>
                    <span>
                        <h3>
                            Pengaturan
                        </h3>
                    </span>
                    <div class="text-center">
                        <p class="card-text">Atur profil anda.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </div>
@else
    <div class="row clearfix">
        <div class="col-12 col-md-4 col-xl-12">
            <div class="card">
                <div class="card-body ribbon">
                    <div class="ribbon-box orange counter">{{ $tickets->count() }}</div>
                    <a href="{{ route('admin.ticket.index') }}" class="my_sort_cut text-muted">
                        <i class="icon-info"></i>
                        <span>
                            <h3>Tiket Belum di Proses</h3>
                        </span>
                        <div class="text-center">
                            <p class="card-text">Lihat daftar pengaduan yang belum ditindaklanjuti. Prioritaskan
                                dan mulai proses penyelesaiannya.</p>
                        </div>
                    </a>


                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 col-xl-12">
            <div class="card">
                <div class="card-body ribbon">
            <a href="app-chat.html" class="my_sort_cut text-muted">
                <i class="icon-question"></i>
                <span>
                    <h3>
                        FAQ
                    </h3>
                </span>
                <div class="text-center">
                    <p class="card-text">Cek daftar pertanyaan terkait masalah yang sering terjadi.</p>
                </div>
            </a>
        </div>
    </div>
    </div>
    <div class="col-12 col-md-4 col-xl-12">
        <div class="card">
            <div class="card-body ribbon">
            <a href="app-calendar.html" class="my_sort_cut text-muted">
                <i class="icon-clock"></i>
                <span>
                    <h3>
                        Riwayat Pengaduan
                    </h3>
                </span>
                <div class="text-center">
                    <p class="card-text">Cek daftar riwayat pengaduan layanan yang sudah kami
                        selesaikan.
                    </p>
                </div>
            </a>
        </div>
    </div>
    </div>
    <div class="col-12 col-md-4 col-xl-12">
        <div class="card">
            <div class="card-body">
                <a href="app-setting.html" class="my_sort_cut text-muted">
                    <i class="icon-settings"></i>
                    <span>
                        <h3>
                            Pengaturan
                        </h3>
                    </span>
                    <div class="text-center">
                        <p class="card-text">Atur profil anda.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </div>
    @endif --}}

        </div>
    </div>
    {{-- <div class="section-body">
        <div class="container-fluid">

            <div class="row clearfix row-deck">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">My Balance</h3>
                            <div class="card-options">
                                <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i
                                        class="fe fe-maximize"></i></a>
                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                        class="fe fe-x"></i></a>
                                <div class="item-action dropdown ml-2">
                                    <a href="javascript:void(0)" data-toggle="dropdown"><i
                                            class="fe fe-more-vertical"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-eye"></i> View Details </a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-folder"></i> Move to</a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-edit"></i> Rename</a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <span>Balance</span>
                            <h4>$<span class="counter">20,508</span></h4>
                            <div id="apexspark1" class="mb-4" style="min-height: 120px;">
                                <div id="apexchartswt4j4no8l" class="apexcharts-canvas apexchartswt4j4no8l light"
                                    style="width: 262px; height: 120px;"><svg id="SvgjsSvg1041" width="262"
                                        height="120" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG1043" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(0, 0)">
                                            <defs id="SvgjsDefs1042">
                                                <clipPath id="gridRectMaskwt4j4no8l">
                                                    <rect id="SvgjsRect1048" width="264" height="122" x="-1" y="-1"
                                                        rx="0" ry="0" fill="#ffffff" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMaskwt4j4no8l">
                                                    <rect id="SvgjsRect1049" width="302" height="160" x="-20"
                                                        y="-20" rx="0" ry="0" fill="#ffffff"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1055" x1="0"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1056" stop-opacity="0.65"
                                                        stop-color="rgba(69,170,242,0.65)" offset="0"></stop>
                                                    <stop id="SvgjsStop1057" stop-opacity="0.5"
                                                        stop-color="rgba(162,213,249,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop1058" stop-opacity="0.5"
                                                        stop-color="rgba(162,213,249,0.5)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <line id="SvgjsLine1047" x1="0" y1="0" x2="0"
                                                y2="120" stroke="#b6b6b6" stroke-dasharray="3"
                                                class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="120"
                                                fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1">
                                            </line>
                                            <g id="SvgjsG1061" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1062" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, 1.875)"></g>
                                            </g>
                                            <g id="SvgjsG1065" class="apexcharts-grid">
                                                <line id="SvgjsLine1067" x1="0" y1="120" x2="262"
                                                    y2="120" stroke="transparent" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine1066" x1="0" y1="1" x2="0"
                                                    y2="120" stroke="transparent" stroke-dasharray="0"></line>
                                            </g>
                                            <g id="SvgjsG1051" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG1052" class="apexcharts-series seriesx1"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="apexcharts-area-0"
                                                        d="M 0 120L 0 66C 3.9869565217391303 66 7.4043478260869575 91.2 11.391304347826088 91.2C 15.378260869565217 91.2 18.795652173913044 55.2 22.782608695652176 55.2C 26.769565217391307 55.2 30.186956521739134 46.8 34.173913043478265 46.8C 38.160869565217396 46.8 41.57826086956522 74.4 45.56521739130435 74.4C 49.55217391304348 74.4 52.969565217391306 63.6 56.95652173913044 63.6C 60.94347826086957 63.6 64.3608695652174 55.2 68.34782608695653 55.2C 72.33478260869566 55.2 75.75217391304348 75.6 79.73913043478261 75.6C 83.72608695652174 75.6 87.14347826086957 8.400000000000006 91.1304347826087 8.400000000000006C 95.11739130434783 8.400000000000006 98.53478260869566 52.8 102.5217391304348 52.8C 106.50869565217393 52.8 109.92608695652174 73.2 113.91304347826087 73.2C 117.9 73.2 121.31739130434784 78 125.30434782608697 78C 129.2913043478261 78 132.70869565217393 87.6 136.69565217391306 87.6C 140.6826086956522 87.6 144.10000000000002 68.4 148.08695652173915 68.4C 152.07391304347829 68.4 155.4913043478261 97.2 159.47826086956522 97.2C 163.46521739130435 97.2 166.88260869565218 70.80000000000001 170.8695652173913 70.80000000000001C 174.85652173913044 70.80000000000001 178.27391304347827 78 182.2608695652174 78C 186.24782608695654 78 189.66521739130437 87.6 193.6521739130435 87.6C 197.63913043478263 87.6 201.05652173913046 58.800000000000004 205.0434782608696 58.800000000000004C 209.03043478260872 58.800000000000004 212.44782608695652 42 216.43478260869566 42C 220.4217391304348 42 223.83913043478262 64.80000000000001 227.82608695652175 64.80000000000001C 231.81304347826088 64.80000000000001 235.2304347826087 56.400000000000006 239.21739130434784 56.400000000000006C 243.20434782608697 56.400000000000006 246.6217391304348 82.80000000000001 250.60869565217394 82.80000000000001C 254.59565217391307 82.80000000000001 258.0130434782609 45.60000000000001 262 45.60000000000001C 262 45.60000000000001 262 45.60000000000001 262 120M 262 45.60000000000001z"
                                                        fill="url(#SvgjsLinearGradient1055)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMaskwt4j4no8l)"
                                                        pathTo="M 0 120L 0 66C 3.9869565217391303 66 7.4043478260869575 91.2 11.391304347826088 91.2C 15.378260869565217 91.2 18.795652173913044 55.2 22.782608695652176 55.2C 26.769565217391307 55.2 30.186956521739134 46.8 34.173913043478265 46.8C 38.160869565217396 46.8 41.57826086956522 74.4 45.56521739130435 74.4C 49.55217391304348 74.4 52.969565217391306 63.6 56.95652173913044 63.6C 60.94347826086957 63.6 64.3608695652174 55.2 68.34782608695653 55.2C 72.33478260869566 55.2 75.75217391304348 75.6 79.73913043478261 75.6C 83.72608695652174 75.6 87.14347826086957 8.400000000000006 91.1304347826087 8.400000000000006C 95.11739130434783 8.400000000000006 98.53478260869566 52.8 102.5217391304348 52.8C 106.50869565217393 52.8 109.92608695652174 73.2 113.91304347826087 73.2C 117.9 73.2 121.31739130434784 78 125.30434782608697 78C 129.2913043478261 78 132.70869565217393 87.6 136.69565217391306 87.6C 140.6826086956522 87.6 144.10000000000002 68.4 148.08695652173915 68.4C 152.07391304347829 68.4 155.4913043478261 97.2 159.47826086956522 97.2C 163.46521739130435 97.2 166.88260869565218 70.80000000000001 170.8695652173913 70.80000000000001C 174.85652173913044 70.80000000000001 178.27391304347827 78 182.2608695652174 78C 186.24782608695654 78 189.66521739130437 87.6 193.6521739130435 87.6C 197.63913043478263 87.6 201.05652173913046 58.800000000000004 205.0434782608696 58.800000000000004C 209.03043478260872 58.800000000000004 212.44782608695652 42 216.43478260869566 42C 220.4217391304348 42 223.83913043478262 64.80000000000001 227.82608695652175 64.80000000000001C 231.81304347826088 64.80000000000001 235.2304347826087 56.400000000000006 239.21739130434784 56.400000000000006C 243.20434782608697 56.400000000000006 246.6217391304348 82.80000000000001 250.60869565217394 82.80000000000001C 254.59565217391307 82.80000000000001 258.0130434782609 45.60000000000001 262 45.60000000000001C 262 45.60000000000001 262 45.60000000000001 262 120M 262 45.60000000000001z"
                                                        pathFrom="M -1 120L -1 120L 11.391304347826088 120L 22.782608695652176 120L 34.173913043478265 120L 45.56521739130435 120L 56.95652173913044 120L 68.34782608695653 120L 79.73913043478261 120L 91.1304347826087 120L 102.5217391304348 120L 113.91304347826087 120L 125.30434782608697 120L 136.69565217391306 120L 148.08695652173915 120L 159.47826086956522 120L 170.8695652173913 120L 182.2608695652174 120L 193.6521739130435 120L 205.0434782608696 120L 216.43478260869566 120L 227.82608695652175 120L 239.21739130434784 120L 250.60869565217394 120L 262 120">
                                                    </path>
                                                    <path id="apexcharts-area-0"
                                                        d="M 0 66C 3.9869565217391303 66 7.4043478260869575 91.2 11.391304347826088 91.2C 15.378260869565217 91.2 18.795652173913044 55.2 22.782608695652176 55.2C 26.769565217391307 55.2 30.186956521739134 46.8 34.173913043478265 46.8C 38.160869565217396 46.8 41.57826086956522 74.4 45.56521739130435 74.4C 49.55217391304348 74.4 52.969565217391306 63.6 56.95652173913044 63.6C 60.94347826086957 63.6 64.3608695652174 55.2 68.34782608695653 55.2C 72.33478260869566 55.2 75.75217391304348 75.6 79.73913043478261 75.6C 83.72608695652174 75.6 87.14347826086957 8.400000000000006 91.1304347826087 8.400000000000006C 95.11739130434783 8.400000000000006 98.53478260869566 52.8 102.5217391304348 52.8C 106.50869565217393 52.8 109.92608695652174 73.2 113.91304347826087 73.2C 117.9 73.2 121.31739130434784 78 125.30434782608697 78C 129.2913043478261 78 132.70869565217393 87.6 136.69565217391306 87.6C 140.6826086956522 87.6 144.10000000000002 68.4 148.08695652173915 68.4C 152.07391304347829 68.4 155.4913043478261 97.2 159.47826086956522 97.2C 163.46521739130435 97.2 166.88260869565218 70.80000000000001 170.8695652173913 70.80000000000001C 174.85652173913044 70.80000000000001 178.27391304347827 78 182.2608695652174 78C 186.24782608695654 78 189.66521739130437 87.6 193.6521739130435 87.6C 197.63913043478263 87.6 201.05652173913046 58.800000000000004 205.0434782608696 58.800000000000004C 209.03043478260872 58.800000000000004 212.44782608695652 42 216.43478260869566 42C 220.4217391304348 42 223.83913043478262 64.80000000000001 227.82608695652175 64.80000000000001C 231.81304347826088 64.80000000000001 235.2304347826087 56.400000000000006 239.21739130434784 56.400000000000006C 243.20434782608697 56.400000000000006 246.6217391304348 82.80000000000001 250.60869565217394 82.80000000000001C 254.59565217391307 82.80000000000001 258.0130434782609 45.60000000000001 262 45.60000000000001"
                                                        fill="none" fill-opacity="1" stroke="#45aaf2"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMaskwt4j4no8l)"
                                                        pathTo="M 0 66C 3.9869565217391303 66 7.4043478260869575 91.2 11.391304347826088 91.2C 15.378260869565217 91.2 18.795652173913044 55.2 22.782608695652176 55.2C 26.769565217391307 55.2 30.186956521739134 46.8 34.173913043478265 46.8C 38.160869565217396 46.8 41.57826086956522 74.4 45.56521739130435 74.4C 49.55217391304348 74.4 52.969565217391306 63.6 56.95652173913044 63.6C 60.94347826086957 63.6 64.3608695652174 55.2 68.34782608695653 55.2C 72.33478260869566 55.2 75.75217391304348 75.6 79.73913043478261 75.6C 83.72608695652174 75.6 87.14347826086957 8.400000000000006 91.1304347826087 8.400000000000006C 95.11739130434783 8.400000000000006 98.53478260869566 52.8 102.5217391304348 52.8C 106.50869565217393 52.8 109.92608695652174 73.2 113.91304347826087 73.2C 117.9 73.2 121.31739130434784 78 125.30434782608697 78C 129.2913043478261 78 132.70869565217393 87.6 136.69565217391306 87.6C 140.6826086956522 87.6 144.10000000000002 68.4 148.08695652173915 68.4C 152.07391304347829 68.4 155.4913043478261 97.2 159.47826086956522 97.2C 163.46521739130435 97.2 166.88260869565218 70.80000000000001 170.8695652173913 70.80000000000001C 174.85652173913044 70.80000000000001 178.27391304347827 78 182.2608695652174 78C 186.24782608695654 78 189.66521739130437 87.6 193.6521739130435 87.6C 197.63913043478263 87.6 201.05652173913046 58.800000000000004 205.0434782608696 58.800000000000004C 209.03043478260872 58.800000000000004 212.44782608695652 42 216.43478260869566 42C 220.4217391304348 42 223.83913043478262 64.80000000000001 227.82608695652175 64.80000000000001C 231.81304347826088 64.80000000000001 235.2304347826087 56.400000000000006 239.21739130434784 56.400000000000006C 243.20434782608697 56.400000000000006 246.6217391304348 82.80000000000001 250.60869565217394 82.80000000000001C 254.59565217391307 82.80000000000001 258.0130434782609 45.60000000000001 262 45.60000000000001"
                                                        pathFrom="M -1 120L -1 120L 11.391304347826088 120L 22.782608695652176 120L 34.173913043478265 120L 45.56521739130435 120L 56.95652173913044 120L 68.34782608695653 120L 79.73913043478261 120L 91.1304347826087 120L 102.5217391304348 120L 113.91304347826087 120L 125.30434782608697 120L 136.69565217391306 120L 148.08695652173915 120L 159.47826086956522 120L 170.8695652173913 120L 182.2608695652174 120L 193.6521739130435 120L 205.0434782608696 120L 216.43478260869566 120L 227.82608695652175 120L 239.21739130434784 120L 250.60869565217394 120L 262 120">
                                                    </path>
                                                    <g id="SvgjsG1053" class="apexcharts-series-markers-wrap">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1073" r="0" cx="0"
                                                                cy="0"
                                                                class="apexcharts-marker worblgffz no-pointer-events"
                                                                stroke="#ffffff" fill="#45aaf2" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1054" class="apexcharts-datalabels"></g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine1068" x1="0" y1="0" x2="262"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1069" x1="0" y1="0" x2="262"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1070" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1071" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1072" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <rect id="SvgjsRect1046" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" fill="#fefefe" opacity="1"
                                            stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                        <g id="SvgjsG1063" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-21, 0)">
                                            <g id="SvgjsG1064" class="apexcharts-yaxis-texts-g"></g>
                                        </g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                    <div class="apexcharts-tooltip light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(69, 170, 242);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-label"></span><span
                                                        class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block">Bank of America <span class="float-right">$<span
                                            class="counter">15,025</span></span></label>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-azure" role="progressbar" aria-valuenow="77"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block">RBC Bank <span class="float-right">$<span
                                            class="counter">1,843</span></span></label>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block">Frost Bank <span class="float-right">$<span
                                            class="counter">3,640</span></span></label>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="23"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 303px; height: 390px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="javascript:void(0)" class="btn btn-block btn-info btn-sm">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Product Valuation</h3>
                            <div class="card-options">
                                <label class="custom-switch m-0">
                                    <input type="checkbox" value="1" class="custom-switch-input" checked="">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="chart-bar" style="height: 350px; max-height: 350px; position: relative;"
                                class="c3"><svg width="450.765625" height="350" style="overflow: hidden;">
                                    <defs>
                                        <clipPath id="c3-1719130732692-clip">
                                            <rect width="408.765625" height="316"></rect>
                                        </clipPath>
                                        <clipPath id="c3-1719130732692-clip-xaxis">
                                            <rect x="-41" y="-20" width="480.765625" height="50"></rect>
                                        </clipPath>
                                        <clipPath id="c3-1719130732692-clip-yaxis">
                                            <rect x="-39" y="-4" width="60" height="340"></rect>
                                        </clipPath>
                                        <clipPath id="c3-1719130732692-clip-grid">
                                            <rect width="408.765625" height="316"></rect>
                                        </clipPath>
                                        <clipPath id="c3-1719130732692-clip-subchart">
                                            <rect width="408.765625"></rect>
                                        </clipPath>
                                    </defs>
                                    <g transform="translate(40.5,4.5)"><text class="c3-text c3-empty"
                                            text-anchor="middle" dominant-baseline="middle" x="204.3828125" y="158"
                                            style="opacity: 0;"></text>
                                        <rect class="c3-zoom-rect" width="408.765625" height="316"
                                            style="opacity: 0;"></rect>
                                        <g clip-path="url(file:///Users/toms/Sites/www/2024/crush-it/light/index.html#c3-1719130732692-clip)"
                                            class="c3-regions" style="visibility: visible;"></g>
                                        <g clip-path="url(file:///Users/toms/Sites/www/2024/crush-it/light/index.html#c3-1719130732692-clip-grid)"
                                            class="c3-grid" style="visibility: visible;">
                                            <g class="c3-xgrid-focus">
                                                <line class="c3-xgrid-focus" x1="376" x2="376"
                                                    y1="0" y2="316" style="visibility: hidden;"></line>
                                            </g>
                                        </g>
                                        <g clip-path="url(file:///Users/toms/Sites/www/2024/crush-it/light/index.html#c3-1719130732692-clip)"
                                            class="c3-chart">
                                            <g class="c3-event-rects c3-event-rects-single" style="fill-opacity: 0;">
                                                <rect class=" c3-event-rect c3-event-rect-0" x="0" y="0" width="70"
                                                    height="316"></rect>
                                                <rect class=" c3-event-rect c3-event-rect-1" x="69" y="0" width="70"
                                                    height="316"></rect>
                                                <rect class=" c3-event-rect c3-event-rect-2" x="137" y="0" width="70"
                                                    height="316"></rect>
                                                <rect class=" c3-event-rect c3-event-rect-3" x="205" y="0" width="70"
                                                    height="316"></rect>
                                                <rect class=" c3-event-rect c3-event-rect-4" x="273" y="0" width="70"
                                                    height="316"></rect>
                                                <rect class=" c3-event-rect c3-event-rect-5" x="341" y="0" width="70"
                                                    height="316"></rect>
                                            </g>
                                            <g class="c3-chart-bars">
                                                <g class="c3-chart-bar c3-target c3-target-data1"
                                                    style="pointer-events: none;">
                                                    <g class=" c3-shapes c3-shapes-data1 c3-bars c3-bars-data1"
                                                        style="cursor: pointer;">
                                                        <path class="c3-shape c3-shape-0 c3-bar c3-bar-0"
                                                            d="M 5,316 L5,203.49999999999997 L20,203.49999999999997 L20,316 z"
                                                            style="stroke: rgb(57, 91, 182); fill: rgb(57, 91, 182); opacity: 1;">
                                                        </path>
                                                        <path class="c3-shape c3-shape-1 c3-bar c3-bar-1"
                                                            d="M 74,316 L74,234.1818181818182 L89,234.1818181818182 L89,316 z"
                                                            style="stroke: rgb(57, 91, 182); fill: rgb(57, 91, 182); opacity: 1;">
                                                        </path>
                                                        <path class="c3-shape c3-shape-2 c3-bar c3-bar-2"
                                                            d="M 142,316 L142,162.5909090909091 L157,162.5909090909091 L157,316 z"
                                                            style="stroke: rgb(57, 91, 182); fill: rgb(57, 91, 182); opacity: 1;">
                                                        </path>
                                                        <path class="c3-shape c3-shape-3 c3-bar c3-bar-3"
                                                            d="M 210,316 L210,131.9090909090909 L225,131.9090909090909 L225,316 z"
                                                            style="stroke: rgb(57, 91, 182); fill: rgb(57, 91, 182); opacity: 1;">
                                                        </path>
                                                        <path class="c3-shape c3-shape-4 c3-bar c3-bar-4"
                                                            d="M 278,316 L278,305.7727272727273 L293,305.7727272727273 L293,316 z"
                                                            style="stroke: rgb(57, 91, 182); fill: rgb(57, 91, 182); opacity: 1;">
                                                        </path>
                                                        <path class="c3-shape c3-shape-5 c3-bar c3-bar-5"
                                                            d="M 346,316 L346,142.13636363636363 L361,142.13636363636363 L361,316 z"
                                                            style="stroke: rgb(57, 91, 182); fill: rgb(57, 91, 182); opacity: 1;">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g class="c3-chart-bar c3-target c3-target-data2"
                                                    style="pointer-events: none;">
                                                    <g class=" c3-shapes c3-shapes-data2 c3-bars c3-bars-data2"
                                                        style="cursor: pointer;">
                                                        <path class="c3-shape c3-shape-0 c3-bar c3-bar-0"
                                                            d="M 20,316 L20,90.99999999999999 L35,90.99999999999999 L35,316 z"
                                                            style="stroke: rgb(75, 107, 191); fill: rgb(75, 107, 191); opacity: 1;">
                                                        </path>
                                                        <path class="c3-shape c3-shape-1 c3-bar c3-bar-1"
                                                            d="M 89,316 L89,285.3181818181818 L104,285.3181818181818 L104,316 z"
                                                            style="stroke: rgb(75, 107, 191); fill: rgb(75, 107, 191); opacity: 1;">
                                                        </path>
                                                        <path class="c3-shape c3-shape-2 c3-bar c3-bar-2"
                                                            d="M 157,316 L157,60.31818181818182 L172,60.31818181818182 L172,316 z"
                                                            style="stroke: rgb(75, 107, 191); fill: rgb(75, 107, 191); opacity: 1;">
                                                        </path>
                                                        <path class="c3-shape c3-shape-3 c3-bar c3-bar-3"
                                                            d="M 225,316 L225,39.86363636363636 L240,39.86363636363636 L240,316 z"
                                                            style="stroke: rgb(75, 107, 191); fill: rgb(75, 107, 191); opacity: 1;">
                                                        </path>
                                                        <path class="c3-shape c3-shape-4 c3-bar c3-bar-4"
                                                            d="M 293,316 L293,142.13636363636363 L308,142.13636363636363 L308,316 z"
                                                            style="stroke: rgb(75, 107, 191); fill: rgb(75, 107, 191); opacity: 1;">
                                                        </path>
                                                        <path class="c3-shape c3-shape-5 c3-bar c3-bar-5"
                                                            d="M 361,316 L361,131.9090909090909 L376,131.9090909090909 L376,316 z"
                                                            style="stroke: rgb(75, 107, 191); fill: rgb(75, 107, 191); opacity: 1;">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g class="c3-chart-bar c3-target c3-target-data3"
                                                    style="pointer-events: none;">
                                                    <g class=" c3-shapes c3-shapes-data3 c3-bars c3-bars-data3"
                                                        style="cursor: pointer;">
                                                        <path class="c3-shape c3-shape-0 c3-bar c3-bar-0"
                                                            d="M 35,316 L35,142.13636363636363 L50,142.13636363636363 L50,316 z"
                                                            style="stroke: rgb(97, 121, 185); fill: rgb(97, 121, 185); opacity: 1;">
                                                        </path>
                                                        <path class="c3-shape c3-shape-1 c3-bar c3-bar-1"
                                                            d="M 104,316 L104,131.9090909090909 L119,131.9090909090909 L119,316 z"
                                                            style="stroke: rgb(97, 121, 185); fill: rgb(97, 121, 185); opacity: 1;">
                                                        </path>
                                                        <path class="c3-shape c3-shape-2 c3-bar c3-bar-2"
                                                            d="M 172,316 L172,101.22727272727275 L187,101.22727272727275 L187,316 z"
                                                            style="stroke: rgb(97, 121, 185); fill: rgb(97, 121, 185); opacity: 1;">
                                                        </path>
                                                        <path class="c3-shape c3-shape-3 c3-bar c3-bar-3"
                                                            d="M 240,316 L240,29.636363636363647 L255,29.636363636363647 L255,316 z"
                                                            style="stroke: rgb(97, 121, 185); fill: rgb(97, 121, 185); opacity: 1;">
                                                        </path>
                                                        <path class="c3-shape c3-shape-4 c3-bar c3-bar-4"
                                                            d="M 308,316 L308,101.22727272727275 L323,101.22727272727275 L323,316 z"
                                                            style="stroke: rgb(97, 121, 185); fill: rgb(97, 121, 185); opacity: 1;">
                                                        </path>
                                                        <path class="c3-shape c3-shape-5 c3-bar c3-bar-5"
                                                            d="M 376,316 L376,39.86363636363636 L391,39.86363636363636 L391,316 z"
                                                            style="stroke: rgb(97, 121, 185); fill: rgb(97, 121, 185); opacity: 1;">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g class="c3-chart-bar c3-target c3-target-data4"
                                                    style="pointer-events: none;">
                                                    <g class=" c3-shapes c3-shapes-data4 c3-bars c3-bars-data4"
                                                        style="cursor: pointer;">
                                                        <path class="c3-shape c3-shape-0 c3-bar c3-bar-0"
                                                            d="M 50,316 L50,203.49999999999997 L65,203.49999999999997 L65,316 z"
                                                            style="stroke: rgb(141, 164, 224); fill: rgb(141, 164, 224); opacity: 1;">
                                                        </path>
                                                        <path class="c3-shape c3-shape-1 c3-bar c3-bar-1"
                                                            d="M 119,316 L119,162.5909090909091 L134,162.5909090909091 L134,316 z"
                                                            style="stroke: rgb(141, 164, 224); fill: rgb(141, 164, 224); opacity: 1;">
                                                        </path>
                                                        <path class="c3-shape c3-shape-2 c3-bar c3-bar-2"
                                                            d="M 187,316 L187,275.09090909090907 L202,275.09090909090907 L202,316 z"
                                                            style="stroke: rgb(141, 164, 224); fill: rgb(141, 164, 224); opacity: 1;">
                                                        </path>
                                                        <path class="c3-shape c3-shape-3 c3-bar c3-bar-3"
                                                            d="M 255,316 L255,90.99999999999999 L270,90.99999999999999 L270,316 z"
                                                            style="stroke: rgb(141, 164, 224); fill: rgb(141, 164, 224); opacity: 1;">
                                                        </path>
                                                        <path class="c3-shape c3-shape-4 c3-bar c3-bar-4"
                                                            d="M 323,316 L323,193.27272727272728 L338,193.27272727272728 L338,316 z"
                                                            style="stroke: rgb(141, 164, 224); fill: rgb(141, 164, 224); opacity: 1;">
                                                        </path>
                                                        <path class="c3-shape c3-shape-5 c3-bar c3-bar-5"
                                                            d="M 391,316 L391,60.31818181818182 L406,60.31818181818182 L406,316 z"
                                                            style="stroke: rgb(141, 164, 224); fill: rgb(141, 164, 224); opacity: 1;">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                            <g class="c3-chart-lines">
                                                <g class="c3-chart-line c3-target c3-target-data1"
                                                    style="opacity: 1; pointer-events: none;">
                                                    <g class=" c3-shapes c3-shapes-data1 c3-lines c3-lines-data1"></g>
                                                    <g class=" c3-shapes c3-shapes-data1 c3-areas c3-areas-data1"></g>
                                                    <g class=" c3-selected-circles c3-selected-circles-data1"></g>
                                                    <g class=" c3-shapes c3-shapes-data1 c3-circles c3-circles-data1"
                                                        style="cursor: pointer;"></g>
                                                </g>
                                                <g class="c3-chart-line c3-target c3-target-data2"
                                                    style="opacity: 1; pointer-events: none;">
                                                    <g class=" c3-shapes c3-shapes-data2 c3-lines c3-lines-data2"></g>
                                                    <g class=" c3-shapes c3-shapes-data2 c3-areas c3-areas-data2"></g>
                                                    <g class=" c3-selected-circles c3-selected-circles-data2"></g>
                                                    <g class=" c3-shapes c3-shapes-data2 c3-circles c3-circles-data2"
                                                        style="cursor: pointer;"></g>
                                                </g>
                                                <g class="c3-chart-line c3-target c3-target-data3"
                                                    style="opacity: 1; pointer-events: none;">
                                                    <g class=" c3-shapes c3-shapes-data3 c3-lines c3-lines-data3"></g>
                                                    <g class=" c3-shapes c3-shapes-data3 c3-areas c3-areas-data3"></g>
                                                    <g class=" c3-selected-circles c3-selected-circles-data3"></g>
                                                    <g class=" c3-shapes c3-shapes-data3 c3-circles c3-circles-data3"
                                                        style="cursor: pointer;"></g>
                                                </g>
                                                <g class="c3-chart-line c3-target c3-target-data4"
                                                    style="opacity: 1; pointer-events: none;">
                                                    <g class=" c3-shapes c3-shapes-data4 c3-lines c3-lines-data4"></g>
                                                    <g class=" c3-shapes c3-shapes-data4 c3-areas c3-areas-data4"></g>
                                                    <g class=" c3-selected-circles c3-selected-circles-data4"></g>
                                                    <g class=" c3-shapes c3-shapes-data4 c3-circles c3-circles-data4"
                                                        style="cursor: pointer;"></g>
                                                </g>
                                            </g>
                                            <g class="c3-chart-arcs" transform="translate(204.3828125,153)"><text
                                                    class="c3-chart-arcs-title"
                                                    style="text-anchor: middle; opacity: 0;"></text></g>
                                            <g class="c3-chart-texts">
                                                <g class="c3-chart-text c3-target c3-target-data1"
                                                    style="opacity: 1; pointer-events: none;">
                                                    <g class=" c3-texts c3-texts-data1"></g>
                                                </g>
                                                <g class="c3-chart-text c3-target c3-target-data2"
                                                    style="opacity: 1; pointer-events: none;">
                                                    <g class=" c3-texts c3-texts-data2"></g>
                                                </g>
                                                <g class="c3-chart-text c3-target c3-target-data3"
                                                    style="opacity: 1; pointer-events: none;">
                                                    <g class=" c3-texts c3-texts-data3"></g>
                                                </g>
                                                <g class="c3-chart-text c3-target c3-target-data4"
                                                    style="opacity: 1; pointer-events: none;">
                                                    <g class=" c3-texts c3-texts-data4"></g>
                                                </g>
                                            </g>
                                        </g>
                                        <g clip-path="url(file:///Users/toms/Sites/www/2024/crush-it/light/index.html#c3-1719130732692-clip-grid)"
                                            class="c3-grid c3-grid-lines">
                                            <g class="c3-xgrid-lines"></g>
                                            <g class="c3-ygrid-lines"></g>
                                        </g>
                                        <g class="c3-axis c3-axis-x"
                                            clip-path="url(file:///Users/toms/Sites/www/2024/crush-it/light/index.html#c3-1719130732692-clip-xaxis)"
                                            transform="translate(0,316)" style="visibility: visible; opacity: 1;"><text
                                                class="c3-axis-x-label" transform="" style="text-anchor: end;"
                                                x="408.765625" dx="-0.5em" dy="-0.5em"></text>
                                            <g class="tick" transform="translate(35, 0)" style="opacity: 1;">
                                                <line x1="35" x2="35" y2="6"></line><text x="0"
                                                    y="9" transform="" style="text-anchor: middle; display: block;">
                                                    <tspan x="0" dy=".71em" dx="0">Jan</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(104, 0)" style="opacity: 1;">
                                                <line x1="35" x2="35" y2="6"></line><text x="0"
                                                    y="9" transform="" style="text-anchor: middle; display: block;">
                                                    <tspan x="0" dy=".71em" dx="0">Feb</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(172, 0)" style="opacity: 1;">
                                                <line x1="35" x2="35" y2="6"></line><text x="0"
                                                    y="9" transform="" style="text-anchor: middle; display: block;">
                                                    <tspan x="0" dy=".71em" dx="0">Mar</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(240, 0)" style="opacity: 1;">
                                                <line x1="35" x2="35" y2="6"></line><text x="0"
                                                    y="9" transform="" style="text-anchor: middle; display: block;">
                                                    <tspan x="0" dy=".71em" dx="0">Apr</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(308, 0)" style="opacity: 1;">
                                                <line x1="35" x2="35" y2="6"></line><text x="0"
                                                    y="9" transform="" style="text-anchor: middle; display: block;">
                                                    <tspan x="0" dy=".71em" dx="0">May</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(376, 0)" style="opacity: 1;">
                                                <line x1="35" x2="35" y2="0"></line><text x="0"
                                                    y="9" transform="" style="text-anchor: middle; display: block;">
                                                    <tspan x="0" dy=".71em" dx="0">Jun</tspan>
                                                </text>
                                            </g>
                                            <path class="domain" d="M0,6V0H408.765625V6"></path>
                                        </g>
                                        <g class="c3-axis c3-axis-y"
                                            clip-path="url(file:///Users/toms/Sites/www/2024/crush-it/light/index.html#c3-1719130732692-clip-yaxis)"
                                            transform="translate(0,0)" style="visibility: visible; opacity: 1;"><text
                                                class="c3-axis-y-label" transform="rotate(-90)" style="text-anchor: end;"
                                                x="0" dx="-0.5em" dy="1.2em"></text>
                                            <g class="tick" transform="translate(0,316)" style="opacity: 1;">
                                                <line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;">
                                                    <tspan x="-9" dy="3">$0</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(0,265)" style="opacity: 1;">
                                                <line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;">
                                                    <tspan x="-9" dy="3">$5</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(0,214)" style="opacity: 1;">
                                                <line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;">
                                                    <tspan x="-9" dy="3">$10</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(0,163)" style="opacity: 1;">
                                                <line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;">
                                                    <tspan x="-9" dy="3">$15</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(0,112)" style="opacity: 1;">
                                                <line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;">
                                                    <tspan x="-9" dy="3">$20</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(0,61)" style="opacity: 1;">
                                                <line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;">
                                                    <tspan x="-9" dy="3">$25</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(0,10)" style="opacity: 1;">
                                                <line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;">
                                                    <tspan x="-9" dy="3">$30</tspan>
                                                </text>
                                            </g>
                                            <path class="domain" d="M-6,1H0V316H-6"></path>
                                        </g>
                                        <g class="c3-axis c3-axis-y2" transform="translate(408.765625,0)"
                                            style="visibility: hidden; opacity: 1;"><text class="c3-axis-y2-label"
                                                transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em"
                                                dy="-0.5em"></text>
                                            <g class="tick" transform="translate(0,316)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line><text x="9" y="0"
                                                    style="text-anchor: start;">
                                                    <tspan x="9" dy="3">0</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(0,285)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line><text x="9" y="0"
                                                    style="text-anchor: start;">
                                                    <tspan x="9" dy="3">0.1</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(0,253)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line><text x="9" y="0"
                                                    style="text-anchor: start;">
                                                    <tspan x="9" dy="3">0.2</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(0,222)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line><text x="9" y="0"
                                                    style="text-anchor: start;">
                                                    <tspan x="9" dy="3">0.3</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(0,190)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line><text x="9" y="0"
                                                    style="text-anchor: start;">
                                                    <tspan x="9" dy="3">0.4</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(0,159)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line><text x="9" y="0"
                                                    style="text-anchor: start;">
                                                    <tspan x="9" dy="3">0.5</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(0,127)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line><text x="9" y="0"
                                                    style="text-anchor: start;">
                                                    <tspan x="9" dy="3">0.6</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(0,96)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line><text x="9" y="0"
                                                    style="text-anchor: start;">
                                                    <tspan x="9" dy="3">0.7</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(0,64)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line><text x="9" y="0"
                                                    style="text-anchor: start;">
                                                    <tspan x="9" dy="3">0.8</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(0,33)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line><text x="9" y="0"
                                                    style="text-anchor: start;">
                                                    <tspan x="9" dy="3">0.9</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(0,1)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line><text x="9" y="0"
                                                    style="text-anchor: start;">
                                                    <tspan x="9" dy="3">1</tspan>
                                                </text>
                                            </g>
                                            <path class="domain" d="M6,1H0V316H6"></path>
                                        </g>
                                    </g>
                                    <g transform="translate(20.5,350.5)" style="visibility: hidden;">
                                        <g clip-path="url(file:///Users/toms/Sites/www/2024/crush-it/light/index.html#c3-1719130732692-clip-subchart)"
                                            class="c3-chart">
                                            <g class="c3-chart-bars"></g>
                                            <g class="c3-chart-lines"></g>
                                        </g>
                                        <g clip-path="url(file:///Users/toms/Sites/www/2024/crush-it/light/index.html#c3-1719130732692-clip)"
                                            class="c3-brush"
                                            style="pointer-events: all; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                            <rect class="background" x="0" width="748.328125"
                                                style="visibility: hidden; cursor: crosshair;"></rect>
                                            <rect class="extent" x="0" width="0" style="cursor: move;"></rect>
                                            <g class="resize e" transform="translate(0,0)"
                                                style="cursor: ew-resize; display: none;">
                                                <rect x="-3" width="6" height="6" style="visibility: hidden;">
                                                </rect>
                                            </g>
                                            <g class="resize w" transform="translate(0,0)"
                                                style="cursor: ew-resize; display: none;">
                                                <rect x="-3" width="6" height="6" style="visibility: hidden;">
                                                </rect>
                                            </g>
                                        </g>
                                        <g class="c3-axis-x" transform="translate(0,0)"
                                            clip-path="url(file:///Users/toms/Sites/www/2024/crush-it/light/index.html#c3-1719130732692-clip-xaxis)"
                                            style="visibility: hidden; opacity: 1;">
                                            <g class="tick" transform="translate(35, 0)" style="opacity: 1;">
                                                <line x1="35" x2="35" y2="6"></line><text x="0"
                                                    y="9" transform="" style="text-anchor: middle; display: block;">
                                                    <tspan x="0" dy=".71em" dx="0">Jan</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(104, 0)" style="opacity: 1;">
                                                <line x1="35" x2="35" y2="6"></line><text x="0"
                                                    y="9" transform="" style="text-anchor: middle; display: block;">
                                                    <tspan x="0" dy=".71em" dx="0">Feb</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(172, 0)" style="opacity: 1;">
                                                <line x1="35" x2="35" y2="6"></line><text x="0"
                                                    y="9" transform="" style="text-anchor: middle; display: block;">
                                                    <tspan x="0" dy=".71em" dx="0">Mar</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(240, 0)" style="opacity: 1;">
                                                <line x1="35" x2="35" y2="6"></line><text x="0"
                                                    y="9" transform="" style="text-anchor: middle; display: block;">
                                                    <tspan x="0" dy=".71em" dx="0">Apr</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(308, 0)" style="opacity: 1;">
                                                <line x1="35" x2="35" y2="6"></line><text x="0"
                                                    y="9" transform="" style="text-anchor: middle; display: block;">
                                                    <tspan x="0" dy=".71em" dx="0">May</tspan>
                                                </text>
                                            </g>
                                            <g class="tick" transform="translate(376, 0)" style="opacity: 1;">
                                                <line x1="35" x2="35" y2="0"></line><text x="0"
                                                    y="9" transform="" style="text-anchor: middle; display: block;">
                                                    <tspan x="0" dy=".71em" dx="0">Jun</tspan>
                                                </text>
                                            </g>
                                            <path class="domain" d="M0,6V0H408.765625V6"></path>
                                        </g>
                                    </g>
                                    <g transform="translate(324.640625,-9.5)">
                                        <g class="c3-legend-background">
                                            <rect height="49.5" width="134.625"></rect>
                                        </g>
                                        <g class="c3-legend-item c3-legend-item-data1"
                                            style="visibility: visible; cursor: pointer;"><text x="24" y="19"
                                                style="pointer-events: none;">Apple</text>
                                            <rect class="c3-legend-item-event" x="10" y="5" width="62.3125"
                                                height="20.5" style="fill-opacity: 0;"></rect>
                                            <line class="c3-legend-item-tile" x1="8" y1="14"
                                                x2="18" y2="14" stroke-width="10"
                                                style="stroke: rgb(57, 91, 182); pointer-events: none;"></line>
                                        </g>
                                        <g class="c3-legend-item c3-legend-item-data2"
                                            style="visibility: visible; cursor: pointer;"><text x="24" y="39.5"
                                                style="pointer-events: none;">Nokia</text>
                                            <rect class="c3-legend-item-event" x="10" y="25.5" width="61.6953125"
                                                height="20.5" style="fill-opacity: 0;"></rect>
                                            <line class="c3-legend-item-tile" x1="8" y1="34.5"
                                                x2="18" y2="34.5" stroke-width="10"
                                                style="stroke: rgb(75, 107, 191); pointer-events: none;"></line>
                                        </g>
                                        <g class="c3-legend-item c3-legend-item-data3"
                                            style="visibility: visible; cursor: pointer;"><text x="86.3125" y="19"
                                                style="pointer-events: none;">Mi</text>
                                            <rect class="c3-legend-item-event" x="72.3125" y="5" width="40.3984375"
                                                height="20.5" style="fill-opacity: 0;"></rect>
                                            <line class="c3-legend-item-tile" x1="70.3125" y1="14"
                                                x2="80.3125" y2="14" stroke-width="10"
                                                style="stroke: rgb(97, 121, 185); pointer-events: none;"></line>
                                        </g>
                                        <g class="c3-legend-item c3-legend-item-data4"
                                            style="visibility: visible; cursor: pointer;"><text x="86.3125" y="39.5"
                                                style="pointer-events: none;">Vivo</text>
                                            <rect class="c3-legend-item-event" x="72.3125" y="25.5" width="52.8828125"
                                                height="20.5" style="fill-opacity: 0;"></rect>
                                            <line class="c3-legend-item-tile" x1="70.3125" y1="34.5"
                                                x2="80.3125" y2="34.5" stroke-width="10"
                                                style="stroke: rgb(141, 164, 224); pointer-events: none;"></line>
                                        </g>
                                    </g><text class="c3-title" x="225.3828125" y="0"></text>
                                </svg>
                                <div class="c3-tooltip-container"
                                    style="position: absolute; pointer-events: none; display: none; top: 65.1016px; left: 341.266px;">
                                    <table class="c3-tooltip">
                                        <tbody>
                                            <tr>
                                                <th colspan="2">Jun</th>
                                            </tr>
                                            <tr class="c3-tooltip-name--data3">
                                                <td class="name"><span style="background-color:#6179b9"></span>Mi</td>
                                                <td class="value">$27</td>
                                            </tr>
                                            <tr class="c3-tooltip-name--data4">
                                                <td class="name"><span style="background-color:#8da4e0"></span>Vivo</td>
                                                <td class="value">$25</td>
                                            </tr>
                                            <tr class="c3-tooltip-name--data2">
                                                <td class="name"><span style="background-color:#4b6bbf"></span>Nokia
                                                </td>
                                                <td class="value">$18</td>
                                            </tr>
                                            <tr class="c3-tooltip-name--data1">
                                                <td class="name"><span style="background-color:#395bb6"></span>Apple
                                                </td>
                                                <td class="value">$17</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between">
                                <a href="javascript:void(0)" class="btn btn-info btn-sm w200">Generate Report</a>
                                <small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn
                                        More</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
