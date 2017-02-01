<?php
use PentagonalProject\Alamari\Template;

/**
 * Validate Includes
 */
if (!isset($this) || ! $this instanceof Template) {
    return;
}
?>
  <footer id="footer" class="v-separate">
    <div class="overlay-bg overlay-bg-darken"></div>
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">
          <div>&copy; <?= date('Y');?></div>
        </div>
      </div>
    </div>
  </footer>
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
