<!DOCTYPE html>

<html lang="en">
@extends('product.header')
@vite(['resources/css/app.css','resources/js/app.js'])

<body>
<!-- preloader -->
<div class="preloader">
    <div class="loader">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- /preloader -->

<header class="navigation">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.html"><img class="img-fluid" src="{{ asset('images/logo.png') }}"
                                                       alt="parsa"></a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navogation"
                aria-controls="navogation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navogation">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link text-uppercase text-dark dropdown-toggle" href="#" id="navbarDropdown"
                       role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pages
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('home')}}">Home</a>
                        <a class="dropdown-item" href="{{route('about')}}">About</a>
                        <a class="dropdown-item" href="{{route('contact')}}">Contact</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-uppercase text-dark dropdown-toggle" href="#" id="navbarDropdown"
                       role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sorting
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('home')}}">Categories</a>
                        <a class="dropdown-item" href="{{route('about')}}">Tag</a>
                    </div>
                </li>
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a href="{{route('admin.index')}}"  class="nav-link w-uppercase  text-dark"> My Admin panel</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{route('logout')}} " method="post">
                                @csrf
                                <input type="submit" value="Log out" class="btn btn-outline-danger mt-2">
                            </form>
                        </li>

                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link w-uppercase text-dark">Log in</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}"
                                   class="nav-link text-uppercase text-dark ">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
            <form class="form-inline position-relative ml-lg-4">
                <input class="form-control px-0 w-100" type="search" placeholder="Search">
                <!-- <button class="search-icon" type="submit"><i class="ti-search text-dark"></i></button> -->
                <a href="search.html" class="search-icon"><i class="ti-search text-dark"></i></a>
            </form>
        </div>
    </nav>
</header>

<!-- featured post -->
<section class="hero-section ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-end">
                <h1 class="mb-0">Welcome</h1>
                <h2 class="mb-100 title-border-lg">to <i>Jhon Abraham Blog</i></h2>
                <p class="mb-80 mr-5">I’m a Freelance Interactive Art Director based in France. Focusing across branding
                    and
                    identity, digital and
                    print.</p>
                <span class="font-secondary text-dark mr-3 mr-sm-5">Follow</span>
                <ul class="list-inline d-inline-block mb-5">
                    <li class="list-inline-item mx-3"><a href="#" class="text-dark"><i class="ti-facebook"></i></a></li>
                    <li class="list-inline-item mx-3"><a href="#" class="text-dark"><i class="ti-twitter-alt"></i></a>
                    </li>
                    <li class="list-inline-item mx-3"><a href="#" class="text-dark"><i class="ti-linkedin"></i></a></li>
                    <li class="list-inline-item mx-3"><a href="#" class="text-dark"><i class="ti-github"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-6 text-right">
                <img class="img-fluid" src="images/banner-img.png" alt="banner-image">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid p-sm-0">
        <div class="row featured-post-slider">
            @foreach($articles as $article)
            <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
                <article class="card bg-dark text-center text-white border-0 rounded-0">
                    <img class="card-img rounded-0 img-fluid w-100" src="{{ 'storage/' . $article->preview_image }}"
                         alt="post-thumb">
                    <div class="card-img-overlay">
                        <div class="card-content">
                            <p class="text-uppercase">{{ $article->category->title }}</p>
                            <h4 class="card-title mb-4"><a class="text-white" href="blog-single.html">{{ Str::limit($article->title, 50, '...') }}</a></h4>
                            <a class="btn btn-outline-light" href="blog-single.html">read more</a>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- /featured post -->

