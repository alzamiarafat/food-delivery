<div class="modal right fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel2"><b>Cart</b></h3>
            </div>
            <span id="newItem">

            </span>
            <h4 id="cartStatus" hidden>Cart is empty</h4>
            @if(empty(Cart::content()->count()))
                <h4 id="cartStatus">Cart is empty</h4>
            @else
                @foreach( Cart::content() as $k => $cartItem)
                    <div class="modal-body" id="item{{ $k }}">
                        <div class="row">
                            <div class="modal-header col-md-6">
                                <img id="image" src="{{asset('item_images/'.$cartItem->options->image)}}" height="50" width="50">
                            </div>

                            <div class="modal-header col-md-6">
                                <h4>{{ $cartItem->name }}</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-2 pr-2">
                                        <button class="form-control decQty" data-id="{{ $k }}"><i class="fa fa-minus"></i></button>

                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control qty quantity_class" name="qty" min="1" readonly id="qty{{ $k }}" value="{{ $cartItem->qty }}">

                                    </div>
                                    <div class="col-md-2">
                                        <button class="form-control incQty" data-id="{{ $k }}"><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <p>BDT <b id="itemPrice{{ $k }}"> {{ $cartItem->price }}</b></p>
                            </div>
                        </div>
                        <div class="row pull-right">
                            <button type="button" data-id="{{ $k }}" class="removeItem"><i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-4 px-4 center">
                    <a type="button" class="btn" id="checkOutBtn" href="{{ route('checkout.index') }}">Check Out</a>
                </div>
            @endif
        </div>
    </div>
</div>
