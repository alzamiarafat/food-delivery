@extends('dashboard.shop.index')

@section('title','Shop | Create')

@section('shop_breadcrumbs')
    <li class="breadcrumb-item"><a>Create</a></li>
@endsection

@section('shop_content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Create Shop</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('dashboard.shop.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Shop Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" data-validation="length" data-validation-length="min2" onblur="code_generate()">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Shop Code</label>
                                    <input type="text" class="form-control" id="code" name="shop_code" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Contact Number</label>
                                    <input type="text" class="form-control @error('contact_no') is-invalid @enderror" name="contact_no" data-validation="number length" data-validation-length="min11">

                                    @error('contact_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Email</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" data-validation="email">

                                    @error('email')
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
                                    <label class="bmd-label-floating">Adress</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" data-validation="required">

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Division</label>
                                    <input type="text" class="form-control @error('division') is-invalid @enderror" name="division">

                                    @error('division')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">District</label>
                                    <input type="text" class="form-control @error('district') is-invalid @enderror" name="district">

                                    @error('district')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Thana</label>
                                    <input type="text" class="form-control @error('thana') is-invalid @enderror" name="thana">

                                    @error('thana')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="bmd-label-floating"> Postal Code</label>
                                        <input type="number" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" data-validation="length" data-validation-length="min4">

                                        @error('postal_code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Save</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script>

        $.validate()

        function code_generate()
        {
            var value = document.getElementById('name').value;
            var code = value.substring(0, 3)+"-"+Math.floor(10000 + Math.random() * 90000);
            document.getElementById('code').value = code;
            console.log(document.getElementById('code').value);
        }

    </script>
@endpush
