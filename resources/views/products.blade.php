@extends('layouts.main')
@section('content')
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Products</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a href="{{ route('home') }}" class="nav-item nav-link active">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Products</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">
                        Best Prices We Offer For Ice Cream Lovers
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel product-carousel">
                        @foreach ($products as $product)
                            <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                                <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                    @if ($product->sale_price != null)
                                        <h4 class="font-weight-bold text-white mb-0">${{ $product->sale_price }}</h4>
                                        <h4 class="font-weight-bold text-white mb-0" style="text-decoration: line-through;">
                                            ${{ $product->price }}</h4>
                                    @else
                                        <h4 class="font-weight-bold text-white mb-0">${{ $product->price }}</h4>
                                    @endif
                                </div>
                                <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3"
                                    style="width: 150px; height: 150px;">
                                    <img class="rounded-circle w-100 h-100" src="{{ asset('img/' . $product->image) }}"
                                        style="object-fit: cover;">
                                </div>
                                <h5 class="font-weight-bold mb-4">{{ $product->name }}</h5>

                                <form method="POST" action="{{ route('add_to_cart') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="hidden" name="name" value="{{ $product->name }}">
                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                    <input type="hidden" name="sale_price" value="{{ $product->sale_price }}">
                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="image" value="{{ $product->image }}">
                                    <input type="submit" value="Add to Cart">
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <a href="#" class="btn btn-primary py-3 px-5">Load More</a>
            </div>
        </div>
    </div>
    <!-- Products End -->
@endsection
