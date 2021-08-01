<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home|Food</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="./style.css">

    </head>
    <body>

        <div class="loader">
            <div></div>
            <div></div>
            <div></div>
        </div>

        <!-- header section starts  -->
        @include('web.layout.header')

        <!-- home section starts  -->
        @include('web.components.home_section')


        <!-- category section starts  -->
        @include('web.components.category_section')


        <!-- items section starts  -->
        @include('web.components.items_section')

        <!-- review section starts  -->
        @include('web.components.review_section')


        <!-- contact section starts  -->
        @include('web.components.contact_section')

        <!-- footer section  -->
        @include('web.layout.footer')

        <!-- scroll top button  -->
        <a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

{{--        <!-- loader  -->--}}
{{--        <div class="loader-container">--}}
{{--            <img src="images/loader.gif" alt="">--}}
{{--        </div>--}}


        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <!-- custom js file link  -->
        <script src="{{asset('script.js')}}"></script>
</body>
</html>
