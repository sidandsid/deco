//adding icons to the corresponding links in Header/Post/Sidebar social-media nav menu
//facebook
var facebookIcon = ' <svg class="facebook"> ' +
    ' <use xlink:href="#facebook-icon"></use>' +
    ' </svg> ';

jQuery('.header-nav__sm a[href*="facebook.com"], .post-sm a[href*="facebook.com"], .sidebar-sm a[href*="facebook.com"]').append(facebookIcon);

//twitter
var twitterIcon = ' <svg class="twitter"> ' +
    ' <use xlink:href="#twitter-icon"></use>' +
    ' </svg> ';

jQuery('.header-nav__sm a[href*="twitter.com"], .post-sm a[href*="twitter.com"], .sidebar-sm a[href*="twitter.com"]').append(twitterIcon);

//tumblr
var tumblrIcon = ' <svg class="tumblr"> ' +
    ' <use xlink:href="#tumblr-icon"></use>' +
    ' </svg> ';

jQuery('.header-nav__sm a[href*="tumblr.com"], .post-sm a[href*="tumblr.com"], .sidebar-sm a[href*="tumblr.com"]').append(tumblrIcon);

//dribbble
var dribbbleIcon= ' <svg class="dribbble"> ' +
    ' <use xlink:href="#dribbble-icon"></use>' +
    ' </svg> ';

jQuery('.header-nav__sm a[href*="dribbble.com"], .post-sm a[href*="dribbble.com"], .sidebar-sm a[href*="dribbble.com"]').append(dribbbleIcon);

//linkedin
var linkedinIcon = ' <svg class="linkedin"> ' +
    ' <use xlink:href="#linkedin-icon"></use>' +
    ' </svg> ';

jQuery('.header-nav__sm a[href*="linkedin.com"], .post-sm a[href*="linkedin.com"], .sidebar-sm a[href*="linkedin.com"]').append(linkedinIcon);

//pinterest
var pinterestIcon = ' <svg class="pinterest"> ' +
    ' <use xlink:href="#pinterest-icon"></use>' +
    ' </svg> ';

jQuery('.header-nav__sm a[href*="pinterest.com"], .post-sm a[href*="pinterest.com"], .sidebar-sm a[href*="pinterest.com"]').append(pinterestIcon);

//rss
var rssIcon = ' <svg class="rss"> ' +
    ' <use xlink:href="#rss-icon"></use>' +
    ' </svg> ';

jQuery('.header-nav__sm a[href*="rss.com"], .post-sm a[href*="rss.com"], .sidebar-sm a[href*="rss.com"]').append(rssIcon);