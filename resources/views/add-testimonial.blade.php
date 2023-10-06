@extends('frontlayout')
@section('content')

<!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('frontassets/img/sagana-kenya.jpg') }}');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Add Testimonial</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Contact</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

<div class="container my-4">
	<h3 class="mb-3">Add Testimonial</h3>
	@if(Session::has('success'))
	<p class="text-success">{{session('success')}}</p>
	@endif
	<form method="post" action="{{url('customer/save-testimonial')}}">
		@csrf
		<table class="table table-bordered">
			<tr>
				<th>Testimonial<span class="text-danger">*</span></th>
				<td><textarea name="testi_cont" class="form-control" rows="8"></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" class="btn btn-primary" /></td>
			</tr>
		</table>
	</form>
</div>
@endsection