var RoomDetail = function () {
    return {

        init: function () {
            this.readMore();
            this.readLess();

        },
        readMore: function () {
            var linkReadMore = $('.more-link');
            linkReadMore.on('click', function (e) {
                e.preventDefault();
                $(this).parent('.overview').parent('.body-block').find('.read-more').show();
                $(this).parent('.overview').hide();
            })
        },
        readLess: function () {
            var linkReadMore = $('.less-link');
            linkReadMore.on('click', function (e) {
                e.preventDefault();
                $(this).parent('.read-more').parent('.body-block').find('.overview').show();
                $(this).parent('.read-more').hide();
            })
        }

        

    };

}();
RoomDetail.init();