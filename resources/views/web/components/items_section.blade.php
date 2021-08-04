<section class="popular" id="items">

    <h1 class="heading"> most <span>popular</span> foods </h1>

    <div class="box-container">
        <div class="owl-carousel owl-theme">

                @foreach($itemList as $item)
                <form method="POST" action="{{route('cart.store')}}">
                    @csrf
                    <input name="item_id" value="{{$item->id}}" hidden readonly>
                    <div class="item">
                        <div class="box select-item">
                            @if($item->discount_type != null)
                                <span class="price">{{$item->discount_type == 'fixed' ? '৳ '.$item->discount_amount : $item->discount_amount.'%'}}</span>
                            @endif
                            <img src="{{asset('item_images/'.$item->image)}}" alt="">
                            <h3>{{$item->name}}</h3>
                            <h3 id="price" class="ps-product__price ">৳ {{$item->price}} </h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                                <button class="btn" type="submit">order</button>
                            <!-- Button trigger modal -->
{{--                            <button type="button" class="btn order-btn" data-toggle="modal" data-target=".bd-example-modal-lg">order now</button>--}}

                        </div>
                    </div>
                </form>
                @endforeach

        </div>
    </div>
    <!-- Modal -->
    @include('web.modals.order_modal')
</section>

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items:4,
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:2000,
            autoplayHoverPause:true
        });
        $('.play').on('click',function(){
            owl.trigger('play.owl.autoplay',[1000])
        })
        $('.stop').on('click',function(){
            owl.trigger('stop.owl.autoplay')
        })


        $(document).ready(()=>{
            $('.order-btn').on('click',()=>{
                var data = $('#price').text()
                console.log(data);
                $('#price').val(data)
            })

        })
    </script>
@endpush
