//src - http://serversideguy.com/2017/04/10/can-i-add-custom-styles-to-my-embedded-twitter-timeline/
var footerTweets = jQuery('.js-footer-tweets');

jQuery(footerTweets).delegate('#twitter-widget-0','DOMSubtreeModified propertychange', function() {
    //function call to override the base twitter styles
    customizeTweetMedia();
});

var customizeTweetMedia = function(){
    jQuery(footerTweets).find('.twitter-timeline').contents().find('.timeline-Tweet-media').css('display', 'none');
    jQuery(footerTweets).find('.twitter-timeline').contents().find('img.Avatar').css('display', 'none');
    jQuery(footerTweets).find('.twitter-timeline').contents().find('span.TweetAuthor-name').css('display', 'none');
    jQuery(footerTweets).find('.twitter-timeline').contents().find('div.TweetAction-icon').css('display', 'none');
    jQuery(footerTweets).find('.twitter-timeline').contents().find('a.timeline-Tweet-timestamp').css('display', 'none');
    jQuery(footerTweets).find('.twitter-timeline').contents().find('div.Icon--verified').css('display', 'none');
    jQuery(footerTweets).find('.twitter-timeline').contents().find('a.TweetAuthor-avatar').css('display', 'none');
    jQuery(footerTweets).find('.twitter-timeline').contents().find('div.timeline-Tweet, div.timeline-Tweet-author').css('padding', '0');
    jQuery(footerTweets).find('.twitter-timeline').contents().find('p.timeline-Tweet-text, a.PrettyLink, span.Tweet-complexLink, a.customisable, span.TweetAuthor-screenName').css({
        'padding': '0',
        'margin': '0',
        'color': '#fff',
        'font-size': '15px',
        'font-weight': '300',
        'font-family': '$font-primary',
        'line-height': '185%',
        'letter-spacing': '1px'
    });

    jQuery(footerTweets).find('.twitter-timeline').contents().find('span.Tweet-complexLink, a.customisable').css('text-decoration', 'underline');
    jQuery(footerTweets).find('.twitter-timeline').contents().find('span.TweetAuthor-screenName').css({
        'display': 'block',
        'font-size': '12px'
    });

    jQuery(footerTweets).find('.twitter-timeline').contents().find('div.timeline-Tweet').css({
        'position': 'relative',
        'padding-left': '25px'
    });

    jQuery(footerTweets).find('.twitter-timeline').contents().find('div.Icon--twitter').css({
        'width': '15px',
        'height': '15px',
        'position': 'absolute',
        'top': '3px',
        'left': '0'
    });

    //also call the function on dynamic updates in addition to page load
    jQuery(footerTweets).find('.twitter-timeline').contents().find('.timeline-TweetList').bind('DOMSubtreeModified propertychange', function(){
        customizeTweetMedia(this);
    });
};