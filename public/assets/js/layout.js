/*!
 * Layout
 */
+(function ($) {
    if (typeof $ != 'function') {
        return null;
    }

    /**
     * jQuery Document Ready
     */
    $(document).ready(function () {
        $('html').attr('class', 'js loaded');
        // handle tooltip
        if (typeof $.fn.tooltip == 'function') {
            $('[data-toggle=tooltip]').tooltip();
        }
        if (typeof  $.fn.slick == 'function') {
            $('.slick').each(function () {
                var config = {};
                var tmp_config = $(this).attr('data-slick');
                var tmp_config_auto = $(this).attr('data-config');
                if (tmp_config) {
                    try {
                        tmp_config = JSON.parse(tmp_config);
                    } catch (err){}
                    if (typeof tmp_config == 'object') {
                        config = tmp_config;
                    }
                } else if (tmp_config_auto) {
                    var countSlide = function ($total, num) {
                        var retVal = 0;
                        if ($total.length) {
                            var mustTotal = 0;
                            var mustWidth = 0;
                            $total.each(function () {
                                retVal = mustTotal;
                                if (num <= mustWidth) {
                                    return;
                                }
                                mustWidth += $(this).outerWidth();
                                mustTotal++;
                            });
                        }
                        return retVal;
                    };

                    config.autoplay = true;
                    config.dots = false;
                    config.infinite = true;
                    var $total   = $(this).find('> *');
                    var curWidth = $(this).innerWidth();
                    config.slidesToShow = countSlide($total, curWidth);
                    config.responsive = [
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: countSlide($total, 768),
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: countSlide($total, 768)/1.2,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: countSlide($total, 768)/2,
                                slidesToScroll: 1
                            }
                        }
                    ];
                }
                console.log(config);
                $(this).slick(config);
            })
        }
        /**
         * Handle Image Scroll
         */
        $(window).on('resize', function () {
            var $data_height = $('[data-height-parent]');
            if ($data_height.length) {
                $data_height.each(function () {
                    var $parentNode  = $(this).parent().siblings($data_height.attr('data-height'));
                    var heightNode  = $parentNode.length ? $parentNode.outerHeight(): 0;
                    if (heightNode) {
                        $(this).css({'min-height': heightNode});
                    }
                });
            }
        }).resize();
    });

})(jQuery || null);