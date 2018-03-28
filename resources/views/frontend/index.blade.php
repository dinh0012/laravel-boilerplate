@extends('frontend.layouts.main')

@section('title', app_name() . ' | '.__('navs.general.home'))

@section('content')
    <div id="wrap-top">
        <figure style="background: url(&quot;https://www.viewretreats.com/uploads/gallery/970%20Lonely%20Bay%20-%20Lounge%20Area_1465100620.jpg&quot;) center center / cover; height: 412px;  background: #000000; opacity: 0.95;">
            <div class="container">
                <div class="caption">
                    <h1 class="main-caption">Over 5.000 rooms</h1>
                    <h2 class="main-caption">have been rented in <strong>Vietnam </strong>, take your chance before it’s gone</h2>
                </div>  
                @include('frontend.includes.form-search')
            </div>  
        </figure>
    </div> <!-- end wrap top -->

    <div id="feature-agencies">
        <div class="container">
            <div class="head-1">Featured Agencies</div>
            <h1 class="head-2">We Bring The Best Valuable To You</h1>
            <div class="list-agencies row">
                <div class="items-left items col-5">
                    <img src="/img/frontend/bitmap_3.png">
                    <div class="content">
                        <h5 class="title-agency">Johnny Poole</h5>
                        <p class="description">Here, I focus on a range of items and features that we use in life without giving them a second thought such as Coca Cola, body muscles and holding ones own breath.</p>
                        <a href="#" class="view-detail"></a>
                    </div>
        
                   
                </div>
                <div class="items-right  col">
                    <div class="media items">
                        <img class="mr-3" src="/img/frontend/bitmap.png" alt="Generic placeholder image">
                        <div class="media-body content">
                            <h5 class="title-agency mt-0">ROYAL TOWER HOTEL</h5>
                            <p class="description">In recent years people have realized the importance of proper diet and exercise, and recent surveys show that over the last 20 years people are eating better.
                            </p>
                            <a href="#"  class="view-detail"></a>
                        </div>
                
                    </div>
                    <div class="media items">
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
        
    </div> <!-- end how it work -->

    <div id="pricing">
        <div class="container">
            <div class="head-1">Pricing</div>
            <h1 class="head-2">Full Control, Flexible & Comfort</h1>
            <div class="type-price">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">TENANT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">LANDLORD</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">AGENGY</a>
                  </li>
                </ul>
            </div>
            <div class="list-packages row">
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
            <div class="list-item-we-have row">
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
        </div>
    </div> <!--end we have-->

    <div id="download-our-app">

    </div> <!-- end download our app -->

    <div id="news-and-blog">
        <div class="container">
            <div class="head-1">News and Blogs</div>
            <h1 class="head-2">Promotions & News </br>All The Best Select for You!</h1>
            <div class="row">
                <div class="col-9 list-articles article-has-img row">
                    <div class="col-4">
                        <div class="article  article-review">
                             <img src="/img/frontend/bitmap_3.png" alt="">
                            <div class="category-name category-review">Review</div>
                            <h5 class="article-name">Taking Advantage of Bad Weather</h5>
                            <p class="article-description">Texas Holdem is by far the
                            most common for of…</p>
                            <div class="comment-total">
                                <span class="comment"><img src="/img/frontend/comment.png"> 15</span>
                                <span class="favorite"><img src="/img/frontend/favorite.png"> 15</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 ">
                        <div class="row article article-promotion">
                            <div class="col-6 text-article">
                                <div class="category-name category-promotion">PROMOTION</div>
                                <h5 class="article-name">Why Las Vegas Hotel Rooms For You</h5>
                                <p class="article-description">It is not always possible to jet off
                                    half way around the world when
                                    you and your significant other
                                    are wishing to go off on a private.</p>
                                <button class="btn btn-rnw-lg btn-rnw-light btn-view-promotion">VIEW PROMOTION</button>
                            </div>
                            <div class="col-6 img-article">
                                <img src="/img/frontend/sample.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="w-100 news-row"></div>
                    <div class="col-4">
                        <div class="article article-sharing row" style="background: url(/img/frontend/bitmap_3@2x.png) no-repeat;">
                            <div class="category-name category-sharing">SHARING</div>
                            <div class="col align-self-end">
                                <h5 class="article-name">A Guide To Rocky Mountain Vacations</h5>
                                <p class="article-description">Cancun is back, better
                                than ever! Over a hundr…</p>
                            </div>
                            <div class="comment-total">
                                <span class="comment"><img src="/img/frontend/comment_white.png"> 15</span>
                                <span class="favorite"><img src="/img/frontend/favorite_white.png"> 15</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="article article-review">
                            <img src="/img/frontend/bitmap_3.png" alt="">
                            <div class="category-name category-review">Review</div>
                            <h5 class="article-name">Virginia Travel For Kids</h5>
                            <p class="article-description">Here, I focus on a range of
                            items and features that…</p>
                            <div class="comment-total">
                                <span class="comment"><img src="/img/frontend/comment.png"> 15</span>
                                <span class="favorite"><img src="/img/frontend/favorite.png"> 15</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="article article-travel">
                            <img src="/img/frontend/bitmap_3.png" alt="">
                            <div class="category-name category-travel">TRAVEL</div>
                            <h5 class="article-name">The Sunglasses That Make The World Look Like Instagram
                            </h5>
                            <p class="article-description">Here, I focus on a range of
                            items and features that…</p>
                            <div class="comment-total">
                                <span class="comment"><img src="/img/frontend/comment.png"> 15</span>
                                <span class="favorite"><img src="/img/frontend/favorite.png"> 15</span>
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
                            <h5 class="article-name">NATURE</h5>
                            <p class="article-description">The term “boutique hotel” has been widely used in recent years, but what.</p>
                        </div> 
                        <div class="editor-pick-item chil-item ">
                            <h5 class="article-name">EXPLORERS</h5>
                            <p class="article-description">Kaytranada Channels Dilla, Embraces Up-Tempo Neo-Soul</p>
                        </div> 
                        <div class="editor-pick-item chil-item no-border">
                            <h5 class="article-name">TRAVEL</h5>
                            <p class="article-description">The Ghost Bring Lush Psych-Pop to the Bowery Ballroom</p>
                        </div> 
                        <button class="btn btn-more">more</button>
                   
                </div>
            </div>
        </div>
    </div> <!-- end news and blog -->


@endsection
