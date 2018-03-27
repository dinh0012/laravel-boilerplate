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

@endsection
