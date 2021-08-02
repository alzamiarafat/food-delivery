@extends('dashboard.user.index')

@section('title','User | List')

@section('user_content')

    <div class="row">
        <div class="col-sm-12">
            <div class="offset-sm-11">
                <a class="btn btn-outline-success text-center" href="{{route('dashboard.user.create')}}"><span class="material-icons">add</span> Add New</a>
            </div>
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">User List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <th class="font-weight-bold">ID</th>
                            <th class="font-weight-bold">Full Name</th>
                            <th class="font-weight-bold">Email</th>
                            <th class="font-weight-bold">Contact Number</th>
                            <th class="font-weight-bold">Address</th>
                            <th class="font-weight-bold">Action</th>
                            </thead>
                            <tbody>
                            @foreach($userList as $k => $user)
                                <tr>
                                    <td>{{ $k+1 }}</td>
                                    <td>{{$user->profile->full_name}}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->profile->contact_no }}</td>
                                    <td>{{ $user->profile->address }}</td>
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
