<?php
namespace PentagonalProject\Alamari;

use Slim\App as Slim;
use Slim\Http\Environment;
use Slim\Http\Request;
use Slim\Http\Uri;

/**
 * Class Application
 * @package PentagonalProject\Alamari
 */
class Application
{
    /**
     * Slim Application instance
     *
     * @var Slim
     */
    protected $slim;

    /**
     * Application constructor.
     */
    public function __construct()
    {
        // init the slim
        $this->slim = $this->buildSlim();
    }

    /**
     * Get Slim Application
     *
     * @return Slim
     */
    public function getSlim()
    {
        return $this->slim;
    }

    /**
     * Build Slim instance
     *
     * @return Slim
     */
    protected function buildSlim()
    {
        return new Slim(
            [
                /**
                 * Environments Override fix cloudflare
                 */
                'environment' => Environment::mock($this->portServerManipulation()),
                'settings' => [
                    'displayErrorDetails' => true,
                ],
                'view' => function ($container) {
                    $template = new Template(dirname(__DIR__) . '/Views/', $container);
                    /**
                     * @var Request $request
                     * @var Uri $uri
                     */
                    $request = $container['request'];
                    $uri = $request->getUri();
                    $template->setAttributes(
                        [
                            'base:url' => rtrim($uri->getBaseUrl(), '/')
                        ]
                    );
                    $file = dirname(__DIR__) .'/Config/Property.php';
                    if (file_exists($file)) {
                        ob_start();
                        /**
                         * Require Property File
                         * @var array $file
                         */
                        /** @noinspection PhpIncludeInspection */
                        $prop = file_exists($file) ? require_once $file : [];
                        ob_clean();
                        if (is_array($prop)) {
                            $template->setAttributes($prop);
                        }
                    }

                    return $template;
                },
            ]
        );
    }

    /**
     * Detecting & Fix Environment on some cases
     *     Default Environment uses $_SERVER to attach
     *     just to fix https
     *
     * @return array
     */
    protected function portServerManipulation()
    {
        static $server;
        if (isset($server)) {
            return $server;
        }

        $server = $_SERVER;
        if (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off'
            // hide behind proxy / maybe cloud flare cdn
            || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https'
            || !empty($_SERVER['HTTP_FRONT_END_HTTPS']) && strtolower($_SERVER['HTTP_FRONT_END_HTTPS']) !== 'off'
        ) {
            // detect if non standard protocol
            if ($_SERVER['SERVER_PORT'] == 80
                && (isset($_SERVER['HTTP_X_FORWARDED_PROTO'])
                    || isset($_SERVER['HTTP_FRONT_END_HTTPS'])
                )
            ) {
                $_SERVER['SERVER_PORT_MANIPULATED'] = 443;
                $server['SERVER_PORT'] = 443;
                $server['SERVER_PORT_MANIPULATED'] = 80;
            }
            // fixing HTTPS Environment
            $_SERVER['HTTPS_MANIPULATED'] = 'on';
            $server['HTTPS'] = 'on';
            $server['HTTPS_MANIPULATED'] = 'on';
        }

        return $server;
    }

    /**
     * Require Routes Config
     */
    protected function appendRoutes()
    {
        $routeFile =  dirname(__DIR__) .'/Config/Routes.php';
        if (file_exists($routeFile)) {
            /** @noinspection PhpIncludeInspection */
            require $routeFile;
        }
    }

    /**
     * Require Routes Config
     */
    protected function appendMiddleWare()
    {
        $routeFile =  dirname(__DIR__) .'/Config/Middleware.php';
        if (file_exists($routeFile)) {
            /** @noinspection PhpIncludeInspection */
            require $routeFile;
        }
    }

    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function run()
    {
        $this->appendMiddleWare();
        $this->appendRoutes();
        return $this->slim->run();
    }
}
