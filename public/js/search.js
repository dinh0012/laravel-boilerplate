var Search = function () {
    return {

        init: function () {
            this.toggleFilter();
            
        },
        toggleFilter: function () {
            var iconToggle = $('.filter-group-header');
            iconToggle.on('click', function () {
               var isHidden =  $(this).hasClass('is-hidden');
               var icon = $(this).find('i');

                if (isHidden) {
                   $(this).removeClass('is-hidden');
                    icon.text('remove')
               } else {
                   $(this).addClass('is-hidden');
                    icon.text('add');
               }
            })
        }
        

    };

}();
Search.init();