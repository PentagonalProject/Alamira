/*!
 * Map JS observer prevent Map Blocking
 */

window.addEventListener('load', function () {

    var script = document.createElement('script');
    script.src = '//maps.googleapis.com/maps/api/js';
    if (typeof mapCallback == 'function') {
        script.src += '?callback=mapCallback';
    }

    document.body.appendChild(script);
    /* hack Google Maps to bypass API v3 key
     * needed since 22 June 2016
     * (http://googlegeodevelopers.blogspot.com.es/2016/06/building-for-scale-updates-to-google.html)
     */
    (new MutationObserver(function (mutations) {
        try {
            for (var i = 0; mutations[i]; ++i) {
                // notify when script to hack is added in HTML head
                if (mutations[i].addedNodes[0].nodeName == "SCRIPT"
                    && mutations[i].addedNodes[0].src.match(/\/AuthenticationService.Authenticate?/g)
                ) {
                    var str = mutations[i].addedNodes[0].src.match(/[?&]callback=.*[&$]/g);
                    if (str) {
                        if (str[0][str[0].length - 1] == '&') {
                            str = str[0].substring(10, str[0].length - 1);
                        } else {
                            str = str[0].substring(10);
                        }
                        var split = str.split(".");
                        var object = split[0];
                        var method = split[1];
                        window[object][method] = null;
                    }
                    this.disconnect();
                }
            }
        } catch (e) {}
    })).observe(
        document.head,
        {
            attributes: true,
            childList: true,
            characterData: true
        }
    );
});
