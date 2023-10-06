@extends('layout')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit {{$data->title}}
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
                <form enctype="multipart/form-data" method="post" action="{{url('admin/events/'.$data->id)}}">
                    @csrf
                    @method('put')
                    <table class="table table-bordered">

                        <tr>
                            <th>Select Event Type<span class="text-danger">*</span></th>
                            <td>
                                <select name="et_id" class="form-control">
                                    <option value="">--- Select ---</option>
                                    @foreach($eventtypes as $et) 
                                    <option @if($data->event_type_id==$et->id) selected @endif value="{{$et->id}}">{{$et->title}}</option>
                                    @endforeach
                                </select>
                            </td>

                        </tr>

                        <tr>
                            <th>Title<span class="text-danger">*</span></th>
                            <td> <input value="{{$data->title}} " type="string" class="form-control" name="title" />
                            </td>

                        </tr>

                        <tr>
                            <th>Price<span class="text-danger">*</span></th>
                            <td> <input value="{{$data->price}}" type="string" class="form-control" name="price" />
                            </td>

                        </tr>

                        <tr>
                            <th>Event Date<span class="text-danger">*</span></th>
                            <td> <input value="{{$data->event_date}} " type="date" class="form-control" name="event_date" />
                            </td>

                        </tr>

                        <tr>
                            <th>Location<span class="text-danger">*</span></th>
                            <td> <input value="{{$data->location}} " type="string" class="form-control" name="location" />
                            </td>

                        </tr>

                        <tr>
                            <th>Gallery Images</th>
                            <td> 
                                <table class="table table-bordered mt-2">
                                <tr>
                                    <input type="file" multiple name="imgs[]"/>
                                    @foreach($data->eventimages as $img)
                                        <td class="imgcol{{$img->id}}">
                                            <img width="150" src="{{asset('storage/app/'.$img->img_scr)}}"/>
                                            <p class="mt-2">
                                                <button type="button" onclick="return confirm('Are you sure you want to delete this image?')" class="btn btn-danger btn-sm delete-image" data-image-id="{{$img->id}}"><i class="fa fa-trash"></i></button>
                                            </p>
                                        </td>
                                    @endforeach

                                </tr>
                                
                                </table>
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

@section('scripts')

<script type="text/javascript">
    $(document).ready(function(){
        $(".delete-image").on('click',function(){
            var _img_id=$(this).attr('data-image-id');
            var _vm=$(this);
            $.ajax({
                url:"{{url('admin/eventimage/delete')}}/"+_img_id,
                
                dataType:'json',
                beforeSend:function(){
                    _vm.addClass('disabled');

                },
                success:function(res){
                    if(res.bool==true){
                        $(".imgcol"+_img_id).remove();
                        
                    }
                    _vm.removeClass('disabled');
                    
                }

            });
        });

    });
</script>


@endsection
@endsection

