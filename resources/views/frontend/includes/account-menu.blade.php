<ul id="account-menu" class="nav">
    <li class="nav-item col align-self-end">
        <a class="nav-link type-agency align-self-end" href="#">become a landlord or agency</a>
    </li>
    <li class="nav-item">
        <a class="nav-link link-account-form link-register" data-toggle="modal" data-target="#loginFormModal" href="#">sign up</a>
    </li>
    <li class=" nav-item seperate">
        <a class="nav-link" href="#">/</a>
    </li>
    <li class="nav-item">
        <a class="nav-link link-login link-account-form" data-toggle="modal" data-target="#loginFormModal" href="#">sign in</a>
    </li>
</ul>
<div class="modal fade modal-rnw modal-rnw-main " id="loginFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">clear</i>
                </button>
            </div>
            <div id="account-form">
                @include('frontend.includes.account.login-form')
                @include('frontend.includes.account.forgot-password')
            </div>
        </div>
    </div>
</div>
