@extends('dashboard.offer.index')

@section('title','Offer | List')

@section('offer_content')

    <div class="row">
        <div class="col-sm-12">
            <div class="offset-sm-11">
                <a class="btn btn-outline-success text-center" href="{{route('dashboard.offer.create')}}"><span class="material-icons">add</span> Add New</a>
            </div>
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Offer List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <th class="font-weight-bold">ID</th>
                            <th class="font-weight-bold">Title</th>
                            <th class="font-weight-bold">Code</th>
                            <th class="font-weight-bold">Discount Type</th>
                            <th class="font-weight-bold">Discount Amount</th>
                            <th class="font-weight-bold">Start From</th>
                            <th class="font-weight-bold">End At</th>
                            <th class="font-weight-bold">Status</th>
                            <th class="font-weight-bold">Action</th>
                            </thead>
                            <tbody>
                            @foreach($offerList as $k => $offer)
                                <tr>
                                    <td>{{ $k+1 }}</td>
                                    <td>{{$offer->title}}</td>
                                    <td>{{$offer->code}}</td>
                                    <td>{{$offer->discount_type}}</td>
                                    <td>{{$offer->discount_ammount}}</td>
                                    <td>{{$offer->start_at}}</td>
                                    <td>{{$offer->end_at}}</td>
                                    <td class="text-{{ $offer->status == 1 ? 'success' : 'danger' }}">{!! $offer->status == 1 ? 'ACTIVE' : 'INACTIVE' !!}</td>
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
