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
                <div class="container">
                    <div class="col-md-6 mt-5">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{route('article.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <label for="defaultFormControlInput" class="form-label">Create article
                                            title</label>
                                        <input name="title" value="{{ old('title') }}" type="text" class="form-control"
                                               id="defaultFormControlInput" placeholder="Title"
                                               aria-describedby="defaultFormControlHelp">
                                        <label for="content" class="form-label my-3">
                                            Content
                                            <textarea name="content" class="form-control"
                                                      placeholder="Content for article" id="content" cols="50" rows="3">
                                                {{ old('content') }}
                                            </textarea>
                                        </label>
                                        <br>

                                        <label for="category_id">Category:</label>

                                        <select name="category_id" id="category_id" class="form-control w-50">
                                            <option value="">Select a category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                            <label for="tags">Tags</label>
                                            <select name="tags[]" id="tags" class="form-control" multiple>
                                                @foreach ($tags as $tag)
                                                    <option value="{{ $tag->id }}" {{ in_array($tag->id, old('tags', $article->tags->pluck('id')->toArray())) ? 'selected' : '' }}>
                                                        {{ $tag->title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        <div class="my-3">
                                            <label for="formFile" class="form-label">Add Preview Image</label>
                                            <input class="form-control" type="file" name="preview_image" id="formFile">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Add Main Image</label>
                                            <input class="form-control" name="main_image" type="file" id="formFile">
                                        </div>

                                        <div id="defaultFormControlHelp" class="form-text">
                                            We'll never share your details with anyone else.
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-2">Send</button>
                                        <a href="{{route('admin.article')}}" class="btn btn-success mt-2">Back</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Content -->


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
