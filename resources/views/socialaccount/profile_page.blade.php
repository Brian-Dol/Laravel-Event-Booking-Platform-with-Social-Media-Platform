@extends('layouts.master')

@section('content')

<!-- main content -->
<div class="main-content right-chat-active">
    <?php
    $icons = new \Feather\IconManager();
    ?>
    
    <div class="middle-sidebar-bottom">
        <div class="middle-sidebar-left">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3 mt-3 overflow-hidden">
                        <div class="card-body position-relative h240 bg-image-cover bg-image-center" style="background-image: url(images/bb-9.jpg);"></div>
                        <div class="card-body d-block pt-4 text-center position-relative">
                            <figure class="avatar mt--6 position-relative w75 z-index-1 w100 z-index-1 ms-auto me-auto"><img src="images/pt-1.jpg" alt="image" class="p-1 bg-white rounded-xl w-100"></figure>

                            <h4 class="font-xs ls-1 fw-700 text-grey-900">{{ $customer->first_name }} {{ $customer->last_name }}<span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">{{$customer->email }}</span></h4>
                            <div class="d-flex align-items-center pt-0 position-absolute left-15 top-10 mt-4 ms-2">
                                <h4 class="font-xsssss text-center d-none d-lg-block text-grey-500 fw-600 ms-2 me-2"><b class="text-grey-900 mb-1 font-sm fw-700 d-inline-block ls-3 text-dark">456 </b> {{ $posts->count() }}</h4>
                                <h4 class="font-xsssss text-center d-none d-lg-block text-grey-500 fw-600 ms-2 me-2"><b class="text-grey-900 mb-1 font-sm fw-700 d-inline-block ls-3 text-dark">2.1k </b> Followers</h4>
                                <h4 class="font-xsssss text-center d-none d-lg-block text-grey-500 fw-600 ms-2 me-2"><b class="text-grey-900 mb-1 font-sm fw-700 d-inline-block ls-3 text-dark">32k </b> Follow</h4>
                            </div>
                            <div class="d-flex align-items-center justify-content-center position-absolute right-15 top-10 mt-2 me-2">
                                <a href="#" class="d-none d-lg-block bg-success p-3 z-index-1 rounded-3 text-white font-xsssss text-uppercase fw-700 ls-3">Add Friend</a>
                                <a href="#" class="d-none d-lg-block bg-greylight btn-round-lg ms-2 rounded-3 text-grey-700"><i class="feather-mail font-md"></i></a>
                                <a href="#" id="dropdownMenu8" class="d-none d-lg-block btn-round-lg ms-2 rounded-3 text-grey-700 bg-greylight" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-more font-md"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-4 rounded-xxl border-0 shadow-lg" aria-labelledby="dropdownMenu8">
                                    
                                </div>
                            </div>
                        </div>

                           <!-- Profile top menu bar -->

                        <div class="card-body d-block w-100 shadow-none mb-0 p-0 border-top-xs">
                            <ul class="nav nav-tabs h55 d-flex product-info-tab border-bottom-0 ps-4" id="pills-tab" role="tablist">
                                <li class="active list-inline-item me-5"><a class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block active" href="#navtabs1" data-toggle="tab">About</a></li>
                                <li class="list-inline-item me-5"><a class="fw-700 me-sm-5 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block" href="#navtabs7" data-toggle="tab">Media</a></li>
                                <li class="list-inline-item ms-auto mt-3 me-4"><a href="#" class=""><i class="ti-more-alt text-grey-500 font-xs"></i></a></li>
                            </ul>
                        </div>
                         <!-- End of Profile top menu bar -->

                    </div>
                </div>



                                <!-- Profile side bar -->

                <div class="col-xl-4 col-xxl-3 col-lg-4 pe-0">
                    <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3">
                        <div class="card-body d-block p-4">
                            <h4 class="fw-700 mb-3 font-xsss text-grey-900">About</h4>
                            <p class="fw-500 text-grey-500 lh-24 font-xssss mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                        </div>
                        <div class="card-body border-top-xs d-flex">
                            <i class="feather-lock text-grey-500 me-3 font-lg"></i>
                            <h4 class="fw-700 text-grey-900 font-xssss mt-0">Private <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">What's up, how are you?</span></h4>
                        </div>

                        <div class="card-body d-flex pt-0">
                            <i class="feather-eye text-grey-500 me-3 font-lg"></i>
                            <h4 class="fw-700 text-grey-900 font-xssss mt-0">Visble <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">Anyone can find you</span></h4>
                        </div>
                        <div class="card-body d-flex pt-0">
                            <i class="feather-map-pin text-grey-500 me-3 font-lg"></i>
                            <h4 class="fw-700 text-grey-900 font-xssss mt-1">Flodia, Austia </h4>
                        </div>
                        <div class="card-body d-flex pt-0">
                            <i class="feather-users text-grey-500 me-3 font-lg"></i>
                            <h4 class="fw-700 text-grey-900 font-xssss mt-1">Genarel Group</h4>
                        </div>
                    </div>
                    <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3">
                        <div class="card-body d-flex align-items-center  p-4">
                            <h4 class="fw-700 mb-0 font-xssss text-grey-900">Photos</h4>
                            <a href="#" class="fw-600 ms-auto font-xssss text-primary">See all</a>
                        </div>
                        <div class="card-body d-block pt-0 pb-2">
                            <div class="row">
                                <div class="col-6 mb-2 pe-1"><a href="images/e-2.jpg" data-lightbox="roadtrip"><img src="images/e-2.jpg" alt="image" class="img-fluid rounded-3 w-100"></a></div>
                                <div class="col-6 mb-2 ps-1"><a href="images/e-3.jpg" data-lightbox="roadtrip"><img src="images/e-3.jpg" alt="image" class="img-fluid rounded-3 w-100"></a></div>
                                <div class="col-6 mb-2 pe-1"><a href="images/e-4.jpg" data-lightbox="roadtrip"><img src="images/e-4.jpg" alt="image" class="img-fluid rounded-3 w-100"></a></div>
                                <div class="col-6 mb-2 ps-1"><a href="images/e-5.jpg" data-lightbox="roadtrip"><img src="images/e-5.jpg" alt="image" class="img-fluid rounded-3 w-100"></a></div>
                                <div class="col-6 mb-2 pe-1"><a href="images/e-2.jpg" data-lightbox="roadtrip"><img src="images/e-2.jpg" alt="image" class="img-fluid rounded-3 w-100"></a></div>
                                <div class="col-6 mb-2 ps-1"><a href="images/e-1.jpg" data-lightbox="roadtrip"><img src="images/e-1.jpg" alt="image" class="img-fluid rounded-3 w-100"></a></div>
                            </div>
                        </div>
                        <div class="card-body d-block w-100 pt-0">
                            <a href="#" class="p-2 lh-28 w-100 d-block bg-grey text-grey-800 text-center font-xssss fw-700 rounded-xl"><i class="feather-external-link font-xss me-2"></i> More</a>
                        </div>
                    </div>
                    
                    

                </div>

                <!-- End of Profile side bar -->

                <!-- User Comment box -->

                <div class="col-xl-8 col-xxl-9 col-lg-8">

                    <div class="card w-100 shadow-xss rounded-xxl border-0 ps-4 pt-4 pe-4 pb-3 mb-3 mt-3">
                        <div class="card-body p-0">
                            <a href="#" class=" font-xssss fw-600 text-grey-500 card-body p-0 d-flex align-items-center"><i class="btn-round-sm font-xs text-primary feather-edit-3 me-2 bg-greylight"></i>Create Post</a>
                        </div>
                        <div class="card-body p-0 mt-3 position-relative">
                            <figure class="avatar position-absolute ms-2 mt-1 top-5"><img src="images/user-8.png" alt="image" class="shadow-sm rounded-circle w30"></figure>
                            <textarea name="message" class="h100 bor-0 w-100 rounded-xxl p-2 ps-5 font-xssss text-grey-500 fw-500 border-light-md theme-dark-bg" cols="30" rows="10" placeholder="What's on your mind?"></textarea>
                        </div>
                        <div class="card-body d-flex p-0 mt-0">
                            
                            <a href="#" class="d-flex align-items-center font-xssss fw-600 ls-1 text-grey-700 text-dark pe-4"><i class="font-md text-success feather-image me-2"></i><span class="d-none-xs">Photo/Video</span></a>
                            
                            <a href="#" class="ms-auto" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-more-alt text-grey-900 btn-round-md bg-greylight font-xss"></i></a>
                            
                        </div>
                    </div>

                <!-- End of User Comment box -->


