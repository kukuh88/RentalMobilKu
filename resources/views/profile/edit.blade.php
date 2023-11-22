{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Profil | RentalMobilKu</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('admin/assets/img/favicon.ico') }}" rel="icon">
    <link href="{{ asset('admin/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.18/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    @yield('vendor_css')

    <!-- Template Main CSS File -->
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/sweet.css') }}" rel="stylesheet">

    @yield('style_css')

</head>

<body>

    <!-- ======= Header ======= -->
    @include('layouts.include.header')
    <!-- End Header-->

    <!-- ======= Sidebar ======= -->
    @include('layouts.include.sidebar')
    <!-- End Sidebar-->


    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="{{ 'admin/assets/img/profile-img.jpg' }}" alt="Profile" class="rounded-circle">
                            <h2>{{ $user->name }}</h2>
                            <h3>PT DOK DAN PERKAPALAN AIR KANTUNG</h3>
                            <div class="social-links mt-2">

                                <a href="https://www.facebook.com/ptdak" class="facebook"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/ptdakofficial/" class="instagram"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="https://www.youtube.com/@dak.official" class="youtube"><i
                                        class="bi bi-youtube"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Edit Profile</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-change-password">Change Password</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#delete">Delete
                                        Account</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <!-- Profile Edit Form -->
                                    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                                        @csrf
                                        @method('patch')

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full
                                                Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input class="form-control" id="name" name="name" type="text"
                                                    class="mt-1 block w-full" value="{{ $user->name }}"
                                                    autocomplete="name">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email"
                                                class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input class="form-control" id="email" name="email"
                                                    type="email" class="mt-1 block w-full"
                                                    value="{{ $user->email }}" autocomplete="username">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="company"
                                                class="col-md-4 col-lg-3 col-form-label">Company</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="company" type="text" class="form-control"
                                                    id="company" value="PT DOK DAN PERKAPALAN AIR KANTUNG">
                                            </div>
                                        </div>

                                        {{-- <div class="row mb-3">
                                            <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="job" type="text" class="form-control"
                                                    id="Job" value="Web Designer">
                                            </div>
                                        </div> --}}

                                        <div class="text-center">
                                            <a href="/dashboard" class="btn btn-primary">Back</a>
                                            <button type="submit" class="btn btn-success">Save Changes</button>
                                        </div>
                                    </form><!-- End Profile Edit Form -->

                                </div>

                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <!-- Change Password Form -->
                                    <form method="post" action="{{ route('password.update') }}"
                                        class="mt-6 space-y-6">
                                        @csrf
                                        @method('put')
                                        <div class="row mb-3">
                                            <label for="currentPassword"
                                                class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input n class="form-control" id="current_password"
                                                    name="current_password" type="password" class="mt-1 block w-full"
                                                    autocomplete="current-password">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input class="form-control" id="password" name="password"
                                                    type="password" class="mt-1 block w-full"
                                                    autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="renewPassword"
                                                class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input class="form-control" id="password_confirmation"
                                                    name="password_confirmation" type="password"
                                                    class="mt-1 block w-full" autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Change Password</button>
                                        </div>
                                    </form><!-- End Change Password Form -->

                                </div>

                                <div class="tab-pane fade pt-3" id="delete">
                                    <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                                        @csrf
                                        @method('delete')

                                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                            {{ __('Are you sure you want to delete your account?') }}
                                        </h2>

                                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                                        </p>

                                        <div class="row mb-3">
                                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Enter
                                                Your Password </label>
                                            <div class="col-md-8 col-lg-9">
                                                <input class="form-control" id="password" name="password"
                                                    type="password" class="mt-1 block w-3/4"
                                                    placeholder="{{ __('Password') }}">
                                            </div>

                                            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                                        </div>
                                        <div class="text-center">
                                            <div class="mt-6 flex justify-end">

                                                <button class="btn btn-primary"
                                                    x-on:click="$dispatch('close'">Cencel</button>
                                                <button type="submit" class="btn btn-danger">Delete Account</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>

        </section>


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layouts.include.footer')
    <!-- End Footer-->


    @yield('modal')

    <!-- Vendor JS Files -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="{{ asset('admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.18/dist/sweetalert2.all.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @yield('vendor_js')

    <script>
        @if (session()->has('sukses'))
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });
            Toast.fire({
                icon: "success",
                title: "{{ session()->pull('sukses') }}"
            });
        @elseif (session()->has('danger'))
            Toast.fire({
                icon: "error",
                title: "{{ session()->pull('danger') }}"
            });
        @endif
    </script>

    @yield('sweetalert')


    <!-- Template Main JS File -->
    <script src="{{ asset('admin/assets/js/main.js') }}"></script>
    @yield('script_js')

</body>

</html>
