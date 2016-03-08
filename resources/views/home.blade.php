@extends('app')
	@section('style')
		{!! Html::style( asset('public/css/fux-slideshow/demo.css')) !!}
	@endsection
	@section('script')
		{!! HTML::script('public/js/fux-slideshow/jquery.min.js') !!}
		{!! HTML::script('public/js/fux-slideshow/flux.min.js') !!}		
		@section('load element')
			<script type="text/javascript" charset="utf-8">
					$(function(){
						if(!flux.browser.supportsTransitions)
							alert("Flux Slider requires a browser that supports CSS3 transitions");
							
						window.f = new flux.slider('#slider', {
							pagination: false
						});
					});
				</script>
		@show		
	@endsection



@section('content')
		<section class="container">
			<h1><span class="flux">Flux</span> <span class="slider">Slider</span></h1>
			<div id="slider" style="width: 100%;">
				<img src="{{URL::to('public/files/images/avatar.jpg')}}" alt="" />
				<img src="{{URL::to('public/files/images/ironman.jpg')}}" alt="" />
				<img src="{{URL::to('public/files/images/tron.jpg')}}" alt="" />
				<img src="{{URL::to('public/files/images/greenhornet.jpg')}}" alt="" />
			</div>
			<footer>
				<img src="{{URL::to('public/files/images/html5.png')}}" alt="HTML5" width="35px" />				
			</footer>
		</section>
@endsection