@extends('layouts.main')
@section('content')
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Service</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a href="{{ route('home') }}" class="nav-item nav-link active">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Service</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

<!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="section-title position-relative mb-5">Best Services We Provide For Our Clients</h1>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel service-carousel">
                    <div class="service-item">
                        <div class="service-img mx-auto">
                            <img class="rounded-circle w-100 h-100 bg-light p-3" src="{{ asset('img/service-1.jpg') }}"
                                style="object-fit: cover;">
                        </div>
                        <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                            <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Quality Maintain</h5>
                            <p>We are committed to maintaining the highest standards of quality in every scoop. Our team
                                meticulously selects premium ingredients and follows strict processes to ensure every
                                batch meets our excellence.</p>
                            <a href=""
                                class="border-bottom border-secondary text-decoration-none text-secondary">Learn
                                More</a>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-img mx-auto">
                            <img class="rounded-circle w-100 h-100 bg-light p-3" src="{{ asset('img/service-2.jpg') }}"
                                style="object-fit: cover;">
                        </div>
                        <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                            <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Individual Approach</h5>
                            <p>We tailor our ice cream offerings to suit individual tastes and preferences, ensuring a
                                personalized experience for every customer. Whether it's a unique flavor or a specific
                                dietary requirement.</p>

                            <a href=""
                                class="border-bottom border-secondary text-decoration-none text-secondary">Learn
                                More</a>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-img mx-auto">
                            <img class="rounded-circle w-100 h-100 bg-light p-3"
                                src="{{ asset('img/service-3.jpg') }}" style="object-fit: cover;">
                        </div>
                        <div class="position-relative text-center bg-light rounded p-4 pb-5"
                            style="margin-top: -75px;">
                            <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Celebration Ice Cream</h5>
                            <p>Make every celebration sweeter with our custom ice cream creations. From birthdays to
                                anniversaries, our delightful flavors and festive designs add a special touch to your
                                events.</p>

                            <a href=""
                                class="border-bottom border-secondary text-decoration-none text-secondary">Learn
                                More</a>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-img mx-auto">
                            <img class="rounded-circle w-100 h-100 bg-light p-3"
                                src="{{ asset('img/service-4.jpg') }}" style="object-fit: cover;">
                        </div>
                        <div class="position-relative text-center bg-light rounded p-4 pb-5"
                            style="margin-top: -75px;">
                            <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Delivery To Any Point</h5>
                            <p>Enjoy our delicious ice cream from the comfort of your home. We offer delivery services
                                to any location, ensuring that you can indulge in your favorite treats anytime,
                                anywhere.</p>

                            <a href=""
                                class="border-bottom border-secondary text-decoration-none text-secondary">Learn
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->
@endsection