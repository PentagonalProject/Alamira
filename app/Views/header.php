<?php
use PentagonalProject\Alamari\Template;

/**
 * Validate Includes
 */
if (!isset($this) || ! $this instanceof Template) {
    return;
}
?><!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $this['title'];?></title>
  <script type="text/javascript">
    var jsBody = <?=
        // asset dom javascript
        json_encode(
            [
                "jquery"    => $this['base:url'] . '/assets/js/jquery.js',
                "bootstrap" => $this['base:url'] . '/assets/js/bootstrap.js',
                "layout"    => $this['base:url'] . '/assets/js/layout.js',
                "map"       => $this['base:url'] . '/assets/js/map.js',
            ]
        );
    ?>,
        BaseUrl = <?= json_encode($this['base:url']);?>;
  </script>
</head>
<body>
  <div class="wrapper">
