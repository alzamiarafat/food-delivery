@extends('dashboard.item.index')

@section('title','Item | Create')

@section('item_breadcrumbs')
    <li class="breadcrumb-item"><a>Create</a></li>
@endsection

@section('item_content')

    <form action="{{route('dashboard.item.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Create Item</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Item Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" onblur="code_generate()">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Item Code</label>
                                    <input type="text" class="form-control" id="code" name="item_code" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Branch Code</label>
                                    <select class="form-control  @error('shop_name') is-invalid @enderror" name="shop_name">
                                        <option disabled selected>Choose One</option>
                                        @foreach($branches as $branch)
                                            <option value="{{$branch->id}}">{{$branch->branch_code}}</option>
                                        @endforeach
                                    </select>

                                    @error('shop_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Category Name</label>
                                    <select class="form-control  @error('category_name') is-invalid @enderror" name="category_name">
                                        <option disabled selected>Choose One</option>
                                        @foreach($categoryList as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>

                                    @error('category_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="bmd-label-floating"></label>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#categoryModal">
                                        <span class="material-icons">add</span> Add New
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Discount Type</label>
                                    <select class="form-control" name="discount_type">
                                        <option disabled selected>Choose One</option>
                                        <option value="fixed">Fixed</option>
                                        <option value="percentage">Percentage</option>
                                    </select>

                                    @error('discount_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Discount Amount</label>
                                    <input type="text" class="form-control @error('discount_amount') is-invalid @enderror" name="discount_amount">

                                    @error('discount_amount')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Currency</label>
                                    <input type="text" class="form-control @error('currency') is-invalid @enderror" name="currency">

                                    @error('currency')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Price</label>
                                    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price">

                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Short Description</label>
                                    <input type="text" class="form-control @error('short_description') is-invalid @enderror" name="short_description">

                                    @error('short_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="bmd-label-floating"> Long Description</label>
                                        <input type="text" class="form-control @error('long_description') is-invalid @enderror" name="long_description">

                                        @error('long_description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <button type="submit" class="btn btn-primary pull-right">Save</button>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-body">
                        <label>Item Image</label>
                        <input type="file" name="image" class="form-control img @error('image') is-invalid @enderror" accept=".jpg, .png, .gif" onchange="readURL(this, 'photoView');" />

                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <b id="photoViewAlert" class="text-danger hide">
                            Maximum allowed size is 5 MB
                        </b>

                        {{--                        <b id="imageViewTypeAlert" class="text-danger hide">--}}
                        {{--                            File format is not supported!--}}
                        {{--                        </b>--}}
                        <img id="photoView" alt="image" class="mt-2 img-fluid img-thumbnail hide">
                    </div>
                </div>
            </div>
        </div>
    </form>

    @include('dashboard.category.category_inputs')

@endsection
@push('scripts')
    <script>
        function code_generate()
        {
            var value = document.getElementById('name').value;
            var code = value.substring(0, 3)+"-"+Math.floor(10000 + Math.random() * 90000);
            document.getElementById('code').value = code;
            console.log(document.getElementById('code').value);
        }
    </script>
@endpush
