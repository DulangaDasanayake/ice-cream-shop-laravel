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
                        <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                        <a href="{{ route('products') }}" class="nav-item nav-link">Products</a>
                    </div>
                    <a href="index.html" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">F</span>ROZEN</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{route('service')}}" class="nav-item nav-link">Service</a>
                        <a href="{{route('gallery')}}" class="nav-item nav-link">Gallery</a>
                        <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Traditional & Delicious</h4>
                            <h1 class="display-3 text-white mb-md-4">Traditional Ice Cream Since 2001</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Traditional & Delicious</h4>
                            <h1 class="display-3 text-white mb-md-4">Made From Our Own Organic Milk</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n1"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n1"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">Traditional & Delicious Ice Cream Since 2001
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">About Us</h4>
                    <h5 class="text-muted mb-3">Since 2001, we've been crafting traditional and delicious ice cream using the
                        finest ingredients</h5>
                    <p>Our journey began in a small shop, and today, we're renowned for our rich and creamy ice cream,
                        made with love and passion. We believe in quality and tradition, offering a taste of nostalgia with
                        every scoop.</p>
                    <a href="" class="btn btn-secondary mt-2">Learn More</a>
                </div>
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="{{ asset('img/about.jpg') }}"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Our Features</h4>
                    <p>Our journey began in a small shop, and today, we're renowned for our rich and creamy ice cream,
                        made with love and passion. We believe in quality and tradition, offering a taste of nostalgia with
                        every scoop.</p>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>"All-natural ingredients"
                    </h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>"Handcrafted recipes"</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>"Locally sourced dairy"</h5>
                    <a href="" class="btn btn-primary mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Promotion Start -->
    <div class="container-fluid my-5 py-5 px-0">
        <div class="row bg-primary m-0">
            <div class="col-md-6 px-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="{{ asset('img/promotion.jpg') }}"
                        style="object-fit: cover;">
                    <button type="button" class="btn-play" data-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 py-5 py-md-0 px-0">
                <div class="h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <div class="d-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                        style="width: 100px; height: 100px;">
                        <h3 class="font-weight-bold text-secondary mb-0">$199</h3>
                    </div>
                    <h3 class="font-weight-bold text-white mt-3 mb-4">Chocolate Ice Cream</h3>
                    <p class="text-white mb-4">Indulge in our rich and creamy Chocolate Ice Cream,
                        crafted from the finest cocoa beans and fresh dairy. With a perfect balance of sweetness and deep
                        chocolate flavor, each bite is a delightful experience. Treat yourself to a timeless classic that
                        satisfies every
                        chocolate lover's craving.</p>
                    <a href="" class="btn btn-secondary py-3 px-5 mt-2">Order Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Promotion End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


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


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Best Prices We Offer For Ice Cream Lovers</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel product-carousel">

                        @foreach ($products as $product)
                            <div
                                class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                                <div class="bg-primary mt-n5 py-3" style="width: 80px;">

                                    @if ($product->sale_price != null)
                                        <h6 class="font-weight-bold text-white mb-0">${{ $product->sale_price }}</h6>
                                        <h6 class="font-weight-bold text-white mb-0"
                                            style="text-decoration: line-through;">${{ $product->price }}</h6>
                                    @else
                                        <h4 class="font-weight-bold text-white mb-0">${{ $product->sale_price }}</h4>
                                    @endif

                                </div>
                                <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3"
                                    style="width: 150px; height: 150px;">
                                    <img class="rounded-circle w-100 h-100" src="{{ asset('img/' . $product->image) }}"
                                        style="object-fit: cover;">
                                </div>
                                <h6 class="font-weight-bold mb-4">

                                    <a
                                        href="{{ route('single_product', ['id' => $product->id]) }}">{{ $product->name }}</a>

                                </h6>

                                <form method="POST" action="{{ route('add_to_cart') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="hidden" name="name" value="{{ $product->name }}">
                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                    <input type="hidden" name="sale_price" value="{{ $product->sale_price }}">
                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="image" value="{{ $product->image }}">
                                    <input type="submit" value="Add to Cart" class="btn btn-primary py-md-3 px-md-5 mt-2">
                                </form>

                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Experienced & Most Famous Ice Cream Chefs</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel team-carousel">
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="{{ asset('img/team-1.jpg') }}"
                                    style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5"
                                style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">David Martinez</h3>
                                <h6 class="text-uppercase text-muted mb-4">Chief Executive Officer</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="{{ asset('img/team-2.jpg') }}"
                                    style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5"
                                style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Alice Johnson</h3>
                                <h6 class="text-uppercase text-muted mb-4">Head of Operations</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="{{ asset('img/team-3.jpg') }}"
                                    style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5"
                                style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">William Locksmith</h3>
                                <h6 class="text-uppercase text-muted mb-4">Lead Ice Cream Chef</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="{{ asset('img/team-4.jpg') }}"
                                    style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5"
                                style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Michael Brown</h3>
                                <h6 class="text-uppercase text-muted mb-4">Creative Director</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Clients Say About Our Famous Ice Cream</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="owl-carousel testimonial-carousel">
                    <div class="text-center">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <h4 class="font-weight-light mb-4">"The ice cream here is absolutely delightful! The flavors are rich and creamy, and the texture is perfect. I've never had anything like it. My personal favorite is the chocolate fudge. It always brings a smile to my face."</h4>
                        <img class="img-fluid mx-auto mb-3" src="{{ asset('img/testimonial-1.jpg') }}" alt="">
                        <h5 class="font-weight-bold m-0">Bob Michael</h5>
                        <span>Graphic Designer</span>
                    </div>
                    <div class="text-center">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <h4 class="font-weight-light mb-4">"I've tried ice cream from many places, but nothing beats the unique flavors and quality offered here. The customer service is excellent, and they always make you feel welcome. Highly recommend the strawberry cheesecake flavor."</h4>
                        <img class="img-fluid mx-auto mb-3" src="{{ asset('img/testimonial-2.jpg') }}" alt="">
                        <h5 class="font-weight-bold m-0">Harry Green</h5>
                        <span>Photographer</span>
                    </div>
                    <div class="text-center">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <h4 class="font-weight-light mb-4">"This place has the best ice cream I've ever tasted. The ingredients are fresh, and you can really taste the difference. My kids love coming here, and it's always a highlight of our day. The mint chocolate chip is a must-try!"</h4>
                        <img class="img-fluid mx-auto mb-3" src="{{ asset('img/testimonial-3.jpg') }}" alt="">
                        <h5 class="font-weight-bold m-0">Evan Tyson</h5>
                        <span>Marketing Specialist</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

@endsection
