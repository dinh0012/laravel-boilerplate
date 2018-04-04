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
                <div class="input-placeholder">
                    <input type="text" name="address" id="address" class="form-control" required>
                    <div class="placeholder">
                        Address <span>*</span>
                    </div>
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
                        class="btn btn-login-form btn-rnw btn-rnw-yellow btn-next-form btn-next-step btn-step">
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
                        class="btn btn-rnw btn-rnw-light btn-next-form btn-step-register btn-step btn-step-inline">
                    Back
                </button>
                <button type="button" data-step="3"
                        class="btn btn-rnw btn-rnw-yellow btn-next-form btn-step-register btn-step btn-step-inline">
                    Next
                </button>
            </div>
        </div>

    </div>

</div>