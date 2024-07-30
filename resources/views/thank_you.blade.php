@extends('layouts.main')

@section('content')
    <section class="container mt-2 my-3 py-5" style="margin:50px auto;">
        <div class="container mt-2 text-center">

            <h3 style="margin-bottom: 20px">Thank you</h3>

            
                @if (Session::has('order_id') && Session::get('order_id') != null)
                    <h4 style="color: blue" class="my-5">Order id: ${{ Session::get('order_id') }}</h4>

                    <p>Please keep order id in safe place for future reference!</p>
                @endif

        </div>
    </section>
    
@endsection
