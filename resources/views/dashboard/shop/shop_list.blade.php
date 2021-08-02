@extends('dashboard.shop.index')

@section('title','Shop | List')

@section('shop_content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Shop List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th class="font-weight-bold">ID</th>
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
@endsection
