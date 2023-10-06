@extends('frontlayout')
@section('content')

<!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/contact-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Payment Failed</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Contact</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-6 offset-3">
            <div class="card border border-danger">
                <div class="card-body">
                    <p class="card-text text-danger text-center">Your payment has been failed!!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection