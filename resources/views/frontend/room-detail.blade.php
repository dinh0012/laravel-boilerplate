@extends('frontend.layouts.main')

@section('title', app_name() . ' | '.__('navs.general.home'))
@section('style')
    <link href="{{ asset('css/frontend/search/search.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/partial/list-room.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/partial/search-form.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div id="room-detail">
        <div class="room-slider rnw-slider-full">
            <div id="room-image-slider" data-ride="carousel"
                 class="carousel slide list-packages row">
                <ol class="carousel-indicators">
                    <li data-target="#room-image-slider" data-slide-to="0" class=""></li>
                    <li data-target="#room-image-slider" data-slide-to="1" class="active"></li>
                    <li data-target="#room-image-slider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner package-item col package-select">
                    <div class="carousel-item">
                        <figure style="background: url('/img/frontend/room.jpg')center center / cover; ">
                        </figure>
                    </div>
                    <div class="carousel-item active">
                        <figure style="background: url('/img/frontend/room.jpg')center center / cover;">
                        </figure>
                    </div>
                    <div class="carousel-item ">
                        <figure style="background: url('/img/frontend/room.jpg')center center / cover;">
                        </figure>
                    </div>
                </div>
                <a class="carousel-control-prev carousel-control" href="#room-image-slider" role="button" data-slide="prev">
                    <i class="material-icons">keyboard_backspace</i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next carousel-control" href="#room-image-slider" role="button" data-slide="next">
                    <i class="material-icons">trending_flat</i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>


@endsection
@section('script')
    <script src="{{ asset('js/search.js') }}"></script>
@endsection
