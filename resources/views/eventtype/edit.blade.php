@extends('layout')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit {{$data->title}}
                <a href="{{url('admin/eventtype')}}" class="float-right btn btn-success btn-sm">View All</a>

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
                <form method="post" action="{{url('admin/eventtype/'.$data->id)}}">
                    @csrf
                    @method('put')
                    <table class="table table-bordered">
                        <tr>
                            <th>Title<span class="text-danger">*</span></th>
                            <td> <input value="{{$data->title}} " type="string" class="form-control" name="title" />
                            </td>

                        </tr>

                        <tr>
                            <th>Details<span class="text-danger">*</span></th>
                            <td> <textarea class="form-control" name="detail" >{{$data->detail}}</textarea>
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


