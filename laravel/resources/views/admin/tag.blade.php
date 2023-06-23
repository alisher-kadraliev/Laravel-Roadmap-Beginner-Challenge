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

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
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

                </div>
            </nav>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="card">
                        <div class="d-flex justify-content-between ">
                            <h5 class="card-header">Tag</h5>
                            <a href="{{route('tag.create')}}" class="btn btn-primary" style="height: 43px; margin-top:14px;margin-right:14px">Create Tag</a>
                        </div>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Tag</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                @foreach($tags as $tag)
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$tag->title}}</strong></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{route('tag.edit', $tag->id)}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <form action="{{route('tag.destroy', $tag->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class=" dropdown-item"><i
                                                                class="bx bx-trash me-1"> Delete</i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
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
