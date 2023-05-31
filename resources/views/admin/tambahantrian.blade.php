@extends('layouts.main')
@section('content') 

<body>
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0);">Amezia</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="javascript:void(0);">Tables</a>
                </li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
            </div>
            <h4 class="page-title">Halaman Tambah Antrian</h4>
        </div>
    </div>
</div>

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h5 class="mt-0">Tambah</h5>
            <p class="text-muted font-13 mb-4">Tambah antrian<code class="highlighter-rouge"></code><code class="highlighter-rouge"></code><code class="highlighter-rouge"></code>.</p>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="" id="example-text-input" placeholder="Masukan Nama Lengkap">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-tel-input" class="col-sm-2 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="tel" value="" id="example-tel-input" placeholder="Masukan Nomor Telepon">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Tanggal Booking</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Nomor Plat</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="" id="example-text-input" placeholder="Masukan Nomor Polisi Kendaraan Anda">
                        </div>
                    </div>
                </div>
                {{-- nyamping --}}
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tipe Mobil</label>
                        <div class="col-sm-10">
                            <select class="custom-select">
                                <option selected="selected">Pilih Tipe Mobil</option>
                                <option value="1">Mobil Kecil</option>
                                <option value="2">Mobil Sedang</option>
                                <option value="3">Mobil Besar</option>
                                <option value="4">Pik Up</option>
                                <option value="5">Mobil Sport</option>
                            </select>
                        </div>
                    </div>

                    {{-- check box --}}
                    <div class="form-group row">
                        <label class="col-md-3 my-2 control-label">Layanan Tambahan</label>
                        <div class="col-md-9">
                            <div class="checkbox my-2">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck02" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                    <label class="custom-control-label" for="customCheck02">Detailing</label>
                                </div>
                            </div>
                            <div class="checkbox my-2">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                    <label class="custom-control-label" for="customCheck3">Shampo Ganda</label>
                                </div>
                            </div>
                            <div class="checkbox my-2">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                    <label class="custom-control-label" for="customCheck4">Interior fakum</label>
                                </div>
                            </div>
                            <div class="checkbox my-2">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck5" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                    <label class="custom-control-label" for="customCheck5">Double Kit</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="col-xl-6">
    <div class="card">
        <div class="card-body">
            <h5 class="mt-0">Checkboxs</h5>
            <p class="text-muted font-13 mb-4">For even more customization and cross browser consistency, use our completely custom form elements to replace the browser defaults. They’re built on top of semantic and accessible markup, so they’re solid replacements for any default form control.</p>
            <div class="general-label">
                <form class="form" role="form">
                    <div class="form-group row">
                        <label class="col-md-3 my-2 control-label">Checkboxes</label>
                        <div class="col-md-9">
                            <div class="checkbox my-2">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck02" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                    <label class="custom-control-label" for="customCheck02">Unchecked</label>
                                </div>
                            </div>
                            <div class="checkbox my-2">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked="" id="customCheck3" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                    <label class="custom-control-label" for="customCheck3">Checked</label>
                                </div>
                            </div>
                            <div class="checkbox my-2">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheckDisabled" disabled="">
                                    <label class="custom-control-label">Disabled Unchecked</label>
                                </div>
                            </div>
                            <div class="checkbox my-2">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked="" id="customCheck5" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                    <label class="custom-control-label" for="customCheckDisabled">Disabled Checked</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                    <div class="form-group mb-0 row">
                        <label class="col-md-3 my-2 control-label">Inline Checkboxes</label>
                        <div class="col-md-9">
                            <div class="form-check-inline my-2">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck6" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                    <label class="custom-control-label" for="customCheck6">HTML</label>
                                </div>
                            </div>
                            <div class="form-check-inline my-2">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck7" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                    <label class="custom-control-label" for="customCheck7">CSS</label>
                                </div>
                            </div>
                            <div class="form-check-inline my-2">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck8" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                    <label class="custom-control-label" for="customCheck8">Javascript</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </form>
            </div>
        </div>
    </div>
</div> --}}
</div>
</body>
@endsection