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
    });

})(jQuery || null);