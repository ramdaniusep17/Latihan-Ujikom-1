<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Company Profile</title>

        <link rel="shortcut icon" href="{{asset('assets/img/smk.png')}}" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/quill/quill.snow.css')}}}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">


        <!-- Template Main CSS File -->
        <link href="{{asset('assets/css/admin.css')}}" rel="stylesheet">

        <!-- =======================================================
        * Template Name: NiceAdmin
        * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        * Updated: Apr 20 2024 with Bootstrap v5.3.3
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->

         <!--Alert-->
         <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </head>

    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">

            <div class="d-flex align-items-center justify-content-between">
                <a href="{{route('admin.dashboard')}}" class="logo d-flex align-items-center">
                    <img src="{{asset('assets/img/smk.png')}}" alt="">
                    <span class="d-none d-lg-block">Violett.</span>
                </a>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- End Logo -->


            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">
                    <li class="nav-item dropdown pe-3">
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <!-- <img src="{{asset('assets/img/asuka.jpeg')}}" alt="Profile" class="rounded-circle"> -->
                            <span class="d-none d-md-block dropdown-toggle ps-2">ADMIN</span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <!-- <li class="dropdown-header">
                                <h6>Cepy Wahyudin</h6>
                                <span>Headmaster</span>
                            </li> -->

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </a>
                            </li>

                        </ul><!-- End Profile Dropdown Items -->
                    </li><!-- End Profile Nav -->
                </ul>
            </nav><!-- End Icons Navigation -->

        </header><!-- End Header -->

        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar d-flex flex-column">
            <ul class="sidebar-nav flex-grow-1" id="sidebar-nav">
                <!-- Navigation Items -->
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.dashboard')}}">
                        <i class="bi bi-grid"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.product')}}">
                        <i class="bi bi-people-fill"></i>
                        <span>Product</span>
                    </a>
                </li>

                <li class="nav-item has-sub">
                    <a class="nav-link" data-bs-toggle="collapse" href="#tablesMenu" role="button" aria-expanded="false" aria-controls="tablesMenu">
                        <i class="bi bi-newspaper"></i>
                        <span>Artikel</span>
                        <i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul class="collapse" id="tablesMenu">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-people-fill"></i>List Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.article') }}"><i class="bi bi-people-fill"></i>Artikel Detail</a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.galery')}}">
                        <i class="bi bi-card-list"></i>
                        <span>Galery</span>
                    </a>
                </li>
            </ul>
            <ul class="sidebar-nav">
                <li class="nav-item logout-item">
                    <a class="nav-link logout-btn" href="{{ route('logout') }}">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Logout</span>
                    </a>
                </li>


            </ul>
        </aside>


        <main id="main" class="main">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        @yield('content')

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="copyright">
                &copy; Copyright <strong><span>Viora</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="#">BootstrapMade</a>
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/vendor/chart.js/chart.umd.js')}}"></script>
        <script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>
        <script src="{{asset('assets/vendor/quill/quill.js')}}"></script>
        <script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
        <script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
        <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

        <!-- Template Main JS File -->
        <script src="{{asset('assets/js/kepsek.js')}}"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const logoutButton = document.querySelector('.logout-btn');

                logoutButton.addEventListener('click', function (e) {
                    e.preventDefault(); // Mencegah navigasi langsung
                    const logoutUrl = this.href; // Ambil URL logout dari atribut href

                    Swal.fire({
                        title: 'Apakah Anda ingin logout?',
                        text: "Anda akan keluar dari sesi ini.",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, logout',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Redirect ke URL logout jika pengguna mengonfirmasi
                            window.location.href = logoutUrl;
                        }
                    });
                });
            });
        </script>



    </body>
</html>
