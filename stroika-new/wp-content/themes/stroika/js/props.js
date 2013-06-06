$(document).ready( function() {
    $('input').placeholder();

    $('#slider').cycle({
        speed:       200,
        timeout:     3000,
        pager:      '#slider-nav',
        pagerEvent: 'mouseover',
        pauseOnPagerHover: 1,
        pagerAnchorBuilder: function(idx, slide) {
            anchor = $(slide).data('text');
            url = $(slide).data('url');
            return '<a href="javascript:void(0);" onclick="window.location=\''+url+'\'"><span>' + anchor + '</span></a>';
        }
    });

});