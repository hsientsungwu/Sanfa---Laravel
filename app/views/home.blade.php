@extends('/master')

@section('title')
  Sanfa | Home
@stop

@section('body')
 
<!-- First Band (Slider) -->
 
  <div class="row">
    <div class="large-12 columns">
    <div id="slider">
      <img src="http://placehold.it/1000x400&text=[ Sanfa Building image ]" />
    </div>
    
    <hr />
    </div>
  </div>
  
<!-- Three-up Content Blocks -->
 
  <div class="row">
    <div class="large-4 columns">
      <img src="http://placehold.it/400x300&text=[cements]" />
      <h4>This is a content section.</h4>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>
    
    <div class="large-4 columns">
      <img src="http://placehold.it/400x300&text=[steels]" />
      <h4>This is a content section.</h4>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>
    
    <div class="large-4 columns">
      <img src="http://placehold.it/400x300&text=[curtain doors]" />
      <h4>This is a content section.</h4>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
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
