//adding landscape icon for format-standard post
var landscapeIcon = ' <svg class="post-category__icon landscape"> ' +
    ' <use xlink:href="#landscape-icon"></use>' +
    ' </svg> ';

jQuery('.format-standard .post-content, .post-wrapper.about .post-content').prepend(landscapeIcon);

//adding pencil icon for format-status post
var pencilIcon = ' <svg class="post-category__icon pencil"> ' +
    ' <use xlink:href="#pencil-icon"></use>' +
    ' </svg> ';

jQuery('.format-status .post-content').prepend(pencilIcon);

//adding quote icon for format-link and format-quote posts
var quoteIcon = ' <svg class="post-category__icon quote"> ' +
    ' <use xlink:href="#quote-icon"></use>' +
    ' </svg> ';

jQuery('.format-link, .format-quote').prepend(quoteIcon);

//adding photo icon for format-image post
var photoIcon = ' <svg class="post-category__icon photo"> ' +
    ' <use xlink:href="#photo-icon"></use>' +
    ' </svg> ';

jQuery('.format-image').prepend(photoIcon);

//adding gallery icon for format-gallery post
var galleryIcon = ' <svg class="post-category__icon gallery"> ' +
    ' <use xlink:href="#gallery-icon"></use>' +
    ' </svg> ';

jQuery('.format-gallery').prepend(galleryIcon);

//adding tag icon for post tags
var tagIcon = ' <svg class="post-tags__icon"> ' +
    ' <use xlink:href="#tag-icon"></use>' +
    ' </svg> ';

jQuery('.post-tags a:first-child').prepend(tagIcon);