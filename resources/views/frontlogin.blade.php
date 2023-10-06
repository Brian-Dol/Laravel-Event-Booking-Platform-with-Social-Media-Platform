@extends('frontlayout')
@section('content')

<!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('frontassets/img/new-hero-bg.jpg') }}');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Login</h2>
        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>Contact</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

<div class="container my-4">
	<h3 class="mb-3">Login</h3>
	@if(Session::has('error'))
	<p class="text-danger">{{session('error')}}</p>
	@endif
	<form method="post" action="{{url('customer/login')}}">
		@csrf
		<table class="table table-bordered">
			<tr>
				<th>Email<span class="text-danger">*</span></th>
				<td><input required type="email" class="form-control" name="email"></td>
			</tr>
			<tr>
				<th>Password<span class="text-danger">*</span></th>
				<td><input required type="password" class="form-control" name="password"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" class="btn btn-primary" /></td>
			</tr>
		</table>
	</form>
</div>

@section('scripts')
<script src="https://js.stripe.com/v3/"></script>
@endsection

@endsection