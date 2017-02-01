<?php
use PentagonalProject\Alamari\Template;

/**
 * Validate Includes
 */
if (!isset($this) || ! $this instanceof Template) {
    return;
}

$this->partial('header');
?>
    <div id="top" class="vh">
      <header id="header" class="header-menu"></header>
      <div id="top-content"></div>
    </div>
<?php
$this->partial('footer');
