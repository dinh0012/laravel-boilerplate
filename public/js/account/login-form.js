var accountLoinForm = function () {
    return {

        init: function () {
            this.toggleVisiblityPassword();
            this.checkBox();
            this.activeTabLoginForm();
            this.showForgotPassword();
            this.handleForgotPassword();
            this.backToLogin();
            this.selectAccountAgency();
            this.selectInputChange();
            this.uploadLogo();
            this.actionRegisterAgencyAccount();
            this.clickSelectFileAgencyAccount();
        },

        checkBox: function () {
            var checkbox = $('.checkbox-input');
            checkbox.on('change', function () {
                var img = $(this).parent('.checkbox').find('img')
                if ($(this).is(':checked')) {
                    img.attr('src', '/img/frontend/check_on.png')
                } else {
                    img.attr('src', '/img/frontend/check_off.png')
                }
            })

        },
        
        activeTabLoginForm: function () {
            $('.link-account-form').on('click', function () {
                if ($(this).is('.link-login')) {
                    $('#login-tab').tab('show');

                    return;
                }
                $('#register-tab').tab('show');
            })
        },

        toggleVisiblityPassword: function () {
            $('.toggle-show-pass').on('click', function () {
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

            })
        },

        handleForgotPassword: function () {
            var btnForgotPassword = $('#btn-reset-password');
            $(btnForgotPassword).on('click', function (event) {
                event.preventDefault();
                $('.send-success').show();
                $('.forgot-form').hide();

            })
        },

        backToLogin: function () {
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
                if (value != 'agency') {
                    $('.tenant-landlord-type').show();
                    $('.agency-type').hide();
                    $('.step-register').hide();
                    return;
                }
                $('.tenant-landlord-type').hide();
                $('.agency-type').show();
                $('.step-register').show();


            })
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

    };

}();
accountLoinForm.init();