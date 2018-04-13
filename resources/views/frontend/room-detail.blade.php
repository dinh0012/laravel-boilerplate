@extends('frontend.layouts.main')

@section('title', app_name() . ' | '.__('navs.general.home'))
@section('style')
    <link href="{{ asset('css/frontend/room-detail.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/partial/search-form.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div id="room-detail">
        <div class="room-slider rnw-slider-full">
            <div id="room-image-slider" data-ride="carousel"
                 class="carousel slide list-packages row">

                <div class="carousel-inner package-item col package-select">
                    <div class="carousel-item">
                        <figure style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%,rgba(0, 0, 0, 0.5) 100%), url('/img/frontend/room.jpg')center center / cover; ">
                        </figure>
                    </div>
                    <div class="carousel-item active">
                        <figure style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%,rgba(0, 0, 0, 0.5) 100%), url('/img/frontend/room.jpg')center center / cover;">
                        </figure>
                    </div>
                    <div class="carousel-item ">
                        <figure style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%,rgba(0, 0, 0, 0.5) 100%), url('/img/frontend/room.jpg')center center / cover;">
                        </figure>
                    </div>
                    <div class="room-detail-in-slider container">
                        <div class="indicators-breadcrumb flex-item  justify-content-between">
                            <div class="rnw-breadcrumb ">
                                <a href="" class="link-breadcrumb">
                                    <img src="{{asset('img/frontend/logo_white.png')}}" alt="">
                                </a>
                                <span>/ </span>
                                <a href="/find-room" class="link-breadcrumb">
                                    Find room
                                </a>
                                <span>/ </span>
                                <span class="current-page">Search Result</span>
                            </div>
                            <ol class="carousel-indicators ml-auto">
                                <li data-target="#room-image-slider" data-slide-to="0" class=""></li>
                                <li data-target="#room-image-slider" data-slide-to="1" class="active"></li>
                                <li data-target="#room-image-slider" data-slide-to="2"></li>
                            </ol>
                        </div>

                        <div class="room-detail-header">
                            <div class="room-action flex-item">
                                <div class=" ml-auto">
                                    <i class="material-icons">share</i>
                                    <i class="material-icons">notifications_none</i>
                                    <i class="material-icons bookmark bookmarked">bookmark</i>
                                </div>
                            </div>
                            <div class="row room-detail-box-header">
                                <div class="room-name col-3 align-self-center">
                                    <h2 class="name head-sm">Roof Top Wooden room At District 3</h2>
                                    <h2 class="price head-sm">$35/month</h2>
                                </div>
                                <div class="room-add col">
                                    <div class="address text-opensans-14"><i class="material-icons">location_on</i>
                                        District 3, HCM
                                    </div>
                                    <span class="time-min text-opensans-14"><i class="material-icons">date_range</i>Rent min 1 year</span>
                                </div>
                                <div class="room-ratting col-2">
                                    <div class="vote text-opensans-14"><i class="material-icons icon-star">star</i>4.6
                                    </div>
                                    <div class="tag text-opensans-14"><i class="material-icons icon-loyalty">loyalty</i>267
                                    </div>
                                </div>
                                <div class="room-btn col-4 align-self-center">
                                    <button class="btn btn-rnw btn-rnw-light btn-rnw-120 ">Message</button>
                                    <button type="button"
                                            class="btn btn-rnw btn-rnw-yellow btn-rnw-120 justify-content-center"
                                            id="dropdownRentButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rent
                                        <span class="arrow-rent align-self-center"><i class="material-icons">keyboard_arrow_down</i></span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-rnw dropdown-item-rent text-opensans-14"
                                         aria-labelledby="dropdownRentButton">
                                        <a class="dropdown-item" href="#">Request contract Renewal</a>
                                        <a class="dropdown-item" href="#">Terminate contract</a>
                                        <a data-toggle="modal" data-target="#endContractModal" href="#"
                                           class="dropdown-item end-contract">End Contract</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev carousel-control" href="#room-image-slider" role="button"
                   data-slide="prev">
                    <i class="material-icons">trending_flat</i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next carousel-control" href="#room-image-slider" role="button"
                   data-slide="next">
                    <i class="material-icons">trending_flat</i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="room-detail-body container">
            <div class="flex-item">
                <div class="col-3 room-information">
                    <div class="head-md">
                        Room Information
                    </div>
                    <ul class="list-info-room">
                        <li><i class="material-icons">business</i>Apartment</li>
                        <li><i class="material-icons">aspect_ratio</i>65m2</li>
                        <li><i class="material-icons">event_seat</i>Furnished</li>
                        <li><i class="material-icons">pets</i>Pets Allowance</li>
                        <li><i class="material-icons">wifi</i>Wifi</li>
                        <li><i class="material-icons">flash_on</i>$10</li>
                        <li><i class="material-icons">local_atm</i>$70</li>
                    </ul>
                </div>
                <div class="col-9 room-detail content">
                    <div class="block-content room-introduction">
                        <h1 class="header-block head-md">Introduction</h1>
                        <div class="body-block">
                            <p class="overview text-opensans-14">
                                I'm a Londoner who fell in love with Sydney over 2 years ago and never looked back. I
                                would love to share the famous coastal walk with you, the very first thing I did when I
                                arrived to Sydney, and still my favourite thing to do here. I've loved walking since I
                                first learnt to walk :) I've always been drawn to the ocean as I find the water so
                                calming and restorative. The views…
                                <a href="#" class="link-rnw more-link">more</a>
                            </p>
                            <p class="read-more text-opensans-14">
                                I'm a Londoner who fell in love with Sydney over 2 years ago and never looked back. I
                                would love to share the famous coastal walk with you, the very first thing I did when I
                                arrived to Sydney, and still my favourite thing to do here. I've loved walking since I
                                first learnt to walk :) I've always been drawn to the ocean as I find the water so
                                calming and restorative. The views been drawn to the ocean as I find the water so
                                calming and restorative
                                <a href="#" class="link-rnw less-link">less</a>
                            </p>
                        </div>
                    </div>
                    <div class="block-content room-notes">
                        <h1 class="header-block head-md">Notes</h1>
                        <div class="body-block">
                            <p class="overview text-opensans-14">
                                Bringing guests under 18
                                If you bring a guest that’s under 18, it’s your responsibility to make sure the
                                activities they participate in are age-appropriate…
                                <a href="#" class="link-rnw more-link">more</a>
                            </p>
                            <p class="read-more text-opensans-14">
                                Bringing guests under 18
                                If you bring a guest that’s under 18, it’s your responsibility to make sure the
                                activities they participate in are age-appropriate to make sure the activities.
                                <a href="#" class="link-rnw less-link">less</a>
                            </p>
                        </div>
                    </div>
                    <div class="block-content room-location">
                        <h1 class="header-block head-md">Location</h1>
                        <div class="body-block">
                            <img src="/img/frontend/map.png" alt="">

                        </div>
                    </div>
                    <div class="block-content room-availability">
                        <div class="flex-item header-availability">
                            <h1 class="header-block head-md">Availability</h1>
                            <div class="note-availability text-opensans-14 ml-auto">
                                <span class="icon-note-availability"></span>
                                <span class="text-note">Available</span>
                                <span class="text-note">Not available</span>
                            </div>
                        </div>
                        <div class="body-block flex-item">
                            <div class="col-4 date-picker">
                                <div class="year-title head-md">
                                    2018
                                </div>
                                <div class="months text-opensans-14">
                                    <div class="flex-item ">
                                        <div class="month-label col">
                                            <span class="month-text month-not-available">Jan</span>
                                        </div>
                                        <div class="month-label col">
                                            <span class="month-text month-available">Feb</span>
                                        </div>
                                        <div class="month-label col">
                                            <span class="month-text month-available">Mar</span>
                                        </div>
                                    </div>
                                    <div class="flex-item">

                                        <div class="month-label col">
                                            <span class="month-text month-available">Apr</span>
                                        </div>
                                        <div class="month-label col">
                                            <span class="month-text month-available">May</span>
                                        </div>
                                        <div class="month-label col">
                                            <span class="month-text month-available">Jun</span>
                                        </div>
                                    </div>
                                    <div class="flex-item">
                                        <div class="month-label col">
                                            <span class="month-text month-available">Jul</span>
                                        </div>
                                        <div class="month-label col">
                                            <span class="month-text month-available">Agu</span>
                                        </div>
                                        <div class="month-label col">
                                            <span class="month-text month-available">Sep</span>
                                        </div>
                                    </div>
                                    <div class="flex-item">
                                        <div class="month-label col">
                                            <span class="month-text month-available">Oct</span>
                                        </div>
                                        <div class="month-label col">
                                            <span class="month-text month-available">Nov</span>
                                        </div>
                                        <div class="month-label col">
                                            <span class="month-text month-available">Dec</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 date-picker">
                                <div class="year-title head-md">
                                    2019
                                </div>
                                <div class="months text-opensans-14">
                                    <div class="flex-item ">
                                        <div class="month-label col">
                                            <span class="month-text month-available">Jan</span>
                                        </div>
                                        <div class="month-label col">
                                            <span class="month-text month-available">Feb</span>
                                        </div>
                                        <div class="month-label col">
                                            <span class="month-text month-available">Mar</span>
                                        </div>
                                    </div>
                                    <div class="flex-item">

                                        <div class="month-label col">
                                            <span class="month-text month-available">Apr</span>
                                        </div>
                                        <div class="month-label col">
                                            <span class="month-text month-available">May</span>
                                        </div>
                                        <div class="month-label col">
                                            <span class="month-text month-available">Jun</span>
                                        </div>
                                    </div>
                                    <div class="flex-item">
                                        <div class="month-label col">
                                            <span class="month-text month-available">Jul</span>
                                        </div>
                                        <div class="month-label col">
                                            <span class="month-text month-available">Agu</span>
                                        </div>
                                        <div class="month-label col">
                                            <span class="month-text month-available">Sep</span>
                                        </div>
                                    </div>
                                    <div class="flex-item">
                                        <div class="month-label col">
                                            <span class="month-text month-available">Oct</span>
                                        </div>
                                        <div class="month-label col">
                                            <span class="month-text month-available">Nov</span>
                                        </div>
                                        <div class="month-label col">
                                            <span class="month-text month-available">Dec</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 date-picker">
                                <div class="year-title head-md">
                                    2020
                                </div>
                                <div class="months text-opensans-14">
                                    <div class="flex-item ">
                                        <div class="month-label col">
                                            <span class="month-text month-not-available">Jan</span>
                                        </div>
                                        <div class="month-label col">
                                            <span class="month-text month-not-available">Feb</span>
                                        </div>
                                        <div class="month-label col">
                                            <span class="month-text month-not-available">Mar</span>
                                        </div>
                                    </div>
                                    <div class="flex-item">

                                        <div class="month-label col">
                                            <span class="month-text month-not-available">Apr</span>
                                        </div>
                                        <div class="month-label col">
                                            <span class="month-text month-not-available">May</span>
                                        </div>
                                        <div class="month-label col">
                                            <span class="month-text month-not-available">Jun</span>
                                        </div>
                                    </div>
                                    <div class="flex-item">
                                        <div class="month-label col">
                                            <span class="month-text month-not-available">Jul</span>
                                        </div>
                                        <div class="month-label col">
                                            <span class="month-text month-not-available">Agu</span>
                                        </div>
                                        <div class="month-label col">
                                            <span class="month-text month-not-available">Sep</span>
                                        </div>
                                    </div>
                                    <div class="flex-item">
                                        <div class="month-label col">
                                            <span class="month-text month-not-available">Oct</span>
                                        </div>
                                        <div class="month-label col">
                                            <span class="month-text month-not-available">Nov</span>
                                        </div>
                                        <div class="month-label col">
                                            <span class="month-text month-not-available">Dec</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content room-about">
                        <h1 class="header-block head-md">about the landlord</h1>
                        <div class="body-block">
                            <p class="overview text-opensans-14">
                                I'm a Londoner who fell in love with Sydney over 2 years ago and never looked back. I
                                would love to share the famous coastal walk with you, the very first thing I did when I
                                arrived to Sydney, and still my favourite thing to do here. I've loved walking since I
                                first learnt to walk :) I've always been drawn to the ocean as I find the water so
                                calming and restorative. The views…
                                <a href="#" class="link-rnw more-link">more</a>
                            </p>
                            <p class="read-more text-opensans-14">
                                I'm a Londoner who fell in love with Sydney over 2 years ago and never looked back. I
                                would love to share the famous coastal walk with you, the very first thing I did when I
                                arrived to Sydney, and still my favourite thing to do here. I've loved walking since I
                                first learnt to walk :) I've always been drawn to the ocean as I find the water so
                                calming and restorative. The views always been drawn to the ocean as I find the water so
                                calming and restorative.
                                <a href="#" class="link-rnw less-link">less</a>
                            </p>
                        </div>
                        <div class="compare-landlord">
                            <div class="compare-header text-opensans-14">
                                Compare this landlord with others
                            </div>
                            <div class="compare-body flex-item">
                                <div class="col compare-col compare-types">
                                    <div class="landlord-name-avatar landlord-cell"></div>
                                    <div class="compare-type compare-rating landlord-cell">
                                        <span class="head-sm">
                                             User rating
                                        </span>
                                    </div>
                                    <div class="compare-type head-sm compare-service landlord-cell">
                                        <span class="head-sm">
                                            Services
                                        </span>
                                    </div>
                                    <div class="landlord-cell"></div>
                                </div>
                                <div class="col compare-col col-hire col-landlord">
                                    <div class="landlord-name-avatar landlord-cell">
                                        <div class="avatar-landlord">
                                            <img src="/img/frontend/landlord.png" alt="">
                                        </div>
                                        <h2 class="landlord-name head-sm"> John service</h2>
                                    </div>
                                    <div class="compare-type compare-rating text-opensans-14 landlord-cell">
                                        <div class="text-rate rate-good">Very Good 7.9</div>
                                        <div class="total-review">(125 reviews)</div>
                                    </div>
                                    <div class="compare-type compare-service text-opensans-14 landlord-cell">
                                        Full services
                                    </div>
                                    <div class="brn-view-hire landlord-cell">
                                        <a href="" class="btn btn-rnw btn-rnw-yellow btn-rnw-md">Hire</a>
                                    </div>
                                </div>
                                <div class="col compare-col col-landlord">
                                    <div class="landlord-name-avatar landlord-cell">
                                        <div class="avatar-landlord">
                                            <img src="/img/frontend/landlord.png" alt="">
                                        </div>
                                        <h2 class="landlord-name head-sm"> Alena</h2>
                                    </div>
                                    <div class="compare-type compare-rating text-opensans-14 landlord-cell">
                                        <div class="text-rate rate-average ">Average 5.5</div>
                                        <div class="total-review">(67 reviews)</div>
                                    </div>
                                    <div class="compare-type compare-service text-opensans-14 landlord-cell">
                                        Find tenants
                                    </div>
                                    <div class="brn-view-hire landlord-cell">
                                        <a href="" class="btn btn-rnw btn-rnw-light btn-rnw-md">view</a>
                                    </div>
                                </div>
                                <div class="col compare-col col-landlord">
                                    <div class="landlord-name-avatar landlord-cell">
                                        <div class="avatar-landlord">
                                            <img src="/img/frontend/landlord.png" alt="">
                                        </div>
                                        <h2 class="landlord-name head-sm"> Tom</h2>
                                    </div>
                                    <div class="compare-type compare-rating text-opensans-14 landlord-cell">
                                        <div class="text-rate rate-weak">Weak 2.5</div>
                                        <div class="total-review">(17 reviews)</div>
                                    </div>
                                    <div class="compare-type compare-service text-opensans-14 landlord-cell">
                                        Find tenants
                                    </div>
                                    <div class="brn-view-hire landlord-cell">
                                        <a href="" class="btn btn-rnw btn-rnw-light btn-rnw-md">view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content room-review">
                        <h1 class="header-block head-md">reviews</h1>
                        <div class="body-block">
                            <div class="review-item ">
                                <div class="media">
                                    <img class="mr-3" src="/img/frontend/landlord.png" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <div class="flex-item align-items-center author-review justify-content-between">
                                            <h5 class="head-sm">ANNA OSTYANKO</h5>
                                            <div class="date-of-review">June 11, 2014 9:26 pm</div>
                                        </div>
                                        <div class="stars-review flex-item">
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                        </div>
                                        <p class="text-opensans-14">
                                            Unlike pop-culture’s current obsession with bleak, heavy drama <span
                                                    class="font-italic">(Game Of Thrones, Breaking Bad, we’re talking to you)</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="review-item ">
                                <div class="media">
                                    <img class="mr-3" src="/img/frontend/landlord.png" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <div class="flex-item align-items-center author-review justify-content-between">
                                            <h5 class="head-sm">ANNA OSTYANKO</h5>
                                            <div class="date-of-review">June 11, 2014 9:26 pm</div>
                                        </div>
                                        <div class="stars-review flex-item">
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                        </div>
                                        <p class="text-opensans-14">
                                            Unlike pop-culture’s current obsession with bleak, heavy drama <span
                                                    class="font-italic">(Game Of Thrones, Breaking Bad, we’re talking to you)</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-show-all text-center">
                                <a href="" class="btn btn-rnw btn-rnw-light btn-rnw-190 btn-show-all">Show all
                                    reviews</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-rnw modal-rnw-main " id="endContractModal" tabindex="-1" role="dialog"
         aria-labelledby="endContractModal"
         aria-hidden="true">
        <div role="document" class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i
                                class="material-icons">clear</i></button>
                </div>
                <div id="end-contract-form">
                    <div class="head-sm end-contract-header">End Contract</div>
                    <div class="end-contract-form text-opensans-14">
                        <p class="text-end-contract">Please give us a reason why you want to end this contract</p>
                        <div class="flex-item radio-item-end-contract align-self-center">
                            <label for="endcontract1" class="form-check-label">
                                <input type="radio" id="endcontract1" hidden name="end_tract"
                                       class=" input-radio hidden">
                                <div class="check">
                                    <i class="material-icons unchecked">radio_button_unchecked</i>
                                </div>
                                <span class="radio-label">Found a new Location</span>
                            </label>
                        </div>
                        <div class="flex-item radio-item-end-contract align-self-center">
                            <label for="endcontract2" class="form-check-label">
                                <input type="radio" id="endcontract2" hidden name="end_tract"
                                       class=" input-radio hidden">
                                <div class="check">
                                    <i class="material-icons unchecked">radio_button_unchecked</i>
                                </div>
                                <span class="radio-label"> Unsatisfied with the room</span>
                            </label>
                        </div>
                        <div class="flex-item radio-item-end-contract align-self-center">
                            <label for="endcontract3" class="form-check-label">
                                <input type="radio" id="endcontract3" hidden name="end_tract"
                                       class=" input-radio hidden">
                                <div class="check">
                                    <i class="material-icons unchecked">radio_button_unchecked</i>
                                </div>
                                <span class="radio-label">Unsatisfied with the landlord</span>
                            </label>
                        </div>
                        <div class="flex-item radio-item-end-contract align-self-center">
                            <label for="endcontract4" class="form-check-label">
                                <input type="radio" id="endcontract4" hidden name="end_tract"
                                       class=" input-radio hidden">
                                <div class="check">
                                    <i class="material-icons unchecked">radio_button_unchecked</i>
                                </div>
                                <span class="radio-label">Other</span>
                            </label>
                        </div>
                        <div class="btn-end-contract">
                            <button class="btn btn-rnw btn-rnw-yellow btn-rnw-fw">End Contract</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('script')
    <script src="{{ asset('js/room-detail.js') }}"></script>
@endsection
