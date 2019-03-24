@extends('layout')

@section('content')
	<div id="Carousel" class="carousel slide center" data-ride="carousel">
	<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#Carousel" data-slide-to="0" class="active"></li>
			<li data-target="#Carousel" data-slide-to="1"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="{{asset('img/banner/kfc_bigbox.jpg')}}" class="banner-promo">
			</div>

			<div class="item">
				<img src="{{asset('img/banner/pd_discount.jpg')}}" class="banner-promo">
			</div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#Carousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#Carousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

		<div class="wthree-about-info">
			<h3>Top Rated Restaurant</h3>
		</div>
		<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			<ul id="myTab" class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#home-main" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">All</a></li>
				<li role="presentation"><a href="#fastfood" role="tab" id="fastfood-tab" data-toggle="tab" aria-controls="fastfood">Fast Food</a></li>
				<li role="presentation"><a href="#chineese" role="tab" id="chineese-tab" data-toggle="tab" aria-controls="chineese">Chineese</a></li>
				<li role="presentation"><a href="#japanese" role="tab" id="japanese-tab" data-toggle="tab" aria-controls="japanese">Japanese</a></li>
				<li role="presentation"><a href="#vegetarian" role="tab" id="vegetarian-tab" data-toggle="tab" aria-controls="vegetarian">Vegetarian</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
		<div role="tabpanel" class="tab-pane fade in active" id="home-main" aria-labelledby="home-tab">
			<div class="w3_tab_img">
        		@foreach($restaurant as $r)
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 w3_tab_img_left">
					<div class="demo">
						<a href="{{url('RestaurantDetail')}}/{{$r->restaurant_id}}">
						  <figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('img/restaurant')}}/{{$r->image}}" alt=" " class="restaurantImg" />
							<figcaption>
								<h3>{{$r->restaurant_name}}</h3>
								@for($i=0;$i<$r->rating;$i++)
									<span class="rated">★</span>
								@endfor
								@if($r->rating<5)
									@for($c=$r->rating;$c<5;$c++)
										<span class="rated-blank">★</span>
									@endfor
								@endif
							</figcaption>
						  </figure>
						</a>
					</div>
				</div>
				@endforeach
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			{{$restaurant->appends(compact('search'))->links()}}
			</div>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="fastfood" aria-labelledby="fastfood-tab">
			<div class="w3_tab_img">
        		@foreach($restaurant as $r)
        		@if($r->type == "Fast Food")
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 w3_tab_img_left">
					<div class="demo">
						<a href="{{url('RestaurantDetail')}}/{{$r->restaurant_id}}">
						  <figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('img/restaurant')}}/{{$r->image}}" alt=" " class="restaurantImg" />
							<figcaption>
								<h3>{{$r->restaurant_name}}</h3>
								@for($i=0;$i<$r->rating;$i++)
									<span class="rated">★</span>
								@endfor
								@if($r->rating<5)
									@for($c=$r->rating;$c<5;$c++)
										<span class="rated-blank">★</span>
									@endfor
								@endif
							</figcaption>
						  </figure>
						</a>
					</div>
				</div>
				@endif
				@endforeach
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			{{$restaurant->appends(compact('search'))->links()}}
			</div>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="chineese" aria-labelledby="chineese-tab">
			<div class="w3_tab_img">
        		@foreach($restaurant as $r)
        		@if($r->type == "Chineese Food")
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 w3_tab_img_left">
					<div class="demo">
						<a href="{{url('RestaurantDetail')}}/{{$r->restaurant_id}}">
						  <figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('img/restaurant')}}/{{$r->image}}" alt=" " class="restaurantImg" />
							<figcaption>
								<h3>{{$r->restaurant_name}}</h3>
								@for($i=0;$i<$r->rating;$i++)
									<span class="rated">★</span>
								@endfor
								@if($r->rating<5)
									@for($c=$r->rating;$c<5;$c++)
										<span class="rated-blank">★</span>
									@endfor
								@endif
							</figcaption>
						  </figure>
						</a>
					</div>
				</div>
				@endif
				@endforeach
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			{{$restaurant->appends(compact('search'))->links()}}
			</div>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="japanese" aria-labelledby="japanese-tab">
			<div class="w3_tab_img">
        		@foreach($restaurant as $r)
        		@if($r->type == "Japanese Food")
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 w3_tab_img_left">
					<div class="demo">
						<a href="{{url('RestaurantDetail')}}/{{$r->restaurant_id}}">
						  <figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('img/restaurant')}}/{{$r->image}}" alt=" " class="restaurantImg" />
							<figcaption>
								<h3>{{$r->restaurant_name}}</h3>
								@for($i=0;$i<$r->rating;$i++)
									<span class="rated">★</span>
								@endfor
								@if($r->rating<5)
									@for($c=$r->rating;$c<5;$c++)
										<span class="rated-blank">★</span>
									@endfor
								@endif
							</figcaption>
						  </figure>
						</a>
					</div>
				</div>
				@endif
				@endforeach
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			{{$restaurant->appends(compact('search'))->links()}}
			</div>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="vegetarian" aria-labelledby="vegetarian-tab">
			<div class="w3_tab_img">
        		@foreach($restaurant as $r)
        		@if($r->type == "Vegetarian")
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 w3_tab_img_left">
					<div class="demo">
						<a href="{{url('RestaurantDetail')}}/{{$r->restaurant_id}}">
						  <figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('img/restaurant')}}/{{$r->image}}" alt=" " class="restaurantImg" />
							<figcaption>
								<h3>{{$r->restaurant_name}}</h3>
								@for($i=0;$i<$r->rating;$i++)
									<span class="rated">★</span>
								@endfor
								@if($r->rating<5)
									@for($c=$r->rating;$c<5;$c++)
										<span class="rated-blank">★</span>
									@endfor
								@endif
							</figcaption>
						  </figure>
						</a>
					</div>
				</div>
				@endif
				@endforeach
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			{{$restaurant->appends(compact('search'))->links()}}
			</div>
		</div>
			</div>
		</div>
			<script src="js/jquery.tools.min.js"></script>
			<script src="js/jquery.mobile.custom.min.js"></script>
			<script src="js/jquery.cm-overlay.js"></script>
			<script>
				$(document).ready(function(){
					$('.cm-overlay').cmOverlay();
				});
			</script>
@endsection