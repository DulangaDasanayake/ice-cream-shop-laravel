@extends('layouts.main')
@section('content')
    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="index.html" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">F</span>ROZEN</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link">Home</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                        <a href="{{ route('products') }}" class="nav-item nav-link">Products</a>
                    </div>
                    <a href="index.html" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">F</span>ROZEN</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{route('service')}}" class="nav-item nav-link">Service</a>
                        <a href="{{route('gallery')}}" class="nav-item nav-link active">Gallery</a>
                        <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Gallery</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a href="{{ route('home') }}" class="nav-item nav-link active">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Gallery</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

<!-- Portfolio Start -->
<div class="container-fluid my-5 py-5 px-0">
    <div class="row justify-content-center m-0">
        <div class="col-lg-5">
            <h1 class="section-title position-relative text-center mb-5">Delicious Ice Cream Made From Our Very Own
                Organic Milk</h1>
        </div>
    </div>
    <div class="row m-0 portfolio-container">
        <div class="col-lg-4 col-md-6 p-0 portfolio-item">
            <div class="position-relative overflow-hidden">
                <img class="img-fluid w-100" src="{{ asset('img/portfolio-1.jpg') }}" alt="">
                <a class="portfolio-btn" href="{{ asset('img/portfolio-1.jpg') }}" data-lightbox="portfolio">
                    <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 p-0 portfolio-item">
            <div class="position-relative overflow-hidden">
                <img class="img-fluid w-100" src="{{ asset('img/portfolio-2.jpg') }}" alt="">
                <a class="portfolio-btn" href="{{ asset('img/portfolio-2.jpg') }}" data-lightbox="portfolio">
                    <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 p-0 portfolio-item">
            <div class="position-relative overflow-hidden">
                <img class="img-fluid w-100" src="{{ asset('img/portfolio-3.jpg') }}" alt="">
                <a class="portfolio-btn" href="{{ asset('img/portfolio-3.jpg') }}" data-lightbox="portfolio">
                    <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 p-0 portfolio-item">
            <div class="position-relative overflow-hidden">
                <img class="img-fluid w-100" src="{{ asset('img/portfolio-4.jpg') }}" alt="">
                <a class="portfolio-btn" href="{{ asset('img/portfolio-4.jpg') }}" data-lightbox="portfolio">
                    <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 p-0 portfolio-item">
            <div class="position-relative overflow-hidden">
                <img class="img-fluid w-100" src="{{ asset('img/portfolio-5.jpg') }}" alt="">
                <a class="portfolio-btn" href="{{ asset('img/portfolio-5.jpg') }}" data-lightbox="portfolio">
                    <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 p-0 portfolio-item">
            <div class="position-relative overflow-hidden">
                <img class="img-fluid w-100" src="{{ asset('img/portfolio-6.jpg') }}" alt="">
                <a class="portfolio-btn" href="{{ asset('img/portfolio-6.jpg') }}" data-lightbox="portfolio">
                    <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio End -->

@endsection