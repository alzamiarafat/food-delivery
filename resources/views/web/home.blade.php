@extends('web.index')

@section('home_content')
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
@endsection
