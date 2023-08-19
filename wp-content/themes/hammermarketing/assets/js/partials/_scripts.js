jQuery(function($){
    function ajaxFilter() {
        var url = window.location.href,
            urlParts = url.split('?');

        $('.archive-filter').on('click','button',function(e){
            e.preventDefault();
            var theData = '',
                results = $('.results-wrap .ajax-results'),
                loadMore = $('#feed_load_more'),
                postType = $(this).data('type');
            
            if($(this).hasClass('active')) {
                $(this).removeClass('active');
                theData = 'all';

                if (urlParts.length > 0) {
                    var baseUrl = urlParts[0];
                    window.history.replaceState({}, null, baseUrl);
                }
            } else {
                theData = $(this).data('cat');
                $(this).addClass('active').siblings().removeClass('active');

                if (urlParts.length > 0) {
                    var baseUrl = urlParts[0];
                    window.history.replaceState({}, null, baseUrl + '?cat='+theData);
                }
            }

            hammerscripts.ajaxSimple('ham_filter_ajax',theData,postType,results,loadMore);
        });
    }

    ajaxFilter();

    // ADD CUSTOM JS HERE
    // - - - - - - - - - 
    
});