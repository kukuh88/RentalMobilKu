@extends('layouts.master')

@section('page-title', 'Dashboard')

@section('breadcrumbs')
    <li class="breadcrumb-item active">Dasboard</li>
@endsection

@section('style_css')
    <style>
        .table-responsive {
            font-size: .8em !important;
        }

        div.dataTables_processing {
            z-index: 1;
        }
    </style>
@endsection

@section('content')
    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col ">
                            <a href="{{ route('dashboard') }}">
                                <div class="card h-80">
                                    <img src="{{ asset('admin/assets/img/forklif.jpg') }}" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title" style="text-align:center;">INVENTARIS IT</h5>
                                        {{-- <p class="card-text">Website ini adalah untuk mendata alat-alat IT untuk
                                            ke
                                            user...
                                        </p> --}}
                                    </div>
                                    {{-- <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div> --}}
                                </div>
                            </a>

                        </div>
                        <div class="col ">
                            <a href="#">
                                <div class="card h-80">
                                    <img src="{{ asset('admin/assets/img/uangmuka.jpg') }}" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title" style="text-align:center;">UANG MUKA</h5>
                                        {{-- <p class="card-text">Sebagai Pendataan Pembelian barang IT untuk
                                            keperluan
                                            User yang di perlukan oleh Kantor...</p> --}}
                                    </div>
                                    {{-- <div class="card-footer">
                                        <small class="text-muted">Last updated 4 mins ago</small>
                                    </div> --}}
                                </div>
                            </a>
                        </div>
                        <div class="col ">
                            <a href="/error">
                                <div class="card h-80">
                                    <img src="{{ asset('admin/assets/img/file.jpg') }}" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title" style="text-align:center;">ADMINISTRASI</h5>
                                        {{-- <p class="card-text">Sebagai Pendataan Data Dokumen/Berkas IT dan di
                                            rekap
                                            berdasarkan jenis data itu...</p> --}}
                                    </div>
                                    {{-- <div class="card-footer">
                                        <small class="text-muted">Last updated 5 mins ago</small>
                                    </div> --}}
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col ">
                            <a href="{{ route('dashboard') }}">
                                <div class="card h-80">
                                    <img src="{{ asset('admin/assets/img/forklif.jpg') }}" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title" style="text-align:center;">INVENTARIS IT</h5>
                                        {{-- <p class="card-text">Website ini adalah untuk mendata alat-alat IT untuk
                                            ke
                                            user...
                                        </p> --}}
                                    </div>
                                    {{-- <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div> --}}
                                </div>
                            </a>

                        </div>
                        <div class="col ">
                            <a href="#">
                                <div class="card h-80">
                                    <img src="{{ asset('admin/assets/img/uangmuka.jpg') }}" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title" style="text-align:center;">UANG MUKA</h5>
                                        {{-- <p class="card-text">Sebagai Pendataan Pembelian barang IT untuk
                                            keperluan
                                            User yang di perlukan oleh Kantor...</p> --}}
                                    </div>
                                    {{-- <div class="card-footer">
                                        <small class="text-muted">Last updated 4 mins ago</small>
                                    </div> --}}
                                </div>
                            </a>
                        </div>
                        <div class="col ">
                            <a href="/error">
                                <div class="card h-80">
                                    <img src="{{ asset('admin/assets/img/file.jpg') }}" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title" style="text-align:center;">ADMINISTRASI</h5>
                                        {{-- <p class="card-text">Sebagai Pendataan Data Dokumen/Berkas IT dan di
                                            rekap
                                            berdasarkan jenis data itu...</p> --}}
                                    </div>
                                    {{-- <div class="card-footer">
                                        <small class="text-muted">Last updated 5 mins ago</small>
                                    </div> --}}
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col ">
                            <a href="{{ route('dashboard') }}">
                                <div class="card h-80">
                                    <img src="{{ asset('admin/assets/img/forklif.jpg') }}" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title" style="text-align:center;">INVENTARIS IT</h5>
                                        {{-- <p class="card-text">Website ini adalah untuk mendata alat-alat IT untuk
                                            ke
                                            user...
                                        </p> --}}
                                    </div>
                                    {{-- <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div> --}}
                                </div>
                            </a>

                        </div>
                        <div class="col ">
                            <a href="#">
                                <div class="card h-80">
                                    <img src="{{ asset('admin/assets/img/uangmuka.jpg') }}" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title" style="text-align:center;">UANG MUKA</h5>
                                        {{-- <p class="card-text">Sebagai Pendataan Pembelian barang IT untuk
                                            keperluan
                                            User yang di perlukan oleh Kantor...</p> --}}
                                    </div>
                                    {{-- <div class="card-footer">
                                        <small class="text-muted">Last updated 4 mins ago</small>
                                    </div> --}}
                                </div>
                            </a>
                        </div>
                        <div class="col ">
                            <a href="/error">
                                <div class="card h-80">
                                    <img src="{{ asset('admin/assets/img/file.jpg') }}" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title" style="text-align:center;">ADMINISTRASI</h5>
                                        {{-- <p class="card-text">Sebagai Pendataan Data Dokumen/Berkas IT dan di
                                            rekap
                                            berdasarkan jenis data itu...</p> --}}
                                    </div>
                                    {{-- <div class="card-footer">
                                        <small class="text-muted">Last updated 5 mins ago</small>
                                    </div> --}}
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div><!-- End Left side columns -->
        </div>
    </section>
@endsection
