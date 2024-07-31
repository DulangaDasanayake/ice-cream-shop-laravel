@extends('layouts.main')
@section('content')
    <section class="my-2 py-3 checkout">
        <div class="container text-center mt-1 pt-5">
            <h2>Checkout</h2>
            <hr class="mx-auto">
        </div>

        <div class="mx-auto container">
            <form id="checkout-form" action="{{ route('place_order') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col-md-6 form-group">
                        <label for="checkout-name">Name</label>
                        <input type="text" class="form-control" id="checkout-name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="checkout-email">Email</label>
                        <input type="email" class="form-control" id="checkout-email" name="email" placeholder="Your Working Email" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 form-group">
                        <label for="checkout-phone">Phone</label>
                        <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="Your Mobile Phone Number" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="checkout-city">City</label>
                        <input type="text" class="form-control" id="checkout-city" name="city" placeholder="Your City" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="checkout-address">Address</label>
                    <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Your Address" required>
                </div>

                @if (Session::has('total'))
                    @if (Session::get('total') != null)
                        <div class="form-group checkout-btn-container">
                            <p style="color: #FF5722; font-size: 1.2rem;">Total amount: ${{ Session::get('total') }}</p>
                            <input type="submit" class="btn btn-primary mt-2" id="checkout-btn" name="checkout_btn" value="Checkout">
                        </div>
                    @endif
                @endif

            </form>
        </div>
    </section>
@endsection
