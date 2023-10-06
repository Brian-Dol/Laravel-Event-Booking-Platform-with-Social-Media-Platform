@extends('layout')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Booking
                <a href="{{url('admin/booking')}}" class="float-right btn btn-success btn-sm">View All</a>

            </h6>
        </div>
        <div class="card-body">
            
            <div class="table-responsive">
                
                    <table class="table table-bordered">
                        
                        <tr>
                            <th>Customer Name</th>
                            <td>{{$data->customer->first_name}} {{$data->customer->last_name}}</td>

                        </tr>

                        <tr>
                            <th>Event Title</th>
                            <td>{{$data->event->title}}</td>

                        </tr>

                        <tr>
                            <th>Total Adults</th>
                            <td>{{$data->total_adults}}</td>

                        </tr>

                        <tr>
                            <th>Total Children</th>
                            <td>{{$data->total_children}}</td>

                        </tr>
                                
                        <tr>
                            <th>Booking Timestamp</th>
                            <td>{{$data->created_at}}</td>

                        </tr>
                    

                        <tr>
                            <th>Booking Timestamp Update</th>
                            <td>{{$data->updated_at}}</td>

                        </tr>

                        <tr>
                            <th>Booking Reference</th>
                            <td>{{$data->ref}}</td>

                        </tr>

                        </tr>

                    </table>
                
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->



@endsection


