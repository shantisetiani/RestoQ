@extends('layout')

@section('content')
@foreach($restaurant as $r)
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 35px;">
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		<img src="{{asset('img/restaurant')}}/{{$r->image}}" class="img-restaurant">
	</div>
	<div class="col-xs-8 col-sm-6 col-md-6 col-lg-6" align="left">
		<h2 style="color:#902724;">{{$r->restaurant_name}}</h2>
		<h4>{{$r->type}}</h4>
	</div>
	<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2" align="right">
		<a href="{{url('/Reserve')}}/{{$r->restaurant_id}}"><input type="button" value="Reserve"></a>
	</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="navbar detailBoxHeader">
			<ul class="nav nav-pills nav-justified">
				<li class="col-xs-12 col-sm-4 col-md-4 col-lg-4 center" id="tabContact"><a class="tab" onclick="showContact()">Contact</a></li>
				<li class="col-xs-12 col-sm-4 col-md-4 col-lg-4 center" id="tabMenu"><a class="tab" onclick="showMenu()">Menu</a></li>
				<li class="col-xs-12 col-sm-4 col-md-4 col-lg-4 center" id="tabReview"><a class="tab" onclick="showReview()">Review</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="restaurantDetailContent">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div id="contactContent" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 detailBoxContent">
			<center>
			<div style="margin-bottom:4%;">
				<h5><img src="{{asset('img/phone.png')}}" class="img-responsive" width="3%">{{$r->phone}}</h5>
				<h5><img src="{{asset('img/mail.png')}}" class="img-responsive" width="3%">{{$r->email}}</h5>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q={{$r->map}}&key=AIzaSyC6h1z5zbgzzrX3FAUaDqf_hHvi1uBZDwo" allowfullscreen></iframe>
				<h5>{{$r->address}}</h5>
			</div>
			</center>
		</div>
		<div id="menuContent" style="display:none;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 detailBoxContent detailBoxContent">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 menu">
				<h3>Main Course</h3>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
							<img src="{{asset('img/ayamKFC.jpg')}}" class="menuImg">
						</div>
						<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 menuDesc">
							<label>Ayam</label><br>
							<label>Rp10.000,-</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
							<img src="{{asset('img/spaghettiKFC.png')}}" class="menuImg">
						</div>
						<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 menuDesc">
							<label>Spaghetti</label><br>
							<label>Rp20.000,-</label>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
							<img src="{{asset('img/burger.jpg')}}" class="menuImg">
						</div>
						<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 menuDesc">
							<label>Burger</label><br>
							<label>Rp15.000,-</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
							<img src="{{asset('img/kentang.jpg')}}" class="menuImg">
						</div>
						<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 menuDesc">
							<label>Kentang</label><br>
							<label>Rp7.000,-</label>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
							<img src="{{asset('img/creamSoup.jpg')}}" class="menuImg">
						</div>
						<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 menuDesc">
							<label>Cream Soup</label><br>
							<label>Rp10.000,-</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
							<img src="{{asset('img/soup.jpg')}}" class="menuImg">
						</div>
						<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 menuDesc">
							<label>Soup</label><br>
							<label>Rp10.000,-</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 menu">
				<h3>Dessert</h3>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
							<img src="{{asset('img/moltenCake.jpg')}}" class="menuImg">
						</div>
						<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 menuDesc">
							<label>Molten Cake</label><br>
							<label>Rp10.000,-</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
							<img src="{{asset('img/pudding.jpg')}}" class="menuImg">
						</div>
						<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 menuDesc">
							<label>Pudding</label><br>
							<label>Rp10.000,-</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 menu">
				<h3>Drinks</h3>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
							<img src="{{asset('img/cola.jpg')}}" class="menuImg">
						</div>
						<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 menuDesc">
							<label>Coca Cola</label><br>
							<label>Rp7.000,-</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
							<img src="{{asset('img/iceBlendedCrispyCinno.jpg')}}" class="menuImg">
						</div>
						<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 menuDesc">
							<label>Ice Blended Crispy Cinno</label><br>
							<label>Rp20.000,-</label>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
							<img src="{{asset('img/iceBlendedCappucino.jpg')}}" class="menuImg">
						</div>
						<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 menuDesc">
							<label>Ice Blended Cappucino</label><br>
							<label>Rp18.000,-</label>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
							<img src="{{asset('img/mochaFloat.jpg')}}" class="menuImg">
						</div>
						<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 menuDesc">
							<label>Mocha Float</label><br>
							<label>Rp15.000,-</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="reviewContent" style="display:none;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 detailBoxContent">
			@foreach($review as $r)
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 reviewBox">
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					<span class="username">{{$r->username}}</span>
					<img src="{{asset('img/icon/businessman.png')}}" class="img-responsive userPhoto">
				</div>
				<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" align="left">
					<div class="reviewTitle">{{$r->title}}</div>
                    @for($i=0;$i<$r->rating;$i++)
                        <span class="rated">★</span>
                    @endfor
                    @if($r->rating<5)
                        @for($c=$r->rating;$c<5;$c++)
                            <span class="rated-blank">★</span>
                        @endfor
                    @endif
					<div class="review">{{$r->comment}}</div>
				</div>
			</div>
			@endforeach
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 reviewBox">
				<hr>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 reviewBox">
				@if(Auth::user() != null)
				<form method="POST" action="{{url('/PostReview')}}">
					{{csrf_field()}}
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<input type="hidden" name="restaurant_id" value="{{$r->restaurant_id}}">
							<input type="hidden" name="name" value="{{Auth::user()->name}}">
							<h3 class="username">{{Auth::user()->name}}</h3>
						<img src="{{asset('img/icon/businessman.png')}}" class="img-responsive userPhoto">
					</div>
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" align="left">
						<div style="margin-top: 10px;"><input type="text" name="title" placeholder="Title"></div>
						<div class="rate">
						  <input type="radio" id="star5" name="rate" value="5" />
						  <label for="star5" title="Very Good">5 stars</label>
						  <input type="radio" id="star4" name="rate" value="4" />
						  <label for="star4" title="Good">4 stars</label>
						  <input type="radio" id="star3" name="rate" value="3" />
						  <label for="star3" title="OK">3 stars</label>
						  <input type="radio" id="star2" name="rate" value="2" />
						  <label for="star2" title="Bad">2 stars</label>
						  <input type="radio" id="star1" name="rate" value="1" />
						  <label for="star1" title="Very Bad">1 star</label>
						</div>
						<div><textarea style="resize: none; width: 100%; height:100px;" name="comment" placeholder="Comment"></textarea></div>
						<div><input type="submit" value="POST" id="btnPost"></div>
					</div>
				</form>
				@else
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 reviewBox">
						<h3>You must login to review the restaurant !</h3>
					</div>
				@endif
			</div>
		</div>
	</div>
</div>
@endforeach
@endsection