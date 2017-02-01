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
      var idMap = document.getElementById('map');
      if (idMap) {
          console.log(idMap);
          var map;
          var mapCallback = function () {
              try {
                  if (!idMap) {
                      return;
                  }
                  map = new google.maps.Map(
                      idMap,
                      {
                          center: {
                            lat: -6.223561,
                            lng: 106.7968
                          },
                          zoom: 15,
                          mapTypeId: 'roadmap'
                  });
                  google.maps.event.addListenerOnce(map, 'idle', function () {
                      try {
                          jQuery(idMap).removeClass('map-preload');
                      } catch (err) {
                      }
                  });

                  var infowindow = new google.maps.InfoWindow({
                      content: '<h2>Google Indonesia</h2>'
                        +'<p>Sentral Senayan II Lantai 28, Jl. Asia Afrika No. 8,<br />Gelora, Tanah Abang, Jakarta.</p>'
                  });
                  var marker = new google.maps.Marker({
                      position: {
                          lat: -6.223561,
                          lng: 106.7968
                      },
                      map: map,
                      title: 'Google Indonesia'
                  });
                  marker.addListener('click', function () {
                      try {
                          map.setCenter(marker.getPosition());
                          var zoom = map.getZoom();
                          var defZoom = 10;
                          if (typeof zoom == "number") {
                              defZoom = zoom;
                          }
                          console.log(defZoom);
                          if (defZoom < 13) {
                              map.setZoom(13);
                          } else if (defZoom > 18) {
                              map.setZoom(15);
                          }
                          infowindow.open(map, marker);
                      } catch (err) {
                          console.log(err);
                      }
                  });
              } catch (err) {
                  console.log(err);
              }
          }
      }
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
