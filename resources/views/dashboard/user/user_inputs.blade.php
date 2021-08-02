@extends('dashboard.user.index')

@section('title','User | Create')

@section('shop_breadcrumbs')
    <li class="breadcrumb-item"><a>Create</a></li>
@endsection

@section('user_content')

    <form>
        <div class="row">
            <div class="col-md-8">
                <div class="card card-user">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Create User</h4>
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

@endsection
