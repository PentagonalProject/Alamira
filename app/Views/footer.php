<?php
use PentagonalProject\Alamari\Template;

/**
 * Validate Includes
 */
if (!isset($this) || ! $this instanceof Template) {
    return;
}
?>
  </div>
  <!-- .wrapper -->
  <script type="text/javascript">
      /* Write Javascript Assets Preload
       -------------------------------------- */
      var keyNameJs,
          jsBody = typeof jsBody == 'object' ? jsBody : {};
      for (keyNameJs in jsBody) {
          try {
              document.write('<script src="'+jsBody[keyNameJs]+'" type="text\/javascript" ><\/script>');
          } catch (err) {
          }
      }
  </script>
</body>
</html><?php
