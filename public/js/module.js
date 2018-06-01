var RNW = {};
(function () {
    if (!RNW.Module) {
        RNW.Module = {};
    }

    RNW.Module.Ajax = {
        initialize: function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        },
        initSubmit: function (url, type, data, button, callbackSuccess, callbackFails) {
            if (button && typeof button !== 'undefined') {
                button.prop('disabled', true);
            }

            var ajax = $.ajax({
                url: url,
                type: typeof type !=='undefined' ? type : 'GET',
                data: typeof data !== 'undefined' ? data : {},
                error: function (response) {
                    if (typeof callbackFails === 'function') {
                        callbackFails(response);
                        return;
                    }
                    if (callback(response)) {
                        return;
                    }
                    location.reload();
                },
                cache: false
            });
            
            ajax.done(function (response) {
                if (typeof callbackSuccess === 'function') {
                    callbackSuccess(response);
                }
                setTimeout(function () {
                    if (button && typeof button !== 'undefined') {
                        button.prop('disabled', false);
                    }
                }, 300)
            });
            
            ajax.fail(function (response) {
                setTimeout(function () {
                    if (button && typeof button !== 'undefined') {
                        button.prop('disabled', false);
                    }
                }, 300)
                if (typeof callbackFails === 'function') {
                    callbackFails(response);
                    return;
                }
            })
        }
    }

    RNW.Module.Validate = {
        classInvalid: 'rnw-invalid',

        requiredInputs: function($form) {
            var inputs = $form.find('input[rnw-required], textarea[rnw-required], select[rnw-required]');
            var validate = true;
            inputs.each(function (key, $el) {
                var value = $($el).val();
                if (!value || value == '') {
                    $($el).addClass(this.classInvalid);
                    validate = false;
                } else {
                    $($el).removeClass(this.classInvalid);
                }
            }.bind(this))

            return validate;
        },

        onShowHidePlaceholderInputs: function () {
            var inputs = $('input[rnw-required], textarea[rnw-required]');
            $(document).delegate(inputs,"keyup",function(e){
                var value = $(this).val();
                if (value || value != '') {
                    $(this).addClass('has-value');
                } else {
                    $(this).removeClass('has-value');
                }
            })
        }
    }
})();

$(document).ready(function() {
    RNW.Module.Ajax.initialize();
    RNW.Module.Validate.onShowHidePlaceholderInputs();

})
