<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <meta charset="UTF-8" />
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="/favicon.ico">
    {{ HTML::script('/foundation/js/modernizr.js') }}
    {{ HTML::style('/foundation/css/foundation.css') }}
    {{ HTML::script('/foundation/js/jquery.js') }}
    {{ HTML::script('/foundation/js/foundation.min.js') }}

    <link rel="canonical" href="http://www.sanfa.bz" />
    <meta property="og:type" content="website">
    <meta property="fb:admins" content="637611048">
    <meta property="fb:app_id" content="709209622456817">
    <meta property="og:image" content="http://www.sanfa.bz/assets/logo/sanfa_300x300.png">
    <meta property="og:site_name" content="Sanfa Construction Supply">
    @yield('meta_head')

</head>
<body>
  <div class="row">
    <div class="large-3 columns">
      <h1><a href="/"><img src='{{ URL::asset('/assets/logo/sanfa_400x100.png')}}' /></a></h1>
    </div>
    <div class="large-9 columns">
      <ul class="right button-group">
        <li><a href="/" class="button">Home</a></li>
        <li><a href="/products/" class="button">Products</a></li>
        <!-- <li><a href="/sales/" class="button">Sales</a></li> -->
        <li><a href="/about/" class="button">About Us</a></li>
        <li><a href="/contact/" class="button">Contact Us</a></li>
      </ul>
     </div>
   </div>
  
<!-- End Header and Nav -->

@section('body')
@show

<!-- Footer -->
  
  <footer class="row">
    <div class="large-12 columns">
      <hr />
      <div class="row">
        <div class="large-6 columns">
          <p>© Copyright 2014 - Sanfa Construction Supply</p>
        </div>
        <div class="large-6 columns">
          <ul class="inline-list right">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div> 
  </footer>
  <script>
      $(document).foundation();
    </script>
</body>
</html>