@extends('frontend.layouts.main')

@section('title', app_name() . ' | '.__('navs.general.home'))
@section('style')
    <link href="{{ asset('css/frontend/room-detail.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/partial/search-form.css') }}" rel="stylesheet">
@endsection

@section('content')
    @include('frontend.includes.form-search')
    <div id="agency-detail">

    </div>


@endsection
@section('script')
    <script src="{{ asset('js/room-detail.js') }}"></script>
@endsection
