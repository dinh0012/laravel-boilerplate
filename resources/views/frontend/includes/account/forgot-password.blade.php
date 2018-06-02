<div class="container content-view" id="forgot-password-form">
    <div class="forgot-form">
        <div class="title-form">
            Forgot password
        </div>
        <p class="message-form text-form-account">
            Enter your email address below and</br>
            we'll get you back on track.
        </p>
        <form id="reset-form" method="POST" action="{{route('frontend.auth.password.email.post')}}">
            <div class="form-group">
                <div class="input-placeholder">
                    <input type="text" name="email"  class="form-control">
                    <div class="placeholder">
                        Email
                    </div>
                </div>
            </div>
            <div class="row">
                <button type="submit" id="btn-reset-password"
                        class="btn-forgot-pass-rnw btn-rnw-340 btn btn-login-form btn-rnw btn-rnw-yellow">reset password
                </button>
            </div>
        </form>
        <div class="row back-page" id="back-to-login">
            <a href="#" class="link-rnw">
                <i class="material-icons">keyboard_arrow_left</i>
                Back to Sign In
            </a>
        </div>
    </div>
</div>
<div class="container content-view send-success" id="send-success">
    <div class="send-success">
        <div class="title-form">
            Sent Sucessfully
        </div>
        <p class="message-form text-form-account">
            We just emailed you with the instructions</br>
            to reset your password.
        </p>
        <div class="row">
            <button type="submit" id="get-password" data-dismiss="modal"
                    class="btn-forgot-pass-rnw btn btn-login-form btn-rnw btn-rnw-light btn-rnw-160">get it
            </button>
        </div>
    </div>
</div>