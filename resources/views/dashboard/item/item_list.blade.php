@extends('dashboard.item.index')

@section('title','Item | List')

@section('item_content')

    <div class="row">
        <div class="col-sm-12">
            <div class="offset-sm-11">
                <a class="btn btn-outline-success text-center" href="{{route('dashboard.item.create')}}"><span class="material-icons">add</span> Add New</a>
            </div>
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Item List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th class="font-weight-bold">ID</th>
                                <th class="font-weight-bold">Item Code</th>
                                <th class="font-weight-bold">Name</th>
                                <th class="font-weight-bold">Image</th>
                                <th class="font-weight-bold">Shop Name</th>
                                <th class="font-weight-bold">Category Name</th>
                                <th class="font-weight-bold">Price</th>
                                <th class="font-weight-bold">Discount Price</th>
                                <th class="font-weight-bold">Action</th>
                            </thead>
                            <tbody>
                                @if(!empty($itemList))
                                    @foreach($itemList as $k => $item)
                                        <tr>
                                            <td>{{ $k+1 }}</td>
                                            <td>{{ $item->item_code }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->image }}</td>
                                            <td>{{ $item->shop_item->shop_id }}</td>
                                            <td>{{ $item->shop_item->category_id }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->discount_amount }}</td>
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
