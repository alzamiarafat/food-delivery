@extends('dashboard.branch.index')

@section('title','Branch | List')

@section('branch_content')

    <div class="row">
        <div class="col-sm-12">
            <div class="offset-sm-11">
                <a class="btn btn-outline-success text-center" href="{{route('dashboard.branch.create')}}"><span class="material-icons">add</span> Add New</a>
            </div>
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Branch List</h4>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th class="font-weight-bold">ID</th>
                                <th class="font-weight-bold">Branch Code</th>
                                <th class="font-weight-bold">Manager Name</th>
                                <th class="font-weight-bold">Contact Number</th>
                                <th class="font-weight-bold">Address</th>
                                <th class="font-weight-bold">Action</th>
                            </thead>
                            <tbody>
                                @foreach($branches as $k => $branch)
                                    <tr>
                                        <td>{{ $k+1 }}</td>
                                        <td>{{ $branch->branch_code }}</td>
                                        <td>{{ $branch->full_name }}</td>
                                        <td>{{ $branch->contact_no }}</td>
                                        <td>{{ $branch->address }},{{ $branch->thana }} {{ $branch->division }} {{ $branch->district }} {{ $branch->postal_code }}</td>
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
