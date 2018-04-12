<div class="navbar-collapse " id="navbar-menu">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item {{ \Request::routeIs('frontend.find-room') ||  \Request::routeIs('frontend.room-detail') ? 'active' : '' }}">
            <a class="nav-link" href="/find-room">Find Room</a>
        </li>
        <li class="nav-item {{ \Request::routeIs('frontend.find-agency') ? 'active' : '' }}">
            <a class="nav-link" href="/find-agency">Find Agency</a>
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