<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
	
	@section('css')
		<link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">	
		<link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">
		<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/media.css') }}">
	@show

</head>

<body>

	<header>

		<div class="contacts">
			<div class="container flex">
				<div class="item  phone"><span class="icon icon-mobile3"></span> <a href="tel:+7925678745">+792 567 8745</a></div>	
				<div class="item email"><span class="icon icon-mail2"></span> <a href="mailto:contact@blueowlcreative.com">contact@blueowlcreative.com</a></div>
			</div>
		</div>

		<div class="nav-logo">
			<div class="container flex">
				<div class="logo">
					<a href="{{route('home')}}">Company Name</a>
				</div>
				<div class="main-menu">
					<ul>
						<li>
							<a href="javascript:void(0);" class="sub">Menu <i class="arrow down"></i></a>
							<ul class="dropdown">
								@if (Auth::user())
									<li><a href="{{ route('admin') }}" class="sub-item">Admin</a></li>
									<li>
										<form method="POST" action="{{ route('logout') }}">
                     						@csrf
                     						<button type="submit" class="sub-item">
                        						{{ __('Logout') }}
                     						</button>
                 						</form>
									</li>


								@else
									<li><a href="{{ route('login') }}" class="sub-item">Login</a></li>
								@endif
							

					        	
					        	
					      	</ul>
						</li>
						<li><a href="">About us</a></li>
						<li><a href="">Portfolio</a></li>
						<li><a href="">Latest news</a></li>
						<li><a href="">Contact us</a></li>

						<li class="burger-icon"><a href="javascript:void(0);" class="icon"><span class="icon icon-menu"></span></a></li>
					</ul>
				</div>
			</div>

			
		</div>
	</header>

	<div id="responsive-menu" class="container">
		<ul>
			<li><a href="javascript:void(0);" class="sub">Home <i class="arrow down"></i></a></li>
			<li><a href="{{ route('login') }}" class="sub-item">Login</a></li>
			<li><a href="{{ route('register') }}" class="sub-item">Registration</a></li>
			<li><a href="{{ route('logout') }}" class="sub-item">Logout</a></li>
			<li><a href="">About us</a></li>
			<li><a href="">Portfolio</a></li>
			<li><a href="">Latest news</a></li>
			<li><a href="">Contact us</a></li>
		</ul>
	</div>

	@yield('top')

	@yield('services')

	@yield('search')

	@yield('main-content')

	<footer>

		<div class="container">
			<div class="wrapper flex">
				<div class="item">
					<div class="title">
						Navigation
					</div>
					<div class="content">
						<ul>
							<li><a href=""><span class="icon icon-arrow-right3"></span> Home</a></li>
							<li><a href=""><span class="icon icon-arrow-right3"></span> About us</a></li>
							<li><a href=""><span class="icon icon-arrow-right3"></span> Portfolio</a></li>
							<li><a href=""><span class="icon icon-arrow-right3"></span> Latest news</a></li>
							<li><a href=""><span class="icon icon-arrow-right3"></span> Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="item">
					<div class="title">
						Contacts
					</div>
					<div class="content">
						<div class="contacts phone">
							<span class="icon icon-mobile3"></span> +792 567 8745
						</div>
						<div class="contacts email">
							<span class="icon icon-mail2"></span> contact@blueowlcreative.com
						</div>
						<div class="contacts address">
							<span class="icon icon-location2"></span> 3451 52nd Ave., New York City
						</div>
					</div>
				</div>
				<div class="item">
					<div class="feedbackForm">
						<form action="/">
							<input type="text" placeholder="Name">
							<input type="text" placeholder="E-mail">
							<input type="text" placeholder="Phone">
							<textarea cols="30" rows="10" placeholder="Message"></textarea>

							<input type="submit" value="Contact us">
						</form>
					</div>
				</div>
			</div>

			<div class="social flex">
				<a href="#">
					<div class="link">
						<span class="icon icon-pinterest2"></span>
					</div>
				</a>

				<a href="#">
					<div class="link">
						<span class="icon icon-googleplus2"></span>
					</div>
				</a>

				<a href="">
					<div class="link">
						<span class="icon icon-twitter2"></span>
					</div>
				</a>

				<a href="">
					<div class="link">
						<span class="icon icon-facebook2"></span>
					</div>
				</a>

				<a href="">
					<div class="link">
						<span class="icon icon-skype2"></span>
					</div>
				</a>


			</div>
		</div>
	</footer>

	<section class="copyright">
		<div class="container">
			© Copyright 2020  | Powered By Company
		</div>
	</section>



@section('js')
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>

	<link rel="stylesheet" href="{{asset('assets/include/owl-carousel/assets/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/include/owl-carousel/assets/owl.theme.default.min.css')}}">
	<script src="{{asset('assets/include/owl-carousel/owl.carousel.min.js')}}"></script>

	<link rel="stylesheet" href="{{asset('assets/include/fancybox/jquery.fancybox.min.css')}}">
	<script src="{{asset('assets/include/fancybox/jquery.fancybox.min.js')}}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDULTfOWzHbNLG7xE44MhxdrkHLEUXOxDs&libraries=geometry"></script>

	<script src="{{asset('assets/js/scripts.js')}}"></script>
@show
</body>
</html>