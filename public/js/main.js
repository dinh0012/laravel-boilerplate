

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
        sliderFullHeight: function () {
            var sliderContainer = $('.rnw-slider-full');
            var height = $(document).height();
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

