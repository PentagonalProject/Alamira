<?php
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use PentagonalProject\Alamari\Template;
use \PentagonalProject\Alamari\Application;

if (!isset($this) || ! $this instanceof Application) {
    return;
}

/**
 * Mapping all available method
 */
$mapAll = [
    'GET',
    'POTS',
    'PUT',
    'PATCH',
    'DELETE',
    'CONNECT',
    'TRACE',
    'HEAD',
    'OPTIONS'
];

/**
 * Route Index
 */
$this->getSlim()->map(
    $mapAll,
    '[/]',
    function (ServerRequestInterface $request, ResponseInterface $response) {
        /**
         * @var Template $view
         */
        $view = $this['view'];
        return $view->render('home');
    }
);

/**
 * Route For get Google Fonts
 */
$this->getSlim()->map(
    $mapAll,
    '/google-fonts/{params: (?i)[a-z0-9\-\:\,]+}.css',
    function (ServerRequestInterface $request, ResponseInterface $response, $params) {
        $params = $params['params'];
        $params = explode('-', $params);
        // getting scheme
        $GoogleUri = $request->getUri()->getScheme()
            . '://fonts.googleapis.com/css?family=';//Lato:300,400,700|Lobster;
        $GoogleUri .= implode('|', $params);
        /**
         * Options Context to get CSS followed by user agent
         */
        $ua = $request->getHeader('user-agent');
        $ua = !empty($ua[0])
            ? $ua[0]
            // default using firefox that has uch of content
            : 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:51.0) Gecko/20100101 Firefox/51.0';
        $opts = [
            'http' => [
                'method'=> "GET",
                'header'=> "User-Agent: {$ua}\r\n"
            ]
        ];
        // create context
        $context = stream_context_create($opts);
        // get google content
        $content = @file_get_contents($GoogleUri, false, $context) ?: '';
        // Remove Comments
        $content = preg_replace('/(^\s*|\s*$|\/\*(?:(?!\*\/)[\s\S])*\*\/|[\r\n\t]+)/', '', $content);
        /**
         * Regex Minify CSS
         */
        $regex = '(?six)
                  \s*+;\s*(})\s*
                | \s*([*$~^|]?=|[{};,>~+-]|\s+!important\b)\s*
                | ([[(:])\s+
                | \s+([\]\)])
                | \s+(:)\s+
                (?!
                    (?>
                        [^{}"\']++
                        | \"(?:[^"\\\\]++|\\\\.)*\"
                        | \'(?:[^\'\\\\]++|\\\\.)*\' 
                    )*
                    {
                )
                | ^\s+|\s+ \z
                | (\s)\s+
                | (\#((?:[a-f]|[A-F]|[0-9]){3}))(?:\\2)?\b # replace same value hex digit to 3 character eg 
                ';
        // clean CSS
        $content = preg_replace("%{$regex}%", '$1$2$3$4$5$6$7', $content);
        // strip http
        $content = preg_replace('%https?:\/\/%', '//', $content);
        /**
         * Get Body Response
         */
        $body = $response
            ->getBody();
        $body->write($content);
        $response = $response
            ->withHeader('Content-Type', 'text/css;charset=utf-8')
            ->withHeader('Cache-Control', 'max-age=2678400, public')
            ->withBody($body);
        return $response;
    }
);
