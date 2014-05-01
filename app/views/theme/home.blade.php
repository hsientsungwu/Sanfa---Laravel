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
            <div class="fill" style="background-image:url('img/slide/slide1.png');"></div>
            <div class="carousel-caption">
              <h2>clean and modern design</h2>
              <a href="#" class="button">DOWNLOAD</a>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('img/slide/slide2.png');"></div>
            <div class="carousel-caption">
              <h2>fully responsive and retina ready</h2>
              <a href="#" class="button">SEE MORE</a>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('img/slide/slide3.png');"></div>
            <div class="carousel-caption">
              <h2>based on twitter bootstrap</h2>
              <a href="#" class="button">DOWNLOAD</a>
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
              <i class="fa fa-rocket"></i>
            </div>

            <div class="block-body">
              <h2>Creative design</h2>
              <div class="line-subtitle"></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim placerat lectus, at ornare sapien tempor eget. Etiam vel vestibulum nisl</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="block-icon">
              <i class="fa fa-users"></i>
            </div>

            <div class="block-body">
              <h2>Built for humans</h2>
              <div class="line-subtitle"></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim placerat lectus, at ornare sapien tempor eget. Etiam vel vestibulum nisl</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="block-icon">
              <i class="fa fa-cog"></i>
            </div>

            <div class="block-body">
              <h2>Easy customization</h2>
              <div class="line-subtitle"></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim placerat lectus, at ornare sapien tempor eget. Etiam vel vestibulum nisl</p>
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
              <img class="img-responsive img-home-portfolio" src="img/portfolio_1.png" alt="portfolio 1">
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
              <img class="img-responsive img-home-portfolio" src="img/portfolio_2.png" alt="portfolio 2">
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
              <img class="img-responsive img-home-portfolio" src="img/portfolio_3.png" alt="portfolio 3">
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
              <img class="img-responsive img-home-portfolio" src="img/portfolio_4.png" alt="portfolio 4">
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
              <img class="img-responsive img-home-portfolio" src="img/portfolio_5.png" alt="portfolio 5">
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
              <img class="img-responsive img-home-portfolio" src="img/portfolio_6.png" alt="portfolio 6">
            </a>
          </div>
        </div><!-- /.row -->

      </div><!-- /.container -->

    </div><!-- /.section -->

    <div class="section-colored">

      <div class="container">
        <h3 class="section-title text-center">Some of Our Clients</h3>
  
        <div class="container clients">

          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <a href="#"><img class="img-responsive" src="img/client-1.png" alt="client 1"></a>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <a href="#"><img class="img-responsive" src="img/client-2.png" alt="client 2"></a>
            </div>
            
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <a href="#"><img class="img-responsive" src="img/client-3.png" alt="client 3"></a>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <a href="#"><img class="img-responsive" src="img/client-4.png" alt="client 4"></a>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <a href="#"><img class="img-responsive" src="img/client-5.png" alt="client 5"></a>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <a href="#"><img class="img-responsive" src="img/client-6.png" alt="client 6"></a>
            </div>
          </div><!-- /.row -->

        </div><!-- /.container -->

      </div><!-- /.container -->

    </div><!-- /.section-colored -->