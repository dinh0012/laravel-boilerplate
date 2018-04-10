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
                                    <span class="head-sm more-action-room">...</span>
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
                                    <span class="head-sm more-action-room">...</span>
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
                                    <span class="head-sm more-action-room">...</span>
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
                                    <span class="head-sm more-action-room">...</span>
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
                                    <span class="head-sm more-action-room">...</span>
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
                                    <span class="head-sm more-action-room">...</span>
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
                                    <span class="head-sm more-action-room">...</span>
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
                                    <span class="head-sm more-action-room">...</span>
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
                                    <span class="head-sm more-action-room">...</span>
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
                                    <span class="head-sm more-action-room">...</span>
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
                                    <span class="head-sm more-action-room">...</span>
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
                                    <span class="head-sm more-action-room">...</span>
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
                    <div class="col-3 container-filter">
                        <div class="search-filter">
                            <div class="filter-group">
                                <div class="filter-group-header head-sm justify-content-between">
                                    <span class="header-filter">Radius</span>
                                    <span class="icon-expand-collapse">
                                        <i class="material-icons">remove</i>
                                    </span>
                                </div>
                                <div class="filter-group-body">
                                    <div class="filter-item">
                                        <label for="radius1" class="form-check-label">

                                            <input type="checkbox" id="radius1" class="form-check-input checkbox-input">
                                            <div class="check">
                                                <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                                            </div>
                                            <span class="checkbox-label">< 5 km</span>
                                        </label>
                                    </div>
                                    <div class="filter-item">
                                        <label for="radius2" class="form-check-label">

                                            <input type="checkbox" id="radius2" class="form-check-input checkbox-input">
                                            <div class="check">
                                                <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                                            </div>
                                            <span class="checkbox-label"> 5 - 10 km</span>
                                        </label>
                                    </div>
                                    <div class="filter-item">
                                        <label for="radius3" class="form-check-label">
                                            <input type="checkbox" id="radius3" class="form-check-input checkbox-input">
                                            <div class="check">
                                                <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                                            </div>
                                            <span class="checkbox-label"> 10 - 15 km</span>
                                        </label>
                                    </div>
                                    <div class="filter-item">
                                        <label for="radius4" class="form-check-label">
                                            <input type="checkbox" id="radius4" class="form-check-input checkbox-input">
                                            <div class="check">
                                                <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                                            </div>
                                            <span class="checkbox-label">> 15 km</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-group">
                                <div class="filter-group-header head-sm justify-content-between">
                                    <span class="header-filter">shared housing</span>
                                    <span class="icon-expand-collapse">
                                        <i class="material-icons">remove</i>
                                    </span>
                                </div>
                                <div class="filter-group-body">
                                    <div class="filter-item">
                                        <label for="sharedhousing1" class="form-check-label">
                                            <input type="checkbox" id="sharedhousing1"
                                                   class="form-check-input checkbox-input">
                                            <div class="check">
                                                <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                                            </div>
                                            <span class="checkbox-label">Yes</span>
                                        </label>
                                    </div>
                                    <div class="filter-item">
                                        <label for="sharedhousing2" class="form-check-label">
                                            <input type="checkbox" id="sharedhousing2"
                                                   class="form-check-input checkbox-input">
                                            <div class="check">
                                                <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                                            </div>
                                            <span class="checkbox-label"> No</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-group">
                                <div class="filter-group-header head-sm justify-content-between">
                                    <span class="header-filter">capacity</span>
                                    <span class="icon-expand-collapse">
                                        <i class="material-icons">remove</i>
                                    </span>
                                </div>
                                <div class="filter-group-body">
                                    <div class="filter-item">
                                        <label for="capacity1" class="form-check-label">
                                            <input type="checkbox" id="capacity1"
                                                   class="form-check-input checkbox-input">
                                            <div class="check">
                                                <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                                            </div>
                                            <span class="checkbox-label">2 peoples</span>
                                        </label>
                                    </div>
                                    <div class="filter-item">
                                        <label for="capacity2" class="form-check-label">
                                            <input type="checkbox" id="capacity2"
                                                   class="form-check-input checkbox-input">
                                            <div class="check">
                                                <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                                            </div>
                                            <span class="checkbox-label"> 2 - 6 peoples</span>
                                        </label>
                                    </div>
                                    <div class="filter-item">
                                        <label for="capacity3" class="form-check-label">
                                            <input type="checkbox" id="capacity3"
                                                   class="form-check-input checkbox-input">
                                            <div class="check">
                                                <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                                            </div>
                                            <span class="checkbox-label"> > 6</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-group">
                                <div class="filter-group-header head-sm justify-content-between">
                                    <span class="header-filter">Rating</span>
                                    <span class="icon-expand-collapse">
                                        <i class="material-icons">remove</i>
                                    </span>
                                </div>
                                <div class="filter-group-body">
                                    <div class="filter-item">
                                        <label for="Rating1" class="form-check-label">
                                            <input type="checkbox" id="Rating1" class="form-check-input checkbox-input">
                                            <div class="check">
                                                <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                                            </div>
                                            <span class="checkbox-label">1 start</span>
                                        </label>
                                    </div>
                                    <div class="filter-item">
                                        <label for="Rating2" class="form-check-label">
                                            <input type="checkbox" id="Rating2" class="form-check-input checkbox-input">
                                            <div class="check">
                                                <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                                            </div>
                                            <span class="checkbox-label">2 starts</span>
                                        </label>
                                    </div>
                                    <div class="filter-item">
                                        <label for="Rating3" class="form-check-label">
                                            <input type="checkbox" id="Rating3" class="form-check-input checkbox-input">
                                            <div class="check">
                                                <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                                            </div>
                                            <span class="checkbox-label">3 starts</span>
                                        </label>
                                    </div>
                                    <div class="filter-item">
                                        <label for="Rating4" class="form-check-label">
                                            <input type="checkbox" id="Rating4" class="form-check-input checkbox-input">
                                            <div class="check">
                                                <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                                            </div>
                                            <span class="checkbox-label">4 starts</span>
                                        </label>
                                    </div>
                                    <div class="filter-item">
                                        <label for="Rating5" class="form-check-label">
                                            <input type="checkbox" id="Rating5" class="form-check-input checkbox-input">
                                            <div class="check">
                                                <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                                            </div>
                                            <span class="checkbox-label">5 starts</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-group">
                                <div class="filter-group-header head-sm justify-content-between">
                                    <span class="header-filter">Furniture</span>
                                    <span class="icon-expand-collapse">
                                        <i class="material-icons">remove</i>
                                    </span>
                                </div>
                                <div class="filter-group-body">
                                    <div class="filter-item">
                                        <label for="Furniture1" class="form-check-label">
                                            <input type="checkbox" id="Furniture1"
                                                   class="form-check-input checkbox-input">
                                            <div class="check">
                                                <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                                            </div>
                                            <span class="checkbox-label">Furnished</span>
                                        </label>
                                    </div>
                                    <div class="filter-item">
                                        <label for="Furniture2" class="form-check-label">
                                            <input type="checkbox" id="Furniture2"
                                                   class="form-check-input checkbox-input">
                                            <div class="check">
                                                <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                                            </div>
                                            <span class="checkbox-label">Unfurnished</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="search-item-result col-9">
                        <div class="items-room">
                            <div class="row items-row">
                                <div class="col-4 item-room">
                                    <div class="room-img">
                                        <a class="head-sm" href="/room-detail">
                                            <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                                        </a>
                                        <div class="sale-off">10% OFF</div>
                                        <div class="bookmark bookmarked"><i class="material-icons">bookmark</i></div>
                                    </div>
                                    <div class="room-info">
                                        <div class="room-title flex-item justify-content-between">
                                            <h2>
                                                <a class="head-sm" href="/room-detail">Roof Top Wooden room
                                                    At District 3</a>
                                            </h2>
                                            <span class="head-sm more-action-room">...</span>
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
                                <div class="col-4 item-room">
                                    <div class="room-img">
                                        <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                                        <div class="bookmark"><i class="material-icons">bookmark_border</i></div>
                                    </div>
                                    <div class="room-info">
                                        <div class="room-title flex-item justify-content-between">
                                            <h2>
                                                <a class="head-sm" href="#">Cozy Room</a>
                                            </h2>
                                            <span class="head-sm more-action-room">...</span>
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
                                <div class="col-4 item-room">
                                    <div class="room-img">
                                        <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                                        <div class="bookmark"><i class="material-icons">bookmark_border</i></div>
                                    </div>
                                    <div class="room-info">
                                        <div class="room-title flex-item justify-content-between">
                                            <h2>
                                                <a class="head-sm" href="#">Cozy Room</a>
                                            </h2>
                                            <span class="head-sm more-action-room">...</span>
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
                                <div class="col-4 item-room">
                                    <div class="room-img">
                                        <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                                        <div class="sale-off">10% OFF</div>
                                        <div class="bookmark"><i class="material-icons">bookmark_border</i></div>
                                    </div>
                                    <div class="room-info">
                                        <div class="room-title flex-item justify-content-between">
                                            <h2>
                                                <a class="head-sm" href="#">Cozy Room</a>
                                            </h2>
                                            <span class="head-sm more-action-room">...</span>
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
                                <div class="col-4 item-room">
                                    <div class="room-img">
                                        <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                                        <div class="bookmark"><i class="material-icons">bookmark_border</i></div>
                                    </div>
                                    <div class="room-info">
                                        <div class="room-title flex-item justify-content-between">
                                            <h2>
                                                <a class="head-sm" href="#">Cozy Room</a>
                                            </h2>
                                            <span class="head-sm more-action-room">...</span>
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
                                <div class="col-4 item-room">
                                    <div class="room-img">
                                        <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                                        <div class="bookmark"><i class="material-icons">bookmark_border</i></div>
                                    </div>
                                    <div class="room-info">
                                        <div class="room-title flex-item justify-content-between">
                                            <h2>
                                                <a class="head-sm" href="#">Cozy Room</a>
                                            </h2>
                                            <span class="head-sm more-action-room">...</span>
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
                                <div class="col-4 item-room">
                                    <div class="room-img">
                                        <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                                        <div class="sale-off">10% OFF</div>
                                        <div class="bookmark"><i class="material-icons">bookmark_border</i></div>
                                    </div>
                                    <div class="room-info">
                                        <div class="room-title flex-item justify-content-between">
                                            <h2>
                                                <a class="head-sm" href="#">Cozy Room</a>
                                            </h2>
                                            <span class="head-sm more-action-room">...</span>
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
                                <div class="col-4 item-room">
                                    <div class="room-img">
                                        <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                                        <div class="bookmark"><i class="material-icons">bookmark_border</i></div>
                                    </div>
                                    <div class="room-info">
                                        <div class="room-title flex-item justify-content-between">
                                            <h2>
                                                <a class="head-sm" href="#">Cozy Room</a>
                                            </h2>
                                            <span class="head-sm more-action-room">...</span>
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
                                <div class="col-4 item-room">
                                    <div class="room-img">
                                        <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                                        <div class="bookmark"><i class="material-icons">bookmark_border</i></div>
                                    </div>
                                    <div class="room-info">
                                        <div class="room-title flex-item justify-content-between">
                                            <h2>
                                                <a class="head-sm" href="#">Cozy Room</a>
                                            </h2>
                                            <span class="head-sm more-action-room">...</span>
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
                                <div class="col-4 item-room">
                                    <div class="room-img">
                                        <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                                        <div class="sale-off">10% OFF</div>
                                        <div class="bookmark"><i class="material-icons">bookmark_border</i></div>
                                    </div>
                                    <div class="room-info">
                                        <div class="room-title flex-item justify-content-between">
                                            <h2>
                                                <a class="head-sm" href="#">Cozy Room</a>
                                            </h2>
                                            <span class="head-sm more-action-room">...</span>
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
                                <div class="col-4 item-room">
                                    <div class="room-img">
                                        <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                                        <div class="bookmark"><i class="material-icons">bookmark_border</i></div>
                                    </div>
                                    <div class="room-info">
                                        <div class="room-title flex-item justify-content-between">
                                            <h2>
                                                <a class="head-sm" href="#">Cozy Room</a>
                                            </h2>
                                            <span class="head-sm more-action-room">...</span>
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
                                <div class="col-4 item-room">
                                    <div class="room-img">
                                        <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                                        <div class="bookmark"><i class="material-icons">bookmark_border</i></div>
                                    </div>
                                    <div class="room-info">
                                        <div class="room-title flex-item justify-content-between">
                                            <h2>
                                                <a class="head-sm" href="#">Cozy Room</a>
                                            </h2>
                                            <span class="head-sm more-action-room">...</span>
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
