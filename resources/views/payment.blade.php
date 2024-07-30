@extends('layouts.main')

@section('content')
    <section class="container mt-2 my-3 py-5">
        <div class="container mt-2 text-center">

            <h4>Payment</h4>

            @if (Session::has('total') && Session::get('total') != null)
                @if (Session::has('order_id') && Session::get('order_id') != null)
                    <h4 style="color: blue" class="my-5">Total: ${{ Session::get('total') }}</h4>

                    <div id="paypal-button-container" class="paypal-button-container"></div>
                @endif
            @endif
        </div>
    </section>

    <style>
        .paypal-button-container {
            display: block;
            margin: 0 auto;
            max-width: 300px;
            /* Adjust width as needed */
        }
    </style>

    <script
        src="https://www.paypal.com/sdk/js?client-id=AV504DWwGNuC4p57fr0QIwBtvSfkasNLM8hhYQ-ZKUa-l7U8uG-2M5bHNg5jHWt8VoQHATuHlfzTZpEV&currency=USD">
    </script>

    <script>
        paypal.Buttons({
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '77.44'
                        }
                    }]
                });
            },

            onApprove: function(data, actions) {
                return actions.order.capture().then(function(orderData) {
                    console.log('Capture results', orderData, JSON.stringify(orderData, null, 2));
                    var transaction = orderData.purchase_units[0].payments.captures[0];
                    alert('Transaction ' + transaction.status + ':' + transaction.id +
                        '\n\nSee console for all available details');
                });
            }
        }).render('#paypal-button-container');
    </script>
@endsection
