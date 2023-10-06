@extends('layout')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Event
                <a href="{{url('admin/events')}}" class="float-right btn btn-success btn-sm">View All</a>

            </h6>
        </div>
        <div class="card-body">

            @if($errors->any())
                @foreach($errors->all() as $error)
                  <p class="text-danger">{{$error}}</p>
                @endforeach
            @endif
            
            @if(Session::has('success'))
            <p class="text-success">{{session('success')}}</p>
            @endif
            <div class="table-responsive">
                <form enctype="multipart/form-data" method="post" action="{{url('admin/events')}}">
                    @csrf
                    <table class="table table-bordered">
                        
                        <tr>
                            <th>Select Event Type<span class="text-danger">*</span></th>
                            <td>
                                <select name="et_id" class="form-control">
                                    <option value="">--- Select ---</option>
                                    @foreach($eventtypes as $et) 
                                    <option value="{{$et->id}}">{{$et->title}}</option>
                                    @endforeach
                                </select>
                            </td>

                        </tr>

                        <tr>
                            <th>Title<span class="text-danger">*</span></th>
                            <td> <input type="string" class="form-control" name="title" />
                            </td>

                        </tr>

                        <tr>
                            <th>Price<span class="text-danger">*</span></th>
                            <td> <input type="string" class="form-control" name="price" />
                            </td>

                        </tr>

                        <tr>
                            <th>Event Date<span class="text-danger">*</span></th>
                            <td> <input type="date" class="form-control" name="event_date" />
                            </td>

                        </tr>

                        <tr>
                            <th>Location<span class="text-danger">*</span></th>
                            <td> <input type="string" class="form-control" name="location" />
                            </td>

                        </tr>

                        <tr>
                            <th>Gallery</th>
                            <td> <input type="file" multiple name="imgs[]" />
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


