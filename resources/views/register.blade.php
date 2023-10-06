@extends('frontlayout')
@section('content')

<!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('frontassets/img/banner-other.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Register</h2>
        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>Contact</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

   <div class="container my-4">

            @if($errors->any())
                @foreach($errors->all() as $error)
                  <p class="text-danger">{{$error}}</p>
                @endforeach
            @endif


            @if(Session::has('success'))
            <p class="text-success">{{session('success')}}</p>
            @endif
            <div class="table-responsive">
                <form method="post" enctype="multipart/form-data" action="{{url('admin/customer')}}">
                    @csrf
                    <table class="table table-bordered">
                        <tr>
                            <th>First Name<span class="text-danger">*</span></th>
                            <td> <input type="string" class="form-control" name="first_name" />
                            </td>

                        </tr>

                        <tr>
                            <th>Last Name<span class="text-danger">*</span></th>
                            <td> <input type="string" class="form-control" name="last_name" />
                            </td>

                        </tr>

                        <tr>
                            <th>Email<span class="text-danger">*</span></th>
                            <td> <input type="email" class="form-control" name="email" />
                            </td>

                        </tr>

                        <tr>
                            <th>Address</th>
                            <td> <input type="string" class="form-control" name="address" />
                            </td>

                        </tr>
                                
                        <tr>
                            <th>Nationality</th>
                            <td> <input type="string" class="form-control" name="nationality" />
                            </td>

                        </tr>
                    

                        <tr>
                            <th>Date Of Birth<span class="text-danger">*</span></th>
                            <td> <input type="date" class="form-control" name="DOB" />
                            </td>

                        </tr>

                        <tr>
                            <th>Password<span class="text-danger">*</span></th>
                            <td> <input type="password" class="form-control" name="password" />
                            </td>

                        </tr>

                        <tr>
                            <th>Upload Photo</th>
                            <td> <input type="file" name="photo" />
                            </td>

                        </tr>

                        
                        <tr>
                          <input type="hidden" name="ref" value="front" />
                          <td colspan="2"><input type="submit" class="btn btn-primary" /></td>
                        </tr>


                    </table>
                </form>
            </div>

    </div>



@endsection