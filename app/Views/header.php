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
  <link href="<?= $this['base:url'];?>/google-fonts/Lato:300,400,700.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?= $this['base:url'];?>/assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?= $this['base:url'];?>/assets/css/layout.css">
  <link rel="stylesheet" href="<?= $this['base:url'];?>/assets/slick/slick.css">
  <link rel="stylesheet" href="<?= $this['base:url'];?>/assets/slick/slick-theme.css">
  <link rel="stylesheet" href="<?= $this['base:url'];?>/assets/css/animate.css">
  <script type="text/javascript">
    var jsBody = <?=
        // asset dom javascript
        json_encode(
            [
                "jquery"    => $this['base:url'] . '/assets/js/jquery.js',
                "bootstrap" => $this['base:url'] . '/assets/js/bootstrap.js',
                "slick"     => $this['base:url'] . '/assets/slick/slick.js',
                "layout"    => $this['base:url'] . '/assets/js/layout.js',
                "map"       => $this['base:url'] . '/assets/js/map.js',
            ]
        );
    ?>,
        BaseUrl = <?= json_encode($this['base:url']);?>;
        var preloadInterval = setInterval(function () {
          var body = document.getElementsByTagName('body');
          if (body.length) {
              document.documentElement.className += 'wait-load';
              body = body[0];
              var preload = document.createElement('div');
                preload.className = 'preload';
                preload.innerHTML = '<div class="inner-loader">'
                        + '<div class="loader-item"></div>'
                        + '<div class="loader-item"></div>'
                        + '<div class="loader-item"></div>'
                        + '<div class="loader-item"></div>'
                    +'</div>';
                body.prepend(preload);
              clearInterval(preloadInterval);
          }
        });
  </script>
</head>
<body>
  <div class="wrapper">
