@extends('user.order.index')

@section('title','Order | List')

@section('order_content')

    <div class="row">
        <div class="col-sm-12">
            <div class="offset-sm-11">
                <a class="btn btn-outline-success text-center" href="{{route('user.order.create')}}"><span class="material-icons">add</span> Add New</a>
            </div>
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Order List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <th class="font-weight-bold">ID</th>
                            <th class="font-weight-bold">Sub Total</th>
                            <th class="font-weight-bold">Delivery Cost</th>
                            <th class="font-weight-bold">Total</th>
                            <th class="font-weight-bold">Address</th>
                            <th class="font-weight-bold">Action</th>
                            </thead>
                            <tbody>
                            @foreach($orderList as $k => $order)
                                <tr>
                                    <td>{{ $k+1 }}</td>
                                    <td>{{$order->sub_total}}</td>
                                    <td>{{$order->delivery_cost}}</td>
                                    <td>{{$order->total}}</td>
                                    <td>{{$order->address}}</td>
                                    <td>
                                        <a href=""><span class="material-icons">visibility</span></a>&nbsp;
                                        <a href=""><span class="material-icons">edit</span></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')


@endpush
