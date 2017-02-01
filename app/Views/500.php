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
        'title' => '500 Internal Error'
    ]
);

$this->partial('footer');
