@extends('layouts.master')

@section('content')

<div class="main-content right-chat-active">
    <?php
    $icons = new \Feather\IconManager();
    ?>
            
        <div class="middle-sidebar-bottom">
            <div class="middle-sidebar-left">
                <div class="row feed-body">
                    <div class="col-xl-8 col-xxl-9 col-lg-8">
                        <div class="card w-100 shadow-xss rounded-xxl border-0 ps-4 pt-4 pe-4 pb-3 mb-3">
                        <form action="{{ url('social-home/editpost/'.$post->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body p-0">
                                <button class=" font-xssss fw-600 text-grey-500 card-body p-0 d-flex align-items-center"><i class="btn-round-sm font-xs text-primary feather-edit-3 me-2 bg-greylight" type="submit"></i>Edit Post</button>
                                <input type="hidden" value="{{ Session::token() }}" name="_token">
                            </div>
                            <div class="card-body p-0 mt-3 position-relative">
                                
                                <textarea name="body" id="new-post" class="h100 bor-0 w-100 rounded-xxl p-2 ps-5 font-xssss text-grey-500 fw-500 border-light-md theme-dark-bg" cols="30" rows="10" placeholder="What's on your mind?">{{$post->body}}</textarea>
                            </div>
                            <div class="card-body d-flex p-0 mt-0">
                                
                                <a href="#" class="d-flex align-items-center font-xssss fw-600 ls-1 text-grey-700 text-dark pe-4"><i class="font-md text-success feather-image me-2"></i><span class="d-none-xs">Photo/Video</span></a>
                                
                            </div>


                        </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection
