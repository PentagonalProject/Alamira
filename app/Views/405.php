<?php
use PentagonalProject\Alamari\Template;

/**
 * Validate Includes
 */
if (!isset($this) || ! $this instanceof Template) {
    return;
}

$this->partial(
    'header',
    [
        'title' => '405 Method Not Allowed'
    ]
);

$this->partial('footer');
