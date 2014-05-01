<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        @yield('meta_head')
        <title>@yield('title')</title>

        <!-- font-awesome -->
        {{ HTML::style('/bootstrap/css/font-awesome.min.css') }}
        <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!--[if IE 7]>
        {{ HTML::style('/bootstrap/css/font-awesome-ie7.css') }}
        <![endif]-->

        <!-- Bootstrap core CSS -->
        {{ HTML::style('/bootstrap/css/bootstrap.css') }}

        <!-- custom CSS -->
        {{ HTML::style('/bootstrap/css/style.css') }}
        <!--[if lte IE 8]>
        {{ HTML::style('/bootstrap/css/ie8.css') }}
        <![endif]-->
        <!--[if lte IE 7]>
        {{ HTML::style('/bootstrap/css/ie7.css') }}
        <![endif]-->

        <!-- JavaScript -->
        {{ HTML::script('/bootstrap/js/jquery-1.10.2.js') }}
        {{ HTML::script('/bootstrap/js/bootstrap.js') }}
        {{ HTML::script('/bootstrap/js/plugins.js') }}

        <!--[if lte IE 7]>
        {{ HTML::script('/bootstrap/js/boxsizing/jquery.boxsizing.js') }}

        <![endif]-->
        {{ HTML::script('/bootstrap/js/banzhow.js') }}
    </head>
    <body>
        <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="index.html">Sanfa</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="services.html">Services</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Portfolio <i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="portfolio-1-col.html">1 Column Portfolio</a></li>
                <li><a href="portfolio-2-col.html">2 Column Portfolio</a></li>
                <li><a href="portfolio-3-col.html">3 Column Portfolio</a></li>
                <li><a href="portfolio-item.html">Single Portfolio Item</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Blog <i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="blog-home-1.html">Blog Home</a></li>
                <li><a href="blog-post.html">Blog Post</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Other Pages <i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="full-width.html">Full Width Page</a></li>
                <li><a href="sidebar.html">Sidebar Page</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="404.html">404</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
    @section('body')
    @show
    <footer>
      <div class="container">

        <div class="row">
          <div class="col-lg-3 col-md-3">
            <a class="footer-brand" href="index.html">Banzhow</a>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar quam sed consequat adipiscing. Sed est quam, pretium a vestibulum vel, aliquam vitae eros.</p>
            <ul class="list-inline list-unstyled social-networks">
              <li>
                <a href="#">
                  <div class="icon-social icon-social-facebook normal">
                    <i class="fa fa-facebook"></i>
                  </div>
                  <div class="icon-social hover">
                    <i class="fa fa-facebook"></i>
                  </div>
                </a>
              </li>

              <li>
                <a href="#">
                  <div class="icon-social icon-social-twitter normal">
                    <i class="fa fa-twitter"></i>
                  </div>
                  <div class="icon-social hover">
                    <i class="fa fa-twitter"></i>
                  </div>
                </a>
              </li>

              <li>
                <a href="#">
                  <div class="icon-social icon-social-google-plus normal">
                    <i class="fa fa-google-plus"></i>
                  </div>
                  <div class="icon-social hover">
                    <i class="fa fa-google-plus"></i>
                  </div>
                </a>
              </li>

              <li>
                <a href="#">
                  <div class="icon-social icon-social-youtube normal">
                    <i class="fa fa-youtube-play"></i>
                  </div>
                  <div class="icon-social hover">
                    <i class="fa fa-youtube-play"></i>
                  </div>
                </a>
              </li>

              <li>
                <a href="#">
                  <div class="icon-social icon-social-linkedin normal">
                    <i class="fa fa-linkedin"></i>
                  </div>
                  <div class="icon-social hover">
                    <i class="fa fa-linkedin"></i>
                  </div>
                </a>
              </li>

              <li>
                <a href="#">
                  <div class="icon-social icon-social-pinterest normal">
                    <i class="fa fa-pinterest"></i>
                  </div>
                  <div class="icon-social hover">
                    <i class="fa fa-pinterest"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-3">
            <h3>CONTACT</h3>
            <address>
              <i class="fa fa-map-marker"></i> 123 My Street, Banzhow City, CA 4567<br>
              <i class="fa fa-phone"></i> (123) 456-7890<br>
              <i class="fa fa-envelope"></i> info@banzhow.com
            </address>
          </div>
          
          <div class="col-lg-3 col-md-3">
            <h3>LATEST TWEETS</h3>
            <ul class="latest-tweets">
              <li>
                <i class="fa fa-twitter"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar quam sed consequat adipiscing
              </li>
              <li>
                <i class="fa fa-twitter"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar quam sed consequat adipiscing
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-3">
            <h3>NEWSLETTER</h3>
            <p>Type your email address below and subscribe to our newsletter</p>
            <div class="input-group">
              <input type="text" placeholder="Email" class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">Go!</button>
              </span>
            </div><!-- /input-group -->
          </div>
        </div><!-- /.row -->

      </div><!-- /.container -->
    </footer>

    <div class="footer-after">
      <div class="container">
        <div class="row">
          <p class="col-md-10">©2014 All rights reserved. Designed by John Doe.</p>
          <p class="col-md-2 legal"><a href="#" rel="nofollow">Legal Notice</a></p>
        </div><!-- /.row -->
      </div>
    </div>
  </body>
</html>
