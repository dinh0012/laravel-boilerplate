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
            if (typeof button !== 'undefined') {
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
                    if (typeof button !== 'undefined') {
                        button.prop('disabled', false);
                    }
                }, 3000)
            });
            
            ajax.fail(function (response) {
                if (typeof callbackFails === 'function') {
                    callbackFails(response);
                    return;
                }
                if (callback(response)) {
                    return;
                }
            })
        }
    }
})();

$(document).on('ready', function () {
    RNW.Module.Ajax.initialize();
})