<!-- Posts section -->
                    <div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-3">
                        <div class="card-body p-0 d-flex">
                            <figure class="avatar me-3"><img src="images/user-7.png" alt="image" class="shadow-sm rounded-circle w45"></figure>
                            <h4 class="fw-700 text-grey-900 font-xssss mt-1">Anthony Daugloi <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">3 hour ago</span></h4>
                            <a href="#" class="ms-auto" id="dropdownMenu21" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-more-alt text-grey-900 btn-round-md bg-greylight font-xss"></i></a>
                            <div class="dropdown-menu dropdown-menu-end p-4 rounded-xxl border-0 shadow-lg" aria-labelledby="dropdownMenu21">
                                <div class="card-body p-0 d-flex">
                                    <i class="feather-bookmark text-grey-500 me-3 font-lg"></i>
                                    <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Save Link <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Add this to your saved items</span></h4>
                                </div>
                                <div class="card-body p-0 d-flex mt-2">
                                    <i class="feather-alert-circle text-grey-500 me-3 font-lg"></i>
                                    <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Hide Post <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to your saved items</span></h4>
                                </div>
                                <div class="card-body p-0 d-flex mt-2">
                                    <i class="feather-alert-octagon text-grey-500 me-3 font-lg"></i>
                                    <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Hide all from Group <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to your saved items</span></h4>
                                </div>
                                <div class="card-body p-0 d-flex mt-2">
                                    <i class="feather-lock text-grey-500 me-3 font-lg"></i>
                                    <h4 class="fw-600 mb-0 text-grey-900 font-xssss mt-0 me-4">Unfollow Group <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to your saved items</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0 me-lg-5">
                            <p class="fw-500 text-grey-500 lh-26 font-xssss w-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus <a href="#" class="fw-600 text-primary ms-2">See more</a></p>
                        </div>
                        <div class="card-body d-block p-0">
                            <div class="row ps-2 pe-2">
                                <div class="col-xs-4 col-sm-4 p-1"><a href="images/t-10.jpg" data-lightbox="roadtrip"><img src="images/t-10.jpg" class="rounded-3 w-100" alt="image"></a></div>
                                <div class="col-xs-4 col-sm-4 p-1"><a href="images/t-11.jpg" data-lightbox="roadtrip"><img src="images/t-11.jpg" class="rounded-3 w-100" alt="image"></a></div>
                                <div class="col-xs-4 col-sm-4 p-1"><a href="images/t-12.jpg" data-lightbox="roadtrip" class="position-relative d-block"><img src="images/t-12.jpg" class="rounded-3 w-100" alt="image"><span class="img-count font-sm text-white ls-3 fw-600"><b>+2</b></span></a></div>
                            </div>
                        </div>
                        <div class="card-body d-flex p-0 mt-3">
                            <a href="#" class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-3"><i class="feather-thumbs-up text-white bg-primary-gradiant me-1 btn-round-xs font-xss"></i> <i class="feather-heart text-white bg-red-gradiant me-2 btn-round-xs font-xss"></i>2.8K Like</a>
                            <a href="#" class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i class="feather-message-circle text-dark text-grey-900 btn-round-sm font-lg"></i>22 Comment</a>
                            <a href="#" class="ms-auto d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i class="feather-share-2 text-grey-900 text-dark btn-round-sm font-lg"></i><span class="d-none-xs">Share</span></a>
                        </div>
                    </div>
                    
                    <div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-0">
                        <div class="card-body p-0 d-flex">
                            <figure class="avatar me-3"><img src="images/user-8.png" alt="image" class="shadow-sm rounded-circle w45"></figure>
                            <h4 class="fw-700 text-grey-900 font-xssss mt-1">Anthony Daugloi <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">2 hour ago</span></h4>
                            <a href="#" class="ms-auto" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-more-alt text-grey-900 btn-round-md bg-greylight font-xss"></i></a>
                            <div class="dropdown-menu dropdown-menu-end p-4 rounded-xxl border-0 shadow-lg" aria-labelledby="dropdownMenu2">
                                <div class="card-body p-0 d-flex">
                                    <i class="feather-bookmark text-grey-500 me-3 font-lg"></i>
                                    <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Save Link <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Add this to your saved items</span></h4>
                                </div>
                                <div class="card-body p-0 d-flex mt-2">
                                    <i class="feather-alert-circle text-grey-500 me-3 font-lg"></i>
                                    <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Hide Post <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to your saved items</span></h4>
                                </div>
                                <div class="card-body p-0 d-flex mt-2">
                                    <i class="feather-alert-octagon text-grey-500 me-3 font-lg"></i>
                                    <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Hide all from Group <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to your saved items</span></h4>
                                </div>
                                <div class="card-body p-0 d-flex mt-2">
                                    <i class="feather-lock text-grey-500 me-3 font-lg"></i>
                                    <h4 class="fw-600 mb-0 text-grey-900 font-xssss mt-0 me-4">Unfollow Group <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to your saved items</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0 me-lg-5">
                            <p class="fw-500 text-grey-500 lh-26 font-xssss w-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus <a href="#" class="fw-600 text-primary ms-2">See more</a></p>
                        </div>
                        <div class="card-body d-flex p-0">
                            <a href="#" class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-3"><i class="feather-thumbs-up text-white bg-primary-gradiant me-1 btn-round-xs font-xss"></i> <i class="feather-heart text-white bg-red-gradiant me-2 btn-round-xs font-xss"></i>2.8K Like</a>
                            <a href="#" class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i class="feather-message-circle text-dark text-grey-900 btn-round-sm font-lg"></i>22 Comment</a>
                            <a href="#" class="ms-auto d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i class="feather-share-2 text-grey-900 text-dark btn-round-sm font-lg"></i><span class="d-none-xs">Share</span></a>
                        </div>
                    </div>
