@extends('dashboard.order.index')

@section('title','Order | Details')

@section('order_breadcrumbs')
    <li class="breadcrumb-item"><a>Details</a></li>
@endsection

@push('style')
    <link href="{{asset('css/invoice.css')}}" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Libre Barcode 39' rel='stylesheet'>
@endpush

@section('order_content')
    <style>
        .barcode {
            font-family: 'Libre Barcode 39';
            font-size: 50px;
            color: black;
        }
    </style>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Order Details</h4>
                </div>
                <div id="invoice">

                    <div class="toolbar hidden-print">
                        <div class="text-right">
                            <a id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</a>
{{--                            <button class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Export as PDF</button>--}}
                        </div>
                        <hr>
                    </div>
                    <div class="invoice overflow-auto">
                        <div style="min-width: 600px">
                            <main>
                                <div class="row contacts">
                                    <div class="col invoice-to">
                                        <div class="text-gray-light">Order ID : {{ $orders->order_id }}</div>
                                        <h2 class="to">{{ $user->profile->full_name }}</h2>
                                        <div class="address">Phone No: {{ $user->profile->contact_no }}</div>
                                        <div class="email"><a href="mailto:john@example.com">Email: {{ $user->email }}</a></div>
                                    </div>
                                    <div class="col invoice-details">
                                        <h1 class="invoice-id"> <div class="barcode">{{'*'.$orders->order_id.'*' }}</div></h1>
                                        <div class="date">Order Date: {{ date_format($orders->created_at,"d-m-Y") }}</div>
                                        <div class="date">Delivery Address: {{ date_format($orders->created_at,"d-m-Y") }}</div>
                                        <div class="date">Payment Method: {{ date_format($orders->created_at,"d-m-Y") }}</div>
                                    </div>
                                </div>
                                <table border="0" cellspacing="0" cellpadding="0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="text-left">ITEM</th>
                                        <th class="text-right">UNIT PRICE</th>
                                        <th class="text-right">QUANTITY</th>
                                        <th class="text-right">TOTAL</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        @foreach($orders->items as $k =>$item)
                                        <td class="no">{{ $k+1 }}</td>
                                        <td class="text-left">
                                            <h3>{{ $item->name }}</h3>

                                        </td>
                                        <td class="unit">BDT {{ $item->price }}</td>
                                        <td class="qty">{{ $item->pivot->quantity }}</td>
                                        <td class="total">BDT {{ $item->price* $item->pivot->quantity}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">SUBTOTAL</td>
                                        <td>BDT {{ $orders->total }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">DELIVERY COST</td>
                                        <td>BDT {{ $orders->delivery_cost }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">GRAND TOTAL</td>
                                        <td>BDT {{ $orders->total + $orders->delivery_cost }}</td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </main>
                            <footer>
                                Invoice was created by <a href="https://aleshasolutions.com/">Alesha Solutions</a>.
                            </footer>
                        </div>
                        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.min.js" integrity="sha512-d5Jr3NflEZmFDdFHZtxeJtBzk0eB+kkRXWFQqEc1EKmolXjHm2IKCA7kTvXBNjIYzjXfD5XzIjaaErpkZHCkBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('#printInvoice').click( () => {
            $('.invoice').printThis({
                debug: false,               // show the iframe for debugging
                importCSS: true,            // import parent page css
                importStyle: true,         // import style tags
                printContainer: true,       // print outer container/$.selector
                loadCSS: "",                // path to additional css file - use an array [] for multiple
                pageTitle: 'Order Invoice',              // add title to print page
                removeInline: false,        // remove inline styles from print elements
                removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
                printDelay: 333,            // variable print delay
                header: null,               // prefix to html
                footer: null,               // postfix to html
                base: false,                // preserve the BASE tag or accept a string for the URL
                formValues: true,           // preserve input/form values
                canvas: false,              // copy canvas content
                doctypeString: '',       // enter a different doctype for older markup
                removeScripts: false,       // remove script tags from print content
                copyTagClasses: false,      // copy classes from the html & body tag
                beforePrintEvent: null,     // function for printEvent in iframe
                beforePrint: null,          // function called before iframe is filled
                afterPrint: null            // function called before iframe is removed
            })
        })
    </script>
@endpush
