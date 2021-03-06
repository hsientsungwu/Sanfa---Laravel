@extends('/theme/master')

@section('title') Sanfa | Home @stop

@section('meta_head')
  <meta property="og:title" content="Sanfa Construction Supply">
  <meta property="og:url" content="http://www.sanfa.bz">
  <meta property="og:description" content="Sanfa Construction Supply is located in Corozal, Belize, Central America. We're strive to provide explicit customer experience and top quality supplies. We offer various partnership plan in assisting local construction development. Contact Us for detail. ">
@stop

@section('body')    
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <div class="fill" style="background-image:url('assets/logo/sanfa_1000x400.png');"></div>
            <div class="carousel-caption">
              <h2>Best Price in Town</h2>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('img/slide/slide2.png');"></div>
            <div class="carousel-caption">
              <h2>Friendly Customer Service</h2>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('img/slide/slide3.png');"></div>
            <div class="carousel-caption">
              <h2>If We Don't Have It, We Order It For You</h2>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
    </div>

    <div class="section">

      <div class="container">

        <div class="row">
          <div class="col-md-4 col-sm-4">
            <div class="block-icon">
              <i class="fa fa-star" style="line-height:70px;"></i>
            </div>

            <div class="block-body">
              <h2>Cemento Maya</h2>
              <div class="line-subtitle"></div>
              <p>The most finest and reliable brand used in the country of Belize. It comes with two packaging (50kg and 42.5kg). Direct imported from the factory in Merida.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="block-icon">
              <i class="fa fa-bars" style="line-height:70px;"></i>
            </div>

            <div class="block-body">
              <h2>Construction Steel</h2>
              <div class="line-subtitle"></div>
              <p>Construction rebars are provided in different sizes such as 1/4", 3/8", 1/2", 5/8", 3/4", 1". They're most commonly used in building houses, making burglar bar gates/ windows..etc.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="block-icon">
              <i class="fa fa-road" style="line-height:70px;"></i>
            </div>

            <div class="block-body">
              <h2>Eletric Curtains</h2>
              <div class="line-subtitle"></div>
              <p>Currently throughout the world, many people are relying on using Curtain/Shutter doors because they are much stronger and more reliable than regular doors. They are provided in two types, the manual and the automatic (with remote control)</p>
            </div>
          </div>
        </div><!-- /.row -->

      </div><!-- /.container -->

    </div><!-- /.section -->

    <div class="section-colored home">

      <div class="container">

        <div class="row">
          <div class="col-md-9 col-sm-8">
            <h2>We can make real your bussiness project</h2>
          </div>
          <div class="col-md-3 col-sm-4">
            <a href="#" class="btn btn-danger btn-lg">Contact with us</a>
          </div>
        </div><!-- /.row -->

      </div><!-- /.container -->

    </div><!-- /.section-colored -->

    <div class="section" id="recent-projects" style="position: relative;">

      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <h2 class="section-title">Recent projects</h2>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <a href="portfolio-item.html" class="link-portfolio">
              <div class="overlay-portfolio">
                <h3>Banzhow Template</h3>
                <small class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar quam sed consequat adipiscing.
                </small>
              </div><!-- /.overlay-portfolio -->
              <img class="img-responsive img-home-portfolio" src="bootstrap/img/portfolio_1.png" alt="portfolio 1">
            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <a href="portfolio-item.html" class="link-portfolio">
              <div class="overlay-portfolio">
                <h3>Banzhow Template</h3>
                <small class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar quam sed consequat adipiscing.
                </small>
              </div><!-- /.overlay-portfolio -->
              <img class="img-responsive img-home-portfolio" src="bootstrap/img/portfolio_2.png" alt="portfolio 2">
            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <a href="portfolio-item.html" class="link-portfolio">
              <div class="overlay-portfolio">
                <h3>Banzhow Template</h3>
                <small class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar quam sed consequat adipiscing.
                </small>
              </div><!-- /.overlay-portfolio -->
              <img class="img-responsive img-home-portfolio" src="bootstrap/img/portfolio_3.png" alt="portfolio 3">
            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <a href="portfolio-item.html" class="link-portfolio">
              <div class="overlay-portfolio">
                <h3>Banzhow Template</h3>
                <small class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar quam sed consequat adipiscing.
                </small>
              </div><!-- /.overlay-portfolio -->
              <img class="img-responsive img-home-portfolio" src="bootstrap/img/portfolio_4.png" alt="portfolio 4">
            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <a href="portfolio-item.html" class="link-portfolio">
              <div class="overlay-portfolio">
                <h3>Banzhow Template</h3>
                <small class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar quam sed consequat adipiscing.
                </small>
              </div><!-- /.overlay-portfolio -->
              <img class="img-responsive img-home-portfolio" src="bootstrap/img/portfolio_5.png" alt="portfolio 5">
            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <a href="portfolio-item.html" class="link-portfolio">
              <div class="overlay-portfolio">
                <h3>Banzhow Template</h3>
                <small class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar quam sed consequat adipiscing.
                </small>
              </div><!-- /.overlay-portfolio -->
              <img class="img-responsive img-home-portfolio" src="bootstrap/img/portfolio_6.png" alt="portfolio 6">
            </a>
          </div>
        </div><!-- /.row -->

      </div><!-- /.container -->

    </div><!-- /.section -->

    <div class="section-colored">

      <div class="container">
        <h3 class="section-title text-center">Some of Our Products</h3>
  
        <div class="container clients">

          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <a href="#"><img class="img-responsive" src="assets/products/cement_220x220.png" alt="client 1"></a>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <a href="#"><img class="img-responsive" src="assets/products/handtool_220x220.png" alt="client 2"></a>
            </div>
            
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <a href="#"><img class="img-responsive" src="assets/products/paint_220x220.png" alt="client 3"></a>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <a href="#"><img class="img-responsive" src="assets/products/steel_220x220.png" alt="client 4"></a>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <a href="#"><img class="img-responsive" src="assets/products/block_220x220.png" alt="client 5"></a>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <a href="#"><img class="img-responsive" src="assets/products/plumbing_220x220.png" alt="client 6"></a>
            </div>
          </div><!-- /.row -->

        </div><!-- /.container -->

      </div><!-- /.container -->

    </div><!-- /.section-colored -->