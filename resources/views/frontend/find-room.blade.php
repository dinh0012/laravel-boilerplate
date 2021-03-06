<?php
$filterArray = [
    'radius' => [
        'name' => 'Radius',
        'items' => ['< 5 km', '5 - 10 km', '10 - 15 km', '> 15 km'],
    ],
    'share_housing' => [
        'name' => 'shared housing',
        'items' => ['Yes', 'No'],
    ],
    'share_housing' => [
        'name' => 'shared housing',
        'items' => ['Yes', 'No'],
    ],
    'capacity' => [
        'name' => 'capacity',
        'items' => ['2 peoples', '2 - 6 peoples', '> 6 peoples'],
    ],
    'rating' => [
        'name' => 'rating',
        'items' => ['1 star', '2 stars', '3 stars', '4 stars', '5 stars'],
    ],
    'furniture' => [
        'name' => 'Furniture',
        'items' => ['Furniture', 'Unfurniture'],
    ],
];

$results = [
    'name' => 'Roof Top Wooden room At District 3',
    'price' => '$50/month',
    'link_detail' => '/room-detail',
    'city' => 'Ho Chi Minh',
    'description' => 'Texas Holdem is by far the
                            most common for of…',
    'rate' => '4.6',
    'review' => '156',
    'rented' => true
]
?>

@extends('frontend.layouts.main')

@section('title', app_name() . ' | '.__('navs.general.home'))
@section('style')
    <link href="{{ asset('css/frontend/search/search.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/partial/list-room.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/partial/search-form.css') }}" rel="stylesheet">
@endsection

