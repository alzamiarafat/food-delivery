
@extends('web.index')
@section('home_content')
    <style>
        .row {
            display: -ms-flexbox; /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap; /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
        }

        .col-25 {
            -ms-flex: 25%; /* IE10 */
            flex: 25%;
        }

        .col-50 {
            -ms-flex: 50%; /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%; /* IE10 */
            flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
            padding: 0 16px;
        }

        .container {
            background-color: white;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 3px;
        }

        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        hr {
            border: 1px solid lightgrey;
        }

        span.price {
            float: right;
            color: grey;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
            .row {
                flex-direction: column-reverse;
            }
            .col-25 {
                margin-bottom: 20px;
            }
        }
    </style>


    <div class="content">
        <div class="container-fluid">
            <div class="breadcrumb-box">
                <ul class="breadcrumb" style="background: #f9f9f9;">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                </ul>
            </div>
        </div>
    </div>


    <section class="home">
        <form action="{{ route('order.store') }}" method="POST">
            @csrf
        <div class="content">
            <div class="row">
                <div class="col-75">
                    <div class="container">

                            <h2>Cart List <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">{{ Cart::content()->count() }}</span></h2>
                            <br>
                            <br>
                            @foreach(Cart::content() as $cartItem)
                                <div class="row">
                                    <div class="col-25">
                                        <img src="{{asset('item_images/'.$cartItem->options->image)}}" height="200" width="200">
                                    </div>

                                    <div class="col-75">
                                        <div class="row">
                                            <div class="col-50">
                                                <h4><strong>{{ $cartItem->name }}</strong></h4>
                                                <p>BDT {{ $cartItem->price }}</p>
                                                <a type="button"><i class="fa fa-trash"></i> Remove</a>
                                            </div>
                                            <div class="col-50">
                                                <div class="row">
                                                    <div class="col-25">
                                                        <button class="form-control"><i class="fa fa-minus"></i></button>
                                                    </div>
                                                    <div class="col-50">
                                                        <input type="text" class="form-control" id="cvv" name="cvv" value="{{ $cartItem->qty }}">
                                                    </div>
                                                    <div class="col-25">
                                                        <button class="form-control"><i class="fa fa-plus"></i></button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endforeach

{{--                            <label>--}}
{{--                                <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing--}}
{{--                            </label>--}}
{{--                            <input type="submit" value="Continue to checkout" class="btn">--}}

                    </div>
                </div>
            </div>
        </div>
        <div class="col-25">
            <div class="container">
                <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
                <p><a href="#">Product 1</a> <span class="price">$15</span></p>
                <p><a href="#">Product 2</a> <span class="price">$5</span></p>
                <p><a href="#">Product 3</a> <span class="price">$8</span></p>
                <p><a href="#">Product 4</a> <span class="price">$2</span></p>
                <hr>
                <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
            </div>
        </div>

        <div class="col-25">
            <div class="container">
                <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
                <p><a href="#">Product 1</a> <span class="price">$15</span></p>
                <p><a href="#">Product 2</a> <span class="price">$5</span></p>
                <p><a href="#">Product 3</a> <span class="price">$8</span></p>
                <p><a href="#">Product 4</a> <span class="price">$2</span></p>
                <hr>
                <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
            </div>
        </div>
            <button class="pull-right btn" type="submit">Place Order</button>
        </form>
    </section>


@endsection
