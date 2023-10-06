<div class="nav-header bg-white shadow-xs border-0">
    <?php
    $icons = new \Feather\IconManager();
    ?>
    <div class="nav-top">
        
        <a href="{{ url('/') }}"><i class=" text-success display1-size me-2 ms-0"
                style="margin-top: -10px">{!! $icons->getIcon('zap') !!}</i><span
                class="mb-0 text-current d-inline-block fredoka-font ls-3 fw-600 font-xxl logo-text">EventsKenya.
            </span>
        </a>
        <a href="#" class="mob-menu ms-auto me-2 chat-active-btn"><i
                class=" text-grey-900 font-sm btn-round-md bg-greylight"
                style="margin-top: -10px">{!! $icons->getIcon('message-circle') !!}</i></a>
        <a href="default-video.html" class="mob-menu me-2"><i class=" text-grey-900 font-sm btn-round-md bg-greylight"
                style="margin-top: -10px">{!! $icons->getIcon('video') !!}</i></a>
        <a href="#" class="me-2 menu-search-icon mob-menu"><i
                class="text-grey-900 font-sm btn-round-md bg-greylight"
                style="margin-top: -10px">{!! $icons->getIcon('search') !!}</i></a>
        <button class="nav-menu me-0 ms-2"></button>
    </div>

    <link href="
https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.min.css
" rel="stylesheet">
    
    <form action="" method="GET" class="float-left header-search">
        <div class="mb-0 form-group icon-input">
            <i class=" font-sm text-grey-400" style="margin-top: -10px">{!! $icons->getIcon('search') !!}</i>
            <input type="text" name="query" placeholder="Start typing to search.."
                class="pt-2 pb-2 border-0 bg-grey lh-32 ps-5 pe-3 font-xssss fw-500 rounded-xl w350 theme-dark-bg">
        </div>
    </form>
    <a href="{{ url('/social-home') }}" class="  p-2 text-center ms-0 menu-icon center-menu-icon"><i
            class=" font-lg bg-greylight btn-round-lg theme-dark-bg text-grey-500"
            style="margin-top: -10px">{!! $icons->getIcon('home') !!}</i></a>
    <a href="" class="p-2 text-center ms-0 menu-icon center-menu-icon"><i
            class=" font-lg bg-greylight btn-round-lg theme-dark-bg text-grey-500"
            style="margin-top: -10px">{!! $icons->getIcon('zap') !!}</i></a>
    <a href="" class="   p-2 text-center ms-0 menu-icon center-menu-icon"><i
            class="font-lg bg-greylight btn-round-lg theme-dark-bg text-grey-500"
            style="margin-top: -10px">{!! $icons->getIcon('video') !!}</i></a>
 

    <a href="#" class="p-2 text-center ms-auto menu-icon" id="dropdownMenu3" data-bs-toggle="dropdown" aria-expanded="false"><span class="dot-count bg-warning"></span><i class="text-current font-xl" style="margin-top: -10px">{!! $icons->getIcon('bell') !!}</i></a>
    <div class="dropdown-menu dropdown-menu-end p-4 rounded-3 border-0 shadow-lg" aria-labelledby="dropdownMenu3">
        
        <h4 class="fw-700 font-xss mb-4">Notification</h4>
        <div class="card bg-transparent-card w-100 border-0 ps-5 mb-3">
            <img src="images/user-8.png" alt="user" class="w40 position-absolute left-0">
            <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block">Hendrix Stamp <span class="text-grey-400 font-xsssss fw-600 float-right mt-1"> 3 min</span></h5>
            <h6 class="text-grey-500 fw-500 font-xssss lh-4">There are many variations of pass..</h6>
        </div>
        <div class="card bg-transparent-card w-100 border-0 ps-5 mb-3">
            <img src="images/user-4.png" alt="user" class="w40 position-absolute left-0">
            <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block">Goria Coast <span class="text-grey-400 font-xsssss fw-600 float-right mt-1"> 2 min</span></h5>
            <h6 class="text-grey-500 fw-500 font-xssss lh-4">Mobile Apps UI Designer is require..</h6>
        </div>

        <div class="card bg-transparent-card w-100 border-0 ps-5 mb-3">
            <img src="images/user-7.png" alt="user" class="w40 position-absolute left-0">
            <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block">Surfiya Zakir <span class="text-grey-400 font-xsssss fw-600 float-right mt-1"> 1 min</span></h5>
            <h6 class="text-grey-500 fw-500 font-xssss lh-4">Mobile Apps UI Designer is require..</h6>
        </div>
        <div class="card bg-transparent-card w-100 border-0 ps-5">
            <img src="images/user-6.png" alt="user" class="w40 position-absolute left-0">
            <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block">Victor Exrixon <span class="text-grey-400 font-xsssss fw-600 float-right mt-1"> 30 sec</span></h5>
            <h6 class="text-grey-500 fw-500 font-xssss lh-4">Mobile Apps UI Designer is require..</h6>
        </div>
    </div>
    

    <a href="" class="p-2 text-center ms-3"><i class="text-current font-xl"
            style="margin-top: -10px">{!! $icons->getIcon('message-circle') !!}</i></a>
    <div class="p-2 text-center cursor-pointer ms-3 position-relative dropdown-menu-icon menu-icon">
        <a href="{{url('social-home/settingspage')}}" class="p-2 text-center ms-3"><i class="text-current animation-spin d-inline-block font-xl"
            style="margin-top: -10px">{!! $icons->getIcon('settings') !!}</i></a>
        
    </div>


    

    <a href="{{ url('/social-home/accountpage') }}" class="p-0 ms-3 menu-icon"><img src="images/profile-4.png" alt="user" class="w40 mt--1"></a>
    
</div>
<!-- navigation top -->