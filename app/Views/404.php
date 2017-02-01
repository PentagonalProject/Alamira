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
        'title' => '404 Page Not Found'
    ]
);
?>
    <div id="first" class="vh">

    </div>
<?php
$this->partial('footer');
