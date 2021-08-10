@extends('dashboard.shop.index')

@section('title','Shop | List')

@section('shop_content')
    <div class="offset-sm-11">
        <a class="btn btn-outline-success text-center" href="{{route('dashboard.shop.create')}}"><span class="material-icons">add</span> Add New</a>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">content_copy</i>
                    </div>
                    <p class="card-category">Branch</p>
                    <h3 class="card-title">10</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-danger">warning</i>
                        <a href="javascript:;">Get More Space...</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">store</i>
                    </div>
                    <p class="card-category">Manager</p>
                    <h3 class="card-title">20</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">date_range</i> Last 24 Hours
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">info_outline</i>
                    </div>
                    <p class="card-category">Category</p>
                    <h3 class="card-title">75</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">local_offer</i> Tracked from Github
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <p class="card-category">Item</p>
                    <h3 class="card-title">+245</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">update</i> Just Updated
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card card-chart">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <th class="font-weight-bold">ID</th>
                            <th class="font-weight-bold">Shop Code</th>
                            <th class="font-weight-bold">Name</th>
                            <th class="font-weight-bold">Contact Number</th>
                            <th class="font-weight-bold">Address</th>
                            <th class="font-weight-bold">Status</th>
                            <th class="font-weight-bold">Action</th>
                            </thead>
                            <tbody>
                            @if(!empty($shopList))
                                @foreach($shopList as $k => $shop)
                                    <tr>
                                        <td>{{ $k+1 }}</td>
                                        <td>{{ $shop->shop_code }}</td>
                                        <td>{{ $shop->name }}</td>
                                        <td>{{ $shop->contact_no }}</td>
                                        <td>{{ $shop->address }}</td>
                                        <td class="text-{{ $shop->status == 1 ? 'success' : 'danger' }}">{!! $shop->status == 1 ? 'ACTIVE' : 'INACTIVE' !!}</td>
                                        <td>
                                            <a href=""><span class="material-icons">visibility</span></a>&nbsp;
                                            <a href=""><span class="material-icons">edit</span></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
