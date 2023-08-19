var hammerscripts = {};
jQuery(function($){
    /* - - - - - - - - - - - - - - - - - - - - - - - - - -
    /* AJAX FILTER
    functionName = the php function name that gets passed into the data:action
    
    queryVar = post type that's being passed into the data:query
  
    postType = the post type

    results = results wrap div / i.e. - results = $('.results-wrap .ajax-results')

    loadMore = the load more button ID. Set to false if not using the loadMore
    */
    hammerscripts.ajaxSimple = function(functionName,queryVar,postType='post',results,loadMore) {
        var loaderWrap = $('.results-wrap .loader-wrap');
      
        $.ajax({
            type:'post',
            url:bloginfo.ajax_url,
            dataType: 'json',
            data: {
                action:functionName,
                query:queryVar,
                post_type:postType
            },
            beforeSend: function(xhr){
                loaderWrap.addClass('loading');
            },
            success:function(data){
                if(data) {         
                    var html = data.content;

                    bloginfo.current_page = 1;
                    bloginfo.posts = data.posts;
                    bloginfo.max_page = data.max_page;

                    if(html != ''){
                        setTimeout(function () {
                            results.html(html);
                            loaderWrap.removeClass('loading');
                        }, 1200);
                    }

                    //if the load more button exists
                    if(loadMore.length > 0) {
                        if ( data.max_page < 2 ) {
                            loadMore.hide();
                        } else {
                            loadMore.show();
                        }
                    }
                }
            },
        });
    } // ajaxSimple
});