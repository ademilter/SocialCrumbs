var isMasonry = false;

jQuery(function () {

    if (!Modernizr.mq('only all and (max-width: 768px)')) {
        $Timeline = jQuery('.Timeline').imagesLoaded()
            .always(function (instance) {
                $Timeline.masonry({
                    columnWidth: '.grid-sizer',
                    itemSelector: '.post',
                    percentPosition: true
                });
                isMasonry = true;
            }).progress(function (instance, image) {
                // progress bar eklenecek
            });
    }

});