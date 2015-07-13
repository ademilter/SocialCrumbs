/*
 --------------------------------
 Infinite Scroll Behavior
 Manual / Twitter-style
 --------------------------------
 + https://github.com/paulirish/infinitescroll/
 + version 2.0b2.110617
 + Copyright 2011 Paul Irish & Luke Shumard
 + Licensed under the MIT license

 + Documentation: http://infinite-scroll.com/

 */

(function ($, undefined) {
    $.extend($.infinitescroll.prototype, {

        _setup_twitter: function infscr_setup_twitter() {
            var opts = this.options,
                instance = this;

            $(opts.nextSelector).click(function (e) {
                if (e.which == 1 && !e.metaKey && !e.shiftKey) {
                    e.preventDefault();
                    instance.retrieve();
                }
            });

            instance.options.loading.start = function (opts) {
                //console.log(opts);
                $(opts.navSelector).addClass("isLoading");
                instance.beginAjax(opts);
            };

            instance.options.loading.finished = function (opts) {
                //$(opts.navSelector).removeClass("isLoading");
            };

        },
        _showdonemsg_twitter: function infscr_showdonemsg_twitter() {
            var opts = this.options,
                instance = this;

            //And also hide the navSelector
            //$(opts.navSelector).fadeOut('normal');

            // user provided callback when done
            opts.errorCallback.call($(opts.contentSelector)[0], 'done');

        }

    });
})(jQuery);
