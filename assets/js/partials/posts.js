//adding another wrapper for post iframes to make them responsive
var formatStandardIframe = ('.format-standard iframe'),
    formatStatusIframe = ('.format-status iframe');

jQuery(formatStandardIframe).parent('.format-standard p').addClass('post-iframe');
jQuery(formatStatusIframe).parent('.format-status p').addClass('post-iframe');

//expanding comments and comment form when clicking on comments number @single-post page
var commentNumber = jQuery('.js-post-comments__number'),
    commentWrapper = jQuery('.js-post-comments__wrapper'),
    commentReply = jQuery('.js-post-comments__reply-wrapper');

jQuery(commentNumber).on('click', function(i){
    i.preventDefault();
    jQuery(commentWrapper).slideToggle();
    jQuery(commentReply).slideToggle();
});

//init slider for Recommended posts
var recommendedPostSlider = jQuery('.js-post-recommended').flickity({
    cellSelector: '.post-recommended__item',
    cellAlign: 'left',
    initialIndex: 0,
    pageDots: false,
    wrapAround: true,
    arrowShape: 'm 98.626868,48.020949 v 7.012998 c 0,0.657468 -0.791318,1.168833 -1.808734,1.168833 H 26.277503 v 8.181831 c 0,0.474838 -0.39566,0.876624 -1.073936,1.059255 -0.678276,0.182629 -1.413075,0.109577 -1.978304,-0.182631 L 1.5204533,52.477125 C 1.1813157,52.257968 0.95522386,51.965761 0.95522386,51.637026 v 0 c 0,-0.328734 0.22609184,-0.657468 0.56522944,-0.876625 L 23.225263,37.830187 c 0.565229,-0.328734 1.300028,-0.401786 1.978304,-0.219157 0.621753,0.182631 1.073936,0.584417 1.073936,1.059255 v 8.181831 h 70.540631 c 1.017416,0 1.808734,0.511365 1.808734,1.168833 z'
});

//init slider for format-gallery post
var formatGalleryPost = jQuery('.format-gallery p').flickity({
    cellSelector: 'p img',
    cellAlign: 'left',
    initialIndex: 0,
    pageDots: false,
    wrapAround: true,
    arrowShape: 'm 98.626868,48.020949 v 7.012998 c 0,0.657468 -0.791318,1.168833 -1.808734,1.168833 H 26.277503 v 8.181831 c 0,0.474838 -0.39566,0.876624 -1.073936,1.059255 -0.678276,0.182629 -1.413075,0.109577 -1.978304,-0.182631 L 1.5204533,52.477125 C 1.1813157,52.257968 0.95522386,51.965761 0.95522386,51.637026 v 0 c 0,-0.328734 0.22609184,-0.657468 0.56522944,-0.876625 L 23.225263,37.830187 c 0.565229,-0.328734 1.300028,-0.401786 1.978304,-0.219157 0.621753,0.182631 1.073936,0.584417 1.073936,1.059255 v 8.181831 h 70.540631 c 1.017416,0 1.808734,0.511365 1.808734,1.168833 z'
});

