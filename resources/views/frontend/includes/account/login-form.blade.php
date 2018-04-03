<div id="account-form">
    <div class="container">
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
                            <input type="text" name="email" class="form-control" required >
                            <div class="placeholder">
                                Email <span>*</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-placeholder">
                            <input type="password" class="form-control" required >
                            <div class="placeholder">
                                Password <span>*</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                        <a href="#">Forgot password? </a>
                    </div>
                    <button type="submit" class="btn btn-rnw btn-rnw-yellow">SIGN IN</button>
                    <button type="submit" class="btn btn-rnw btn-rnw-yellow">SIGN IN with facebook</button>
                </form>
            </div>
            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="profile-tab">...</div>
        </div>
    </div>
</div>