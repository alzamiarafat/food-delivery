@extends('dashboard.manager.index')

@section('title','Manager | Create')

@section('manager_breadcrumbs')
    <li class="breadcrumb-item"><a>Create</a></li>
@endsection

@section('manager_content')

    <form>
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
                                    <input type="text" class="form-control" name="full_name" placeholder="Enter Full Name">
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <input type="tel" class="form-control" name="contact_no" placeholder="Company">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Date Of Birth</label>
                                    <input type="text" class="form-control" name="dob" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control" name="gender">
                                        <option disabled selected>Choose One</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>NID Number</label>
                                    <input type="text" class="form-control" name="nid" placeholder="Home Address">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="Home Address">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="City">
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" name="confirm_password" placeholder="Country">
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
                        <a href="javascript:;" class="btn btn-primary btn-round"><input type="file" class="img" /></a>
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
