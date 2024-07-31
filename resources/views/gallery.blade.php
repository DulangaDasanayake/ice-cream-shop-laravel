@extends('layouts.main')
@section('content')
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