var CustomSelect = function () {
    return {
        /**
         * show list options of select
         * @param select
         */
        initShowListOptions: function (select) {
            if (!select.length) {
                return;
            }

            var firstOption = select.find('.select-field'), listOptions = select.find('ul.list-options');
            firstOption.click(function (e) {
                e.stopPropagation();

                listOptions.show();
            });
        },

        /**
         * hide list options
         */
        initHideListOptions: function () {
            $(document).on('click', function () {
                $('ul.list-options').hide();
            });
        },

        /**
         * change select option
         * @param select
         * @param callback
         */
        initChangeOption: function (select, callback) {
            var options = select.find('a.option');
            if (!select.length || !options.length) {
                return;
            }

            var selectValue = select.prev('input[type="hidden"]');
            options.each(function () {
                var option = $(this);
                option.click(function () {
                    var el = $(this), value = el.attr('data-select');
                    if (!value || value === selectValue.val()) {
                        return;
                    }

                    var firstOption = select.find('.select-field');
                    firstOption.text(el.text());
                    selectValue.val(value);

                    if (typeof callback !== 'undefined') {
                        callback(value);
                    }
                });
            });
        }
    }
}();