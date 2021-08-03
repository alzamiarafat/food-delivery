@extends('dashboard.category.index')

@section('title','Category | List')

@section('category_content')

    <div class="row">
        <div class="col-sm-12">
            <div class="offset-sm-11">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#categoryModal">
                    <span class="material-icons">add</span> Add New
                </button>
            </div>
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Category List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th class="font-weight-bold">ID</th>
                                <th class="font-weight-bold">Name</th>
                                <th class="font-weight-bold">Image</th>
                                <th class="font-weight-bold">Serial Number</th>
                                <th class="font-weight-bold">Products</th>
                                <th class="font-weight-bold">Status</th>
                                <th class="font-weight-bold">Action</th>
                            </thead>
                            <tbody>
                            @foreach($categoryList as $k => $category)
                                <tr>
                                    <td>{{ $k+1 }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->image }}</td>
                                    <td>{{ $category->serial_no }}</td>
                                    <td>{{ $category->status }}</td>
                                    <td class="text-{{ $category->status == 1 ? 'success' : 'danger' }}">{!! $category->status == 1 ? 'ACTIVE' : 'INACTIVE' !!}</td>
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

    @include('dashboard.category.category_inputs')
@endsection
