
<div class="modal right fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel2"><b>Cart</b></h3>
            </div>
            @foreach( Cart::content() as $cartItem)
                <div class="modal-body">
                    <div class="row">
                        <div class="modal-header col-md-6">
                            <img src="{{asset('item_images/'.$cartItem->options->image)}}" height="50" width="50">
                        </div>

                        <div class="modal-header col-md-6">
                            <h4>{{ $cartItem->name }}</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-2 pr-2">
                                    <button class="form-control text-center"><i class="fa fa-minus"></i></button>

                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" value="{{ $cartItem->qty }}">

                                </div>
                                <div class="col-md-2">
                                    <button class="form-control"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <p><b>BDT {{ $cartItem->price }}</b></p>
                        </div>
                    </div>
                    <div class="row pull-right">
                        <a type="button" href="{{ route('cart.remove', $cartItem->rowId) }}"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
            @endforeach
            <div class="col-md-4 px-4 center">
                <a type="button" class="btn" href="{{ route('checkout.index') }}">Check Out</a>
            </div>

        </div>
    </div>
</div>
