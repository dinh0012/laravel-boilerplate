<!DOCTYPE html>
@langrtl
    <html lang="{{ app()->getLocale() }}" dir="rtl">
@else
    <html lang="{{ app()->getLocale() }}">
@endlangrtl
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'Laravel 5 Boilerplate')">
        <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
        @yield('meta')

        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        {{ style('css/frontend.css') }}
        <link href="{{ asset('css/frontend/header.css') }}" rel="stylesheet">
        <link href="{{ asset('css/frontend/header-mobile.css') }}" rel="stylesheet">
        <link href="{{ asset('css/frontend/material-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('css/frontend/account/login.css') }}" rel="stylesheet">
        <link href="{{ asset('css/frontend/footer.css') }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800|Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
        @stack('after-styles')
        @yield('style')
    </head>
    <body>

        <div id="app">
            
            @include('includes.partials.logged-in-as')
            @include('frontend.includes.header')
            @include('includes.partials.messages')
            <div id="content">
                @yield('content')
            </div><!-- container -->
        </div><!-- #app -->

        <!-- Scripts -->
        @stack('before-scripts')
        {!! script(mix('js/frontend.js')) !!}
        @stack('after-scripts')
        @yield('script')
        <script src="{{asset('/js/main.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <script src="{{asset('/js/account/login-form.js')}}"></script>
        @include('frontend.includes.footer')
    </body>
</html>
