@extends('frontend.layouts.main')

@section('title', app_name() . ' | '.__('navs.general.home'))
@section('style')
    <link href="{{ asset('css/frontend/partial/list-room.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/partial/search-form.css') }}" rel="stylesheet">
@endsection

@section('content')
    @include('frontend.includes.form-search')
    <!-- end wrap top -->

    <div id="wrap-page">
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
                        <div class="col item-room">
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
                        <div class="col item-room">
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
                        <div class="col item-room">
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
                        <div class="col item-room">
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

@endsection
@section('script')
    <script src="{{ asset('js/home.js') }}" ></script>
@endsection
