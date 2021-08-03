@extends('dashboard.manager.index')

@section('title','Manager | Create')

@section('manager_breadcrumbs')
    <li class="breadcrumb-item"><a>Create</a></li>
@endsection

@section('manager_content')

    <form action="{{route('dashboard.manager.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card card-user">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Create Manager</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{old('full_name')}}" placeholder="Enter Full Name">

                                    @error('full_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{old('username')}}" placeholder="Enter Username">

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email Address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" placeholder="Enter Email Address">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <input type="tel" class="form-control @error('contact_no') is-invalid @enderror" name="contact_no" value="{{old('contact_no')}}" placeholder="Enter Contact Number">

                                    @error('contact_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Date Of Birth</label>
                                    <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{old('date_of_birth')}}" placeholder="dd-mm-yyyy">

                                    @error('date_of_birth')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                                        <option disabled selected>Choose One</option>
                                        <option value="male" {{old('gender') == 'male' ? 'selected' : ''}}>Male</option>
                                        <option value="female" {{old('gender') == 'female' ? 'selected' : ''}}>Female</option>
                                        <option value="other" {{old('gender') == 'other' ? 'selected' : ''}}>Other</option>
                                    </select>

                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>NID Number</label>
                                    <input type="text" class="form-control @error('nid') is-invalid @enderror" name="nid" value="{{old('nid')}}" placeholder="Enter NID Number">

                                    @error('nid')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Shop Name</label>
                                    <select class="form-control @error('shop_id') is-invalid @enderror" name="shop_id">
                                        <option disabled selected>Choose One</option>
                                        @foreach($shopList as $k => $shop)
                                            <option value="{{$shop->id}}">{{$shop->name}}</option>
                                        @endforeach
                                    </select>

                                    @error('shop_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-2 pr-1">
                                <div class="form-group">
                                    <label></label>
                                    <a class="form-control btn btn-primary text-center" href="{{route('dashboard.shop.create')}}"><span class="material-icons">add</span> Add Shop</a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{old('address')}}" placeholder="Enter Home Address">

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Enter Password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" placeholder="Enter Confirm Password">

                                    @error('confirm_password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-round">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-body">
                        <label>Profile Picture</label>
                        <input type="file" name="image" class="form-control img @error('image') is-invalid @enderror" accept=".jpg, .png, .gif" onchange="readURL(this, 'imageView');" />

                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <b id="imageViewAlert" class="text-danger hide">
                            Maximum allowed size is 5 MB
                        </b>

{{--                        <b id="imageViewTypeAlert" class="text-danger hide">--}}
{{--                            File format is not supported!--}}
{{--                        </b>--}}
                        <img id="imageView" alt="image" class="mt-2 img-fluid img-thumbnail hide">
                    </div>
                </div>
            </div>
        </div>

    </div>
</form>



                        {{--    <div class="row">--}}
{{--        <div class="col-md-12">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header card-header-primary">--}}
{{--                    <h4 class="card-title">Create Manager</h4>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <form action="{{route('dashboard.manager.store')}}" method="POST">--}}
{{--                        @csrf--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="bmd-label-floating">Full Name</label>--}}
{{--                                    <input type="text" class="form-control @error('full_name') is-invalid @enderror" id="full_name" name="full_name">--}}

{{--                                    @error('full_name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="bmd-label-floating">User Name</label>--}}
{{--                                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username">--}}

{{--                                    @error('username')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="bmd-label-floating">Contact Number</label>--}}
{{--                                    <input type="text" class="form-control @error('contact_no') is-invalid @enderror" name="contact_no">--}}

{{--                                    @error('contact_no')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="bmd-label-floating">Email</label>--}}
{{--                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email">--}}

{{--                                    @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="bmd-label-floating">Adress</label>--}}
{{--                                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address">--}}

{{--                                    @error('address')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <button type="submit" class="btn btn-primary pull-right">Save</button>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
