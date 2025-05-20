@extends('layouts.app')
@section('title')
    Biodata Pemohon
@endsection
@section('nav')
    <ul class="nav nav-tabs page-header-tab">
        <li class="nav-item">
            <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                aria-controls="pills-profile" aria-selected="true">Biodata</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-calendar-tab" data-toggle="pill" href="#pills-calendar" role="tab"
                aria-controls="pills-calendar" aria-selected="false">Anggota Keluarga</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-timeline-tab" data-toggle="pill" href="#pills-timeline" role="tab"
                aria-controls="pills-timeline" aria-selected="false">Penjamin</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-blog-tab" data-toggle="pill" href="#pills-blog" role="tab"
                aria-controls="pills-blog" aria-selected="false">Berkas Lampiran</a>
        </li>

    </ul>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <img class="card-img-top" src="../assets/images/gallery/6.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{ $data->name }}</h4>
                        {{-- <ul class="social-links list-inline mb-4">
                            <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip"
                                    data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip"
                                    data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip"
                                    data-original-title="1234567890"><i class="fa fa-phone"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip"
                                    data-original-title="@skypename"><i class="fa fa-skype"></i></a></li>
                        </ul> --}}
                        <p class="card-text">{{ $biodata->alamatTinggal }}</p>

                        {{-- <div class="row">
                            <div class="col-4">
                                <h6><strong>3265</strong></h6>
                                <span>Post</span>
                            </div>
                            <div class="col-4">
                                <h6><strong>1358</strong></h6>
                                <span>Followers</span>
                            </div>
                            <div class="col-4">
                                <h6><strong>10K</strong></h6>
                                <span>Likes</span>
                            </div>
                        </div> --}}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $data->email }}</li>
                        <li class="list-group-item">{{ $data->phoneNumber }}</li>
                        <li class="list-group-item">
                            {{ $biodata->tempatLahir }}, {{ useCarbon($biodata->tanggalLahir, 'd F Y') }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="javascript:void(0);" class="card-link">View More</a>
                        <a href="javascript:void(0);" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade" id="pills-calendar" role="tabpanel" aria-labelledby="pills-calendar-tab">
                        <div class="card">
                            <div class="card-header bline">
                                <h3 class="card-title">Anggota Keluarga</h3>
                                <div class="card-options">
                                    <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i
                                            class="fe fe-maximize"></i></a>
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
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <a class="btn btn-primary mb-15" href="{{ route('admin.user.create') }}">
                                                <i class="icon wb-plus" aria-hidden="true"></i> Tambah Data
                                            </a>
                                            <div class="table-responsive">
                                                <table class="table table-hover table-vcenter table-striped"
                                                    cellspacing="0" id="addrowExample">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th>
                                                            <th>Umur</th>
                                                            <th>Status Hubungan</th>
                                                            <th>Status Disabilitas</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ($data->anggota_keluarga as $d)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $d->nama }}</td>
                                                                <td>{{ $d->umur }}</td>
                                                                <td>{{ $d->statusHubungan }}</td>
                                                                <td>{{ $d->isDifable }}</td>
                                                                <td class="actions">
                                                                    <a href="{{ route('admin.user.edit', $d->id) }}"
                                                                        class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                                                        data-toggle="tooltip"
                                                                        data-original-title="Edit"><i class="icon-pencil"
                                                                            aria-hidden="true"></i></a>
                                                                    <span data-toggle="tooltip"
                                                                        data-original-title="Hapus">
                                                                        <a class="btn btn-sm btn-icon on-default button-remove destroy"
                                                                            href="#destroyModal" data-toggle="modal"
                                                                            data-route="{{ route('admin.user.destroy', $d->id) }}"><i
                                                                                class="icon-trash"
                                                                                aria-hidden="true"></i></a>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                        @empty
                                                            <tr>
                                                                <td class="text-center" colspan="6">Tidak ada data</td>
                                                            </tr>
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-timeline" role="tabpanel" aria-labelledby="pills-timeline-tab">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Penjamin</h3>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a>
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
                                <div class="timeline_item ">
                                    <img class="tl_avatar" src="../assets/images/xs/avatar1.jpg" alt="">
                                    <span><a href="javascript:void(0);">Elisse Joson</a> San Francisco, CA <small
                                            class="float-right text-right">20-April-2019 - Today</small></span>
                                    <h6 class="font600">Hello, 'Im a single div responsive timeline without media Queries!
                                    </h6>
                                    <div class="msg">
                                        <p>I'm speaking with myself, number one, because I have a very good brain and I've
                                            said a lot of things. I write the best placeholder text, and I'm the biggest
                                            developer on the web card she has is the Lorem card.</p>
                                        <a href="javascript:void(0);" class="mr-20 text-muted"><i
                                                class="fa fa-heart text-pink"></i> 12 Love</a>
                                        <a class="text-muted" role="button" data-toggle="collapse"
                                            href="#collapseExample" aria-expanded="false"
                                            aria-controls="collapseExample"><i class="fa fa-comments"></i> 1 Comment</a>
                                        <div class="collapse p-4 section-gray" id="collapseExample">
                                            <form class="well">
                                                <div class="form-group">
                                                    <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                                </div>
                                                <button class="btn btn-primary">Submit</button>
                                            </form>
                                            <ul class="recent_comments list-unstyled mt-4 mb-0">
                                                <li>
                                                    <div class="avatar_img">
                                                        <img class="rounded img-fluid"
                                                            src="../assets/images/xs/avatar4.jpg" alt="">
                                                    </div>
                                                    <div class="comment_body">
                                                        <h6>Donald Gardner <small class="float-right font-14">Just
                                                                now</small></h6>
                                                        <p>Lorem ipsum Veniam aliquip culpa laboris minim tempor</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="timeline_item ">
                                    <img class="tl_avatar" src="../assets/images/xs/avatar4.jpg" alt="">
                                    <span><a href="javascript:void(0);" title="">Dessie Parks</a> Oakland, CA <small
                                            class="float-right text-right">19-April-2019 - Yesterday</small></span>
                                    <h6 class="font600">Oeehhh, that's awesome.. Me too!</h6>
                                    <div class="msg">
                                        <p>I'm speaking with myself, number one, because I have a very good brain and I've
                                            said a lot of things. on the web by far... While that's mock-ups and this is
                                            politics, are they really so different? I think the only card she has is the
                                            Lorem card.</p>
                                        <div class="timeline_img mb-20">
                                            <img class="width100" src="../assets/images/gallery/1.jpg"
                                                alt="Awesome Image">
                                            <img class="width100" src="../assets/images/gallery/2.jpg"
                                                alt="Awesome Image">
                                        </div>
                                        <a href="javascript:void(0);" class="mr-20 text-muted"><i
                                                class="fa fa-heart text-pink"></i> 23 Love</a>
                                        <a class="text-muted" role="button" data-toggle="collapse"
                                            href="#collapseExample1" aria-expanded="false"
                                            aria-controls="collapseExample1"><i class="fa fa-comments"></i> 2 Comment</a>
                                        <div class="collapse p-4 section-gray" id="collapseExample1">
                                            <form class="well">
                                                <div class="form-group">
                                                    <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                                </div>
                                                <button class="btn btn-primary">Submit</button>
                                            </form>
                                            <ul class="recent_comments list-unstyled mt-4 mb-0">
                                                <li>
                                                    <div class="avatar_img">
                                                        <img class="rounded img-fluid"
                                                            src="../assets/images/xs/avatar4.jpg" alt="">
                                                    </div>
                                                    <div class="comment_body">
                                                        <h6>Donald Gardner <small class="float-right font-14">Just
                                                                now</small></h6>
                                                        <p>Lorem ipsum Veniam aliquip culpa laboris minim tempor</p>
                                                        <div class="timeline_img mb-20">
                                                            <img class="width150" src="../assets/images/gallery/7.jpg"
                                                                alt="Awesome Image">
                                                            <img class="width150" src="../assets/images/gallery/8.jpg"
                                                                alt="Awesome Image">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="avatar_img">
                                                        <img class="rounded img-fluid"
                                                            src="../assets/images/xs/avatar3.jpg" alt="">
                                                    </div>
                                                    <div class="comment_body">
                                                        <h5>Dessie Parks <small class="float-right font-14">1min
                                                                ago</small></h5>
                                                        <p>It is a long established fact that a reader will be distracted by
                                                            the readable content of a page when looking</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="timeline_item ">
                                    <img class="tl_avatar" src="../assets/images/xs/avatar7.jpg" alt="">
                                    <span><a href="javascript:void(0);" title="">Rochelle Barton</a> San Francisco,
                                        CA <small class="float-right text-right">12-April-2019</small></span>
                                    <h6 class="font600">An Engineer Explains Why You Should Always Order the Larger Pizza
                                    </h6>
                                    <div class="msg">
                                        <p>I'm speaking with myself, number one, because I have a very good brain and I've
                                            said a lot of things. I write the best placeholder text, and I'm the biggest
                                            developer on the web by far... While that's mock-ups and this is politics, is
                                            the Lorem card.</p>
                                        <a href="javascript:void(0);" class="mr-20 text-muted"><i
                                                class="fa fa-heart text-pink"></i> 7 Love</a>
                                        <a class="text-muted" role="button" data-toggle="collapse"
                                            href="#collapseExample2" aria-expanded="false"
                                            aria-controls="collapseExample2"><i class="fa fa-comments"></i> 1 Comment</a>
                                        <div class="collapse p-4 section-gray" id="collapseExample2">
                                            <form class="well">
                                                <div class="form-group">
                                                    <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                                </div>
                                                <button class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade active show" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Edit Biodata</h3>
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
                            <form action="{{ route('user.user.update', $data->id) }}" method="post" id="advanced-form"
                                data-parsley-validate novalidate>
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">NIK</label>
                                                <input type="text" class="form-control" disabled=""
                                                    placeholder="Nik" value="{{ $data->nik }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Email"
                                                    name="email" value="{{ $data->email }}" required readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Nama</label>
                                                <input type="text" class="form-control" placeholder="Nama"
                                                    value="{{ $data->name }}" name="name" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Nomor Telepon</label>
                                                <input type="text" class="form-control" placeholder="Nomor Telepon"
                                                    data-parsley-type="number" value="{{ $data->phoneNumber }}"
                                                    name="phoneNumber" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Tempat Lahir</label>
                                                <input type="text" class="form-control" placeholder="Tempat Lahir"
                                                    value="{{ isset($biodata) ? $biodata->tempatLahir : '' }}"
                                                    name="tempatLahir" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Tanggal Lahir</label>
                                                <input type="date" class="form-control" placeholder="Tanggal Lahir"
                                                    value="{{ isset($biodata) ? $biodata->tanggalLahir : '' }}"
                                                    name="tanggalLahir" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Kewarganegaraan</label>
                                                <input type="text" class="form-control" placeholder="Kewarganegaraan"
                                                    value="{{ isset($biodata) ? $biodata->kewarganegaraan : '' }}"
                                                    name="kewarganegaraan" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Agama</label>
                                                <select class="form-control custom-select" name="agama" required>
                                                    <option value="Islam"
                                                        {{ isset($biodata) && $biodata->agama === 'Islam' ? 'selected' : '' }}>
                                                        Islam</option>
                                                    <option value="Kristen"
                                                        {{ isset($biodata) && $biodata->agama === 'Kristen' ? 'selected' : '' }}>
                                                        Kristen</option>
                                                    <option value="Katolik"
                                                        {{ isset($biodata) && $biodata->agama === 'Katolik' ? 'selected' : '' }}>
                                                        Katolik</option>
                                                    <option value="Hindu"
                                                        {{ isset($biodata) && $biodata->agama === 'Hindu' ? 'selected' : '' }}>
                                                        Hindu</option>
                                                    <option value="Buddha"
                                                        {{ isset($biodata) && $biodata->agama === 'Buddha' ? 'selected' : '' }}>
                                                        Buddha</option>
                                                    <option value="Khonghucu"
                                                        {{ isset($biodata) && $biodata->agama === 'Khonghucu' ? 'selected' : '' }}>
                                                        Khonghucu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">Alamat Tinggal</label>
                                                <input type="text" class="form-control " placeholder="Alamat"
                                                    data-parsley-maxlength="100"
                                                    value="{{ isset($biodata) ? $biodata->alamatTinggal : '' }}"
                                                    name="alamatTinggal" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Status Tinggal</label>
                                                <input type="text" class="form-control" placeholder="Status Tinggal"
                                                    name="statusTinggal"
                                                    value="{{ isset($biodata) ? $biodata->statusTinggal : '' }}" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Pekerjaan</label>
                                                <input type="text" class="form-control" placeholder="Pekerjaan"
                                                    value="{{ isset($biodata) ? $biodata->pekerjaan : '' }}"
                                                    name="pekerjaan" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Penghasilan</label>
                                                <input type="text" class="form-control currencyInput"
                                                    placeholder="Penghasilan"
                                                    value="{{ isset($biodata) ? $biodata->penghasilan : '' }}"
                                                    name="penghasilan" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">Alamat Kerja</label>
                                                <input type="text" class="form-control " placeholder="Alamat"
                                                    data-parsley-maxlength="100"
                                                    value="{{ isset($biodata) ? $biodata->alamatKerja : '' }}"
                                                    name="alamatKerja" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">NIK Suami/Isteri</label>
                                                <input type="text" class="form-control" placeholder="NIK Suami/Isteri"
                                                    value="{{ isset($biodata) ? $biodata->nik : '' }}" name="nik"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Pekerjaan Suami/Isteri</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Pekerjaan Suami/Isteri"
                                                    value="{{ isset($biodata) ? $biodata->pekerjaanPasangan : '' }}"
                                                    name="pekerjaanPasangan" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Penghasilan Suami/Isteri</label>
                                                <input type="text" class="form-control currencyInput"
                                                    placeholder="Penghasilan Suami/Isteri"
                                                    value="{{ isset($biodata) ? $biodata->penghasilanPasangan : '' }}"
                                                    name="penghasilanPasangan" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">Alamat Kerja Suami/Isteri</label>
                                                <input type="text" class="form-control "
                                                    placeholder="Alamat Kerja Suami/Isteri" data-parsley-maxlength="100"
                                                    value="{{ isset($biodata) ? $biodata->alamatKerjaPasangan : '' }}"
                                                    name="alamatKerjaPasangan" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-blog" role="tabpanel" aria-labelledby="pills-blog-tab">
                        <div class="card">
                            <div class="card-body">
                                <div class="new_post">
                                    <div class="form-group">
                                        <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                    </div>
                                    <div class="mt-4 text-right">
                                        <button class="btn btn-warning"><i class="icon-link"></i></button>
                                        <button class="btn btn-warning"><i class="icon-camera"></i></button>
                                        <button class="btn btn-primary">Post</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card blog_single_post">
                            <div class="img-post">
                                <img class="d-block img-fluid" src="../assets/images/gallery/6.jpg" alt="First slide">
                            </div>
                            <div class="card-body">
                                <h4><a href="#">All photographs are accurate</a></h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content of
                                    a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                    more-or-less normal</p>
                            </div>
                            <div class="footer">
                                <div class="actions">
                                    <a href="javascript:void(0);" class="btn btn-outline-secondary">Continue Reading</a>
                                </div>
                                <ul class="stats list-unstyled">
                                    <li><a href="javascript:void(0);">General</a></li>
                                    <li><a href="javascript:void(0);" class="icon-heart"> 28</a></li>
                                    <li><a href="javascript:void(0);" class="icon-bubbles"> 128</a></li>
                                </ul>
                            </div>
                            <ul class="list-group card-list-group">
                                <li class="list-group-item py-5">
                                    <div class="media">
                                        <img class="media-object avatar avatar-md mr-4"
                                            src="../assets/images/xs/avatar3.jpg" alt="">
                                        <div class="media-body">
                                            <div class="media-heading">
                                                <small class="float-right text-muted">4 min</small>
                                                <h5>Peter Richards</h5>
                                            </div>
                                            <div>
                                                Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta
                                                felis euismod semper. Morbi leo risus, porta ac consectetur ac, vestibulum
                                                at eros. Cras
                                                justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
                                                porta felis euismod semper. Cum sociis natoque penatibus et magnis dis
                                                parturient montes,
                                                nascetur ridiculus mus.
                                            </div>
                                            <ul class="media-list">
                                                <li class="media mt-4">
                                                    <img class="media-object avatar mr-4"
                                                        src="../assets/images/xs/avatar1.jpg" alt="">
                                                    <div class="media-body">
                                                        <strong>Debra Beck: </strong>
                                                        Donec id elit non mi porta gravida at eget metus. Vivamus sagittis
                                                        lacus vel augue laoreet rutrum faucibus dolor auctor. Donec
                                                        ullamcorper nulla non metus
                                                        auctor fringilla. Praesent commodo cursus magna, vel scelerisque
                                                        nisl consectetur et. Sed posuere consectetur est at lobortis.
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card blog_single_post">
                            <div class="img-post">
                                <img class="d-block img-fluid" src="../assets/images/gallery/4.jpg" alt="First slide">
                            </div>
                            <div class="card-body">
                                <h4><a href="#">All photographs are accurate</a></h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content of
                                    a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                    more-or-less normal</p>
                            </div>
                            <div class="footer">
                                <div class="actions">
                                    <a href="javascript:void(0);" class="btn btn-outline-secondary">Continue Reading</a>
                                </div>
                                <ul class="stats list-unstyled">
                                    <li><a href="javascript:void(0);">General</a></li>
                                    <li><a href="javascript:void(0);" class="icon-heart"> 28</a></li>
                                    <li><a href="javascript:void(0);" class="icon-bubbles"> 128</a></li>
                                </ul>
                            </div>
                            <ul class="list-group card-list-group">
                                <li class="list-group-item py-5">
                                    <div class="media">
                                        <img class="media-object avatar avatar-md mr-4"
                                            src="../assets/images/xs/avatar7.jpg" alt="">
                                        <div class="media-body">
                                            <div class="media-heading">
                                                <small class="float-right text-muted">12 min</small>
                                                <h5>Peter Richards</h5>
                                            </div>
                                            <div>
                                                Donec id elit non mi porta gravida at eget metus. Integer posuere erat a
                                                ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus
                                                et magnis dis
                                                parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac
                                                consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item py-5">
                                    <div class="media">
                                        <img class="media-object avatar avatar-md mr-4"
                                            src="../assets/images/xs/avatar6.jpg" alt="">
                                        <div class="media-body">
                                            <div class="media-heading">
                                                <small class="float-right text-muted">34 min</small>
                                                <h5>Peter Richards</h5>
                                            </div>
                                            <div>
                                                Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula
                                                porta felis euismod semper. Aenean eu leo quam. Pellentesque ornare sem
                                                lacinia quam
                                                venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Donec
                                                sed odio dui.
                                            </div>
                                            <ul class="media-list">
                                                <li class="media mt-4">
                                                    <img class="media-object avatar mr-4"
                                                        src="../assets/images/xs/avatar5.jpg" alt="">
                                                    <div class="media-body">
                                                        <strong>Wayne Holland: </strong>
                                                        Donec id elit non mi porta gravida at eget metus. Vivamus sagittis
                                                        lacus vel augue laoreet rutrum faucibus dolor auctor. Donec
                                                        ullamcorper nulla non metus
                                                        auctor fringilla. Praesent commodo cursus magna, vel scelerisque
                                                        nisl consectetur et. Sed posuere consectetur est at lobortis.
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $('.currencyInput').on('input', function() {
                let input = $(this).val();
                // Remove non-digit characters
                input = input.replace(/[^0-9]/g, '');

                if (input.length === 0) {
                    $(this).val('');
                    return;
                }

                // Format the number to IDR format
                let formatted = formatToIDR(input);
                $(this).val(formatted);
            });

            function formatToIDR(number) {
                if (!number) return '';
                // Reverse the number string to insert dots every 3 digits
                let reverseNumber = number.split('').reverse().join('');
                let reverseFormatted = reverseNumber.match(/.{1,3}/g).join('.');
                // Reverse the formatted string back
                return reverseFormatted.split('').reverse().join('');
            }
        });
    </script>
@endpush
