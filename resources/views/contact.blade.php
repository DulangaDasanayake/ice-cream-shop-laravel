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
                        <a href="{{route('gallery')}}" class="nav-item nav-link">Gallery</a>
                        <a href="{{route('contact')}}" class="nav-item nav-link active">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Contact</h1>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a href="{{ route('home') }}" class="nav-item nav-link active">Home</a></p>
            <i class="fa fa-circle px-3"></i>
            <p class="m-0">Contact</p>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Contact Us For Any Query</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="contact-form bg-light rounded shadow-lg p-5">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="name" class="font-weight-bold">Your Name</label>
                                <input type="text" class="form-control form-control-lg" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="email" class="font-weight-bold">Your Email</label>
                                <input type="email" class="form-control form-control-lg" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject" class="font-weight-bold">Subject</label>
                            <input type="text" class="form-control form-control-lg" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                            <div class="invalid-feedback">Please enter a subject.</div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="font-weight-bold">Message</label>
                            <textarea class="form-control form-control-lg" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <div class="invalid-feedback">Please enter your message.</div>
                        </div>
                        <div>
                            <button class="btn btn-primary btn-lg btn-block py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection
