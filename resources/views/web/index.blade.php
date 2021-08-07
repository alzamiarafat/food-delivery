<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alesha Food | Home</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!-- custom css file link  -->
        <link rel="stylesheet" href="./style.css">
        @stack('style')

    </head>
    <body>

        <div class="loader">
            <div></div>
            <div></div>
            <div></div>
        </div>

        <!-- header section starts  -->
        @include('web.layout.header')

        @yield('home_content')

        <!-- footer section  -->
        @include('web.layout.footer')

        <!-- scroll top button  -->
        <a href="#home" class="fas fa-angle-up" id="scroll-top"></a>


        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- custom js file link  -->
        <script src="{{asset('script.js')}}"></script>

        <script src="{{asset('js/cart.js')}}"></script>

        <script type="text/javascript" charset="utf-8">
            // allow only character values in text type input
            $('.character_class').attr('onkeyup',"this.value=this.value.replace(/[^a-zA-Z.,\' 's]+$/,'');");
            // allow only numaric values in  text type input
            $('.quantity_class').attr('onkeyup',"this.value=this.value.replace(/[^0-9,+,-]/g,'');");
            // allow only decimal values in  text type input
            $('.quantity__class').attr('onkeyup',"this.value=this.value.replace(/[^0-9\.:]/g,'');");
        </script>

        @stack('scripts')

        <script>
            $(document).ready(function() {
                demo.initGoogleMaps();
            });
        </script>

        <script>

            $(document).ready(function() {
                {{--$('.addItem').on('click',function () {--}}
                {{--    var id = $(this).data('id');--}}
                {{--    alert(id);--}}
                {{--    $.ajax({--}}
                {{--        headers: {--}}
                {{--            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
                {{--        },--}}
                {{--        url: '{{ route('cart.store') }}',--}}
                {{--        dataType : 'json',--}}
                {{--        type: 'POST',--}}
                {{--        data:{--}}
                {{--            itemId : id--}}
                {{--        },--}}
                {{--        success: function (response) {--}}
                {{--            $('#cartCount').text(response.cartCount);--}}
                {{--            // $('#item'+id).clone(true).find('h4').text("rtrfdgfd").appendTo('#newItem');--}}
                {{--            // $('#item'+id).clone().appendTo('#newItem');--}}
                {{--            //--}}
                {{--            // console.log($('#item'+id).clone(true).find('img'));--}}



                {{--            $('#newItem').append('<div class="modal-body" id="item">' +--}}
                {{--                '                   <div class="row">' +--}}
                {{--                                        '<div class="modal-header col-md-6">' +--}}
                {{--                                            '<img src="item_images/'+response.cartItem.options.image+'" height="50" width="50">' +--}}
                {{--                                        '</div>' +--}}
                {{--                                        '<div class="modal-header col-md-6">' +--}}
                {{--                                            '<h4>'+response.cartItem.name+'</h4>' +--}}
                {{--                                        '</div>' +--}}
                {{--                                    '</div>' +--}}
                {{--                                    '<div class="row">' +--}}
                {{--                                        '<div class="col-md-8">' +--}}
                {{--                                            '<div class="row">' +--}}
                {{--                                                '<div class="col-md-2 pr-2">' +--}}
                {{--                                                    '<button class="form-control decQty" id="decQty" value="'+response.cartItem.rowId+'"><i class="fa fa-minus"></i></button>' +--}}
                {{--                                                '</div>' +--}}
                {{--                                                '<div class="col-md-6">' +--}}
                {{--                                                    '<input type="text" class="form-control qty quantity_class" name="qty" min="1" readonly id="qty" value="'+response.cartItem.qty+'">' +--}}
                {{--                                                '</div>' +--}}
                {{--                                                '<div class="col-md-2">' +--}}
                {{--                                                    '<button class="form-control incQty" id="incQty" value="'+response.cartItem.rowId+'"><i class="fa fa-plus"></i></button>' +--}}
                {{--                                                '</div>' +--}}
                {{--                                            '</div>' +--}}
                {{--                                        '</div>' +--}}
                {{--                                        '<div class="col-md-4">' +--}}
                {{--                                            '<p>BDT <b id="itemPrice">'+response.cartItem.price+'</b></p>' +--}}
                {{--                                        '</div>' +--}}
                {{--                                    '</div>' +--}}
                {{--                                    '<div class="row pull-right">' +--}}
                {{--                                        '<button type="button" id="removeItem" class="removeItem" value="'+response.cartItem.rowId+'"><i class="fa fa-trash"></i></button>' +--}}
                {{--                                    '</div>' +--}}
                {{--                                '</div>')--}}
                {{--        }--}}
                {{--    });--}}
                {{--});--}}

                $('.removeItem').on('click',function () {
                    var id = $(this).data('id');
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: '{{ route('cart.remove') }}',
                        dataType : 'json',
                        type: 'POST',
                        data:{
                            rowId : id
                        },
                        success: function (response) {
                            $('#cartCount').text(response.cartCount);
                            $('#item'+id).empty();

                            if (response.cartCount == 0) {
                                $('#cartStatus').show();
                                $('#checkOutBtn').hide();
                            }
                        }
                    });
                })

                $('.incQty').on('click',function () {

                    var id = $(this).data('id');
                    var value = $('#qty'+id).val();

                    $('#qty'+id).val(value-(-1));
                    value = $('#qty'+id).val();

                    if (value >= 2){
                        $('.decQty').css('cursor', 'pointer');

                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: '{{ route('cart.increase') }}',
                            dataType : 'json',
                            type: 'GET',
                            data:{
                                id : id,
                                qty : value
                            },
                            success: function (response) {
                                $('#itemPrice'+id).text(response.price);
                            }
                        });
                    }
                })

                $('.decQty').on('click',function () {
                    var id = $(this).data('id');
                    var value = $('#qty'+id).val();

                    if (value <= 1){
                        $('#qty'+id).val().val(1);
                        $(this).css("cursor", "not-allowed");
                    }

                    $('#qty'+id).val(value-1);
                    value =  $('#qty'+id).val();
                    $(this).css('cursor', 'pointer');
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: '{{ route('cart.decrease') }}',
                        dataType : 'json',
                        type: 'GET',
                        data:{
                            id : id,
                            qty : value
                        },
                        success: function (response) {
                            $('#itemPrice'+id).text(response.price);
                        }
                    });

                })
            });

        </script>
</body>
</html>