<!-- blog post -->
<section class="section">
    <div class="container">
        <div class="row masonry-container">
            <div class="col-lg-4 col-sm-6 mb-5">
                <article class="text-center">
                    <img class="img-fluid mb-4" src="{{ asset('images/masonary-post/post-1.jpg') }}" alt="post-thumb">
                    <p class="text-uppercase mb-2">TRAVEL</p>
                    <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a>
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex
                        ea commodo consequat.</p>
                    <a href="blog-single.html" class="btn btn-transparent">read more</a>
                </article>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5">
                <article class="text-center">
                    <img class="img-fluid mb-4" src="{{ asset('images/masonary-post/post-2.jpg') }}" alt="post-thumb">
                    <p class="text-uppercase mb-2">TRAVEL</p>
                    <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a>
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex
                        ea commodo consequat.</p>
                    <a href="blog-single.html" class="btn btn-transparent">read more</a>
                </article>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5">
                <article class="text-center">
                    <img class="img-fluid mb-4" src="{{ asset('images/masonary-post/post-3.jpg') }}" alt="post-thumb">
                    <p class="text-uppercase mb-2">TRAVEL</p>
                    <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a>
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex
                        ea commodo consequat.</p>
                    <a href="blog-single.html" class="btn btn-transparent">read more</a>
                </article>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5">
                <article class="text-center">
                    <img class="img-fluid mb-4" src="{{ asset('images/masonary-post/post-4.jpg') }}" alt="post-thumb">
                    <p class="text-uppercase mb-2">TRAVEL</p>
                    <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a>
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex
                        ea commodo consequat.</p>
                    <a href="blog-single.html" class="btn btn-transparent">read more</a>
                </article>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5">
                <article class="text-center">
                    <img class="img-fluid mb-4" src="{{ asset('images/masonary-post/post-5.jpg') }}" alt="post-thumb">
                    <p class="text-uppercase mb-2">TRAVEL</p>
                    <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a>
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex
                        ea commodo consequat.</p>
                    <a href="blog-single.html" class="btn btn-transparent">read more</a>
                </article>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5">
                <article class="text-center">
                    <img class="img-fluid mb-4" src="{{ asset('images/masonary-post/post-6.jpg') }}" alt="post-thumb">
                    <p class="text-uppercase mb-2">TRAVEL</p>
                    <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a>
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex
                        ea commodo consequat.</p>
                    <a href="blog-single.html" class="btn btn-transparent">read more</a>
                </article>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5">
                <article class="text-center">
                    <img class="img-fluid mb-4" src="{{ asset('images/masonary-post/post-7.jpg') }}" alt="post-thumb">
                    <p class="text-uppercase mb-2">TRAVEL</p>
                    <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a>
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex
                        ea commodo consequat.</p>
                    <a href="blog-single.html" class="btn btn-transparent">read more</a>
                </article>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5">
                <article class="text-center">
                    <img class="img-fluid mb-4" src="{{ asset('images/masonary-post/post-8.jpg') }}" alt="post-thumb">
                    <p class="text-uppercase mb-2">TRAVEL</p>
                    <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a>
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex
                        ea commodo consequat.</p>
                    <a href="blog-single.html" class="btn btn-transparent">read more</a>
                </article>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5">
                <article class="text-center">
                    <img class="img-fluid mb-4" src="{{ asset('images/masonary-post/post-9.jpg') }}" alt="post-thumb">
                    <p class="text-uppercase mb-2">TRAVEL</p>
                    <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a>
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex
                        ea commodo consequat.</p>
                    <a href="blog-single.html" class="btn btn-transparent">read more</a>
                </article>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5">
                <article class="text-center">
                    <img class="img-fluid mb-4" src="{{ asset('images/masonary-post/post-10.jpg') }}" alt="post-thumb">
                    <p class="text-uppercase mb-2">TRAVEL</p>
                    <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a>
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex
                        ea commodo consequat.</p>
                    <a href="blog-single.html" class="btn btn-transparent">read more</a>
                </article>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5">
                <article class="text-center">
                    <img class="img-fluid mb-4" src="{{ asset('images/masonary-post/post-11.jpg') }}" alt="post-thumb">
                    <p class="text-uppercase mb-2">TRAVEL</p>
                    <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a>
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex
                        ea commodo consequat.</p>
                    <a href="blog-single.html" class="btn btn-transparent">read more</a>
                </article>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5">
                <article class="text-center">
                    <img class="img-fluid mb-4" src="{{ asset('images/masonary-post/post-13.jpg') }}" alt="post-thumb">
                    <p class="text-uppercase mb-2">TRAVEL</p>
                    <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a>
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex
                        ea commodo consequat.</p>
                    <a href="blog-single.html" class="btn btn-transparent">read more</a>
                </article>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5">
                <article class="text-center">
                    <img class="img-fluid mb-4" src="{{ asset('images/masonary-post/post-12.jpg') }}" alt="post-thumb">
                    <p class="text-uppercase mb-2">TRAVEL</p>
                    <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a>
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex
                        ea commodo consequat.</p>
                    <a href="blog-single.html" class="btn btn-transparent">read more</a>
                </article>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <nav>
                    <ul class="pagination justify-content-center align-items-center">
                        <li class="page-item">
                            <span class="page-link">&laquo; Previous</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">01</a></li>
                        <li class="page-item active">
                            <span class="page-link">02</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item"><a class="page-link" href="#">04</a></li>
                        <li class="page-item"><a class="page-link" href="#">05</a></li>
                        <li class="page-item"><a class="page-link" href="#">06</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next &raquo;</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- /blog post -->

<!-- instagram -->
<section>
    <div class="container-fluid px-0">
        <div class="row no-gutters instagram-slider" id="instafeed" data-userId="4044026246"
             data-accessToken="4044026246.1677ed0.8896752506ed4402a0519d23b8f50a17"></div>
    </div>
</section>
<!-- /instagram -->

@extends('product.footer')
<!-- jQuery -->
<script src="{{ asset('plugins/jQuery/jquery.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- slick slider -->
<script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
<!-- masonry -->
<script src="{{ asset('plugins/masonry/masonry.js') }}"></script>
<!-- instafeed -->
<script src="{{ asset('plugins/instafeed/instafeed.min.js') }}"></script>
<!-- smooth scroll -->
<script src="{{ asset('plugins/smooth-scroll/smooth-scroll.js') }}"></script>
<!-- headroom -->
<script src="{{ asset('plugins/headroom/headroom.js') }}"></script>
<!-- reading time -->
<script src="{{ asset('plugins/reading-time/readingTime.min.js') }}"></script>

<!-- Main Script -->
<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>

