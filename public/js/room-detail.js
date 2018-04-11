var RoomDetail = function () {
    return {

        init: function () {
            this.readMore();
            this.readLess();
            this.endContract();

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
        },

        endContract: function () {
            var endContractLink = $('.end-contract');
            endContractLink.on('click', function (e) {
                e.preventDefault();
                $(this).parent('.read-more').parent('.body-block').find('.overview').show();
                $(this).parent('.read-more').hide();
            })
        }

        

    };

}();
RoomDetail.init();