<div class="modal fade modal-rnw modal-rnw-main account-modal" id="loginFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
<div class="modal fade modal-rnw modal-rnw-main account-modal" id="accountVerify" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">clear</i>
                </button>
            </div>
            <div id="account-form">
                @include('frontend.includes.account.account-verify')
            </div>
        </div>
    </div>
</div>
