@extends('dashboard.offer.index')

@section('title','Offer | Create')

@section('offer_breadcrumbs')
    <li class="breadcrumb-item"><a>Create</a></li>
@endsection

@section('offer_content')

    <form action="{{route('dashboard.offer.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Create Offer</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Offer Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}" placeholder="Enter Full Name">

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Offer Code</label>
                                    <input type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{old('code')}}" placeholder="Enter Username">

                                    @error('code')
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
                                    <label for="exampleInputEmail1">Start From</label>
                                    <input type="date" class="form-control @error('start_at') is-invalid @enderror" name="start_at" value="{{old('start_at')}}" placeholder="Enter Email Address">

                                    @error('start_at')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>End At</label>
                                    <input type="date" class="form-control @error('end_at') is-invalid @enderror" name="end_at" value="{{old('end_at')}}" placeholder="Enter Contact Number">

                                    @error('end_at')
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
                                    <label>Discount Type</label>
                                    <select class="form-control @error('discount_type') is-invalid @enderror" name="discount_type">
                                        <option disabled selected>Choose One</option>
                                        <option value="fixed" {{old('discount_type') == 'fixed' ? 'selected' : ''}}>Fixed</option>
                                        <option value="percentage" {{old('discount_type') == 'female' ? 'selected' : ''}}>Percentage</option>
                                    </select>

                                    @error('discount_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="">Discount Amount</label>
                                    <input type="number" class="form-control @error('discount_amount') is-invalid @enderror" name="discount_amount" value="{{old('discount_amount')}}" placeholder="dd-mm-yyyy">

                                    @error('discount_amount')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Minimum Amount Uses</label>
                                    <input type="text" class="form-control @error('min_amount_uses') is-invalid @enderror" name="min_amount_uses" value="{{old('min_amount_uses')}}" placeholder="Enter NID Number">

                                    @error('min_amount_uses')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Total Uses</label>
                                    <input type="text" class="form-control @error('total_uses') is-invalid @enderror" name="total_uses" value="{{old('total_uses')}}" placeholder="Enter NID Number">

                                    @error('total_uses')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Per Person Uses</label>
                                    <input type="text" class="form-control @error('per_person_uses') is-invalid @enderror" name="per_person_uses" value="{{old('per_person_uses')}}" placeholder="Enter NID Number">

                                    @error('per_person_uses')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <br>

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
