<div class="container" id="login-register">
    <ul class="nav nav-tabs justify-content-md-center" id="tab-account" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login"
               aria-selected="true">Sign In</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab"
               aria-controls="register" aria-selected="false">Sign up</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="home-tab">
            <form id="login-form">
                <div class="form-group">
                    <div class="input-placeholder">
                        <input type="text" name="email" class="form-control" rnw-required>
                        <div class="placeholder">
                            Email <span>*</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-placeholder">
                        <input type="password" id="input-pw" class="form-control password" rnw-required>
                        <div class="placeholder">
                            Password <span>*</span>
                        </div>
                        <i class="material-icons toggle-show-pass">visibility</i>
                    </div>
                </div>
                <div class="form-check">
                    <label class="form-check-label text-form-account" for="rememberMe">
                        <input type="checkbox" class="form-check-input checkbox-input" id="rememberMe">
                        <div class="check">
                            <i class="material-icons icon-checkbox-blank">check_box_outline_blank</i>
                        </div>
                        Remember me
                    </label>
                    <a href="#" id="forgot-password-link" class="link-forgot-pw link-rnw">Forgot password? </a>
                </div>
                <div class="row">
                    <button type="submit" id="login-rnw"
                            class="btn-login-rnw btn btn-login-form btn-rnw-340 btn-rnw btn-rnw-yellow">SIGN IN
                    </button>
                </div>
                <p id="login-or-text">OR</p>
                <div class="row btn-fb">
                    <button type="submit" id="login-fb" class="btn-login-fb btn btn-login-form btn-rnw-340 btn-rnw btn-rnw-yellow">
                        SIGN IN with facebook
                    </button>
                    <img src="{{asset('/img/frontend/fb.png')}}" alt="">
                </div>
                <p id="term-conditions-text" class="text-form-account">By signing in you accept the <a href="" class="link-rnw">Terms of
                        Conditions</a></p>
            </form>
        </div>
        <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="profile-tab">
            <div class="form-group input-account-type">
                <div class="input-placeholder" id="input-account-type">
                    <select name="account_type" class="form-control account-type" rnw-required>
                        <option value="1">Tenant</option>
                        <option value="2">Landlord</option>
                        <option value="3">Agency</option>
                    </select>
                    <div class="placeholder">
                        Account type <span>*</span>
                    </div>
                </div>
            </div>
            <div id="form-type-account">
                <div id="form-type-user">
                    <form id="register-form" class="tenant-landlord-type" method="POST" action="{{route('frontend.auth.register.post')}}">
                        {{csrf_field()}}
                        <input type="hidden" name="user_type" id="input-type-user" value="1">
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
                </div>
            </div>
        </div>
    </div>
</div>
