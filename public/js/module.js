var RNW = {};
(function () {
    if (!RNW.Module) {
        RNW.Module = {};
    }

    RNW.Module.Ajax = {

        spinner: '<div class="js-popup-loader">' +
                    '<div class="fxc popup-backdrop">' +
                    '   <i class="material-icons">donut_large</i>' +
                    '</div>' +
                '</div>',

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
                beforeSend: function () {
                    $('body').append(this.spinner)
                }.bind(this),
                cache: false
            });
            
            ajax.done(function (response) {
               $('.js-popup-loader').remove();
                console.log($(this.spinner), this.spinner);
                if (typeof callbackSuccess === 'function') {
                    callbackSuccess(response);
                }
                setTimeout(function () {
                    if (button && typeof button !== 'undefined') {
                        button.prop('disabled', false);
                    }
                }, 300)
            }.bind(this));
            
            ajax.fail(function (response) {
                $('.js-popup-loader').remove();
                setTimeout(function () {
                    if (button && typeof button !== 'undefined') {
                        button.prop('disabled', false);
                    }
                }, 300)
                if (typeof callbackFails === 'function') {
                    callbackFails(response);
                    return;
                }
            }.bind(this))
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
            $('body').on("keyup", ' input[rnw-required], textarea[rnw-required]',function(e){
                var value = $(this).val();
                if (value || value != '') {
                    $(this).addClass('has-value');
                } else {
                    $(this).removeClass('has-value');
                }
            })
        }
    }

    RNW.Module.Main = {

        classInvalid: 'rnw-invalid',

        showModal: function($modal) {
            $('.modal-rnw').modal('hide');
            $modal.modal();
        },

        onShowHidePlaceholderInputs: function () {
            $('body').on("keyup", ' input[rnw-required], textarea[rnw-required]',function(e){
                var value = $(this).val();
                if (value || value != '') {
                    $(this).addClass('has-value');
                } else {
                    $(this).removeClass('has-value');
                }
            })
        },

        resetForm: function () {
            $('input, textarea, select').val('').removeClass('rnw-invalid');
        },
    }
})();

$(document).ready(function() {
    RNW.Module.Ajax.initialize();
    RNW.Module.Validate.onShowHidePlaceholderInputs();

})