@section('content')
    @include('frontend.includes.form-search')
    <!-- end wrap top -->

    <div id="wrap-page" class="page-find-room">
        <div class="container">
            <div class="group-room">
                <div class="row group-title-rooms head-sm align-items-center">
                    <div class="col group-title">Featured Rooms</div>
                    <div class="col link-view-all ">
                        <a class="head-sm ml-auto align-items-center flex-item" href="#">view all (345) <i class="material-icons">trending_flat</i></a>
                    </div>
                </div>
                <div class="items-room">
                    <div class="row items-row">
                        <div class="col-3 item-room">
                            <div class="room-img">
                                <a class="head-sm" href="/room-detail">
                                    <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                                </a>
                                <div class="sale-off">10% OFF</div>
                                <div class="bookmark"><i class="material-icons">bookmark_border</i></div>
                            </div>
                            <div class="room-info">
                                <div class="room-title flex-item justify-content-between">
                                    <h2>
                                        <a class="head-sm" href="/room-detail">Roof Top Wooden room
                                            At District 3</a>
                                    </h2>
                                    <a class="head-sm more-action-room" href="#"                                       id="dropdownRentButton"                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                        <i class="material-icons">more_horiz</i>                                    </a>
                                </div>
                                <div class="room-price-location flex-item">
                                    <div class="price">
                                        $50/month
                                    </div>
                                    <div class="dot-price-location">•</div>
                                    <div class="location"> Ho Chi Minh</div>
                                </div>
                                <div class="room-description">
                                    <p class="text-opensans-14">Texas Holdem is by far the
                                        most common for of…</p>
                                </div>
                                <div class="room-rating-tag flex-item">
                                    <div class="vote"><i class="material-icons icon-star">star</i>4.6</div>
                                    <div class="tag"><i class="material-icons icon-loyalty">loyalty</i>156</div>
                                    <div class="status status-rented">Rented</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 item-room">
                            <div class="room-img">
                                <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                                <div class="bookmark"><i class="material-icons">bookmark_border</i></div>
                            </div>
                            <div class="room-info">
                                <div class="room-title flex-item justify-content-between">
                                    <h2>
                                        <a class="head-sm" href="#">Cozy Room</a>
                                    </h2>
                                    <a class="head-sm more-action-room" href="#"                                       id="dropdownRentButton"                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                        <i class="material-icons">more_horiz</i>                                    </a>
                                </div>
                                <div class="room-price-location flex-item">
                                    <div class="price">
                                        $50/month
                                    </div>
                                    <div class="dot-price-location">•</div>
                                    <div class="location"> Ho Chi Minh</div>
                                </div>
                                <div class="room-description">
                                    <p class="text-opensans-14">Texas Holdem is by far the
                                        most common for of…</p>
                                </div>
                                <div class="room-rating-tag flex-item">
                                    <div class="vote"><i class="material-icons icon-star">star</i>4.6</div>
                                    <div class="tag"><i class="material-icons icon-loyalty">loyalty</i>156</div>
                                    <div class="status status-rented">Rented</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 item-room">
                            <div class="room-img">
                                <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                                <div class="bookmark"><i class="material-icons">bookmark_border</i></div>
                            </div>
                            <div class="room-info">
                                <div class="room-title flex-item justify-content-between">
                                    <h2>
                                        <a class="head-sm" href="#">Cozy Room</a>
                                    </h2>
                                    <a class="head-sm more-action-room" href="#"                                       id="dropdownRentButton"                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                        <i class="material-icons">more_horiz</i>                                    </a>
                                </div>
                                <div class="room-price-location flex-item">
                                    <div class="price">
                                        $50/month
                                    </div>
                                    <div class="dot-price-location">•</div>
                                    <div class="location"> Ho Chi Minh</div>
                                </div>
                                <div class="room-description">
                                    <p class="text-opensans-14">Texas Holdem is by far the
                                        most common for of…</p>
                                </div>
                                <div class="room-rating-tag flex-item">
                                    <div class="vote"><i class="material-icons icon-star">star</i>4.6</div>
                                    <div class="tag"><i class="material-icons icon-loyalty">loyalty</i>156</div>
                                    <div class="status status-rented">Rented</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 item-room">
                            <div class="room-img">
                                <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                                <div class="bookmark"><i class="material-icons">bookmark_border</i></div>
                            </div>
                            <div class="room-info">
                                <div class="room-title flex-item justify-content-between">
                                    <h2>
                                        <a class="head-sm" href="#">Cozy Room</a>
                                    </h2>
                                    <a class="head-sm more-action-room" href="#"                                       id="dropdownRentButton"                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                        <i class="material-icons">more_horiz</i>                                    </a>
                                </div>
                                <div class="room-price-location flex-item">
                                    <div class="price">
                                        $50/month
                                    </div>
                                    <div class="dot-price-location">•</div>
                                    <div class="location"> Ho Chi Minh</div>
                                </div>
                                <div class="room-description">
                                    <p class="text-opensans-14">Texas Holdem is by far the
                                        most common for of…</p>
                                </div>
                                <div class="room-rating-tag flex-item">
                                    <div class="vote"><i class="material-icons icon-star">star</i>4.6</div>
                                    <div class="tag"><i class="material-icons icon-loyalty">loyalty</i>156</div>
                                    <div class="status status-rented">Rented</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Popular-->
            <div class="group-room">
                <div class="row group-title-rooms head-sm align-items-center">
                    <div class="col group-title">Popular</div>
                    <div class="col link-view-all ">
                        <a class="head-sm ml-auto align-items-center flex-item" href="#">view all (245) <i class="material-icons">trending_flat</i></a>
                    </div>
                </div>
                <div class="items-room">
                    <div class="row items-row">
                        <div class="col-3 item-room">
                            <div class="room-img">
                                <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                                <div class="sale-off">10% OFF</div>
                                <div class="bookmark"><i class="material-icons">bookmark_border</i></div>
                            </div>
                            <div class="room-info">
                                <div class="room-title flex-item justify-content-between">
                                    <h2>
                                        <a class="head-sm" href="#">Texas Holdem is by far the
                                            most common for of…</a>
                                    </h2>
                                    <a class="head-sm more-action-room" href="#"                                       id="dropdownRentButton"                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                        <i class="material-icons">more_horiz</i>                                    </a>
                                </div>
                                <div class="room-price-location flex-item">
                                    <div class="price">
                                        $50/month
                                    </div>
                                    <div class="dot-price-location">•</div>
                                    <div class="location"> Ho Chi Minh</div>
                                </div>
                                <div class="room-description">
                                    <p class="text-opensans-14">Texas Holdem is by far the
                                        most common for of..</p>
                                </div>
                                <div class="room-rating-tag flex-item">
                                    <div class="vote"><i class="material-icons icon-star">star</i>4.6</div>
                                    <div class="tag"><i class="material-icons icon-loyalty">loyalty</i>156</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 item-room">
                            <div class="room-img">
                                <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                                <div class="sale-off">20% OFF</div>
                                <div class="bookmark"><i class="material-icons">bookmark_border</i></div>
                            </div>
                            <div class="room-info">
                                <div class="room-title flex-item justify-content-between">
                                    <h2>
                                        <a class="head-sm" href="#">roof top</a>
                                    </h2>
                                    <a class="head-sm more-action-room" href="#"                                       id="dropdownRentButton"                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                        <i class="material-icons">more_horiz</i>                                    </a>
                                </div>
                                <div class="room-price-location flex-item">
                                    <div class="price">
                                        $50/month
                                    </div>
                                    <div class="dot-price-location">•</div>
                                    <div class="location">Can Tho</div>
                                </div>
                                <div class="room-description">
                                    <p class="text-opensans-14">Texas Holdem is by far the
                                        most common for of…</p>
                                </div>
                                <div class="room-rating-tag flex-item">
                                    <div class="vote"><i class="material-icons icon-star">star</i>4.6</div>
                                    <div class="tag"><i class="material-icons icon-loyalty">loyalty</i>156</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 item-room">
                            <div class="room-img">
                                <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                                <div class="bookmark"><i class="material-icons">bookmark_border</i></div>
                            </div>
                            <div class="room-info">
                                <div class="room-title flex-item justify-content-between">
                                    <h2>
                                        <a class="head-sm" href="#">Cozy Room</a>
                                    </h2>
                                    <a class="head-sm more-action-room" href="#"                                       id="dropdownRentButton"                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                        <i class="material-icons">more_horiz</i>                                    </a>
                                </div>
                                <div class="room-price-location flex-item">
                                    <div class="price">
                                        $50/month
                                    </div>
                                    <div class="dot-price-location">•</div>
                                    <div class="location"> Ho Chi Minh</div>
                                </div>
                                <div class="room-description">
                                    <p class="text-opensans-14">Texas Holdem is by far the
                                        most common for of…</p>
                                </div>
                                <div class="room-rating-tag flex-item">
                                    <div class="vote"><i class="material-icons icon-star">star</i>4.6</div>
                                    <div class="tag"><i class="material-icons icon-loyalty">loyalty</i>156</div>
                                    <div class="status status-rented">Rented</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 item-room">
                            <div class="room-img">
                                <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                                <div class="bookmark"><i class="material-icons">bookmark_border</i></div>
                            </div>
                            <div class="room-info">
                                <div class="room-title flex-item justify-content-between">
                                    <h2>
                                        <a class="head-sm" href="#">Cozy Room</a>
                                    </h2>
                                    <a class="head-sm more-action-room" href="#"                                       id="dropdownRentButton"                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                        <i class="material-icons">more_horiz</i>                                    </a>
                                </div>
                                <div class="room-price-location flex-item">
                                    <div class="price">
                                        $50/month
                                    </div>
                                    <div class="dot-price-location">•</div>
                                    <div class="location"> Ho Chi Minh</div>
                                </div>
                                <div class="room-description">
                                    <p class="text-opensans-14">Texas Holdem is by far the
                                        most common for of…</p>
                                </div>
                                <div class="room-rating-tag flex-item">
                                    <div class="vote"><i class="material-icons icon-star">star</i>4.6</div>
                                    <div class="tag"><i class="material-icons icon-loyalty">loyalty</i>156</div>
                                    <div class="status status-rented">Rented</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--ho chi minh-->
            <div class="group-room">
                <div class="row group-title-rooms head-sm align-items-center">
                    <div class="col group-title">Ho Chi Minh</div>
                    <div class="col link-view-all ">
                        <a class="head-sm ml-auto align-items-center flex-item" href="#">view all (245) <i class="material-icons">trending_flat</i></a>
                    </div>
                </div>
                <div class="items-room">
                    <div class="row items-row">
                        <div class="col-3 item-room">
                            <div class="room-img">
                                <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                                <div class="sale-off">10% OFF</div>
                                <div class="bookmark"><i class="material-icons">bookmark_border</i></div>
                            </div>
                            <div class="room-info">
                                <div class="room-title flex-item justify-content-between">
                                    <h2>
                                        <a class="head-sm" href="#">Next to snowy mou…</a>
                                    </h2>
                                    <a class="head-sm more-action-room" href="#"                                       id="dropdownRentButton"                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                        <i class="material-icons">more_horiz</i>                                    </a>
                                </div>
                                <div class="room-price-location flex-item">
                                    <div class="price">
                                        $50/month
                                    </div>
                                    <div class="dot-price-location">•</div>
                                    <div class="location"> Ho Chi Minh</div>
                                </div>
                                <div class="room-description">
                                    <p class="text-opensans-14">Texas Holdem is by far the
                                        most common for of..</p>
                                </div>
                                <div class="room-rating-tag flex-item">
                                    <div class="vote"><i class="material-icons icon-star">star</i>4.6</div>
                                    <div class="tag"><i class="material-icons icon-loyalty">loyalty</i>156</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 item-room">
                            <div class="room-img">
                                <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                                <div class="sale-off">20% OFF</div>
                                <div class="bookmark"><i class="material-icons">bookmark_border</i></div>
                            </div>
                            <div class="room-info">
                                <div class="room-title flex-item justify-content-between">
                                    <h2>
                                        <a class="head-sm" href="#">roof top</a>
                                    </h2>
                                    <a class="head-sm more-action-room" href="#"                                       id="dropdownRentButton"                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                        <i class="material-icons">more_horiz</i>                                    </a>
                                </div>
                                <div class="room-price-location flex-item">
                                    <div class="price">
                                        $50/month
                                    </div>
                                    <div class="dot-price-location">•</div>
                                    <div class="location">Can Tho</div>
                                </div>
                                <div class="room-description">
                                    <p class="text-opensans-14">Texas Holdem is by far the
                                        most common for of…</p>
                                </div>
                                <div class="room-rating-tag flex-item">
                                    <div class="vote"><i class="material-icons icon-star">star</i>4.6</div>
                                    <div class="tag"><i class="material-icons icon-loyalty">loyalty</i>156</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 item-room">
                            <div class="room-img">
                                <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                                <div class="bookmark"><i class="material-icons">bookmark_border</i></div>
                            </div>
                            <div class="room-info">
                                <div class="room-title flex-item justify-content-between">
                                    <h2>
                                        <a class="head-sm" href="#">Vintage room</a>
                                    </h2>
                                    <a class="head-sm more-action-room" href="#"                                       id="dropdownRentButton"                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                        <i class="material-icons">more_horiz</i>                                    </a>
                                </div>
                                <div class="room-price-location flex-item">
                                    <div class="price">
                                        $50/month
                                    </div>
                                    <div class="dot-price-location">•</div>
                                    <div class="location"> Ho Chi Minh</div>
                                </div>
                                <div class="room-description">
                                    <p class="text-opensans-14">Texas Holdem is by far the
                                        most common for of…</p>
                                </div>
                                <div class="room-rating-tag flex-item">
                                    <div class="vote"><i class="material-icons icon-star">star</i>4.6</div>
                                    <div class="tag"><i class="material-icons icon-loyalty">loyalty</i>156</div>
                                    <div class="status status-rented">Rented</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 item-room">
                            <div class="room-img">
                                <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                                <div class="bookmark"><i class="material-icons">bookmark_border</i></div>
                            </div>
                            <div class="room-info">
                                <div class="room-title flex-item justify-content-between">
                                    <h2>
                                        <a class="head-sm" href="#">Cozy Room</a>
                                    </h2>
                                    <a class="head-sm more-action-room" href="#"                                       id="dropdownRentButton"                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                        <i class="material-icons">more_horiz</i>                                    </a>
                                </div>
                                <div class="room-price-location flex-item">
                                    <div class="price">
                                        $50/month
                                    </div>
                                    <div class="dot-price-location">•</div>
                                    <div class="location"> Ho Chi Minh</div>
                                </div>
                                <div class="room-description">
                                    <p class="text-opensans-14">Texas Holdem is by far the
                                        most common for of…</p>
                                </div>
                                <div class="room-rating-tag flex-item">
                                    <div class="vote"><i class="material-icons icon-star">star</i>4.6</div>
                                    <div class="tag"><i class="material-icons icon-loyalty">loyalty</i>156</div>
                                    <div class="status status-rented">Rented</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="wrap-page" class="search-room ">

        <div class="wrap-search">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-9 input-form">
                        <div class="form-group select-with-label col">
                            <div class="input-placeholder">
                                <select name="account_type" class="form-control" required>
                                    <option value="tenant">Vietnam</option>
                                    <option value="landlord">Hanoi</option>
                                    <option value="agency">Ho Chi Minh</option>
                                </select>
                                <div class="placeholder">
                                    City
                                </div>
                            </div>
                        </div>
                        <div class="form-group select-with-label col">
                            <div class="input-placeholder">
                                <select name="account_type" class="form-control" required>
                                    <option value="tenant">Binh Thanh</option>
                                    <option value="landlord">Thu Duc</option>
                                    <option value="agency">Binh Thanh</option>
                                </select>
                                <div class="placeholder">
                                    District
                                </div>
                            </div>
                        </div>
                        <div class="form-group select-with-label col">
                            <div class="input-placeholder">
                                <select name="account_type" class="form-control" required>
                                    <option value="tenant">Department</option>
                                    <option value="landlord">Department</option>
                                    <option value="agency">Department</option>
                                </select>
                                <div class="placeholder">
                                    Room type
                                </div>
                            </div>
                        </div>
                        <div class="form-group select-with-label col">
                            <div class="input-placeholder">
                                <select name="account_type" class="form-control" required>
                                    <option value="tenant">80m2</option>
                                    <option value="landlord">80m2</option>
                                    <option value="agency">80m2</option>
                                </select>
                                <div class="placeholder">
                                    Surface area
                                </div>
                            </div>
                        </div>
                        <div class="form-group select-with-label col">
                            <div class="input-placeholder">
                                <select name="account_type" class="form-control" required>
                                    <option value="tenant">$0 - $100</option>
                                    <option value="landlord">$0 - $100</option>
                                    <option value="agency">$0 - $100</option>
                                </select>
                                <div class="placeholder">
                                    Price
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 button-form">
                        <button class="btn btn-rnw btn-rnw-yellow btn-rnw-fw">SEARCH</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-result">
            <div class="container">
                <div class="row breadcrumb justify-content-between">
                    <div class="col-3">
                        <div class="rnw-breadcrumb">
                            <a href="" class="link-breadcrumb">
                                <img src="{{asset('img/frontend/logo_black.png')}}" alt="">
                            </a>
                            <span>/ </span>
                            <a href="/find-room" class="link-breadcrumb">
                                Find room
                            </a>
                            <span>/ </span>
                            <span class="current-page">
                                 Search Result
                            </span>
                        </div>
                        <div class="header-total-result">
                            <strong class="total-result">
                                195
                            </strong> out of 1,437 rooms
                        </div>
                    </div>
                    <div class="col-3 form-group select-with-label">
                        <div class="input-placeholder">
                            <select name="account_type" class="form-control" required>
                                <option value="tenant">Popular</option>
                                <option value="landlord">Popular</option>
                                <option value="agency">Popular</option>
                            </select>
                            <div class="placeholder">
                                Sort by <span>*</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row search-body">
                    @include('frontend.includes.find.filter-panel')
                    @include('frontend.includes.find.room-results')
                </div>
                <div class="row text-center see-more-item">
                    <a href="#" class="btn btn-rnw btn-rnw-light btn-rnw-md">SEE MORE</a>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="{{ asset('js/search.js') }}" ></script>
@endsection
