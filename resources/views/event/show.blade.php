@extends('layout')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{$data->title}}
                <a href="{{url('admin/events')}}" class="float-right btn btn-success btn-sm">View All</a>

            </h6>
        </div>
        <div class="card-body">
            
            <div class="table-responsive">
                
                    <table class="table table-bordered">

                        <tr>
                            <th>Event Type</th>
                            <td>{{$data->eventtype->title}}</td>

                        </tr>

                        <tr>
                            <th>Title</th>
                            <td>{{$data->title}} </td>

                        </tr>

                        <tr>
                            <th>Price</th>
                            <td>{{$data->price}} </td>

                        </tr>

                        <tr>
                            <th>Event Date</th>
                            <td>{{$data->event_date}} </td>

                        </tr>

                        <tr>
                            <th>Location</th>
                            <td>{{$data->location}} </td>

                        </tr>

                        <tr>
                            <th>Gallery Images</th>
                            <td><table class="table table-bordered mt-2">
                                <tr>
                                    
                                    @foreach($data->eventimages as $img)
                                        <td class="imgcol{{$img->id}}">
                                            <img width="150" src="{{asset('storage/app/'.$img->img_scr)}}"/>
                                            
                                        </td>
                                    @endforeach

                                </tr>
                                
                                </table></td>

                        </tr>

                    </table>
                
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->



@endsection


