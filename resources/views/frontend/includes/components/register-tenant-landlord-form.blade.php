<form id="register-form" class="tenant-landlord-type" method="POST" action="{{route('frontend.auth.register.post')}}">
    {{csrf_field()}}
    <input type="hidden" name="user_type" id="input-user-type" value="1">
    <div class="form-group">
        <div class="input-placeholder">
            <input type="text" name="first_name" class="form-control first-name" rnw-required>
            <div class="placeholder">
                First name <span>*</span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="input-placeholder">
            <input type="text" name="last_name" class="form-control last-name" rnw-required>
            <div class="placeholder">
                Last name <span>*</span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="input-placeholder">
            <input type="text" name="email" class="form-control email" rnw-required>
            <div class="placeholder">
                Email <span>*</span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="input-placeholder">
            <input type="password" name="password" class="form-control password" rnw-required>
            <div class="placeholder">
                Password <span>*</span>
            </div>
            <i class="material-icons toggle-show-pass">visibility</i>
        </div>
    </div>
    <div class="form-group">
        <div class="input-placeholder">
            <input type="password" name="password_confirmation"
                   class="form-control confirm-password password"
                   rnw-required>
            <div class="placeholder">
                Confirm password <span>*</span>
            </div>
            <i class="material-icons toggle-show-pass">visibility</i>
        </div>
    </div>
    <div class="form-check mb-10">
        <label class="form-check-label text-form-account" for="rememberMeSignUp">
            <input type="checkbox" class="form-check-input checkbox-input" id="rememberMeSignUp">
            <div class="check">
                <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
            </div>
            Remember me
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label text-form-account" for="tipsAndTricks">
            <input type="checkbox" class="form-check-input checkbox-input" id="tipsAndTricks">
            <div class="check">
                <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
            </div>
            Keep me up to date with Tips & Tricks!
        </label>
    </div>
    <div class="row">
        <button type="submit" id="register-rnw"
                class="btn btn-login-form btn-rnw-340 btn-rnw btn-rnw-yellow btn-login-rnw">
            SIGN UP
        </button>
    </div>
    <p id="login-or-text">OR</p>
    <div class="row btn-fb">
        <button type="submit" id="register-fb"
                class="btn btn-login-form btn-rnw-340 btn-rnw btn-rnw-yellow btn-login-fb">
            SIGN UP with facebook
        </button>
        <img src="{{asset('/img/frontend/fb.png')}}" alt="">
    </div>
    <p id="term-conditions-text" class="text-form-account">
        By signing up you accept the <a href="" class="link-rnw">Terms of Conditions</a>
    </p>
</form>