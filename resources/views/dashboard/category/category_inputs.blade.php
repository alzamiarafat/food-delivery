<!-- Modal -->
<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Category Create</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('dashboard.category.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 pr-2">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="Enter Name">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pr-2">
                            <div class="form-group">
                                <label>Category Code</label>
                                <input type="text" class="form-control @error('category_code') is-invalid @enderror" name="category_code"  placeholder="Enter Name">

                                @error('category_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pr-2">
                            <div class="form-group">
                                <label>Serial No</label>
                                <input type="text" class="form-control @error('serial_no') is-invalid @enderror" name="serial_no"  placeholder="Enter Serial">

                                @error('serial_no')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="card card-profile">
                                <div class="card-body">
                                    <label>Category Icon</label>
                                    <input type="file" name="icon" class="form-control @error('icon') is-invalid @enderror" accept=".jpg, .png, .gif" onchange="readURL(this, 'iconView');" />

                                    @error('icon')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <b id="iconViewAlert" class="text-danger hide">
                                        Maximum allowed size is 5 MB
                                    </b>

                                    {{--                        <b id="imageViewTypeAlert" class="text-danger hide">--}}
                                    {{--                            File format is not supported!--}}
                                    {{--                        </b>--}}
                                    <img id="iconView" alt="image" class="mt-2 img-fluid img-thumbnail hide">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pr-2">
                            <div class="card card-profile">
                                <div class="card-body">
                                    <label>Category Image</label>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" accept=".jpg, .png, .gif" onchange="readURL(this, 'imageView');" />

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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>

