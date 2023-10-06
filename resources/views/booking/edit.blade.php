@extends('layout')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Booking Data
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
                <form method="post" enctype="multipart/form-data" action="{{url('admin/booking/'.$data->id)}}">
                    @csrf
                    @method('put')
                    <table class="table table-bordered">
                                                
                        <tr>
                            <th>Customers<span class="text-danger">*</span></th>
                            <td>

                                <!-- Customers dropdown -->
                                <select name="customer_id" class="form-control">
                                    <option>--- Select Customer ---</option>
                                    @foreach($customers as $customer) 
                                    <option @if($data->customer_id==$customer->id) selected @endif value="{{ $customer->id }}">{{ $customer->first_name }} {{ $customer->last_name }}</option>
                                    @endforeach
                                </select>
                                                            
                            </td>

                        </tr>

                        <tr>
                            <th>Event<span class="text-danger">*</span></th>
                            <td>

                                <!-- Customers dropdown -->
                                <select name="event_id" class="form-control">
                                    <option>--- Select Event ---</option>
                                    @foreach($events as $event)  
                                    <option @if($data->event_id==$event->id) selected @endif value="{{ $event->id }}">{{ $event->title }}</option>
                                    @endforeach
                                </select>
                                                            
                            </td>

                        </tr>

                        <tr>
                            <th>Total Adults<span class="text-danger">*</span></th>
                            <td> <input value="{{$data->total_adults}}"  type="string" class="form-control" name="total_adults" />
                            </td>

                        </tr>

                        <tr>
                            <th>Total Children<span class="text-danger">*</span></th>
                            <td> <input value="{{$data->total_children}}"  type="string" class="form-control" name="total_children" />
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


