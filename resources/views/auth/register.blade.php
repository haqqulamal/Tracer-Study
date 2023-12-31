<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset ('admin/assets/img/...') }}" >
    <link rel="icon" type="image/png" href="{{asset ('admin/assets/img/unesa.png') }}">
    <title>
        Register Tracer Study PPG Unesa
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('admin/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link id="pagestyle" href="{{ asset('admin/assets/css/soft-ui-dashboard.css?v=1.0.7') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
</head>

<body class="">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav
                    class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid pe-0">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.html">
                            Tracer Study PPG UNESA
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
                                        href="{{ route('dashboard') }}">
                                        <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i> Dashboard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="{{ route('register') }}">
                                        <i class="fas fa-user-circle opacity-6 text-dark me-1"></i> Sign Up
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="{{ route('login') }}">
                                        <i class="fas fa-key opacity-6 text-dark me-1"></i> Sign In
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h3 class="font-weight-bolder text-info text-gradient">Selamat Datang di Website
                                        Tracer Study PPG Unesa</h3>
                                    <p class="mb-0">Silahkan Daftarkan Akun Anda</p>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <label>Name</label>
                                        <div class="mb-3">
                                            <input id="name" type="text" aria-label="name"
                                                aria-describedby="name-addon"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <label>Email</label>
                                        <div class="mb-3">
                                            <input id="email" type="email" aria-label="Email"
                                                aria-describedby="email-addon"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <label>Password</label>
                                        <div class="mb-3">
                                            <input id="password" type="password" aria-label="Password"
                                                aria-describedby="password-addon"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <label>Password Confirmation</label>
                                        <div class="mb-3">
                                            <input id="password_confirm" type="password" aria-label="PasswordConfirm"
                                                aria-describedby="passwordConfirm-addon"
                                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                                name="password_confirmation" required
                                                autocomplete="password_confirmation">
                                        </div>
                                        <label>Program Studi</label>
                                        <div class="mb-3">
                                            <select name="program_studi" class="form-control" required>
                                                <option value="" disabled selected>Pilih Program Studi</option>
                                                <option value="Pendidikan Guru SD">Pendidikan Guru SD
                                                </option>
                                                <option value="Bimbingan dan Konseling">Bimbingan dan Konseling
                                                </option>
                                                <option value="Pendidikan Kewarganegaraan">Pendidikan Kewarganegaraan
                                                </option>
                                                <option value="Pendidikan Jasmani, Kesehatan, dan Rekreasi">Pendidikan
                                                    Jasmani, Kesehatan, dan Rekreasi
                                                </option>
                                                <option value="Bahasa Inggris">Bahasa Inggris
                                                </option>
                                                <option value="Matematika">Matematika
                                                </option>
                                                <option value="Ekonomi">Ekonomi
                                                </option>
                                                <option value="Sejarah">Sejarah
                                                </option>
                                                <option value="Akuntansi dan Keuangan">Akuntansi dan Keuangan
                                                </option>
                                                <option value="Teknologi Informasi dan Komunikasi">Teknologi Informasi
                                                    dan Komunikasi
                                                </option>
                                                <option value="Teknik Otomotif">Teknik Otomotif
                                                </option>
                                                <option value="Perhotelan dan Jasa Pariwisata">Perhotelan dan Jasa
                                                    Pariwisata
                                                </option>
                                                <option value="Agribisnis Tanaman Pangan dan Holtikultura">Agribisnis
                                                    Tanaman Pangan dan Holtikultura
                                                </option>
                                            </select>
                                        </div>
                                        <label>Tahun Lulus</label>
                                        <div class="mb-3">
                                            <select name="tahun_lulus" class="form-control" required>
                                                <option value="" disabled selected>Pilih Tahun Lulus</option>
                                                <option value="2020">2020
                                                </option>
                                                <option value="2021">2021
                                                </option>
                                                <option value="2022">2022
                                                </option>
                                                <option value="2023">2023
                                                </option>
                                                <option value="2024">2024
                                                </option>
                                                <option value="2025">2025
                                                </option>
                                            </select>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign
                                                Up</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Sudah Punya Akun?
                                        <a href="{{ route('login') }}"
                                            class="text-info text-gradient font-weight-bold">Sign
                                            in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                    style="background-image:url('{{ asset('admin/assets/img/gedungppg.png') }}')">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class="footer py-5">
        <div class="container">>
            <div class="row">
                <div class="col-8 mx-auto text-center mt-1">
                    <p class="mb-0 text-secondary">
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Created by Kel 3 Manpro
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <!--   Core JS Files   -->
    <script src="{{ asset('admin/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('admin/assets/js/soft-ui-dashboard.min.js?v=1.0.7') }}"></script>
</body>

</html>
