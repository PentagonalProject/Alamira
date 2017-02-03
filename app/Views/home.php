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
          <div class="nav">
            <div class="container">
              <ul>
                <li><a href="#first">Home</a></li>
                <li><a href="#second">Second</a></li>
                <li><a href="#third">Third</a></li>
                <li><a href="#fourth">Fourth</a></li>
                <li><a href="#fourth">Fifth</a></li>
              </ul>
            </div>
          </div>
        </header>
        <div id="top-content">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="top-contain">
                  <div id="top-logo-section" class="text-center">
                    <img id="top-logo-image" class="top-logo-image animated fadeInDown" src="<?= $this['base:url'];?>/assets/images/logo.png"/>
                  </div>
                  <div class="slick" data-slick='{"dots": false, "infinite": true,"autoplay": true,"speed": 300, "slidesToShow": 1, "arrows":false}'>
                    <div>
                      <h2 class="text-center text-light">Develop your new service to improve your presence on the internet.</h2>
                    </div>
                    <div class="slick-next-contain">
                      <h2 class="text-center text-light">Lorem Ipsum Dolor Sit amet.</h2>
                    </div>
                    <div class="slick-next-contain">
                      <h2 class="text-center text-light">Curabitur lacinia arcu ut purus dignissim.</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- #first -->
    <div id="second" class="v-separate text-light">
      <div class="container">
        <h1 class="text-center text-light">Break Up Your Mind</h1>
      </div>
    </div>
    <!-- #second -->
    <div id="third" class="v-separate">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center text-light">Give Us The Opportunity</h1>
                    <h3 class="text-center"><a href="#" class="btn btn-white btn-lg btn-bordered">REQUEST QUOTE</a></h3>
                </div>
            </div>
        </div>
    </div>
    <!-- #third -->
    <div id="fourth" class="vh">
    </div>
    <!-- #fourth -->
    <div id="fifth">
      <div id="map" class="map-preload"></div>
      <div class="clearfix"></div>
    </div>
    <div id="six" class="partner v-separate">
      <div class="container">
        <div class="row">
          <div class="col-md-3 text-center">
            <h3>Our Partner</h3>
          </div>
          <div class="col-md-9">
            <ul class="logo-grid text-center slick" data-config="auto">
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
    <div id="seventh" class="vh">
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
              </p>
              <p>&nbsp;</p>
              <div class="row">
                <div class="col-md-10 text-center">
                  <a href="#" class="btn btn-white btn-bordered margin-10 margin-left-0">REQUEST QUOTE</a>
                  &nbsp;&nbsp;&nbsp;
                  <a href="#" class="btn btn-orange  btn-bordered margin-10 margin-left-0">REQUEST QUOTE</a>
                </div>
              </div>
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
