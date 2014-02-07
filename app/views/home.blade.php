@extends('/master')

@section('title')
  Sanfa | Home
@stop

@section('body')
 
<!-- First Band (Slider) -->
 
  <div class="row">
    <div class="large-12 columns">
    <div id="slider">
      <img src="/assets/logo/sanfa_1000x400.png" />
    </div>
    
    <hr />
    </div>
  </div>
  
<!-- Three-up Content Blocks -->
 
  <div class="row">
    <div class="large-4 columns">
      <img src="/assets/products/cements_250x250.png" />
      <h4>Cemento Maya</h4>
      <p>The most finest and reliable brand used in the country of Belize. It comes with two packaging (50kg and 42.5kg). Direct imported from the factory in Merida.</p>
    </div>
    
    <div class="large-4 columns">
      <img src="/assets/products/steels_250x250.png" />
      <h4>Construction Steel</h4>
      <p>Construction rebars are provided in different sizes such as 1/4", 3/8", 1/2", 5/8", 3/4", 1". They're most commonly used in building houses, making burglar bar gates/ windows..etc.</p>
    </div>
    
    <div class="large-4 columns">
      <img src="/assets/products/curtains_250x250.png" />
      <h4>Curtain Door</h4>
      <p>Currently throughout the world, many people are relying on using Curtain/Shutter doors because they are much stronger and more reliable than regular doors. They are provided in two types, the manual and the automatic (with remove control)</p>
    </div>
  
    </div>
    
<!-- Call to Action Panel -->
<div class="row">
    <div class="large-12 columns">
    
      <div class="panel">
        <h4>Need quote for curtain door ?</h4>
            
        <div class="row">
          <div class="large-9 columns">
            <p>We'd love to do free quote for you!</p>
          </div>
          <div class="large-3 columns">
            <a href="/contact" class="radius button right">Contact Us</a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
 @stop
