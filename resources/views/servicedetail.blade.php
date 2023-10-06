@extends('frontlayout')
@section('content')

<!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('frontassets/img/new-hero-bg.jpg') }}');" >
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Service Details</h2>
        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>Contact</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

<div class="container my-4">
	<h3 class="mb-3">{{$service->title}}</h3>
	<p>{{$service->detail_desc}}</p>
</div>
@endsection