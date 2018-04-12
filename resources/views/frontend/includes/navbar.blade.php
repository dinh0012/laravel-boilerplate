<nav class="navbar navbar-expand-lg">
    <div id="logo">
        <a href="{{url('/')}}" title=""><img src="{{asset('img/frontend/logo_1.png')}}"></a>
    </div>
    <div class="nav-bar-meu hidden-mobile">
        @include('frontend.includes.nav-bar-menu')
    </div>
    <button class="btn btn-link nav-mobile-toggle d-md-none p-0 ml-3 show-mobile"
            data-toggle="modal" data-target="#menuModal" type="button"
            aria-controls="bd-docs-nav" aria-expanded="false" aria-label="Toggle docs navigation">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <nav class="bd-links collapse" id="nav-menu" style="">
        <header id="navBar" class="mobile">
            <button type="" id="close-nav"><i class="ion-close-round"></i></button>
            <div class="container">
                <div class="barHead">
                    <a href="{{url('/')}}" title="">
                        <span class="pic"><img src="{{asset('img/frontend/logo.png')}}"></span>
                    </a>
                </div>
            </div>
        </header>
    </nav>
</nav>
