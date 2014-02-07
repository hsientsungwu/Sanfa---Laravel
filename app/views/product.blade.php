@extends('/master')

@section('title') Sanfa | Products @stop

@section('body')
	<div class="row" style="padding-top:40px;">
			<div class="large-12 columns">
				<div class="row">
				<!-- Content -->
					<div class="large-8 columns">
						<div class="panel radius">
							<div class="row">
								<div class="large-12 small-12 columns">
									<h4>Products</h4><hr/>
									<h5 class="subheader">We focus on construction materials such as cements, steels, electric & plumbing materials, and many other home improvement supplies</h5>
								<div class="show-for-small" align="center">
									<a href="#" class="small radius button">Call To Action!</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="large-4 columns hide-for-small">
					<h4>Get In Touch!</h4><hr/>
					<a class="large button expand" href="/contact">Call for Pricing!</a>
				</div>
				<!-- End Content -->
			</div>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<div class="row">
				<!-- Thumbnails -->
				<div class="large-3 small-6 columns">
					<img src="/assets/products/cement_220x220.png" />
					<h6 class="panel">Maya Cement</h6>
				</div>
				<div class="large-3 small-6 columns">
					<img src="/assets/products/steel_220x220.png" />
					<h6 class="panel">Construction Steels</h6>
				</div>
				<div class="large-3 small-6 columns">
					<img src="/assets/products/plumbing_220x220.png" />
					<h6 class="panel">Plumbings</h6>
				</div>
				<div class="large-3 small-6 columns">
					<img src="/assets/products/block_220x220.png" />
					<h6 class="panel">Blocks</h6>
				</div>
				<!-- End Thumbnails -->
			</div>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<div class="row">
				<!-- Thumbnails -->
				<div class="large-3 small-6 columns">
					<img src="/assets/products/handtool_220x220.png" />
					<h6 class="panel">Hand Tools</h6>
				</div>
				<div class="large-3 small-6 columns">
					<img src="/assets/products/paint_220x220.png" />
					<h6 class="panel">Paints</h6>
				</div>
				<div class="large-3 small-6 columns">
					<img src="/assets/products/motoroil_220x220.png" />
					<h6 class="panel">Motor Oils</h6>
				</div>
				<div class="large-3 small-6 columns">
					<img src="/assets/products/knobs_220x220.png" />
					<h6 class="panel">Other Materials</h6>
				</div>
				<!-- End Thumbnails -->
			</div>
		</div>
	</div>
@stop