@extends('dashboard.branch.index')

@section('title','Branch | Create')

@section('branch_breadcrumbs')
    <li class="breadcrumb-item"><a>Create</a></li>
@endsection

@section('branch_content')

    <form action="{{route('dashboard.branch.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Create Branch</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Shop Name</label>
                                    <input type="text" name="shop_id" value="{{ $shop->id }}" hidden readonly>
                                    <input type="text" class="form-control @error('shop_name') is-invalid @enderror" name="shop_name" value="{{ $shop->name }}" readonly>

                                    @error('full_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Manager Name</label>
                                    <select class="form-control @error('manager_id') is-invalid @enderror" name="manager_id">
                                        <option disabled selected>Choose One</option>
                                        @foreach($managers as $manager )
                                            <option value="{{ $manager->id }}">{{ $manager->profile->full_name }}</option>
                                        @endforeach
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
                                    <label>Contact Number</label>
                                    <input type="tel" class="form-control @error('contact_no') is-invalid @enderror" name="contact_no" value="{{old('contact_no')}}" placeholder="Enter Contact Number">

                                    @error('contact_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{old('address')}}" placeholder="Enter Address">

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
                                    <label>Division</label>
                                    <input type="text" class="form-control @error('division') is-invalid @enderror" name="division"  placeholder="Enter Division">

                                    @error('division')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>District</label>
                                    <input type="text" class="form-control @error('district') is-invalid @enderror" name="district" placeholder="Enter District">

                                    @error('district')
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
                                    <label>Thana</label>
                                    <input type="text" class="form-control @error('thana') is-invalid @enderror" name="thana"  placeholder="Enter Thana">

                                    @error('thana')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Postal Code</label>
                                    <input type="number" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" placeholder="Enter Postal Code">

                                    @error('postal_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary pull-right">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


@endsection
