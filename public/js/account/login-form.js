(function () {
    if (!RNW.Account) {
        RNW.Account = {};
    }
    RNW.Account.Auth = {
        initialize: function() {
            this.toggleVisiblityPassword();
            this.activeTabLoginForm();
            this.showForgotPassword();
            this.backToLogin();
            this.selectAccountAgency();
            this.selectInputChange();
            this.uploadLogo();
            this.actionRegisterAgencyAccount();
            this.clickSelectFileAgencyAccount();
            this.onSubmitRegisterForm();
            this.onSubmitLoginForm();
            this.onSubmitForgotPassword();
            this.onCLickTabForm();
        },
        onCLickTabForm: function () {
            $('#tab-account li.nav-item').on('click', function () {
                RNW.Module.Main.resetForm();
            })
        },
        onSubmitForgotPassword: function () {
            $(document).on('submit', $('#reset-form'), function (e) {
                var form = $('#reset-form');
                e.preventDefault();
                if (!RNW.Module.Validate.requiredInputs(form)) {
                    return false;
                }
                var url = form.attr('action');
                var data = form.serializeArray()
                RNW.Module.Ajax.initSubmit(url, 'POST', data, $('#btn-reset-password'), success, fail);

                function success(res) {
                    if (!res.success) {
                        return;
                    }
                    $('#send-success').show();
                    $('#forgot-password-form').hide();
                }
                function fail(res) {
                    var errorFields = res.responseJSON.errors;
                    if (!errorFields) {
                        return;
                    }
                    var fieldsName = ['email'];
                    fieldsName.forEach(function (field, key) {
                        $(form).find('*[name='+ field + ']').addClass(RNW.Module.Validate.classInvalid);
                    })
                }
                return false;
            })
            /*var btnForgotPassword = $('#btn-reset-password');
            $(btnForgotPassword).on('click', function (event) {
                event.preventDefault();
                $('.send-success').show();
                $('.forgot-form').hide();

            })*/
        },

        onSubmitLoginForm: function () {
            $(document).on('submit', '#login-form', function (e) {
                var form = $('#login-form');
                e.preventDefault();
                if (!RNW.Module.Validate.requiredInputs(form)) {
                    return false;
                }
                var url = '/login';
                var data = form.serializeArray()
                RNW.Module.Ajax.initSubmit(url, 'POST', data, $('#login-rnw'), success, fail);

                function success(res) {
                    if (!res.success) {
                        return;
                    }
                    location.reload();
                }
                function fail(res) {
                    var errorFields = res.responseJSON.errors;
                    if (!errorFields) {
                        return;
                    }
                    var fieldsName = ['email', 'password'];
                    fieldsName.forEach(function (field, key) {
                        $(form).find('*[name='+ field + ']').addClass(RNW.Module.Validate.classInvalid);
                    })
                }
                return false;
            })
        },

        onSubmitRegisterForm: function () {
            $(document).on('submit', '#register-form', function (e) {
                var form = $('#register-form');
                e.preventDefault();
                if (!RNW.Module.Validate.requiredInputs(form)) {
                    return false;
                }
                var url = '/register';
                var data = form.serializeArray()
                RNW.Module.Ajax.initSubmit(url, 'POST', data, $('#register-rnw'), success, fail);

                function success(res) {
                    if (!res.success) {
                        return;
                    }
                    RNW.Module.Main.showModal($('#accountVerify'))
                }
                function fail(res) {
                    var errorFields = res.responseJSON.errors;
                    console.log(errorFields);
                    if (!errorFields) {
                        return;
                    }
                    var fieldsName = Object.keys(errorFields);
                    if (fieldsName.indexOf('password') != -1) {
                        fieldsName.push('password_confirmation')
                    }
                    console.log(fieldsName)
                    fieldsName.forEach(function (field, key) {
                        console.log(field);
                        $(form).find('*[name='+ field + ']').addClass(RNW.Module.Validate.classInvalid);
                        console.log($(form).find('*[name='+ field + ']'))
                    })
                }
                return false;
            })
        },
        sendRequestRegister: function () {

        },

        activeTabLoginForm: function () {
            RNW.Module.Main.resetForm();
            $('.link-account-form').on('click', function () {
                $('#loginFormModal .content-view').hide();
                $('#loginFormModal #login-register').show();
                if ($(this).is('.link-login')) {
                    $('#login-tab').tab('show');
                } else {
                    $('#register-tab').tab('show');
                }
                RNW.Module.Main.showModal($('#loginFormModal'))
            })
        },
        loadFormRegisterSuccess: function (data) {
            $('#form-type-user').html(data);
        },

        getComponentRegisterForm: function (typeUser) {
            var url = '/get-component/get-register-form/' + typeUser;
            RNW.Module.Ajax.initSubmit(url, 'GET', [], '', this.loadFormRegisterSuccess);
        },

        toggleVisiblityPassword: function () {
           // $('.toggle-show-pass').on('click', function () {
                $(document).delegate(".toggle-show-pass", "click", function(e){
                var inputPW = $(this).parent('.input-placeholder').find('.password')
                if ($(this).hasClass('is-show-pass')){
                    $(this).text('visibility');
                    inputPW.attr('type', 'password');
                    $(this).removeClass('is-show-pass');
                } else {
                    $(this).text('visibility_off');
                    $(this).addClass('is-show-pass');
                    inputPW.attr('type', 'text');
                }
            });
        },

        showForgotPassword: function () {
            var linkForgot = $('#forgot-password-link');
            $(linkForgot).on('click', function (event) {
                event.preventDefault();
                $('#loginFormModal #forgot-password-form').show();
                $('#loginFormModal #login-register').hide();
                RNW.Module.Main.resetForm();
            })
        },

        backToLogin: function () {
            RNW.Module.Main.resetForm();
            var linkBack = $('#back-to-login');
            $(linkBack).on('click', function (event) {
                event.preventDefault();
                $('#loginFormModal #forgot-password-form').hide();
                $('#loginFormModal #login-register').show();

            })
        },

        selectAccountAgency: function () {
            var selectInput = $('#loginFormModal .account-type');
            $(selectInput).on('change', function (event) {
                var value = selectInput.val();
                $('#input-user-type').val(value);
                if (value != '3') {
                    this.getComponentRegisterForm(1);
                    /*$('.tenant-landlord-type').show();
                    $('.agency-type').hide();
                    $('.step-register').hide();*/
                    return;
                }
                this.getComponentRegisterForm(3);
            }.bind(this))
        },

        selectInputChange: function () {
            var select = $('.select-inline select');
            select.on('change', function () {
                var value = $(this).val();
                var placeholder = $(this).parent('.input-placeholder').find('.placeholder');
                if (value) {
                    placeholder.hide();
                } else {
                    placeholder.show();
                }
            })
        },

        uploadLogo: function () {
            $('.upload-logo').on('click', function () {
                $('input[name=logo]').click();
            });
        },

        actionRegisterAgencyAccount: function () {
            var btn = $('.btn-step');
            btn.on('click', function () {
                var step = $(this).data('step');
                console.log(step);
                if (step == 1) {
                    $('.input-account-type').show();
                } else {
                    $('.input-account-type').hide();
                }
                $('.step-register .step').removeClass('done');
                for (var i = 1; i <= parseInt(step); i++) {
                    $('.step-register .step-' + i).addClass('done');
                }
                $('.register-step-form').hide();
                $('#step-' + step).show();
            })
        },

        clickSelectFileAgencyAccount: function () {
            var link = $('.link-select-file');
            link.on('click', function (event) {
                event.preventDefault();
                var inputFile = $(this).parent('.input-upload-agency').children('.input-upload-file');
                inputFile.click();
            })
        }
    }
})();

$(document).ready(function() {
    RNW.Account.Auth.initialize();
})