@extends('frontend.layouts.main')

@section('title', app_name() . ' | '.__('navs.general.home'))
@section('style')
    <link href="{{ asset('css/frontend/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/home-mobile.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div id="wrap-top">
        <figure style="background: url(&quot;https://www.viewretreats.com/uploads/gallery/970%20Lonely%20Bay%20-%20Lounge%20Area_1465100620.jpg&quot;) center center / cover; height: 412px;  background: rgba(0, 0, 0, 0.8);">
            <div class="container">
                <div class="caption">
                    <h1 class="main-caption">Over 5.000 rooms</h1>
                    <h2 class="main-caption">have been rented in <strong>Vietnam </strong>, take your chance before it’s gone</h2>
                </div>  
                @include('frontend.includes.form-search')
                <div id="btn-find-rom" class="show-mobile">
                    <a href="#" class="btn btn-rnw btn-rnw-lg btn-rnw-yellow row justify-content-md-center" >Find Your Rooms</a>
                </div>
            </div>
        </figure>
    </div> <!-- end wrap top -->

    <div id="feature-agencies">
        <div class="container">
            <div class="head-1">Featured Agencies</div>
            <h1 class="head-2">We Bring The Best Valuable To You</h1>
            <div class="list-agencies row">
                <div class="col-12 col-md-5 p-r-10 none-padding-l mobile-none-p">
                    <div class="items-left items">
                        <img src="/img/frontend/bitmap_3.png">
                        <div class="content">
                            <h5 class="title-agency">Johnny Poole</h5>
                            <p class="description">Here, I focus on a range of items and features that we use in life without giving them a second thought such as Coca Cola, body muscles and holding ones own breath.</p>
                            <a href="#" class="view-detail"></a>
                        </div>
                    </div>
                </div>
                <div class="items-right  col p-l-10 none-padding-r mobile-none-p">
                    <div class="media items">
                        <img class="mr-3" src="/img/frontend/bitmap.png" alt="Generic placeholder image">
                        <div class="media-body content">
                            <h5 class="title-agency mt-0">ROYAL TOWER HOTEL</h5>
                            <p class="description">In recent years people have realized the importance of proper diet and exercise, and recent surveys show that over the last 20 years people are eating better.
                            </p>
                            <a href="#"  class="view-detail"></a>
                        </div>
                
                    </div>
                    <div class="media items hidden-mobile">
                        <img class="mr-3" src="/img/frontend/bitmap_2.png" alt="Generic placeholder image">
                        <div class="media-body content">
                            <h5 class="title-agency mt-0">Jim Moss</h5>
                            <p class="description">Lagos is a small town in Portugal built on a large hill overlooking the Mediterranean Ocean. While its old world charm is evident during the day, 
                            </p>
                             <a href="#"  class="view-detail"></a>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="btn-view-all">
                <button class="btn btn-rnw btn-rnw-md btn-rnw-light">View All</button>
            </div>
        </div>
        
    </div> <!-- end feature agencies -->

    <div id="how-it-work">
        <div class="container">
            <div class="head-1">HOW IT WORKS</div>
            <h1 class="head-2">A Few Steps To Make Things Happen</h1>
            <div class="type-user-nav">
                <ul class="nav nav-tabs">
                    <li class="nav-item user-tenant">
                        <a class="nav-link active" href="#">TENANT</a>
                    </li>
                    <li class="nav-item user-landlord">
                        <a class="nav-link" href="#">LANDLORD</a>
                    </li>
                    <li class="nav-item user-agency">
                        <a class="nav-link" href="#">AGENGY</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row steps-to-work">
            <div class="col-sm step col-3 step-active col-mobile-dream">
                <img src="{{asset('img/frontend/dream.png')}}" alt="">
                <div class="step-name ml-auto">Search & Find</div>
            </div>

            <div class="col-sm step col-3 col-mobile-contact">
                <img src="{{asset('img/frontend/contact.png')}}" alt="">
                <div class="step-name ml-auto">CONTACT</div>
            </div>
            <div class="col-sm step col-3 col-mobile-paperwork">
                <img src="{{asset('img/frontend/paperworks.png')}}" alt="">
                <div class="step-name ml-auto">Paperworks</div>
            </div>
            <div class="col-sm step col-3 col-mobile-enjoy">
                <img src="{{asset('img/frontend/love_white.png')}}" alt="">
                <div class="step-name ml-auto">Enjoy</div>
            </div>
            <div class="col-sm step col-3 hidden-mobile">

            </div>
        </div>
        <div class="container">
            <div class="row current-step">
                <div class="col-md col-sm-4 title-current-step ml-auto col-md-auto">
                    How to find</br>
                    your dream room!
                </div>
                <div class="col description-step">
                    People are wanting to fly to international destinations for vacations but planning a holiday getaway can easily turn into a stressful venture when the matter of costs comes up. However, airfare can be very expensive.</br>
                    <ul>
                        <li>Air fare by itself can kill the excitement.</li>
                        <li>And when people already factor in accommodations, food, and shopping.</li>
                    </ul>
                </div>
            </div>
            <div class="btn-view-instruction">
                <a href="#" class="btn btn-rnw btn-rnw-light view-instruction">VIDEO INSTRUCTION <img src="{{asset('img/frontend/play-video.png')}}" alt=""></a>
            </div>
        </div>
    </div> <!-- end how it work -->

    <div id="pricing">
        <div class="container">
            <div class="head-1">Pricing</div>
            <h1 class="head-2">Full Control, Flexible & Comfort</h1>
            <div class="type-price type-user-nav">
                <ul class="nav nav-tabs">
                  <li class="nav-item user-tenant">
                    <a class="nav-link active" href="#">TENANT</a>
                  </li>
                  <li class="nav-item user-landlord">
                    <a class="nav-link" href="#">LANDLORD</a>
                  </li>
                  <li class="nav-item user-agency">
                    <a class="nav-link" href="#">AGENGY</a>
                  </li>
                </ul>
            </div>

            <div id="carouselMobileListPackages" class="carousel slide list-packages row show-mobile" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselMobileListPackages" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselMobileListPackages" data-slide-to="1"></li>
                    <li data-target="#carouselMobileListPackages" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner package-item col package-select">
                    <div class="carousel-item active">
                        <div class="package-name">PACKAGE 01</div>
                        <div class="package-price">$50</div>
                        <div class="package-content">
                            Rent for 01 month</br>
                            Upload / Manage 01 apartment</br>
                            Landlord account</br>
                        </div>
                        <button class="btn btn-rnw btn-rnw-sm btn-rnw-light btn-get-it">Get It</button>
                    </div>
                    <div class="carousel-item ">
                        <div class="package-name">PACKAGE 01</div>
                        <div class="package-price">$50</div>
                        <div class="package-content">
                            Rent for 01 month</br>
                            Upload / Manage 01 apartment</br>
                            Landlord account</br>
                        </div>
                        <button class="btn btn-rnw btn-rnw-sm btn-rnw-light btn-get-it">Get It</button>

                    </div>
                    <div class="carousel-item ">
                        <div class="package-name">PACKAGE 01</div>
                        <div class="package-price">$50</div>
                        <div class="package-content">
                            Rent for 01 month</br>
                            Upload / Manage 01 apartment</br>
                            Landlord account</br>
                        </div>
                        <button class="btn btn-rnw btn-rnw-sm btn-rnw-light btn-get-it">Get It</button>

                    </div>
                </div>
            </div>

            <div class="list-packages row hidden-mobile">
                <div class="package-item col package-select">
                    <div class="package-name">PACKAGE 01</div>
                    <div class="package-price">$50</div>
                    <div class="package-content">
                    Rent for 01 month</br>
                    Upload / Manage 01 apartment</br>
                    Landlord account</br>
                    </div>
                    <button class="btn btn-rnw btn-rnw-sm btn-rnw-light btn-get-it">Get It</button>
                </div>
                <div class="package-item col">
                    <div class="package-name">PACKAGE 01</div>
                    <div class="package-price">$150</div>
                    <div class="package-content">
                    Rent for 06 months </br>
                    Upload / Manage 03 apartment</br>
                    Landlord account</br>
                    </div>
                    <button class="btn btn-rnw btn-rnw-sm btn-rnw-light btn-get-it">Get It</button>
                </div>
                <div class="package-item col">
                    <div class="package-name">PACKAGE 03</div>
                    <div class="package-price">$369</div>
                    <div class="package-content">
                    Rent for one year</br>
                    Upload / Manage unlimited apartment</br>
                    Landlord account</br>
                    </div>
                    <button class="btn btn-rnw btn-rnw-sm btn-rnw-light btn-get-it">Get It</button>
                </div>
            </div>
        </div>  
    </div> <!-- end pricing -->

    <div id="we-have">
        <div class="container">
            <div class="head-1">WE HAVE</div>
            <h1 class="head-2">Big Numbers To Prove Our Business</h1>
            <div class="list-item-we-have row hidden-mobile">
                <div class="item col">
                    <div class="item-name">AGENCIES</div>
                    <div class="item-quantity">2500</div>
                    <div class="item-time">Join per month</div>
                    <div class="item-content">
                        We can drink in a day. It’s kinda useless,</br> but fun information about us.
                    </div>
                </div>
                <div class="item col">
                    <div class="item-name">PROPERTIES</div>
                    <div class="item-quantity">1.6M</div>
                    <div class="item-time">Rented in 2017</div>
                    <div class="item-content">
                        We can drink in a day. It’s kinda useless,</br> but fun information about us.
                    </div>
                </div>
                <div class="item col">
                    <div class="item-name">LINKEDIN CONNECTION</div>
                    <div class="item-quantity">2.890</div>
                    <div class="item-time">Users per day</div>
                    <div class="item-content">
                        We can drink in a day. It’s kinda useless,</br> but fun information about us.
                    </div>
                </div>
            </div>
            <div id="carouselMobileWeHave" class="carousel slide list-item-we-have row show-mobile" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselMobileWeHave" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselMobileWeHave" data-slide-to="1"></li>
                    <li data-target="#carouselMobileWeHave" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner item col">
                    <div class="carousel-item active">
                        <div class="item-name">AGENCIES</div>
                        <div class="item-quantity">2500</div>
                        <div class="item-time">Join per month</div>
                        <div class="item-content">
                            We can drink in a day. It’s kinda useless,</br> but fun information about us.
                        </div>
                    </div>
                    <div class="carousel-item item col">
                        <div class="item-name">PROPERTIES</div>
                        <div class="item-quantity">1.6M</div>
                        <div class="item-time">Rented in 2017</div>
                        <div class="item-content">
                            We can drink in a day. It’s kinda useless,</br> but fun information about us.
                        </div>
                    </div>
                    <div class="carousel-item item col">
                        <div class="item-name">LINKEDIN CONNECTION</div>
                        <div class="item-quantity">2.890</div>
                        <div class="item-time">Users per day</div>
                        <div class="item-content">
                            We can drink in a day. It’s kinda useless,</br> but fun information about us.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--end we have-->

    <div id="download-our-app">
        <div class="container">
            <div class="head-1">Download Our App</div>
            <h1 class="head-2">RNW - Easy Property</br>
                Management & Advertisement</h1>
            <div class="row store-app">
                <img src="{{asset('img/frontend/app-store-badge.png')}}" alt="">
                <img src="{{asset('img/frontend/google-play-badge.png')}}" alt="">
            </div>
            <div class="row intro-app justify-content-md-center hidden-mobile">
                <div class="col intro-left">
                    <img src="{{asset('img/frontend/dream.png')}}" alt="">
                    <h5 class="title-item">Your dream room</br>
                        is in your hands!</h5>
                    <p class="des-item">A whole lot of inspiration you can get from the vast variety.</p>
                    <img src="{{asset('img/frontend/cash.png')}}" alt="">
                    <h5 class="title-item">CASH, CASH</br>
                        AND CASH!</h5>
                    <p class="des-item">A set of 130 elements, perfectly fitting each other.</p>
                </div>
                <div class="col intro-center">
                    <img src="{{asset('img/frontend/iphone.png')}}" alt="">
                </div>
                <div class="col intro-right">
                    <img src="{{asset('img/frontend/fast.png')}}" alt="">
                    <h5 class="title-item">Everything is</br>
                        automated and Fast!</h5>
                    <p class="des-item">A set of 130 elements, perfectly fitting each other.</p>
                    <img src="{{asset('img/frontend/love.png')}}" alt="">
                    <h5 class="title-item">YOU WILL</br>
                        LOVE IT</h5>
                    <p class="des-item">An excellent way of preparing a project’s wireframe.</p>
                </div>
            </div>
            <div id="carouselMobileDownloadApp" class="carousel slide row intro-app justify-content-md-center show-mobile" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselMobileDownloadApp" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselMobileDownloadApp" data-slide-to="1"></li>
                    <li data-target="#carouselMobileDownloadApp" data-slide-to="2"></li>
                    <li data-target="#carouselMobileDownloadApp" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner item col">
                    <div class="carousel-item active">
                        <img src="{{asset('img/frontend/dream.png')}}" alt="">
                        <h5 class="title-item">Your dream room</br>
                            is in your hands!</h5>
                        <p class="des-item">A whole lot of inspiration you can get from the vast variety.</p>
                    </div>
                    <div class="carousel-item item col">
                        <img src="{{asset('img/frontend/cash.png')}}" alt="">
                        <h5 class="title-item">CASH, CASH</br>
                            AND CASH!</h5>
                        <p class="des-item">A set of 130 elements, perfectly fitting each other.</p>
                    </div>
                    <div class="carousel-item item col">
                        <img src="{{asset('img/frontend/fast.png')}}" alt="">
                        <h5 class="title-item">Everything is</br>
                            automated and Fast!</h5>
                        <p class="des-item">A set of 130 elements, perfectly fitting each other.</p>
                    </div>
                    <div class="carousel-item item col">
                        <img src="{{asset('img/frontend/love.png')}}" alt="">
                        <h5 class="title-item">YOU WILL</br>
                            LOVE IT</h5>
                        <p class="des-item">An excellent way of preparing a project’s wireframe.</p>
                    </div>
                </div>
            </div>
            <div class="intro-center show-mobile">
                <img src="{{asset('img/frontend/iphone.png')}}" alt="">
            </div>
        </div>
    </div> <!-- end download our app -->

    <div id="news-and-blog">
        <div class="container">
            <div class="head-1">News and Blogs</div>
            <h1 class="head-2">Promotions & News </br>All The Best Select for You!</h1>
            <div class="row hidden-mobile">
                <div class="col-9 list-articles article-has-img row ">
                    <div class="col-4 p-r-10">
                        <div class="article  article-review">
                             <img src="/img/frontend/bitmap_3.png" alt="">
                            <div class="category-name category-review">Review</div>
                            <a href="#"><h5 class="article-name">Taking Advantage of Bad Weather</h5></a>
                            <p class="article-description">Texas Holdem is by far the
                            most common for of…</p>
                            <div class="comment-total">
                                <span class="comment"><img src="/img/frontend/comment.png"> 15</span>
                                <span class="favorite"><img src="/img/frontend/favorite.png"> 15</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 p-l-r-10">
                        <div class="row article article-promotion">
                            <div class="col-6 text-article">
                                <div class="category-name category-promotion">PROMOTION</div>
                                <a href="#"><h5 class="article-name">Why Las Vegas Hotel Rooms For You</h5></a>
                                <p class="article-description">It is not always possible to jet off
                                    half way around the world when
                                    you and your significant other
                                    are wishing to go off on a private.</p>
                                <button class="btn btn-rnw-lg btn-rnw-light btn-view-promotion">VIEW PROMOTION</button>
                            </div>
                            <div class="col-6 img-article">
                                <img src="/img/frontend/sample.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="w-100 news-row"></div>
                    <div class="col-4 p-r-10">
                        <div class="article article-sharing row" style="background: url(/img/frontend/bitmap_3@2x.png) no-repeat;">
                            <div class="category-name category-sharing">SHARING</div>
                            <div class="col align-self-end">
                                <a href="#"><h5 class="article-name">A Guide To Rocky Mountain Vacations</h5></a>
                                <p class="article-description">Cancun is back, better
                                than ever! Over a hundr…</p>
                            </div>
                            <div class="comment-total">
                                <span class="comment"><img src="/img/frontend/comment_white.png"> 15</span>
                                <span class="favorite"><img src="/img/frontend/favorite_white.png"> 15</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 p-l-r-10">
                        <div class="article article-review">
                            <img src="/img/frontend/bitmap_3.png" alt="">
                            <div class="category-name category-review">Review</div>
                            <a href="#"><h5 class="article-name">Virginia Travel For Kids</h5></a>
                            <p class="article-description">Here, I focus on a range of
                            items and features that…</p>
                            <div class="comment-total">
                                <span class="comment"><img src="/img/frontend/comment.png"> 15</span>
                                <span class="favorite"><img src="/img/frontend/favorite.png"> 15</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 p-l-r-10">
                        <div class="article article-travel">
                            <div class="category-name category-travel">TRAVEL</div>
                            <a href="#"><h5 class="article-name">The Sunglasses That Make The World Look Like Instagram
                            </h5></a>
                            <div class="post-time">
                                <span class="icon-clock icon-rnw"></span>
                                <span class="time-of-post">12 april at 12:43</span>
                            </div>
                            <div class="col align-self-end author media items">
                                <img class="mr-3" src="/img/frontend/sample.jpg" alt="Generic placeholder image">
                                <div class="media-body">
                                    <div class="by mt-0">by</div>
                                    <p class="author-name">ARTYOM
                                        TARASOV
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-3 list-articles  editor-pick">
                        <div class="editor-pick-header">
                            EDITOR’S PICK
                        </div>
                        <div class="editor-pick-item first-item ">
                            <img src="/img/frontend/bitmap_3.png" alt="">
                            <a href="#"><h5 class="article-name">NATURE</h5></a>
                            <p class="article-description">The term “boutique hotel” has been widely used in recent years, but what.</p>
                        </div> 
                        <div class="editor-pick-item chil-item ">
                            <a href="#"><h5 class="article-name">EXPLORERS</h5></a>
                            <p class="article-description">Kaytranada Channels Dilla, Embraces Up-Tempo Neo-Soul</p>
                        </div> 
                        <div class="editor-pick-item chil-item no-border">
                            <a href="#"><h5 class="article-name">TRAVEL</h5></a>
                            <p class="article-description">The Ghost Bring Lush Psych-Pop to the Bowery Ballroom</p>
                        </div> 
                        <button class="btn btn-more">more</button>
                </div>
            </div>
            <div class="list-articles article-has-img row show-mobile">
                <div class="article  article-review">
                    <img src="/img/frontend/bitmap_3.png" alt="">
                    <div class="category-name category-review">Review</div>
                    <a href="#"><h5 class="article-name">Taking Advantage of Bad Weather</h5></a>
                    <p class="article-description">Texas Holdem is by far the
                        most common for of…</p>
                    <div class="comment-total">
                        <span class="comment"><img src="/img/frontend/comment.png"> 15</span>
                        <span class="favorite"><img src="/img/frontend/favorite.png"> 15</span>
                    </div>
                </div>
                <div class="article article-sharing row" style="background: url(/img/frontend/bitmap_3@2x.png) no-repeat;">
                    <div class="category-name category-sharing">SHARING</div>
                    <div class="col align-self-end">
                        <a href="#"><h5 class="article-name">A Guide To Rocky Mountain Vacations</h5></a>
                        <p class="article-description">Cancun is back, better
                            than ever! Over a hundr…</p>
                    </div>
                    <div class="comment-total">
                        <span class="comment"><img src="/img/frontend/comment_white.png"> 15</span>
                        <span class="favorite"><img src="/img/frontend/favorite_white.png"> 15</span>
                    </div>
                </div>
            </div>
            <div class="btn-view-all">
                <button id="view-all-news" class="btn btn-rnw-md btn-rnw-light btn-rnw">view all</button>
            </div>
        </div>
    </div> <!-- end news and blog -->

    <div id="start-trial">
        <div class="container">
            <div class="head-1">Start a free trial</div>
            <h1 class="head-2">Try It Now, You Will Love It!</h1>
            <div class="row form-subscribe">
                <form action="#" id="subscribe">
                    {{--<input type="email" id="email-subscribe" placeholder="E-mail address">
                    <button class="btn btn-submit-form btn-ok">OK</button>--}}
                    <div class="input-group">
                        <input type="email" id="email-subscribe" class="form-control" placeholder="E-mail address" required="">
                        <button class="btn btn-submit-form btn-ok input-group-prepend">OK</button>
                    </div>
                </form>
            </div>
             <p class="note"><span class="icon-rnw icon-error"></span>Every month our subscribers get awesome updates</p>
        </div>
    </div>

@endsection
