@extends('frontend.layouts.main')

@section('title', app_name() . ' | '.__('navs.general.home'))
@section('style')
    <link href="{{ asset('css/frontend/room-detail.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/partial/search-form.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div id="agency-detail">
        <div class="agency-slider detail-slider rnw-slider-full">
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
                                <a href="/find-agency" class="link-breadcrumb">
                                    Find Agency
                                </a>
                                <span>/ </span>
                                <span class="current-page">John Service</span>
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
                                    <i class="material-icons bookmark bookmarked">bookmark</i>
                                </div>
                            </div>
                            <div class="row room-detail-box-header">
                                <div class="room-name col-3 align-self-center media align-items-center">
                                    <img src="/img/frontend/agency.png" alt="" class="avatar-agency">
                                    <div class="name-agency media-body  flex-item align-items-center">
                                        <div>
                                            <h2 class="name head-sm">John Service</h2>
                                            <h2 class="type-user">Agency</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-add col">
                                    <div class="address text-opensans-14"><i class="material-icons">location_on</i>
                                        Ho Chi Minh
                                    </div>
                                    <span class="agency-languae text-opensans-14"><i class="material-icons">translate</i>Vietnamese / English</span>
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
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hire</span>
                                    </button>
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
                        we provide
                    </div>
                    <ul class="list-info-room">
                        <li><i class="material-icons">face</i>Find tenants</li>
                        <li><i class="material-icons">account_balance</i>Find properties</li>
                        <li><i class="material-icons">format_paint</i>Decoration</li>
                        <li><i class="material-icons">flash_on</i>Electricity</li>
                    </ul>
                </div>
                <div class="col-9 room-detail content">
                    <div class="block-content room-introduction">
                        <h1 class="header-block head-md">About ‘John Service’</h1>
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

                    <div class="block-content room-about">
                        <h1 class="header-block head-md">My score compared to others nearby</h1>
                        <div class="compare-landlord">
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