<!-- End of Posts section -->



                    <div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-3 mt-3">
                        <div class="card-body p-0 d-flex">
                            <figure class="avatar me-3"><img src="images/user-8.png" alt="image" class="shadow-sm rounded-circle w45"></figure>
                            <h4 class="fw-700 text-grey-900 font-xssss mt-1">Anthony Daugloi <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">2 hour ago</span></h4>
                            <a href="#" class="ms-auto" id="dropdownMenu5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-more-alt text-grey-900 btn-round-md bg-greylight font-xss"></i></a>
                            <div class="dropdown-menu dropdown-menu-end p-4 rounded-xxl border-0 shadow-lg" aria-labelledby="dropdownMenu5">
                                <div class="card-body p-0 d-flex">
                                    <i class="feather-bookmark text-grey-500 me-3 font-lg"></i>
                                    <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Save Link <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Add this to your saved items</span></h4>
                                </div>
                                <div class="card-body p-0 d-flex mt-2">
                                    <i class="feather-alert-circle text-grey-500 me-3 font-lg"></i>
                                    <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Hide Post <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to your saved items</span></h4>
                                </div>
                                <div class="card-body p-0 d-flex mt-2">
                                    <i class="feather-alert-octagon text-grey-500 me-3 font-lg"></i>
                                    <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Hide all from Group <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to your saved items</span></h4>
                                </div>
                                <div class="card-body p-0 d-flex mt-2">
                                    <i class="feather-lock text-grey-500 me-3 font-lg"></i>
                                    <h4 class="fw-600 mb-0 text-grey-900 font-xssss mt-0 me-4">Unfollow Group <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to your saved items</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0 mb-3 rounded-3 overflow-hidden">
                            <a href="#" class="video-btn">
                                <video autoplay loop class="float-right w-100">
                                    <source src="images/v-2.mp4" type="video/mp4">
                                </video>
                            </a>
                        </div>
                        <div class="card-body p-0 me-lg-5">
                            <p class="fw-500 text-grey-500 lh-26 font-xssss w-100 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus <a href="#" class="fw-600 text-primary ms-2">See more</a></p>
                        </div>
                        <div class="card-body d-flex p-0">
                            <a href="#" class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-3"><i class="feather-thumbs-up text-white bg-primary-gradiant me-1 btn-round-xs font-xss"></i> <i class="feather-heart text-white bg-red-gradiant me-2 btn-round-xs font-xss"></i>2.8K Like</a>
                            <a href="#" class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i class="feather-message-circle text-dark text-grey-900 btn-round-sm font-lg"></i>22 Comment</a>
                            <a href="#" class="ms-auto d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i class="feather-share-2 text-grey-900 text-dark btn-round-sm font-lg"></i><span class="d-none-xs">Share</span></a>
                        </div>
                    </div>

                    <div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-4">
                        <div class="card-body p-0 d-flex">
                            <figure class="avatar me-3"><img src="images/user-8.png" alt="image" class="shadow-sm rounded-circle w45"></figure>
                            <h4 class="fw-700 text-grey-900 font-xssss mt-1">Anthony Daugloi <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">2 hour ago</span></h4>
                            <a href="#" class="ms-auto"><i class="ti-more-alt text-grey-900 btn-round-md bg-greylight font-xss"></i></a>
                        </div>

                        <div class="card-body p-0 me-lg-5">
                            <p class="fw-500 text-grey-500 lh-26 font-xssss w-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus <a href="#" class="fw-600 text-primary ms-2">See more</a></p>
                        </div>
                        <div class="card-body d-block p-0 mb-3">
                            <div class="row ps-2 pe-2">
                                <div class="col-xs-6 col-sm-6 p-1"><a href="images/t-21.jpg" data-lightbox="roadtri"><img src="images/t-21.jpg" class="rounded-3 w-100" alt="image"></a></div>
                                <div class="col-xs-6 col-sm-6 p-1"><a href="images/t-22.jpg" data-lightbox="roadtri"><img src="images/t-22.jpg" class="rounded-3 w-100" alt="image"></a></div>
                            </div>
                            <div class="row ps-2 pe-2">
                                <div class="col-xs-4 col-sm-4 p-1"><a href="images/t-23.jpg" data-lightbox="roadtri"><img src="images/t-23.jpg" class="rounded-3 w-100" alt="image"></a></div>
                                <div class="col-xs-4 col-sm-4 p-1"><a href="images/t-24.jpg" data-lightbox="roadtri"><img src="images/t-24.jpg" class="rounded-3 w-100" alt="image"></a></div>
                                <div class="col-xs-4 col-sm-4 p-1"><a href="images/t-25.jpg" data-lightbox="roadtri" class="position-relative d-block"><img src="images/t-25.jpg" class="rounded-3 w-100" alt="image"><span class="img-count font-sm text-white ls-3 fw-600"><b>+2</b></span></a></div>
                            </div>
                        </div>
                        <div class="card-body d-flex p-0">
                            <a href="#" class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-3"><i class="feather-thumbs-up text-white bg-primary-gradiant me-1 btn-round-xs font-xss"></i> <i class="feather-heart text-white bg-red-gradiant me-2 btn-round-xs font-xss"></i>2.8K Like</a>
                            <a href="#" class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i class="feather-message-circle text-dark text-grey-900 btn-round-sm font-lg"></i>22 Comment</a>
                            <a href="#" class="ms-auto d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i class="feather-share-2 text-grey-900 text-dark btn-round-sm font-lg"></i><span class="d-none-xs">Share</span></a>
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
        </div>
         
    </div>            
</div>
<!-- main content -->
@endsection