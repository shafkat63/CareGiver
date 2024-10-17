<!DOCTYPE html>

<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
>
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
        />
        <title>Subarta Care Management  @yield("title")</title>
        <meta name="description" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- Favicon -->
        <link
            rel="icon"
            type="image/x-icon"
            href="{{ asset('assets/img/subarta.png') }}"
        />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet"
        />
        <!-- Icons. Uncomment required icon fonts -->
        <link
            rel="stylesheet"
            href="{{ asset('assets/vendor/fonts/boxicons.css') }}"
        />
        <!-- Core CSS -->
        <link
            rel="stylesheet"
            href="{{ asset('assets/vendor/css/core.css') }}"
            class="template-customizer-core-css"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets/vendor/css/theme-default.css') }}"
            class="template-customizer-theme-css"
        />
        <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/select2.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.css') }}" />
        <!-- Vendors CSS -->
        <link
            rel="stylesheet"
            href="{{
                asset(
                    'assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css'
                )
            }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}"
        />
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
            rel="stylesheet"
        />

        <!-- Page CSS -->
        <!-- Helpers -->
        <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
        <script src="{{ asset('assets/js/config.js') }}"></script>


        @yield('style')
    </head>

    <body>
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <!-- Menu -->
                <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                    <div class="app-brand demo">
                        <a href="{{ url('dashboard') }}" class="app-brand-link">
                            <span class="app-brand-text demo menu-text fw-bolder ms-2"><img src="{{ asset('assets/img/subarta.png') }}" width="50px"/>CareGiver</span>
                        </a>
                        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                            <i class="bx bx-chevron-left bx-sm align-middle"></i>
                        </a>
                    </div>
                    <div class="menu-inner-shadow"></div>
                    <ul class="menu-inner py-1">
                        <li class="menu-item {{Request::is('dashboard') ?'active open':''}}">
                            <a href="{{ url('dashboard') }}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                                <div data-i18n="Analytics">Dashboard</div>
                            </a>
                        </li>
                        <li class="menu-header small text-uppercase">
                            <span class="menu-header-text" data-i18n="Apps &amp; Pages" >User Role &amp; Permissions</span>
                        </li>
                        <li class="menu-item {{Request::is('Role')||Request::is('Permission')||Request::is('User') ?'active open':''}}">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons bx bx-check-shield"></i>
                                <div class="text-truncate" data-i18n="Roles &amp; Permissions">
                                    Roles &amp; Permissions
                                </div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item {{Request::is('Role') ?'active open':''}}">
                                    <a href="{{ url('Role') }}" class="menu-link">
                                        <div class="text-truncate" data-i18n="Roles">
                                            Roles
                                        </div>
                                    </a>
                                </li>
                                <li class="menu-item {{Request::is('Permission') ?'active open':''}}">
                                    <a href="{{ url('Permission') }}" class="menu-link">
                                        <div class="text-truncate" data-i18n="Permission">
                                            Permission
                                        </div>
                                    </a>
                                </li>
                                <li class="menu-item  {{Request::is('User') ?'active open':''}}">
                                    <a href="{{ url('User') }}" class="menu-link">
                                        <div class="text-truncate" data-i18n="Permission">
                                            User
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-header small text-uppercase">
                            <span class="menu-header-text" data-i18n="Apps &amp; Pages">Setup &amp; Config</span>
                        </li>
                        <li class="menu-item {{Request::is('Division')||Request::is('District')||Request::is('Thana')||Request::is('Location')||Request::is('Project')||Request::is('Flat')||Request::is('TarrifInfo')||Request::is('Customer')||Request::is('MeterInfo') ?'active open':''}}">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                                <div class="text-truncate" data-i18n="Authentications">
                                    Setup & Config
                                </div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item {{Request::is('Division')||Request::is('District')||Request::is('Thana')||Request::is('Location')||Request::is('Project')||Request::is('Flat') ?'active open':''}}">
                                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                                        <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                                        <div class="text-truncate" data-i18n="Login">
                                            Basic Setup
                                        </div>
                                    </a>
                                    <ul class="menu-sub">
                                        <li class="menu-item  {{Request::is('Division') ?'active open':''}}">
                                            <a href="{{ url('Division') }}" class="menu-link">
                                                <div class="text-truncate" data-i18n="Permission">
                                                    Division
                                                </div>
                                            </a>
                                        </li>
                                        <li class="menu-item  {{Request::is('District') ?'active open':''}}">
                                            <a href="{{ url('District') }}" class="menu-link">
                                                <div class="text-truncate" data-i18n="Permission">
                                                    District
                                                </div>
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </li>
                               

                               
                            </ul>
                        </li>
                        <li class="menu-header small text-uppercase">
                            <span class="menu-header-text" data-i18n="Apps &amp; Pages">Payment</span>
                        </li>
                        <li class="menu-item {{Request::is('Payment') ?'active open':''}}">
                            <a href="{{ url('Payment') }}" class="menu-link">
                                <i class="menu-icon tf-icons bx bxs-wallet"></i>
                                <div data-i18n="Analytics">Payment</div>
                            </a>
                        </li>
                    </ul>
                </aside>
                <!-- / Menu -->

                <!-- Layout container -->
                <div class="layout-page">
                    <!-- Navbar -->
                    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                <i class="bx bx-menu bx-sm"></i>
                            </a>
                        </div>

                        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                            <div class="navbar-nav align-items-center">
                                <div class="nav-item d-flex align-items-center"></div>
                            </div>

                            <ul class="navbar-nav flex-row align-items-center ms-auto">
                                <!-- User -->
                                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <div class="avatar avatar-online">
                                            <img src="{{asset('assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle"/>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <img src="{{ asset('assets/img/avatars/1.png')}}" alt="User Avatar" class="avatar avatar-online rounded-circle" style="
                                                                width: 40px;
                                                                height: 40px;
                                                            "/>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        {{-- <span class="fw-bold d-block">{{ auth()->user()->name }}</span>
                                                        <small class="text-muted">{{ auth()->user()->email }}</small> --}}
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="dropdown-item">
                                                    Logout
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ User -->
                            </ul>
                        </div>
                    </nav>
                    <!-- / Navbar -->

                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->
                        <div class="container-xxl flex-grow-1 container-p-y">
                            @yield('main')
                        </div>
                        <!-- / Content -->

                        <!-- Footer -->
                        <footer class="content-footer footer bg-footer-theme">
                            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                                <div class="mb-2 mb-md-0">©<script>document.write(new Date().getFullYear());</script>, Powered by<a href="https://srl.com.bd" target="_blank" class="footer-link fw-bolder">System Resources Limited</a></div>
                            </div>
                        </footer>
                        <!-- / Footer -->

                        <div class="content-backdrop fade"></div>
                    </div>
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <!-- / Layout wrapper -->

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
        <script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
        <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
        <script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

        <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

        <!-- Main JS -->
        <script src="{{ asset('assets/js/main.js') }}"></script>

        <!-- Page JS -->
        <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

        <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>

        <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
        <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
        <script>
            function showErrors(errors) {
                // Clear previous errors
                $('.form-control').removeClass('is-invalid');
                $('.invalid-feedback').remove();

                // Display new errors
                $.each(errors, function (key, errorMessages) {
                    var inputElement = $('#' + key);
                    inputElement.addClass('is-invalid');

                    // Create a div to display error message
                    var errorDiv = $('<div class="invalid-feedback"></div>').text(errorMessages[0]);
                    inputElement.after(errorDiv);
                });
            }
        </script>
        @yield('script')
    </body>
</html>
