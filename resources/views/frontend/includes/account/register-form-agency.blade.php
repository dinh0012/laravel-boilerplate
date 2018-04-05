<div class="agency-type">
    <div id="register-steps">
        <div id="step-1" class="register-step-form">
            <div class="row">
                <div class="upload-logo">
                    <input type="file" name="logo" hidden id="input-upload-logo" class="hidden">
                    <span>upload logo</span>
                </div>
                <div class="input-name-tax">
                    <div class="form-group">
                        <div class="input-placeholder">
                            <input type="text" id="agency_name" class="form-control " required>
                            <div class="placeholder">
                                Agency name <span>*</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-placeholder">
                            <input type="text" name="tax_number" id="tax-num" class="form-control" required>
                            <div class="placeholder">
                                Tax number <span>*</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="input-placeholder input-address">
                    <input type="text" name="address" id="address" class="form-control" required>
                    <div class="placeholder">
                        Address <span>*</span>
                    </div>
                    <i class="material-icons icon-address">room</i>
                </div>
            </div>
            <div class="form-group row select-inline" id="select-inline">
                <div class="input-placeholder col select-country select-icon">
                    <select name="country" class="country" required>
                        <option class="title-country" value=""></option>
                        <option value="vn">Vietnam</option>
                        <option value="sn">Spain</option>
                    </select>
                    <div class="placeholder">
                        Country <span>*</span>
                    </div>
                </div>
                <div class="input-placeholder col select-district select-icon">
                    <select name="district" class="country" required>
                        <option class="title-district" value=""></option>
                        <option value="1">District 1</option>
                        <option value="2">District 1</option>
                    </select>
                    <div class="placeholder">
                        District <span>*</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <button type="button" data-step="2"
                        class="btn btn-login-form btn-rnw-340 btn-rnw btn-rnw-yellow btn-next-form btn-next-step btn-step">
                    Next
                </button>
            </div>
        </div>
        <div id="step-2" class="register-step-form">
            <div class="form-group">
                <div class="input-placeholder">
                    <input type="text" name="job_title" id="job-title" class="form-control" required>
                    <div class="placeholder">
                        Job title <span>*</span>
                    </div>
                </div>
            </div>
            <div class="form-group row select-inline" >
                <div class="input-placeholder col select-gender select-icon">
                    <select name="gender" class="gender" required>
                        <option class="title-country" value=""></option>
                        <option value="1">Female</option>
                        <option value="0">Male</option>
                    </select>
                    <div class="placeholder">
                        Gender <span>*</span>
                    </div>
                </div>
                <div class="input-placeholder col">
                    <div class="input-placeholder">
                        <input type="text" name="company_phone" id="company-phone" class="form-control" required>
                        <div class="placeholder">
                            Contact person <span>*</span>
                        </div>
                    </div>
                    <div class="placeholder">
                        Contact person <span>*</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="input-placeholder">
                    <input type="text" name="company_phone" id="company-phone" class="form-control" required>
                    <div class="placeholder">
                        Company phone number <span>*</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="input-placeholder">
                    <input type="text" name="personal_phone" id="personal-phone" class="form-control" required>
                    <div class="placeholder">
                        Personal phone number <span>*</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="input-placeholder">
                    <input type="text" name="email" id="email" class="form-control" required>
                    <div class="placeholder">
                        Email <span>*</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <button type="button" data-step="1"
                        class="btn btn-rnw btn-rnw-light btn-next-form btn-step-register btn-step btn-step-inline btn-rnw-160">
                    Back
                </button>
                <button type="button" data-step="3"
                        class="btn btn-rnw btn-rnw-yellow btn-next-form btn-step-register btn-step btn-step-inline btn-rnw-160">
                    Next
                </button>
            </div>
        </div>
        <div id="step-3" class="register-step-form">
            <p class="text-note-upload text-form-account">Please upload the following documents: </p>
            <div class="form-group">
                <div class="input-placeholder input-upload-agency align-items-center">
                    <input type="file" name="agency_terms" id="agency-terms" hidden class="form-control input-upload-file" required>
                    <span class="title-input-upload text-form-account">Agency terms </span><span class="hot">*</span>
                    <a href="#" class="link-rnw ml-auto link-select-file">Select file</a>
                </div>
            </div>
            <div class="form-group">
                <div class="input-placeholder input-upload-agency align-items-center">
                    <input type="file" name="agency_price_list" id="agency-price-list" hidden class="form-control input-upload-file" required>
                    <span class="title-input-upload text-form-account">Agency pricing list </span><span class="hot">*</span>
                    <a href="#" class="link-rnw ml-auto link-select-file">Select file</a>
                </div>
            </div>
            <div class="form-group">
                <div class="input-placeholder input-upload-agency align-items-center">
                    <input type="file" name="agency_contract" id="agency-contract" hidden class="form-control input-upload-file" required>
                    <span class="title-input-upload text-form-account">Agency contract </span><span class="hot">*</span>
                    <a href="#" class="link-rnw ml-auto link-select-file">Select file</a>
                </div>
            </div>
            <div class="form-group">
                <div class="input-placeholder input-upload-agency align-items-center">
                    <input type="file" name="proof_of_identification" id="proof_of_identification" hidden class="form-control input-upload-file" required>
                    <span class="title-input-upload text-form-account">Proof of identification</span><span class="hot">*</span>
                    <a href="#" class="link-rnw ml-auto link-select-file">Select file</a>
                </div>
            </div>
            <div class="form-group">
                <div class="input-placeholder input-upload-agency align-items-center">
                    <input type="file" name="business_registration" id="business_registration" hidden class="form-control input-upload-file" required>
                    <span class="title-input-upload text-form-account">Business registration</span><span class="hot">*</span>
                    <a href="#" class="link-rnw ml-auto link-select-file">Select file</a>
                </div>
            </div>
            <div class="form-group">
                <div class="input-placeholder input-upload-agency align-items-center">
                    <input type="file" name="agency_license" id="agency_license" hidden class="form-control input-upload-file" required>
                    <span class="title-input-upload text-form-account">Agency license/renting license</span><span class="hot">*</span>
                    <a href="#" class="link-rnw ml-auto link-select-file">Select file</a>
                </div>
            </div>
            <div class="form-group">
                <div class="input-placeholder input-upload-agency align-items-center">
                    <input type="file" name="copy_stamped_letterhead" id="copy_stamped_letterhead" hidden class="form-control input-upload-file" required>
                    <span class="title-input-upload text-form-account">Copy of a stamped letterhead</span><span class="hot">*</span>
                    <a href="#" class="link-rnw ml-auto link-select-file">Select file</a>
                </div>
            </div>
            <div class="form-check mb-10">
                <label class="form-check-label text-form-account flex-item" for="acceptTermAndCon">
                    <label class="checkbox">
                        <input type="checkbox" class="form-check-input checkbox-input" id="acceptTermAndCon">
                        <div class="check">
                            <img src="/img/frontend/check_off.png" alt="remember password">
                        </div>
                    </label>
                    By checking this box you accept and agree
                    with the <a href="#" class="link-rnw">Terms of Conditions</a>
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label text-form-account flex-item" for="acceptCookie">
                    <label class="checkbox">
                        <input type="checkbox" class="form-check-input checkbox-input" id="acceptCookie">
                        <div class="check">
                            <img src="/img/frontend/check_off.png" alt="remember password">
                        </div>
                    </label>
                    By checking this box you accept the
                    cookie statement
                </label>
            </div>
            <div class="row">
                <button type="button" data-step="2"
                        class="btn btn-rnw btn-rnw-light btn-next-form btn-step-register btn-step btn-step-inline btn-rnw-160">
                    Back
                </button>
                <button type="button" data-step="4"
                        class="btn btn-rnw btn-rnw-yellow btn-next-form btn-step-register btn-step btn-step-inline btn-rnw-160">
                    Next
                </button>
            </div>
        </div>
        <div id="step-4" class="register-step-form">
            <div class="row img-clock">
                <img src="{{asset('/img/frontend/clock.png')}}" alt="">
            </div>
            <p class="text-form-account text-center ">
                We will validate your license in the next 48 hours.</br>
                Afterwards we will schedule a meeting in person or</br>
                over the phone in order to process the details</br>
                of the contract with you.</br>
            </p>
            <p class="text-form-account thank-you-text text-center ">
                Thank you for your patience!
            </p>
            <div class="row">
                <button type="button" data-step="2"
                        class="btn btn-login-form btn-rnw-340 btn-rnw btn-rnw-yellow btn-next-form btn-next-step btn-step">
                    Finish
                </button>
            </div>
        </div>
    </div>

</div>