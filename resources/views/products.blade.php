@extends('layouts.main')
@section('content')
    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Best Prices We Offer For Ice Cream Lovers
                    </h1>
                </div>
            </div>
            <div class="row">

                @foreach ($products as $product)
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">

                            @if ($product->sale_price != null)
                                <h4 class="font-weight-bold text-white mb-0">${{ $product->sale_price }}</h4>
                                <h4 class="font-weight-bold text-white mb-0" style="text-decoration: line-through;">
                                    ${{ $product->price }}</h4>
                            @else
                                <h4 class="font-weight-bold text-white mb-0">${{ $product->sale_price }}</h4>
                            @endif

                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3"
                            style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="{{ asset('img/' . $product->image) }}"
                                style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">{{ $product->name }}</h5>
                        <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                    </div>
                @endforeach

                <div class="col-12 text-center">
                    <a href="" class="btn btn-primary py-3 px-5">Load More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->
@endsection
