@extends('layout')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Bookings
                <a href="{{url('admin/booking/create')}}" class="float-right btn btn-success btn-sm">Add New Booking</a>

            </h6>
        </div>
        <div class="card-body">
            @if(Session::has('success'))
            <p class="text-success">{{session('success')}}</p>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Customer Name</th>
                            <th>Event Title</th>
                            <th>Total Adults</th>
                            <th>Total Children</th>
                            <th>Event Booking Timestamp</th>
                            <th>Event Updated Booking Timestamp</th>
                            <th>Booking Reference</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Customer Name</th>
                            <th>Event Title</th>
                            <th>Total Adults</th>
                            <th>Total Children</th>
                            <th>Event Booking Timestamp</th>
                            <th>Event Updated Booking Timestamp</th>
                            <th>Booking Reference</th>
                            <th>Action</th>
                                                      
                        </tr>
                    </tfoot>
                    <tbody>
                        @if($data)
                        @foreach($data as $d)
                        <tr>
                            <th>{{$d->id}}</th>
                            <td>{{$d->customer->first_name}} {{$d->customer->last_name}}</td>
                            <td>{{$d->event->title}}</td>
                            <th>{{$d->total_adults}}</th>
                            <td>{{$d->total_children}}</td>
                            <td>{{$d->created_at}}</td>
                            <th>{{$d->updated_at}}</th>
                            <td>{{$d->ref}}</td>
                            
                            <td>
                                <a href="{{url('admin/booking/'.$d->id)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="{{url('admin/booking/'.$d->id).'/edit'}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Are you sure you want to delete this data?')" href="{{url('admin/booking/'.$d->id).'/delete'}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
<!-- /.container-fluid -->

@section('scripts')
<!-- Custom styles for this page -->
<link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

<!-- Page level plugins -->
<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('js/demo/datatables-demo.js')}}"></script>

@endsection

@endsection


