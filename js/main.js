jQuery(function ($) {
    var $Timeline = $('.Timeline').imagesLoaded(function () {
        $Timeline.masonry({
            columnWidth: '.grid-sizer',
            itemSelector: '.post',
            percentPosition: true
        });
    });
});