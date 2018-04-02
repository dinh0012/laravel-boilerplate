<nav class="navbar navbar-expand-lg bg-black">
    <div id="logo">
        <a href="{{url('/')}}" title=""><img src="{{asset('img/frontend/logo.png')}}"></a>
    </div>
    <div class="collapse navbar-collapse hidden-mobile" id="navbar-menu">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Find Room</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Find Agency</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Download App</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">New & Blog</a>
            </li>
        </ul>
    </div>
    <button class="btn btn-link nav-mobile-toggle d-md-none p-0 ml-3 show-mobile"
            type="button" data-toggle="collapse" data-target="#nav-menu"
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
        <div id="nav-main">
            <div class="box-nav">

            </div>
        </div>
    </nav>
</nav>