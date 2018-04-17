<div class="search-item-result col-9">
    <div class="items-room">
        <div class="row items-row">
            @for ($i = 1; $i < 12; $i++)
                <div class="col-4 item-room">
                <div class="room-img">
                    <a class="head-sm" href="{{$results['link_detail']}}">
                        <img src="{{asset('/img/frontend/bitmap@2x.png')}}" alt="">
                    </a>
                    <div class="sale-off">10% OFF</div>
                    <div class="bookmark bookmarked"><i class="material-icons">bookmark</i></div>
                </div>
                <div class="room-info">
                    <div class="room-title flex-item justify-content-between">
                        <h2>
                            <a class="head-sm" href="{{$results['link_detail']}}">{{$results['name']}}</a>
                        </h2>
                        <div class="dropdown-rnw">
                            <a class="head-sm more-action-room title-dropdown" href="#" id="{{'more-action' . $i}}" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_horiz</i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-rnw dropdown-item-more-action text-opensans-14 dropdown-menu-right"
                                 aria-labelledby="{{'#more-action' . $i}}" x-placement="bottom-end" >
                                <a class="dropdown-item" href="#">Share</a>
                                <a class="dropdown-item" href="#">Hire</a>
                            </div>
                        </div>

                    </div>
                    <div class="room-price-location flex-item">
                        @if (isset($results['price']))
                            <div class="price">
                                {{$results['price']}}
                            </div>
                        @else
                            <div class="service">
                                {{$results['service']}}
                            </div>
                        @endif
                        <div class="dot-price-location">•</div>
                        <div class="location">{{$results['city']}}</div>
                    </div>
                    <div class="room-description">
                        <p class="text-opensans-14">{{$results['description']}}</p>
                    </div>
                    <div class="room-rating-tag flex-item">
                        <div class="vote"><i class="material-icons icon-star">star</i>4.6</div>
                        <div class="tag"><i class="material-icons icon-loyalty">loyalty</i>156</div>
                        @if (isset($results['rented']))
                            <div class="status status-rented">Rented</div>
                        @endif
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>

{{--
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
</div>--}}
