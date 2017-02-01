<?php
/**
 * Index Site as main for Rewrite
 * by default use index.html to detect if mod_rewrite access has not worked
 */
namespace {
    use PentagonalProject\Alamari\Application;
    require_once dirname(__DIR__) .'/vendor/autoload.php';
    $app = new Application();
    $app->run();
}
