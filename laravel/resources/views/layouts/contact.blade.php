@extends('product.header')

<header class="navigation">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.html"><img class="img-fluid" src="{{ asset('images/logo.png') }}" alt="parsa"></a>
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
                            <form action="{{route('logout')}} " method="post" >
                                @csrf
                                <input type="submit" value="Log out" class="btn btn-outline-danger mt-2">
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link text-uppercase text-dark">Log in</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link text-uppercase text-dark ">Register</a>
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

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="mb-4">Contact Us</h2>
                <img src="{{ asset('images/contact.jpg') }}" alt="author" class="img-fluid w-100 mb-4">
                <p class="mb-5">Strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream and, as I lie close to the earth, a thousand unknown plants are noticed by me.<br><br>When I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath of that universal love which bears and sustains.</p>
                <form action="#" class="row">
                    <div class="col-lg-6">
                        <input type="text" class="form-control mb-4" name="name" id="name" placeholder="Name">
                    </div>
                    <div class="col-lg-6">
                        <input type="email" class="form-control mb-4" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="col-12">
                        <textarea name="message" id="message" class="form-control mb-4" placeholder="Message..."></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@extends('product.footer')
