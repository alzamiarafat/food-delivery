<section class="speciality" id="category">

    <h1 class="heading"> our <span>category</span> </h1>

    <div class="box-container">
        @foreach($categoryList as $category)
            <div class="box">
                <img class="image" src="{{asset('category_images/'.$category->image)}}" alt="">
                <div class="content">
                    <img src="{{asset('category_images/'.$category->icon)}}" alt="">
                    <h3>{{$category->name}}</h3>
                    <p></p>
                </div>
            </div>
        @endforeach

    </div>

</section>
