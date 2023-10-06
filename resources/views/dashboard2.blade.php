@extends('layouts.master')

@section('content')

<div class="main-content right-chat-active">
    <?php
    $icons = new \Feather\IconManager();
    ?>
            
            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">

                    <!-- loader wrapper -->
                    <div class="preloader-wrap p-3">
                        <div class="box shimmer">
                            <div class="lines">
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                            </div>
                        </div>
                        <div class="box shimmer mb-3">
                            <div class="lines">
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                            </div>
                        </div>
                        <div class="box shimmer">
                            <div class="lines">
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                            </div>
                        </div>
                    </div>
                    <!-- loader wrapper -->
                    <div class="row feed-body">
                        <div class="col-xl-8 col-xxl-9 col-lg-8">


                            <div class="card w-100 shadow-none bg-transparent bg-transparent-card border-0 p-0 mb-0">
                                <div class="owl-carousel category-card owl-theme overflow-hidden nav-none">
                                    <div class="item">
                                        <div data-bs-toggle="modal" data-bs-target="#Modalstory" class="card w125 h200 d-block border-0 shadow-none rounded-xxxl bg-dark overflow-hidden mb-3 mt-3">
                                            <div class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                                <a href="#">
                                                    <span class="btn-round-lg bg-white"><i class="feather-plus font-lg"></i></span>
                                                    <div class="clearfix"></div>
                                                    <h4 class="fw-700 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">Add Story </h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div data-bs-toggle="modal" data-bs-target="#Modalstory" class="card w125 h200 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden cursor-pointer mb-3 mt-3" style="background-image: url(images/s-1.jpg);">
                                            <div class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                                <a href="#">
                                                    <figure class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1"><img src="images/user-11.png" alt="image" class="float-right p-0 bg-white rounded-circle w-100 shadow-xss"></figure>
                                                    <div class="clearfix"></div>
                                                    <h4 class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">Victor Exrixon </h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div data-bs-toggle="modal" data-bs-target="#Modalstory" class="card w125 h200 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden cursor-pointer mb-3 mt-3" style="background-image: url(images/s-2.jpg);">
                                            <div class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                                <a href="#">
                                                    <figure class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1"><img src="images/user-12.png" alt="image" class="float-right p-0 bg-white rounded-circle w-100 shadow-xss"></figure>
                                                    <div class="clearfix"></div>
                                                    <h4 class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">Surfiya Zakir </h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div data-bs-toggle="modal" data-bs-target="#Modalstory" class="card w125 h200 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden cursor-pointer mb-3 mt-3">
                                            <video autoplay loop class="float-right w-100">
                                                <source src="images/s-4.mp4" type="video/mp4">
                                            </video>
                                            <div class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                                <a href="#">
                                                    <figure class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1"><img src="images/user-9.png" alt="image" class="float-right p-0 bg-white rounded-circle w-100 shadow-xss"></figure>
                                                    <div class="clearfix"></div>
                                                    <h4 class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">Goria Coast </h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div data-bs-toggle="modal" data-bs-target="#Modalstory" class="card w125 h200 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden cursor-pointer mb-3 mt-3 me-1">
                                            <video autoplay loop class="float-right w-100">
                                                <source src="images/s-3.mp4" type="video/mp4">
                                            </video>
                                            <div class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                                <a href="#">
                                                    <figure class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1"><img src="images/user-4.png" alt="image" class="float-right p-0 bg-white rounded-circle w-100 shadow-xss"></figure>
                                                    <div class="clearfix"></div>
                                                    <h4 class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">Hurin Seary </h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div data-bs-toggle="modal" data-bs-target="#Modalstory" class="card w125 h200 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden cursor-pointer mb-3 mt-3" style="background-image: url(images/s-5.jpg);">
                                            <div class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                                <a href="#">
                                                    <figure class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1"><img src="images/user-3.png" alt="image" class="float-right p-0 bg-white rounded-circle w-100 shadow-xss"></figure>
                                                    <div class="clearfix"></div>
                                                    <h4 class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">David Goria </h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div data-bs-toggle="modal" data-bs-target="#Modalstory" class="card w125 h200 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden cursor-pointer mb-3 mt-3" style="background-image: url(images/s-6.jpg);">
                                            <div class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                                <a href="#">
                                                    <figure class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1"><img src="images/user-2.png" alt="image" class="float-right p-0 bg-white rounded-circle w-100 shadow-xss"></figure>
                                                    <div class="clearfix"></div>
                                                    <h4 class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">Seary Victor </h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                           


                            
                            <div class="card w-100 shadow-xss rounded-xxl border-0 ps-4 pt-4 pe-4 pb-3 mb-3">
                            <form action="{{url('social-home/createpost')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body p-0">
                                    <button class=" font-xssss fw-600 text-grey-500 card-body p-0 d-flex align-items-center"><i class="btn-round-sm font-xs text-primary feather-edit-3 me-2 bg-greylight" type="submit"></i>Create Post</button>
                                    <input type="hidden" value="{{ Session::token() }}" name="_token">
                                </div>
                                <div class="card-body p-0 mt-3 position-relative">
                                    <figure class="avatar position-absolute ms-2 mt-1 top-5"><img src="images/user-8.png" alt="image" class="shadow-sm rounded-circle w30"></figure>
                                    <textarea name="body" id="new-post" class="h100 bor-0 w-100 rounded-xxl p-2 ps-5 font-xssss text-grey-500 fw-500 border-light-md theme-dark-bg" cols="30" rows="10" placeholder="What's on your mind?"></textarea>
                                </div>
                                <div class="card-body d-flex p-0 mt-0">
                                    
                                    <a href="#" class="d-flex align-items-center font-xssss fw-600 ls-1 text-grey-700 text-dark pe-4"><i class="font-md text-success feather-image me-2"></i><span class="d-none-xs">Photo/Video</span></a>
                                    
                                </div>
                            @if(Session::has('success'))
                            <p class="text-success">{{session('success')}}</p>
                            @endif

                            </form>
                            </div>
                            


                             <div class="container">
                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        @foreach ($posts as $index => $post)
                                        <div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-4">
                                            <div class="card-body p-0 d-flex">
                                                <figure class="avatar me-3">
                                                    <img src="images/user-8.png" alt="image" class="shadow-sm rounded-circle w45">
                                                </figure>
                                                <h4 class="fw-700 text-grey-900 font-xssss mt-1">
                                                    {{ $post->customer ? $post->customer->first_name : '' }} {{ $post->customer ? $post->customer->last_name : '' }}
                                                    <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">
                                                        {{ $post->created_at->diffForHumans() }}
                                                    </span>
                                                </h4>
                                                <a href="#" class="ms-auto">
                                                    <i class="ti-more-alt text-grey-900 btn-round-md bg-greylight font-xss"></i>
                                                </a>
                                            </div>

                                            <div class="card-body p-0 me-lg-5">
                                                <p class="fw-500 text-grey-500 lh-26 font-xssss w-100">
                                                    {{ $post->body }}
                                                    
                                                </p>
                                            </div>

                                            <div class="card-body d-block p-0 mb-3">
                                                <!--<div class="row ps-2 pe-2">
                                                    @foreach ($post->images as $image)
                                                    <div class="col-xs-6 col-sm-6 p-1">
                                                        <a href="{{ asset('storage/' . $image->path) }}" data-lightbox="roadtri">
                                                            <img src="{{ asset('storage/' . $image->path) }}" class="rounded-3 w-100" alt="image">
                                                        </a>
                                                    </div>-->
                                                    
                                            </div>
                                        </div>

                                        <div class="card-body d-flex p-0">
                                            <a href="#" class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2">
                                                <i class="feather-thumbs-up text-white bg-primary-gradiant me-1 btn-round-xs font-xss"></i> 
                                                <i class="feather-heart text-white bg-red-gradiant me-2 btn-round-xs font-xss"></i>
                                                {{ $post->likes_count }} Like
                                            </a>

                                            <a href="#" class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss">
                                                <i class="feather-message-circle text-dark text-grey-900 btn-round-sm font-lg"></i>
                                                <span class="d-none-xss">{{ $post->comments->count() }} Comment</span>
                                            </a>
                                            <a href="#" class="ms-auto d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss">
                                                <i class="feather-share-2 text-grey-900 text-dark btn-round-sm font-lg"></i>
                                                <span class="d-none-xs">Share</span>
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
                                        
                                        
                                </div>
                             </div>
                                                        
                            <div class="card w-100 shadow-none bg-transparent bg-transparent-card border-0 p-0 mb-0">
                                <div class="owl-carousel category-card owl-theme overflow-hidden nav-none">
                                    <div class="item">
                                        <div class="card w150 d-block border-0 shadow-xss rounded-3 overflow-hidden mb-3 me-2 mt-3">
                                            <div class="card-body d-block w-100 ps-3 pe-3 pb-4 text-center">
                                                <figure class="avatar ms-auto me-auto mb-0 position-relative w65 z-index-1"><img src="images/user-11.png" alt="image" class="float-right p-0 bg-white rounded-circle w-100 shadow-xss"></figure>
                                                <div class="clearfix"></div>
                                                <h4 class="fw-700 font-xssss mt-3 mb-1">Richard Bowers  </h4>
                                                <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-3">@macale343</p>
                                                <a href="#" class="text-center p-2 lh-20 w100 ms-1 ls-3 d-inline-block rounded-xl bg-success font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            

                            

                            <div class="container">
                             <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    @foreach ($posts as $index => $post)
                                    <div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-4">
                                        <div class="card-body p-0 d-flex">
                                            <figure class="avatar me-3">
                                                <img src="images/user-8.png" alt="image" class="shadow-sm rounded-circle w45">
                                            </figure>
                                            <h4 class="fw-700 text-grey-900 font-xssss mt-1">
                                                {{ $post->customer ? $post->customer->first_name : '' }} {{ $post->customer ? $post->customer->last_name : '' }}
                                                <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">
                                                    {{ $post->created_at->diffForHumans() }}
                                                </span>
                                            </h4>
                                            <a href="#" class="ms-auto">
                                                <i class="ti-more-alt text-grey-900 btn-round-md bg-greylight font-xss"></i>
                                            </a>
                                        </div>

                                        <div class="card-body p-0 me-lg-5">
                                            <p class="fw-500 text-grey-500 lh-26 font-xssss w-100">
                                                {{ $post->body }}
                                                
                                            </p>
                                        </div>

                                        <div class="card-body d-block p-0 mb-3">
                                            <!--<div class="row ps-2 pe-2">
                                                @foreach ($post->images as $image)
                                                <div class="col-xs-6 col-sm-6 p-1">
                                                    <a href="{{ asset('storage/' . $image->path) }}" data-lightbox="roadtri">
                                                        <img src="{{ asset('storage/' . $image->path) }}" class="rounded-3 w-100" alt="image">
                                                    </a>
                                                </div>
                                            </div>-->
                                                
                                        </div>
                                    </div>

                                    <div class="card-body d-flex p-0">
                                        <a href="#" class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2">
                                            <i class="feather-thumbs-up text-white bg-primary-gradiant me-1 btn-round-xs font-xss"></i> 
                                            <i class="feather-heart text-white bg-red-gradiant me-2 btn-round-xs font-xss"></i>
                                            {{ $post->likes_count }} Like
                                        </a>

                                        <a href="#" class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss">
                                            <i class="feather-message-circle text-dark text-grey-900 btn-round-sm font-lg"></i>
                                            <span class="d-none-xss">{{ $post->comments->count() }} Comment</span>
                                        </a>
                                        <a href="#" class="ms-auto d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss">
                                            <i class="feather-share-2 text-grey-900 text-dark btn-round-sm font-lg"></i>
                                            <span class="d-none-xs">Share</span>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                             </div>
                            </div>
 

                            <div class="card w-100 text-center shadow-xss rounded-xxl border-0 p-4 mb-3 mt-3">
                                <div class="snippet mt-2 ms-auto me-auto" data-title=".dot-typing">
                                    <div class="stage">
                                        <div class="dot-typing"></div>
                                    </div>
                                </div>
                            </div>


                        </div>               
                        <div class="col-xl-4 col-xxl-3 col-lg-4 ps-lg-0">
                            <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3">
                                <div class="card-body d-flex align-items-center p-4">
                                    <h4 class="fw-700 mb-0 font-xssss text-grey-900">Friend Request</h4>
                                    <a href="default-member.html" class="fw-600 ms-auto font-xssss text-primary">See all</a>
                                </div>
                                <div class="card-body d-flex pt-4 ps-4 pe-4 pb-0 border-top-xs bor-0">
                                    <figure class="avatar me-3"><img src="images/user-7.png" alt="image" class="shadow-sm rounded-circle w45"></figure>
                                    <h4 class="fw-700 text-grey-900 font-xssss mt-1">Anthony Daugloi <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">12 mutual friends</span></h4>
                                </div>
                                <div class="card-body d-flex align-items-center pt-0 ps-4 pe-4 pb-4">
                                    <a href="#" class="p-2 lh-20 w100 bg-primary-gradiant me-2 text-white text-center font-xssss fw-600 ls-1 rounded-xl">Confirm</a>
                                    <a href="#" class="p-2 lh-20 w100 bg-grey text-grey-800 text-center font-xssss fw-600 ls-1 rounded-xl">Delete</a>
                                </div>

                                <div class="card-body d-flex pt-0 ps-4 pe-4 pb-0">
                                    <figure class="avatar me-3"><img src="images/user-8.png" alt="image" class="shadow-sm rounded-circle w45"></figure>
                                    <h4 class="fw-700 text-grey-900 font-xssss mt-1">Mohannad Zitoun <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">12 mutual friends</span></h4>
                                </div>
                                <div class="card-body d-flex align-items-center pt-0 ps-4 pe-4 pb-4">
                                    <a href="#" class="p-2 lh-20 w100 bg-primary-gradiant me-2 text-white text-center font-xssss fw-600 ls-1 rounded-xl">Confirm</a>
                                    <a href="#" class="p-2 lh-20 w100 bg-grey text-grey-800 text-center font-xssss fw-600 ls-1 rounded-xl">Delete</a>
                                </div>

                                <div class="card-body d-flex pt-0 ps-4 pe-4 pb-0">
                                    <figure class="avatar me-3"><img src="images/user-12.png" alt="image" class="shadow-sm rounded-circle w45"></figure>
                                    <h4 class="fw-700 text-grey-900 font-xssss mt-1">Mohannad Zitoun <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">12 mutual friends</span></h4>
                                </div>
                                <div class="card-body d-flex align-items-center pt-0 ps-4 pe-4 pb-4">
                                    <a href="#" class="p-2 lh-20 w100 bg-primary-gradiant me-2 text-white text-center font-xssss fw-600 ls-1 rounded-xl">Confirm</a>
                                    <a href="#" class="p-2 lh-20 w100 bg-grey text-grey-800 text-center font-xssss fw-600 ls-1 rounded-xl">Delete</a>
                                </div>
                            </div>

                            <div class="card w-100 shadow-xss rounded-xxl border-0 p-0 ">
                                <div class="card-body d-flex align-items-center p-4 mb-0">
                                    <h4 class="fw-700 mb-0 font-xssss text-grey-900">Confirm Friend</h4>
                                    <a href="default-member.html" class="fw-600 ms-auto font-xssss text-primary">See all</a>
                                </div>
                                <div class="card-body bg-transparent-card d-flex p-3 bg-greylight ms-3 me-3 rounded-3">
                                    <figure class="avatar me-2 mb-0"><img src="images/user-7.png" alt="image" class="shadow-sm rounded-circle w45"></figure>
                                    <h4 class="fw-700 text-grey-900 font-xssss mt-2">Anthony Daugloi <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">12 mutual friends</span></h4>
                                    <a href="#" class="btn-round-sm bg-white text-grey-900 feather-chevron-right font-xss ms-auto mt-2"></a>
                                </div>
                                <div class="card-body bg-transparent-card d-flex p-3 bg-greylight m-3 rounded-3" style="margin-bottom: 0 !important;">
                                    <figure class="avatar me-2 mb-0"><img src="images/user-8.png" alt="image" class="shadow-sm rounded-circle w45"></figure>
                                    <h4 class="fw-700 text-grey-900 font-xssss mt-2"> David Agfree  <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">12 mutual friends</span></h4>
                                    <a href="#" class="btn-round-sm bg-white text-grey-900 feather-plus font-xss ms-auto mt-2"></a>
                                </div>
                                <div class="card-body bg-transparent-card d-flex p-3 bg-greylight m-3 rounded-3">
                                    <figure class="avatar me-2 mb-0"><img src="images/user-12.png" alt="image" class="shadow-sm rounded-circle w45"></figure>
                                    <h4 class="fw-700 text-grey-900 font-xssss mt-2">Hugury Daugloi <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">12 mutual friends</span></h4>
                                    <a href="#" class="btn-round-sm bg-white text-grey-900 feather-plus font-xss ms-auto mt-2"></a>
                                </div>
                                
                            </div>

                            

                            


                            
                        </div>

                    </div>
                </div>
                
            </div>            
        </div>

@endsection