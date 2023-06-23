@extends('admin.layouts.header')
<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

     @extends('admin.layouts.sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav
                class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                id="layout-navbar"
            >
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center justify-content-between" id="navbar-collapse">
                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item d-flex align-items-center">
                            <i class="bx bx-search fs-4 lh-0"></i>
                            <input
                                type="text"
                                class="form-control border-0 shadow-none"
                                placeholder="Search..."
                                aria-label="Search..."
                            />
                        </div>
                    </div>
                    <!-- /Search -->
                    <a href="javascript:void(0)" class="btn btn-sm btn-outline-danger"><i class="bx bx-log-out-circle"></i> Logout</a>
                    @extends('admin.layouts.footer')
                </div>
            </nav>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">
                        <div class="col-lg-6 col-md-4 order-1">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <img
                                                        src="{{ asset('../assets/img/icons/unicons/chart-success.png') }}"
                                                        alt="chart success"
                                                        class="rounded"
                                                    />
                                                </div>

                                            </div>
                                            <span class="fw-semibold d-block mb-1">Total Articles</span>
                                            <h3 class="card-title mb-2">{{ $articles->count() + $tags->count() + $categories->count() }}</h3>
                                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> {{ $articles->count() + $tags->count() + $categories->count() }}</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <img
                                                        src="{{ asset('../assets/img/icons/unicons/wallet-info.png') }}"
                                                        alt="Credit Card"
                                                        class="rounded"
                                                    />
                                                </div>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn p-0"
                                                        type="button"
                                                        id="cardOpt6"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                    >
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                                        <a class="dropdown-item" href="{{ route('admin.category') }}">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <span>Categories</span>
                                            <h3 class="card-title text-nowrap mb-1">{{$categories->count()}}</h3>
                                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>{{$categories->count()}}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Total Revenue -->
                        <!--/ Total Revenue -->
                        <div class="col-lg-6 col-md-4 order-3 order-md-2">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <img src="{{ asset('../assets/img/icons/unicons/paypal.png') }}" alt="Credit Card" class="rounded" />
                                                </div>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn p-0"
                                                        type="button"
                                                        id="cardOpt4"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                    >
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                                        <a class="dropdown-item" href="{{route('admin.tag')}}">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="d-block mb-1">Tag</span>
                                            <h3 class="card-title text-nowrap mb-2">{{$tags->count()}}</h3>
                                            <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> {{$tags->count()}}</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <img src="{{ asset('../assets/img/icons/unicons/cc-primary.png') }}" alt="Credit Card" class="rounded" />
                                                </div>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn p-0"
                                                        type="button"
                                                        id="cardOpt1"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                    >
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                                        <a class="dropdown-item" href="{{route('admin.article')}}">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="fw-semibold d-block mb-1">Article</span>
                                            <h3 class="card-title mb-2">{{ $articles->count() }}</h3>
                                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>{{$articles->count()}}</small>

                                        </div>
                                    </div>
                                </div>
                                <!-- </div>
                <div class="row"> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Content -->

                <!-- Footer -->
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
<!-- build:js assets('') /vendor/js/core.js -->
<script src="{{ asset('../assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('../assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('../assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<script src="{{ asset('../assets/vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('../assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('../assets/js/main.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('../assets/js/dashboards-analytics.js') }}"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
