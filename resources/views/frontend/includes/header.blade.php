<div id="header" class="bg-black hasslide">
    <nav id="header-top" class="navbar navbar-expand-lg hidden-mobile  no-gutters">
        <div class="container">
            <div class="col-sm-4 lang-switcher none-padding">
                @include('frontend.includes.lang-switcher')
            </div>
            <div class="col-sm-8 account-menu none-padding">
                @if (!\Illuminate\Support\Facades\Auth::check())
                    @include('frontend.includes.account-menu')
                @else
                    <a href="">{{\Illuminate\Support\Facades\Auth::user()->email}}</a>
                @endif
            </div>
        </div>
    </nav>
    <div id="navbar">
        <div class="container">
            @include('frontend.includes.navbar')
        </div>
    </div>
    <div class="modal fade modal-rnw-full-screen modal-rnw" id="menuModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content row">
                <div class="modal-header  align-items-center">
                    <div class="col-3 logo-mobile">
                        <a href="{{url('/')}}" title="">
                            <span class="pic"><img src="{{asset('img/frontend/logo_1.png')}}"></span>
                        </a>
                    </div>
                    <div class="col lang-switcher-mobile lang-switcher"> @include('frontend.includes.lang-switcher')</div>
                    <div class="col-1 close-modal">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="{{asset('/img/frontend/close.png')}}" alt="">
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="account-menu">
                        @if (!\Illuminate\Support\Facades\Auth::check())
                            @include('frontend.includes.account-menu')
                        @else
                            <a href="">{{\Illuminate\Support\Facades\Auth::user()->email}}</a>
                        @endif
                    </div>
                    <div class="nav-bar-menu">
                        @include('frontend.includes.nav-bar-menu')
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>