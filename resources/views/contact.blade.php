@extends('layouts.main')
@section('content')
<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Contact</h1>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
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
