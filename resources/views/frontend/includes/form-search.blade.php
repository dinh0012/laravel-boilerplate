<?php
    $currentRoute = \Request::route()->getName();
    if ($currentRoute == 'frontend.find-agency') {
        $mainCaption1 = 'Over 500 agencies';
        $mainCaption2 = 'with all best services in <strong>Vietnam </strong>. Choose one and increase your revenue!';
        $formSearchType = 'frontend.includes.form-search-type.find-agency';
    } elseif ($currentRoute == 'frontend.find-room' || $currentRoute == 'frontend.index') {
        $mainCaption1 = 'Over 5.000 rooms';
        $mainCaption2 = 'have been rented in <strong>Vietnam </strong>, take your chance before it’s gone';
        $formSearchType = 'frontend.includes.form-search-type.find-room';
    }
?>


<div id="wrap-top" class="rnw-slider-full">
    <figure style="background: linear-gradient(rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%), url('/img/frontend/room.jpg') center center / cover; height: 506px;">
        <div class="container text-in-bg">
            <div class="caption">
                <h1 class="main-caption">{{$mainCaption1}}</h1>
                <h2 class="main-caption">{!! $mainCaption2 !!}</h2>
            </div>
            <div id="search-form" class="hidden-mobile">
                @include($formSearchType)
                <button id="btn-search" class="btn btn-rnw btn-rnw-lg btn-rnw-yellow">SEARCH</button>
                <div class="refine-search ml-auto">Refine your search</div>
            </div>
            <div id="btn-find-rom" class="show-mobile">
                <a href="#" type="button" data-toggle="modal" data-target="#findRoomModal" class="btn btn-rnw btn-rnw-lg btn-rnw-yellow row justify-content-md-center" >Find Your Rooms</a>
            </div>
            <div class="modal fade modal-rnw-full-screen modal-rnw" id="findRoomModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <img src="{{asset('/img/frontend/back.png')}}" alt="">
                            </button>
                            <h2 class="title-modal title-find-rom">Find your rooms</h2>
                        </div>
                        <div class="modal-body">
                            <ul class="items-search list-group">
                                <li class="item-search list-group-item"><a href="#">City <span class="expand"></span></a></li>
                                <li class="item-search list-group-item"><a href="#">District<span class="expand"></span></a></li>
                                <li class="item-search list-group-item"><a href="#">Room type<span class="expand"></span></a></li>
                                <li class="item-search list-group-item"><a href="#">Surface area<span class="expand"></span></a></li>
                                <li class="item-search list-group-item"><a href="#">Price range (from - to)<span class="expand"></span></a></li>
                                <li class="item-search list-group-item"><a href="#">Radius<span class="expand"></span></a></li>
                                <li class="item-search list-group-item"><a href="#">Shared housing<span class="expand"></span></a></li>
                                <li class="item-search list-group-item"><a href="#">Capacity<span class="expand"></span></a></li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-rnw btn-rnw-light btn-rnw-md">CLEAR</a>
                            <a href="#" class="btn btn-rnw btn-rnw-yellow btn-rnw-md">SEARCH</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </figure>
</div>

