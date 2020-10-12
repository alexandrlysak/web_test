<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
	
	<link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">	
	<link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/media.css') }}">

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
					Company Name
				</div>
				<div class="main-menu">
					<ul>
						<li>
							<a href="javascript:void(0);" class="sub">Home <i class="arrow down"></i></a>
							<ul class="dropdown">
					        	<li><a href="{{ route('login') }}" class="sub-item">Login</a></li>
					        	<li><a href="{{ route('register') }}" class="sub-item">Registration</a></li>
					        	<li><a href="{{ route('logout') }}" class="sub-item">Logout</a></li>
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
					<li>
						<a href="javascript:void(0);" class="sub">Home <i class="arrow down"></i></a>
					</li>
						
				    <li><a href="{{ route('login') }}" class="sub-item">Login</a></li>
				    <li><a href="{{ route('register') }}" class="sub-item">Registration</a></li>
				    <li><a href="{{ route('logout') }}" class="sub-item">Logout</a></li>
				      	
					</li>
					<li><a href="">About us</a></li>
					<li><a href="">Portfolio</a></li>
					<li><a href="">Latest news</a></li>
					<li><a href="">Contact us</a></li>
				</ul>
				
			</div>

	<section class="top">
		<div class="container">
			<div id="topSlider">
				<div class="owl-carousel owl-theme">
				    <div class="item">
				    	<div class="content-wrapper">
				    		<div class="title">
					    		CONTRARY TO POPULAR BELIEF
					    	</div>

					    	<div class="content">
					    		Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
					    		Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
					    	</div>
				    	</div>
				    </div>
				    <div class="item">
				    	<div class="content-wrapper">
				    		<div class="title">
					    		CONTRARY TO POPULAR BELIEF
					    	</div>

					    	<div class="content">
					    		Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
					    		Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
					    	</div>
				    	</div>
				    </div>
				    <div class="item">
				    	<div class="content-wrapper">
				    		<div class="title">
					    		CONTRARY TO POPULAR BELIEF
					    	</div>

					    	<div class="content">
					    		Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
					    		Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
					    	</div>
				    	</div>
				    </div>
				</div>
		    </div>
		</div>
	</section>

	<section class="services">
		<div class="container">
			<div class="wrapper flex">
				<div class="item">
					<div class="img">
						<img src="{{asset('assets/img/1.png')}}" alt="">
					</div>
					<div class="title">
						Responsive design
					</div>
					<div class="description">
						I am so clever that sometimes I do not  understand a single word of what I am saying and get very confused.
					</div>
				</div>

				<div class="item">
					<div class="img">
						<img src="{{asset('assets/img/2.png')}}" alt="">
					</div>
					<div class="title">
						Web development
					</div>
					<div class="description">
						It is better to be hated for what you are than to be loved for what you are not, so might as well be yourself.
					</div>
				</div>

				<div class="item">
					<div class="img">
						<img src="{{asset('assets/img/3.png')}}" alt="">
					</div>
					<div class="title">
						Customer support
					</div>
					<div class="description">
						Whenever you find yourself on the side of the majority, it is time to pause reflect and reconsider things.
					</div>
				</div>

				<div class="item">
					<div class="img">
						<img src="{{asset('assets/img/4.png')}}" alt="">
					</div>
					<div class="title">
						Images included
					</div>
					<div class="description">
						Whenever you find yourself on the side of the majority, it is time to pause reflect and reconsider things.
					</div>
				</div>
				
			</div>
		</div>
	</section>

	<section class="search">
		<div class="container">
			<div class="title">
				Search
			</div>
			<div class="content">
				<input type="text" placeholder="Search ...">
				<button> <span class="icon icon-search"></span> Search </button>
			</div>
		</div>
	</section>

	<section class="main-content">
		<div class="container">
			
			<div class="content-item portfolio">
				<div class="title">
					Portfolio
				</div>
				<div class="content">

					<div id="portfolioSlider">
						<div class="owl-carousel owl-theme">

						    <div class="item">
						    	<a href="{{asset('assets/img/img1.jpg')}}" data-fancybox data-caption="It is a long established fact">
							    	<div class="content-wrapper">
								    	<div class="image">
											<img src="{{asset('assets/img/img1.jpg')}}" class="portfolio-img" alt="It is a long established fact" />
								    	</div>
								    	<div class="title">
									    	It is a long established fact
									    </div>
							    	</div>
						    	</a>
						    </div>

						    <div class="item">
						    	<a href="{{asset('assets/img/img2.jpg')}}" data-fancybox data-caption="It is a long established fact">
							    	<div class="content-wrapper">
								    	<div class="image">
											<img src="{{asset('assets/img/img2.jpg')}}" alt="It is a long established fact" />
								    	</div>
								    	<div class="title">
									    	It is a long established fact
									    </div>
							    	</div>
						    	</a>
						    </div>

						    <div class="item">
						    	<a href="{{asset('assets/img/img3.jpg')}}" data-fancybox data-caption="It is a long established fact">
							    	<div class="content-wrapper">
								    	<div class="image">
											<img src="{{asset('assets/img/img3.jpg')}}" alt="It is a long established fact" />
								    	</div>
								    	<div class="title">
									    	It is a long established fact
									    </div>
							    	</div>
						    	</a>
						    </div>

						    <div class="item">
						    	<a href="{{asset('assets/img/img4.jpg')}}" data-fancybox data-caption="It is a long established fact">
							    	<div class="content-wrapper">
								    	<div class="image">
											<img src="{{asset('assets/img/img4.jpg')}}" alt="It is a long established fact" />
								    	</div>
								    	<div class="title">
									    	It is a long established fact
									    </div>
							    	</div>
						    	</a>
						    </div>

						    <div class="item">
						    	<a href="{{asset('assets/img/img1.jpg')}}" data-fancybox data-caption="It is a long established fact">
							    	<div class="content-wrapper">
								    	<div class="image">
											<img src="{{asset('assets/img/img1.jpg')}}" alt="It is a long established fact" />
								    	</div>
								    	<div class="title">
									    	It is a long established fact
									    </div>
							    	</div>
						    	</a>
						    </div>

						    <div class="item">
						    	<a href="{{asset('assets/img/img2.jpg')}}" data-fancybox data-caption="It is a long established fact">
							    	<div class="content-wrapper">
								    	<div class="image">
											<img src="{{asset('assets/img/img2.jpg')}}" alt="It is a long established fact" />
								    	</div>
								    	<div class="title">
									    	It is a long established fact
									    </div>
							    	</div>
						    	</a>
						    </div>

						    <div class="item">
						    	<a href="{{asset('assets/img/img3.jpg')}}" data-fancybox data-caption="It is a long established fact">
							    	<div class="content-wrapper">
								    	<div class="image">
											<img src="{{asset('assets/img/img3.jpg')}}" alt="It is a long established fact" />
								    	</div>
								    	<div class="title">
									    	It is a long established fact
									    </div>
							    	</div>
						    	</a>
						    </div>

						    <div class="item">
						    	<a href="{{asset('assets/img/img4.jpg')}}" data-fancybox data-caption="It is a long established fact">
							    	<div class="content-wrapper">
								    	<div class="image">
											<img src="{{asset('assets/img/img4.jpg')}}" alt="It is a long established fact" />
								    	</div>
								    	<div class="title">
									    	It is a long established fact
									    </div>
							    	</div>
						    	</a>
						    </div>



						    

						    
						</div>
				    </div>
				</div>
			</div>

			<div class="content-item what-is">
				<div class="title">
					What is lorem ipsum ?
				</div>
				<div class="content">
					<div class="panel">
						<div class="left">
							<img src="{{asset('assets/img/img5.jpg')}}" alt="">
						</div>
						<div class="right">
							<div class="title">
								Why do we use it?
							</div>
							<div class="description">
								Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.
								The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", 
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="content-item latest-news">
				<div class="title">
					Latest news
				</div>
				<div class="content">
					<div class="panel flex">
						<div class="left-column">
							<div class="item">
								<div class="left">
									<img src="{{asset('assets/img/img6.jpg')}}" alt="Some interesting news">
								</div>
								<div class="right">
									<div class="title">
										Some interesting news1
									</div>
									<div class="description">
										Lorem ipsum dolor sit amet, consect dipisicing elit, sed do eiusmod tempor incididunt 22 ut bore et ...
									</div>
									<button>Read more</button>
								</div>
							</div>
							<div class="item">
								<div class="left">
									<img src="{{asset('assets/img/img7.jpg')}}" alt="Some interesting news">
								</div>
								<div class="right">
									<div class="title">
										Some interesting news2
									</div>
									<div class="description">
										Lorem ipsum dolor sit amet, consect dipisicing elit, sed do eiusmod tempor incididunt 22 ut bore et ...
									</div>
									<button>Read more</button>
								</div>
							</div>
						</div>
						<div class="right-column">
							<div class="item">
								<div class="left">
									<img src="{{asset('assets/img/img8.jpg')}}" alt="Some interesting news">
								</div>
								<div class="right">
									<div class="title">
										Some interesting news3
									</div>
									<div class="description">
										Lorem ipsum dolor sit amet, consect dipisicing elit, sed do eiusmod tempor incididunt 22 ut bore et ...
									</div>
									<button>Read more</button>
								</div>
							</div>
							<div class="item">
								<div class="left">
									<img src="{{asset('assets/img/img9.jpg')}}" alt="Some interesting news">
								</div>
								<div class="right">
									<div class="title">
										Some interesting news4
									</div>
									<div class="description">
										Lorem ipsum dolor sit amet, consect dipisicing elit, sed do eiusmod tempor incididunt 22 ut bore et ...
									</div>
									<button>Read more</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

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
						<form action="">
							<input type="text" placeholder="Name">
							<input type="text" placeholder="E-mail">
							<input type="text" placeholder="Phone">
							<textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>

							<input type="submit" value="Contact us">
						</form>
					</div>
				</div>
			</div>

			<div class="social flex">
				<a href="">
					<div class="link">
						<span class="icon icon-pinterest2"></span>
					</div>
				<a>

				<a href="">
					<div class="link">
						<span class="icon icon-googleplus2"></span></a>
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
	
</body>

<script src="{{asset('assets/js/jquery.min.js')}}"></script>


<link rel="stylesheet" href="{{asset('assets/include/owl-carousel/assets/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/include/owl-carousel/assets/owl.theme.default.min.css')}}">
<script src="{{asset('assets/include/owl-carousel/owl.carousel.min.js')}}"></script>

<link rel="stylesheet" href="{{asset('assets/include/fancybox/jquery.fancybox.min.css')}}">
<script src="{{asset('assets/include/fancybox/jquery.fancybox.min.js')}}"></script>

<script src="{{asset('assets/js/scripts.js')}}"></script>

</html>