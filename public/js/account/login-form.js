var accountLoinForm = function () {
    return {

        init: function () {
            this.toggleVisiblityPassword();
            this.checkRememberMe();
            this.activeTabLoginForm();
        },

        checkRememberMe: function () {
            var checkbox = $('.checkbox-input');
            checkbox.on('change', function () {
                var img = $(this).parent('.checkbox').find('img')
                if (checkbox.is(':checked')) {
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
        
        forgotPassword: function () {
            var linkForgot = $('#forgot-password');
            $(linkForgot).on('click', function () {
                
            })
        }
    };

}();
accountLoinForm.init();