@extends('/master')

@section('title') Sanfa | Home @stop

@section('meta_head')
	<meta property="og:title" content="Sanfa Construction Supply">
	<meta property="og:url" content="http://www.sanfa.bz">
	<meta property="og:description" content="Sanfa Construction Supply is located in Corozal, Belize, Central America. We're strive to provide explicit customer experience and top quality supplies. We offer various partnership plan in assisting local construction development. Contact Us for detail. ">
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
	<div class="row">
		<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=709209622456817";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<div class="large-12 columns">
			<div class="panel">
				<div class="large-8 large-centered columns">
					<h4 align="center">Join Sanfa Family by following us on Facebook!</h4>
					<br>
					<div class="fb-like" data-href="https://www.facebook.com/sanfa.construction" data-width="650" data-layout="standard" data-action="recommend" data-show-faces="true" data-share="false"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- Three-up Content Blocks -->
	<div class="row">
		<div class="large-4 columns">
			<img src="/assets/products/cements_250x250.png" />
			<h4>Cemento Maya</h4>
			<p>
				The most finest and reliable brand used in the country of Belize. It comes with two packaging (50kg and 42.5kg). Direct imported from the factory in Merida.
			</p>
		</div>
		
		<div class="large-4 columns">
			<img src="/assets/products/steels_250x250.png" />
			<h4>Construction Steel</h4>
			<p>
				Construction rebars are provided in different sizes such as 1/4", 3/8", 1/2", 5/8", 3/4", 1". They're most commonly used in building houses, making burglar bar gates/ windows..etc.
			</p>
		</div>
		
		<div class="large-4 columns">
			<img src="/assets/products/curtains_250x250.png" />
			<h4>Curtain Door</h4>
			<p>
				Currently throughout the world, many people are relying on using Curtain/Shutter doors because they are much stronger and more reliable than regular doors. They are provided in two types, the manual and the automatic (with remote control)
			</p>
		</div>
	</div>
	<!-- Call to Action Panel -->
@stop