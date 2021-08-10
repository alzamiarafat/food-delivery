@extends('web.index')

@section('home_content')
    <style>
        .checkout{
            display: -ms-flexbox; /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap; /* IE10 */
            flex-wrap: wrap;
            margin: 120px -16px;
        }
    </style>

    <section class="checkout" style="">
        <div class="content" style="font-size: medium;">
            <div class="breadcrumb-box">
                <ul class="breadcrumb"style="background-color: white">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a>Checkout</a></li>
                </ul>
            </div>
        </div>

        <div class="content" style="background-color: #f7f7f7;">
            <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="col-md-8" style="background-color: white">
                    <div class="container">
                        <h2>Cart List <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">{{ Cart::content()->count() }}</span></h2>
                        <hr class="col-md-9">
                        <br>
                        <br>

                        @foreach(Cart::content() as $cartItem)
                            <input class="hide" name="item[]" value="{{ $cartItem->id }}">

                            <table class="table-borderless col-md-8" style="width: 80%">
                                <tr>
                                    <td><img src="{{asset('item_images/'.$cartItem->options->image)}}" height="150" width="150"></td>
                                    <td>
                                        <h4><strong>{{ $cartItem->name }}</strong></h4>
                                        <p>BDT {{ $cartItem->price }}</p>
                                        <a type="button" href="{{ route('cart.remove', $cartItem->rowId) }}"><i class="fa fa-trash"></i> Remove</a>
                                    </td>

                                    <td>
                                        <div class="col-md-2">
                                            <button class="form-control"><i class="fa fa-minus"></i></button>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="qty[]" value="{{ $cartItem->qty }}">
                                        </div>
                                        <div class="col-md-2">
                                            <button class="form-control"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </td>

                                    <td>
                                    <p>Total     <input type=number name="delivery_cost" id="delivery_cost" style="width: 100px" value="{{ $cartItem->price }}" readonly></p>

                                    </td>
                                </tr>
                            </table>
                            <br>
                            <hr style="margin-top: 10px; width: 83%; border: 1px solid lightgrey;">
                        @endforeach
                    </div>
                    <button class="pull-right btn" type="submit">Place Order</button><br><br><br><br><br>
                </div>

                <div class="col-md-3" style="width: 30%; background-color: white;margin-left: 30px">
                    <h2>Summary</h2>
                    <table class="table" style="border-collapse: collapse;border: 1px solid lightgrey;">
                        <tr style="border: none">
                            <td><p>Sub Total</p></td>
                            <td class="text-right"><p>BDT</p></td>
                            <td><p><input type=number name="sub_total" style="width: 100px" value="{{ $subTotalPrice }}" readonly></p></td>
                        </tr>
                        <tr>
                            <td><p>Delivery Cost</p></td>
                            <td class="text-right"><p>BDT</p></td>
                            <td><p><input type=number name="delivery_cost" id="delivery_cost" style="width: 100px" value="0.00" readonly></p></td>
                        </tr>
                        <tr>
                            <td><p>Offer Price</p></td>
                            <td class="text-right"><p>BDT</p></td>
                            <td><p><input type=number name="delivery_cost"  style="width: 100px" value="0.00" readonly></p></td>
                        </tr>
                    </table>
                    <table class="table">
                        <tr>
                            <td> <p style="margin-left: 85px" class="pull-right">Total</p></td>
                            <td><p>BDT</p></td>
                            <td><p><input type=number name="totalPrice" id="totalPrice" style="width: 100px" value="{{ $subTotalPrice }}" readonly></p></td>
                        </tr>
                    </table>
                </div>

                <div class="col-md-3" style="width: 30%; background-color: white;margin-left: 30px; margin-top: 20px">
                    <h2>Delivery</h2>
                    <hr>
                    <label>Delivery Type</label>
                    <div class="form-check form-check-inline">
                        <input type="radio" id="delivery_type" name="delivery_type" value="take_out">
                        <span for="delivery_type">Take Out</span>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" id="delivery_type" name="delivery_type" value="home_delivery" required>
                        <span for="delivery_type">Home Delivery</span>
                    </div>
                    <br>
                    <div class="hide" id="addressInput">
                        <input class="form-control" name="delivery_address" id="delivery_address" placeholder="Enter delivery address"><br>
                    </div>
                </div>

                <div class="col-md-3" style="width: 30%; background-color: white;margin-left: 30px; margin-top: 20px">
                    <h2>Have Promo Code?</h2>
                    <hr>
                    <div class="form-check form-check-inline">
                        <span for="promo_code">Promo Code</span>
                        <input class="form-control" name="promo_code" placeholder="Enter Promo Code">
                    </div>
                    <button class="btn pull-right"style="background-color: #0a6ebd;color: white;border: #0a6ebd">Apply</button><br><br><br>
                </div>
            </form>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        $("input[name='delivery_type']").change(function(){
            if( $(this).val() == 'home_delivery'){
                $('#addressInput').removeClass('hide')
                $("#delivery_address").attr("required", "true");
            }else{
                $('#addressInput').addClass('hide')
            }
        });

        $('#delivery_address').change( function () {
            $('#delivery_cost').val(60.00);
            var value = $('#totalPrice').val();
            $('#totalPrice').val(value-(-60.00));
        })
    </script>

    @if(Session::has('order_success'))
        <script>
            const el = document.createElement('div')
            el.innerHTML = "<a class='btn btn-primary' href='http://google.com'>Pay Now</a>"
            swal("Successfully!","{!! 'Your Order has been successfully placed' !!}","success",{
                title: "Hello!",
                content: el,
            })
            setTimeout(function(){ window.location.href = '{{ route('home') }}'; }, 3000);
        </script>
    @endif

    @if(Session::has('message_error'))
        <script>
            swal("Error!","{!! 'Something is wrong' !!}","error",{

            })
            {{--setTimeout(function(){ window.location.href = '{{ back() }}'; }, 3000);--}}
        </script>
    @endif

@endpush
