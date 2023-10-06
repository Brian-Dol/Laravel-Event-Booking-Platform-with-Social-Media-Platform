@extends('layout')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Customer Data
                <a href="{{url('admin/customer')}}" class="float-right btn btn-success btn-sm">View All</a>

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
                <form method="post" enctype="multipart/form-data" action="{{url('admin/customer/'.$data->id)}}">
                    @csrf
                    @method('put')
                    <table class="table table-bordered">
                        
                        <tr>
                            <th>First Name<span class="text-danger">*</span></th>
                            <td> <input value="{{$data->first_name}}" type="string" class="form-control" name="first_name" />
                            </td>

                        </tr>

                        <tr>
                            <th>Last Name<span class="text-danger">*</span></th>
                            <td> <input value="{{$data->last_name}}" type="string" class="form-control" name="last_name" />
                            </td>

                        </tr>

                        <tr>
                            <th>Email<span class="text-danger">*</span></th>
                            <td> <input value="{{$data->email}}" type="email" class="form-control" name="email" />
                            </td>

                        </tr>

                        <tr>
                            <th>Address</th>
                            <td> <input value="{{$data->address}}" type="string" class="form-control" name="address" />
                            </td>

                        </tr>
                                
                        <tr>
                            <th>Nationality</th>
                            <td> <input value="{{$data->nationality}}" type="string" class="form-control" name="nationality" />
                            </td>

                        </tr>
                    

                        <tr>
                            <th>Date Of Birth<span class="text-danger">*</span></th>
                            <td> <input value="{{$data->DOB}}" type="date" class="form-control" name="DOB" />
                            </td>

                        </tr>

                        <tr>
                            <th>Password<span class="text-danger">*</span></th>
                            <td> <input value="{{$data->password}}" type="password" class="form-control" name="password" />
                            </td>

                        </tr>

                        <tr>
                            <th>Upload Photo</th>
                            <td>
                                <input type="file" name="photo" />
                                <input value="{{$data->photo}}" type="hidden" name="prev_photo"/>

                                <img width="100" src="{{asset('storage/app/'.$data->photo)}}" />
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


