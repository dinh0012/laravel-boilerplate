

$('#btn-search').on('click', function () {
    var form = $('#search');
    form.submit();
    $('.search-room').show();
    $('.page-find-room').hide();
    $('#wrap-top').hide();
})
$('#search').on('submit', function () {
    $('.search-room').show();
    $('.page-find-room').hide();
    $('#wrap-top').hide();
    return false;
});
var RNWMainJs = function () {
    return {
        init: function () {
            this.checkBox();
            this.checkRadio();
            this.sliderFullHeight();
            this.changeBgHeader();
        },

        checkBox: function () {
            var checkbox = $('.checkbox-input');
            checkbox.on('change', function () {
                var icon = $(this).parent('.form-check-label').find('i')
                if ($(this).is(':checked')) {
                    icon.removeClass('icon-checkbox-blank').addClass('icon-checkbox').text('check_box');
                } else {
                    icon.addClass('icon-checkbox-blank').removeClass('icon-checkbox').text('check_box_outline_blank');
                }
            })
        },

        checkRadio: function () {
            var radio = $('.input-radio');
            radio.on('change', function () {
                var icon = $(this).parent('.form-check-label').find('i')
                if ($(this).is(':checked')) {
                    var nameCheck = $(this).attr('name');
                    var inputsRadio = $('input[type=radio][name=' + nameCheck + ']');
                    var icons = inputsRadio.parent('.form-check-label').find('i');
                    icons.removeClass('checked').addClass('unchecked').text('radio_button_unchecked');
                    icon.removeClass('unchecked').addClass('checked').text('radio_button_checked');
                } else {

                }
            })
        },

        sliderFullHeight: function () {
            var sliderContainer = $('.rnw-slider-full');
            var height = $(window).height();
            console.log(height);
            sliderContainer.find('figure').height(height)
        },

        changeBgHeader: function () {
            $(window).scroll(function () {
                $(document).scrollTop() > 2 ?  $("#header").removeClass("hasslide") : $("#header").addClass("hasslide")
            });
        }
    }
}();
$(document).ready(function () {
    RNWMainJs.init();
})

