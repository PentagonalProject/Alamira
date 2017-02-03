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
                <li><a href="#fifth">Fifth</a></li>
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
                    <img id="top-logo-image" class="top-logo-image animated fadeInDown" src="<?= $this['base:url'];?>/assets/images/logo.png" alt="logo"/>
                  </div>
                  <div class="slick" data-slick='{"dots": false, "infinite": true,"autoplay": true,"speed": 300, "slidesToShow": 1, "arrows":false}'>
                    <div>
                      <h2 class="text-center text-light">Develop your new service to improve your presence on the <span class="bg-orange" style="padding: 0 7px 5px;line-height: 1.3;">internet</span></h2>
                    </div>
                    <div class="slick-next-contain">
                      <h2 class="text-center text-light">Lorem Ipsum Dolor Sit amet.</h2>
                    </div>
                    <div class="slick-next-contain">
                      <h2 class="text-center text-light">Curabitur lacinia <span class="text-orange">arcu</span> ut purus dignissim.</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- #first -->
    <div id="second" class="v-separate text-light" style="overflow: hidden">
      <div class="container">
        <h1 class="text-light text-center">Our <span class="text-orange">Portfolio</span></h1>
        <hr class="soften"/>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="slick-portfolio">
            <div class="portfolio-section">
              <a href="" onclick="return false">
                <span class="overlayed-galley"></span>
                <img src="<?= $this['base:url'];?>/assets/images/01-screenshot.jpg" alt="portfolio 1"/>
              </a>
            </div>
            <div class="portfolio-section">
              <a href="" onclick="return false">
                <span class="overlayed-galley"></span>
                <img src="<?= $this['base:url'];?>/assets/images/02-screenshot.jpg" alt="portfolio 2"/>
              </a>
            </div>
            <div class="portfolio-section">
              <a href="" onclick="return false">
                <span class="overlayed-galley"></span>
                <img src="<?= $this['base:url'];?>/assets/images/03-screenshot.jpg" alt="portfolio 3"/>
              </a>
            </div>
            <div class="portfolio-section">
              <a href="" onclick="return false">
                <span class="overlayed-galley"></span>
                <img src="<?= $this['base:url'];?>/assets/images/04-screenshot.jpg" alt="portfolio 4"/>
              </a>
            </div>
            <div class="portfolio-section">
              <a href="" onclick="return false">
                <span class="overlayed-galley"></span>
                <img src="<?= $this['base:url'];?>/assets/images/05-screenshot.jpg" alt="portfolio 4"/>
              </a>
            </div>
          </div>
        </div>
        <!-- .col-md-12 -->
      </div>
      <div class="container">
        <!-- .row -->
        <hr class="soften"/>
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
    <div id="fourth" class="v-separate">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h1 class="text-center text-light text-uppercase line-height-1-5 spacing-1">
              Lorem Ipsum Dolor Sita Amet &  Cras id ultrices sem, eget dapibus
              <span class="text-orange">Lipsum</span> quam.
            </h1>
          </div>
        </div>
        <hr class="soften"/>
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-8 col-xs-offset-2">
            <div class="testimonial text-light slick lead text-center line-height-1" data-slick='{"adaptiveHeight":true, "autoplay":true, "slieToShow":1, "arrows":true, "nextArrow": "<div class=\"slick-arrow-custom next-arrow\"><i class=\"glyphicon glyphicon-chevron-right\"><\/i><\/div>", "prevArrow": "<div class=\"slick-arrow-custom prev-arrow\"><i class=\"glyphicon glyphicon-chevron-left\"><\/i><\/div>"}'>
              <div class="testimonial-container">
                <p>Etiam aliquam ex sit amet gravida ornare. Donec a nibh id ligula tempus posuere.
                  Aliquam orci justo, accumsan et lectus in, bibendum posuere massa.
                  Quisque ultrices mi a pulvinar bibendum. Etiam hendrerit sed turpis in sodales.
                </p>
                <div class="testimonial-author">
                  <span class="author-name">John Doe</span>
                  <span class="author-link">example.com</span>
                </div>
              </div>
              <div class="testimonial slick-next-contain">
                <p>
                  Suspendisse vel sem massa.
                  Maecenas rutrum molestie tincidunt.
                  Quisque posuere dolor nisi, eget consequat nulla elementum sed.
                  Morbi massa dolor, rhoncus at condimentum malesuada, condimentum et mauris.
                  Sed lacinia, urna id molestie maximus, ipsum enim facilisis nisl, ac ornare ex elit vel augue.
                  Donec pellentesque ut augue in congue.
                  Proin convallis nisi a nisl iaculis venenatis.
                  Mauris iaculis et risus eget consectetur. Donec mollis nisl urna, non mattis orci semper vitae.
                </p>
                <div class="testimonial-author">
                  <span class="author-name">John Doe</span>
                  <span class="author-link">example.com</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- #fourth -->
    <div id="fifth">
      <div id="map" class="map-preload"></div>
      <div class="clearfix"></div>
    </div>
    <!-- #fifth -->
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
                  <img src="<?= $this['base:url'];?>/assets/images/logo-motorola.png" alt="motorola" >
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?= $this['base:url'];?>/assets/images/logo-starbuck.png" alt="starbuck">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?= $this['base:url'];?>/assets/images/logo-nasa.png" alt="nasa">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?= $this['base:url'];?>/assets/images/logo-hp.png" alt="HP">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?= $this['base:url'];?>/assets/images/logo-cfsa.png" alt="cfsa">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?= $this['base:url'];?>/assets/images/logo-wedding-wire.png" alt="wedding wire">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?= $this['base:url'];?>/assets/images/logo-master-card.png" alt="master card">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?= $this['base:url'];?>/assets/images/logo-true-local.png" alt="true local">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?= $this['base:url'];?>/assets/images/logo-tcat.png" alt="tcat memphis">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- #six -->
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
    <!-- #seventh -->
<?php
$this->partial('footer');
