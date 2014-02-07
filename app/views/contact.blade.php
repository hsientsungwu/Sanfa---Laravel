@extends('/master')

@section('title')
  Sanfa | Contact Us
@stop

@section('body')
  <!-- Main Page Content and Sidebar -->
 
  <div class="row" style="padding-top:40px;">
 
    <!-- Contact Details -->
    <div class="large-9 columns">
 
      <h3>Get in Touch!</h3>
      <p>We'd love to hear from you. You can either reach out to us as a whole and one of our awesome team members will get back to you, or if you have a specific question reach out to one of our staff. We love getting email all day <em>all day</em>.</p>

      @if (isset($success))
      <span class="success label">
        Your request has been sent. Our customer service will be in touch shortly. Thank you for your submission.
      </span>
      @elseif (isset($errors))
        @foreach ($errors as $error)
          <span class="alert label">
              {{ $error }}
          </span>
        @endforeach
      @endif
      
      {{ Form::open(array('url' => '/contact/post', 'method' => 'POST')); }}
      <div class="section-container tabs" data-section>
        <section class="section">
          <h5 class="title"><a href="#panel1">Contact Us Now!</a></h5>
          <div class="content" data-slug="panel1">
            <form>
              <div class="row collapse">
                <div class="large-2 columns">
                  <label class="inline">Your Name</label>
                </div>
                <div class="large-10 columns">
                  <input type="text" id="yourName" name="name" placeholder="Jane Smith">
                </div>
              </div>
              <div class="row collapse">
                <div class="large-2 columns">
                  <label class="inline"> Your Email</label>
                </div>
                <div class="large-10 columns">
                  <input type="text" id="yourEmail" name="email" placeholder="jane@smithco.com">
                </div>
              </div>
              <label>What's up?</label>
              <div class="row">
                <div class="large-12 columns">
                  <textarea placeholder="Questions?" name="question" style="height:10em;"></textarea>
                </div>
              </div>
              <button type="submit" class="radius button">Submit</button>
            </form>
          </div>
        </section>
      </div>
    {{ Form::close(); }}

    </div>
 
    <!-- End Contact Details -->
 
 
    <!-- Sidebar -->
 
 
    <div class="large-3 columns">
      <h5>Map</h5>
      <!-- Clicking this placeholder fires the mapModal Reveal modal -->
      <p>
        <a href="" data-reveal-id="mapModal"><img src="/assets/other/contactus_map.png"></a><br />
        <a href="https://www.google.com/maps/preview/@18.390445,-88.4016003,16z" target="_blank" data-reveal-id="mapModal">View Map</a>
      </p>
      <p>
        815 San Andres Road,<br />
        San Andres Village, <br />
        Corozal, Belize, C.A
      </p>
    </div>
    <!-- End Sidebar -->
  </div>
 
  <!-- End Main Content and Sidebar -->
 
 
  <!-- Map Modal -->
 
  <div class="reveal-modal" id="mapModal">
    <h4>Where We Are</h4>
    <p><img src="http://placehold.it/800x600" /></p>
 
    <!-- Any anchor with this class will close the modal. This also inherits certain styles, which can be overriden. -->
    <a href="#" class="close-reveal-modal">×</a>
  </div>
 @stop