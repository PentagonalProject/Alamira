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
    <div id="first" class="vh">
        <div class="overlay-bg"></div>
        <header id="header" class="header-menu">
            <div class="container">
            </div>
        </header>
        <div id="top-content">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2 class="text-center bigger">Develop your new service to improve your presence on the internet.</h2>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- #first -->
    <div id="second" class="vh">
      <div class="container">
        <h2 class="text-center">Break Up Your Mind</h2>
      </div>
    </div>
    <!-- #second -->
    <div id="third" class="v-separate">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="lead text-right">Give Us The Opportunity</h3>
                </div>
                <div class="col-md-4">
                    <h3 class="text-left lead"><a href="#" class="btn btn-white btn-block btn-bordered">Hire US</a></h3>
                </div>
            </div>
        </div>
    </div>
    <!-- #third -->
    <div id="fourth" class="vh">
    </div>
    <!-- #fourth -->
    <div id="fifth" class="partner v-separate">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="logo-grid text-center">
              <li>
                <a href="#">
                  <img src="<?= $this['base:url'];?>/assets/images/logo-motorola.png" alt="motorola"  data-toggle="tooltip" data-placemet="bottom" title="motorola">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?= $this['base:url'];?>/assets/images/logo-starbuck.png" alt="starbuck"  data-toggle="tooltip" data-placemet="bottom" title="Starbuck">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?= $this['base:url'];?>/assets/images/logo-motorola.png" alt="motorola" data-toggle="tooltip" data-placemet="bottom" title="motorola">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="six" class="vh">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <h1 class="text-left">Lorem Ipsum Dolor</h1>
            <div class="paragraph-area">
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Morbi sit amet est porta, auctor nunc ut, hendrerit purus.
                      In a ligula sed ante finibus mattis.
                      Cras fermentum blandit eleifend.
                      In tincidunt augue at pretium lacinia.
                      Vestibulum vel pharetra enim.
                      Cras id ultrices sem, eget dapibus quam.
                      Suspendisse potenti. Curabitur lacinia arcu ut purus dignissim, in finibus neque mattis.
                      Suspendisse vulputate elit eu massa porttitor, non iaculis nisi finibus.
                      Interdum et malesuada fames ac ante ipsum primis in faucibus.
              </p>
              <p>
                      Vivamus ultrices nulla laoreet, euismod mi sed, faucibus mi.
                      Quisque non laoreet lacus, nec convallis neque.
                      Proin pulvinar ultricies elit, sed feugiat felis tincidunt maximus.
                      Fusce efficitur tortor eu mi consectetur, nec sodales mauris commodo.
                      Cras et lacus vulputate, rutrum turpis non, sodales quam.
                      Aliquam lorem risus, viverra at enim vel, tristique venenatis lectus.
                      Nunc et risus ut nibh interdum mattis vitae ut lorem.
                      Praesent vitae porta eros, eget tempus augue.
                      Suspendisse ultricies quam a tincidunt convallis.
                      In mollis dictum ex quis vestibulum.
                      Duis dapibus tempus mauris eu pulvinar.
                      Ut rutrum ante odio, id fermentum ex blandit sed.
                      Suspendisse rhoncus felis eget urna pretium, tristique scelerisque orci vehicula.
                      Maecenas ac tempor justo, at mattis magna. Etiam in tincidunt leo, at efficitur lectus. Quisque eget nisl dui.
              </p>
            </div>
            <p>&nbsp;</p>
          </div>
          <div class="col-md-7">
            <div class="scrolling-image vh" data-height-parent=".col-md-5">
              <img src="<?= $this['base:url'];?>/assets/images/full.png" class="img-responsive" alt="full web page">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- #fifth -->
<?php
$this->partial('footer');
