@extends('/master')

@section('title')
  Sanfa | About Us
@stop

@section('body')
 
 
  <!-- Main Page Content and Sidebar -->
 
  <div class="row" style="padding-top:40px;">
 
    <!-- Main Blog Content -->
    <div class="large-9 columns" role="content">
 
      <article>
 
        <h3><a href="#">About Us</a></h3>
 
        <p>Sanfa Construction Supply was established in 2002. Our main products are Maya Cement, Steel, and Roller Shutter Doors. Though these are our main products, we also offer a variety of hardware products that suit your every need.</p> 
 
        <p>The variety of construction and carpentry supplies at our hardware store include, but are not limited to: Nails, tying wire, doors, lumbers, and many other construction supplies.</p>
        <p>The company's current location is in Corozal, Belize. Central America. Throughout the years, we have made many improvements, not only with our products but also our services.</p>
 
      </article>
 
    </div>
 
    <!-- End Main Content -->
 
 
    <!-- Sidebar -->
 
    <aside class="large-3 columns">
      <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=709209622456817";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
      <div class="panel">
        <h5>Like Us on Facebook</h5>
        <div class="fb-like-box" data-href="https://www.facebook.com/sanfa.construction" data-width="178" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
      </div>
 
    </aside>
 
    <!-- End Sidebar -->
  </div>
 
  <!-- End Main Content and Sidebar -->
    
 @stop