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
                $(this).slick(config);
            })
        }
        /**
         * Handle Image Resize
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
        /**
         * Smooth Scroll
         */
        $('a[href^=\\#]').click(function (e) {
            e.preventDefault();
            try {
                var topOffset = 0;
                var attrHref = $(this).attr('href');
                if (attrHref != '#') {
                    var $targetId = $(attrHref);
                    if ($targetId.length) {
                        topOffset = $targetId.offset().top + ($targetId.offset().top > 80 ? 0 : 0);
                    } else {
                        topOffset = null;
                    }
                }
                if (topOffset !== null) {
                    $('html, body').animate({
                        scrollTop: topOffset
                    }, function () {
                        var hash = attrHref.replace(/^\#/, '');
                        window.location.hash = attrHref;
                    });
                }
            } catch(err) {}
        });

        /**
         * Scrolled TOP Section
         */
        var $body = $('body');
        var $selectorOpacity = $('#top-content .top-contain');
        var selectorOffset = $selectorOpacity.offset().top;
        $(window).on('scroll', function () {
            var fadeStart = 10; // 100px scroll or less will equiv to 1 opacity
            var $top =  $('#top-content');
            var $height = $top.height();
            if (!$height) {
                return;
            }
            if ($selectorOpacity.length) {
                var fromTop = $(this).scrollTop();
                var calc = 1;
                if (fromTop <= fadeStart) {
                    calc = 1;
                } else {
                    calc = 1 - (fromTop / ($height+selectorOffset));
                }
                calc = calc < 0 ? 0 : calc;
                if (fromTop > 5) {
                    if (!$body.hasClass('scrolled')) {
                        $body.addClass('scrolled');
                    }
                    $selectorOpacity.css({
                        'position': 'relative',
                        'top': (fromTop) + 'px',
                        opacity: calc
                    });
                } else {
                    $('body').removeClass('scrolled');
                    $selectorOpacity.removeAttr('style');
                }
            }
            //
            // $height -= 30;
            // try {
            //     var $offset = this.scrollY;
            //     if ($height < $offset) {
            //         if (!$navigation.hasClass('position-not-top')) {
            //             $navigation.addClass('position-not-top');
            //         }
            //     } else {
            //         if ($navigation.hasClass('position-not-top')) {
            //             $navigation.removeClass('position-not-top');
            //         }
            //     }
            // } catch(e){}
        });
    });

})(jQuery || null);