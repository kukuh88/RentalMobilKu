@extends('layouts.master')

@section('page-title', 'Mobil')

@section('breadcrumbs')
    <li class="breadcrumb-item">Manajemen Mobil</li>
    <li class="breadcrumb-item active">Mobil</li>
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
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h5 class="card-title">SEMUA MANAJEMEN MOBIL</h5>
                        </div>
                        <div class="col-6">
                            <div class="right float-end">
                                <button type="button" class="btn btn-outline-primary" style="margin-top: 12px;"
                                    data-bs-toggle="modal" data-bs-target="#basicModal">
                                    <i class="bi bi-plus" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Tambah"></i> Tambah
                                </button>
                            </div>
                            <!-- Basic Modal -->
                        </div>
                    </div>
                    <!-- Table with hoverable rows -->
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <table class="table table-hover" id="datatable">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                NO
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center ">
                                                MEREK MOBIL
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center ">
                                                MODEL MOBIL
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center ">
                                                PLAT MOBIL
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center ">
                                                TARIF SEWA MOBIL
                                            </th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    @php
                                        $no = 1;
                                    @endphp
                                    <tbody>
                                        {{-- @foreach ($satuan as $b)
                                            <tr>
                                                <td class="ps-4">
                                                    <p class="text-xs font-weight-bold mb-0">{{ $no++ }}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{ $b->nama_satuan }}
                                                    </p>
                                                </td>

                                                <td class="text-center">
                                                    <a href="{{ route('satuan.edit', $b) }}"
                                                        class="btn btn-outline-warning"><i class="bi bi-pencil-square"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Edit"></i></a>

                                                    <a href="#" class="btn btn-outline-danger delete"
                                                        book-id="{{ $b->id }}" book_name="{{ $b->nama_satuan }}"><i
                                                            class="bi bi-trash" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Delete"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
                            </table> <!-- End Table with hoverable rows -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="basicModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Satuan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <!-- General Form Elements -->


                        <form action="{{ route('mobil.store') }}" method="POST" class="row">
                            {{ csrf_field() }}

                            {{-- Tanggal Masuk --}}
                            <div class="col-sm-12 mb-3{{ $errors->has('nama_satuan') ? ' has-error' : '' }}">
                                <label for="date" class="col-form-label">Nama Satuan</label>
                                <div>
                                    <input name="nama_satuan" type="text" id="nama_satuan" class="form-control"
                                        value="{{ old('nama_satuan') }}" placeholder="Nama Satuan" required>
                                    @if ($errors->has('nama_satuan'))
                                        <span class="help-block"
                                            style="color: red;">{{ $errors->first('nama_satuan') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="container">
                                <div class="row col-sm-12 mb-5 justify-content-start">
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <button type="submit" class="btn btn-outline-success"
                                            style="margin-top: 12px;">Save</button>
                                        <a href="/dashboard" type="button" class="btn btn-outline-info"
                                            style="margin-top: 12px;">
                                            Home
                                        </a>
                                        <a href="/satuan" type="button" class="btn btn-outline-warning"
                                            style="margin-top: 12px;">
                                            Back
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form><!-- End General Form Elements -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('sweetalert')
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
            $('body').on('click', '.delete', function() {
                var book_id = $(this).attr('book-id');
                var book_name = $(this).attr('book_name');
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "Do you want to delete " + book_name + "?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: "/satuan/" + book_id,
                            type: "POST",
                            data: {
                                _method: "DELETE",
                            },
                            success: function() {
                                swal.fire({
                                    title: 'Hore 😀 !!',
                                    text: 'You clicked the button!',
                                    icon: 'success'
                                }).then((result) => {
                                    location.reload();
                                })
                            }
                        });
                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                            'Thank you not delete me 😭 !!',
                            'Your Item Files are safe ',
                            'error'
                        )
                    }
                })
            });
        });

        @if (session()->has('sukses'))
            const Toast = swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal
                        .stopTimer)
                    toast.addEventListener('mouseleave', Swal
                        .resumeTimer)
                }
            });
            Toast.fire({
                icon: "success",
                title: "{{ session()->pull('sukses') }}"
            });
        @elseif (session()->has('danger'))
            const Toast = swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal
                        .stopTimer)
                    toast.addEventListener('mouseleave', Swal
                        .resumeTimer)
                }
            });
            Toast.fire({
                icon: "error",
                title: "{{ session()->pull('danger') }}"
            });
        @elseif (session()->has('info'))
            const Toast = swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal
                        .stopTimer)
                    toast.addEventListener('mouseleave', Swal
                        .resumeTimer)
                }
            });
            Toast.fire({
                icon: "error",
                title: "{{ session()->pull('danger') }}"
            });
        @endif
    </script>
@endsection
