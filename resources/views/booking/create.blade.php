@extends('layout')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Customer Booking
                <a href="{{url('admin/booking')}}" class="float-right btn btn-success btn-sm">View All</a>

            </h6>
        </div>
        <div class="card-body">

            @if($errors->any())
                @foreach($errors->all() as $error)
                  <p class="text-danger">{{$error}}</p>
                @endforeach
            @endif


            @if(Session::has('success'))
                <p class="text-success">{{ session('success') }}</p>
                @if(Session::has('total_price'))
                    <p class="text-success">Total Price: {{ session('total_price') }}</p>
                @endif
            @endif
            <div class="table-responsive">
                <form method="post" enctype="multipart/form-data" action="{{url('admin/booking')}}">
                    @csrf
                    <table class="table table-bordered">
                        <tr>
                            <th>Customers<span class="text-danger">*</span></th>
                            <td>

                                <!-- Customers dropdown -->
                                <select name="customer_id" class="form-control">
                                    <option>--- Select Customer ---</option>
                                    @foreach($customers as $customer) 
                                    <option value="{{ $customer->id }}">{{ $customer->first_name }} {{ $customer->last_name }}</option>
                                    @endforeach
                                </select>
                            
                            </td>

                        </tr>

                        <tr>
                            <th>Event<span class="text-danger">*</span></th>
                            <td>

                                <!-- Events dropdown -->
                                <select name="event_id" class="form-control event">
                                    <option>--- Select Event ---</option>
                                    @foreach($events as $event) 
                                    <option value="{{ $event->id }}" data-price="{{ $event->price }}">{{ $event->title }}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" id="eventPrice" name="event_price" value="" />
                            
                            </td>

                        </tr>

                       
                        <tr>
                            <th>Total Adults<span class="text-danger">*</span></th>
                            <td> <input type="number" class="form-control numAttendees" name="total_adults" />
                            </td>

                        </tr>

                        <tr>
                            <th>Total Children<span class="text-danger">*</span></th>
                            <td> <input type="number" class="form-control numAttendees" name="total_children" />
                            </td>

                        </tr>

                        <tr>
                            <th>Total Price<span class="text-danger">*</span></th>
                            <td> <span id="totalPrice"></span>
                            </td>

                        </tr>
                        
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="" class="btn btn-primary" />

                            </td>
                        </tr>


                    </table>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


@endsection
