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