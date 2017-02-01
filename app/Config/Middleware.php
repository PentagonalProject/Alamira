<?php
use Psr\Http\Message\ResponseInterface;
use PentagonalProject\Alamari\Template;
use Psr\Http\Message\ServerRequestInterface;
use \PentagonalProject\Alamari\Application;

if (!isset($this) || ! $this instanceof Application) {
    return;
}

/* ---------------------------------------------
                HANDLER
 --------------------------------------------- */
$this->getSlim()->add(function (
        ServerRequestInterface $request,
        ResponseInterface $response,
        \Slim\App $next
    ) {

    /**
     * Not Found Handler
     *
     * @param \Slim\Container $container
     * @return Closure
     */
    $this['notFoundHandler'] = function ($container) {
        return function (
            ServerRequestInterface $request,
            ResponseInterface $response
        ) use ($container) {
            $response = $response
                ->withStatus(404)
                ->withHeader('Content-Type', 'text/html');

            /**
             * @var Template $container ['view']
             */
            return $container['view']
                ->render(
                    '404',
                    $response
                );
        };
    };

    /**
     * Common Exception Errror Handler
     *
     * @param $container
     * @return Closure
     */
    $this['errorHandler'] = function ($container) {
        return function (
            ServerRequestInterface $request,
            ResponseInterface $response,
            $exception
        ) use ($container) {
            $response = $response
                ->withStatus(500)
                ->withHeader('Content-Type', 'text/html');

            /**
             * @var Template $container ['view']
             */
            return $container['view']
                ->render(
                    '500',
                    $response,
                    [
                        'exception' => $exception
                    ]
                );
        };
    };

    /**
     * Not Allowed Handler
     * @param \Slim\Container $container
     * @return Closure
     */
    $this['notAllowedHandler'] = function ($container) {
        return function (
            ServerRequestInterface $request,
            ResponseInterface $response,
            $methods
        ) use ($container) {
            $response = $response
            ->withStatus(405)
            ->withHeader('Content-Type', 'text/html');

            /**
             * @var Template $container ['view']
             */
            return $container['view']
            ->render(
                '405',
                $response,
                [
                    'methods' => $methods
                ]
            );
        };
    };

    return $next($request, $response);
});
